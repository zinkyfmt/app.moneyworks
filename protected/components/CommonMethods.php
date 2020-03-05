<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class CommonMethods
{
	private $_assetsUrl;
        
	public static function getSlug($str, $replace=array(), $delimiter='-') {
		$str = trim($str);
		if( !empty($replace) ) {
			$str = str_replace((array)$replace, ' ', $str);
		}	
		$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
		$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
		$clean = strtolower(trim($clean, '-'));
		$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
		
		$item_count = MetaData::model()->count("slug ='".$clean."'");
		if($item_count > 0){
			$clean = $clean.'-'.($item_count+1);
		}
		
		return $clean;
	}
	
	public function publishFrontAssets(){
        if ($this->_assetsUrl === null)
            $this->_assetsUrl = Yii::app()->getAssetManager()->publish(
                Yii::getPathOfAlias('webroot.frontassets') );
        return $this->_assetsUrl;
	}
	

	
	
	public static function getFileExtension($file){
		$ext = pathinfo($file, PATHINFO_EXTENSION);
		return strtolower($ext);
	}
	
	public static function dataSubmissionToVelocify($post){
		$user_id = Yii::app()->user->getState('user_id');
		$userData = Users::model()->findByPk($user_id);
		
		$agentData 	=	Agents::model()->findByPk($userData->agent_id);
		$url = "https://secure.velocify.com/Import.aspx?Provider=MoneyWorksDirectWeb&Client=MoneyWorksDirect&CampaignId=".$agentData->campaign_id;

		
		//url-ify the data for the POST
		$fields_string = "";$i=0;$counter = count($post);
		foreach($post as $key=>$value) { 
		//echo "<br />".$i;
			$fields_string .= $key.'='.$value;
			if($i<$counter-1){
			
				$fields_string .= '&';
			}
			$i++;
		}
		
		//rtrim($fields_string, '&');
//echo $fields_string;
		//open connection
		$ch = curl_init();

		//set the url, number of POST vars, POST data
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_POST, count($post));
		curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.52 Safari/537.17');
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
  
		//execute post
		$result = curl_exec($ch);
		//echo "1211346";
//print_r($result);exit;

	//close connection
	curl_close($ch);
	
	}
	
	public static function checkStepFilled($step){
		$user_id = Yii::app()->user->getState('user_id');
		switch($step){
			case 1 : 
				$data = Users::model()->findByPk($user_id);
				break;
			case 2 : 
				$data = UsersBusinessInfo::model()->find('user_id="'.$user_id.'"');
				break;
			case 3	:
				$data = UsersFinancials::model()->find('user_id="'.$user_id.'"');
				break;
			case 4	:
				$data = UsersPersonalInfo::model()->find('user_id="'.$user_id.'"');
				break;
			case 5	:
				$data = UsersBizLocation::model()->find('user_id="'.$user_id.'"');
				break;
			case 6	:	
				$data = UsersReferences::model()->find('user_id="'.$user_id.'"');
				break;			
		}
		if(!empty($data)){
			return true;
		}else
		{
			return false;
		}
	}
	
      
}