<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Settings {

    public static function get($key) {
        $data = Configuration::model()->find("keyword='" . $key . "'");
        return $data->value;
    }
	
	public static function getRedirectUrl(){
		$user_id = Yii::app()->user->getState('user_id');
		$userBusinessData = UsersBusinessInfo::model()->find('user_id="'.$user_id.'"');
		//$userFinancialData = UsersFinancials::model()->find('user_id="'.$user_id.'"');
		$userPersonalData = UsersPersonalInfo::model()->find('user_id="'.$user_id.'"');
		$userBizlocationData = UsersBizLocation::model()->find('user_id="'.$user_id.'"');
		$userReferencesData = UsersReferences::model()->find('user_id="'.$user_id.'"');
		$usersData = Users::model()->findByPk($user_id);
		$isDocumentSigned = $usersData->document_signed;
		if(empty($userBusinessData)){
			$action = 'index';
		/*}elseif(empty($userFinancialData)){
			$action = 'account/financials';
		*/}elseif(empty($userPersonalData)){
			$action = 'account/personalinfo';
		}elseif(empty($userBizlocationData)){
			$action = 'account/bizlocation';
		}elseif(empty($userReferencesData)){
			$action = 'account/references';
		}elseif($isDocumentSigned == '0'){
			$action = 'account/docusign';
		}
		
		else{
			$action = '';
		}
		$controller = Yii::app()->controller->id;
		$function = Yii::app()->controller->action->id;
		$currentAction = $controller.'/'.$function;
		if($action != '' && $action != $currentAction){
			return Yii::app()->createUrl($action);
		}else{
			return '';
		}
	}

}
