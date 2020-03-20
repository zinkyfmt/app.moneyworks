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
    public static function generatePdf(){

        $user_id = Yii::app()->user->getState('user_id');
        $userData = Users::model()->findByPk($user_id);
        $userBusinessData = UsersBusinessInfo::model()->find('user_id='.$user_id);
        $userFinancialData = UsersFinancials::model()->find('user_id='.$user_id);
        $userPersonalData = UsersPersonalInfo::model()->find('user_id='.$user_id);
        $userBizlocationData = UsersBizLocation::model()->find('user_id='.$user_id);
        $userReferencesData = UsersReferences::model()->find('user_id='.$user_id);
        $agentModel = Agents::model()->findByPk($userData->agent_id);
        //$filename               =   $userData->business_name.".pdf";
        $filename =   preg_replace("![^a-zA-Z0-9]+!i", "-", trim($userData->business_name)).".pdf";
        $owner1_dob = explode('-',$userPersonalData->owner_1_dob);
        $owner2_dob = explode('-',$userPersonalData->owner_2_dob);
        //$o1dob 	=	($userPersonalData->owner_1_dob != '0000-00-00')?$owner1_dob[1].'-'.$owner1_dob[2].'-'.$owner1_dob[0]:'';
        //$o2dob 	=	($userPersonalData->owner_2_dob != '0000-00-00')?$owner2_dob[1].'-'.$owner2_dob[2].'-'.$owner2_dob[0]:'';
        $o1dob 	=	$userPersonalData->owner_1_dob;
        $o2dob 	=	$userPersonalData->owner_2_dob;
        $currentBalance = ($userData->has_current_balance)?'Yes':'No';

        $text    =   '<table width="950" border="0" style="border:1px solid #000;font-family:arial;" cellpadding="0" cellspacing="0" >
				  <tr>
					
					<td width="45%"><img src="images/logo.jpg" alt=""/></td>
					<td style="font-size:13px;" width="55%"><strong>ADMINISTRATIVE FORM PLEASE FAX TO:1.646.417.5809</strong><br>
				Sales Rep: '.$agentModel->fname.'</td>
  </tr>
  </table>
  <table width="950" border="0" cellpadding="5" cellspacing="0" style="font-family:arial;" >
  <tr>
    <td height="20"></td>
  </tr>
  <tr>
    <td style="border:solid 1px #000;">
    <table width="950" border="0" cellpadding="3" cellspacing="0" style="font-size:12px;">
    <tr>
		<td><table width="950" cellspacing="0" cellpadding="0" border="0"><tr>
		<td width="22%">DBA Name</td>
		<td width="28%" style="border-bottom:1px solid #000;">'.$userBusinessData->dba_name.'</td>
		<td width="15%" >Legal Name</td>
		<td width="35%" style="border-bottom:1px solid #000; padding-right:5px;">'.$userBusinessData->legal_name.'</td>
		</tr></table></td>
  </tr>
  
  <tr>
	<td style="width:100%"><table width="950" cellspacing="0" cellpadding="0" border="0" style="font-size:12px;"><tr>
		<td width="22%">Type of Business</td>
		<td width="28%" style="border-bottom:1px solid #000;">'.$userBusinessData->type_of_business.'</td>
		<td width="15%" >Tax ID</td>
		<td width="35%" style="border-bottom:1px solid #000;">'.$userBusinessData->tax_id.'</td>
	</tr></table></td>	
  </tr>
  <tr><td style="width:100%"><table width="950" cellspacing="0" cellpadding="0" style="font-size:12px;"><tr>
    <td width="21%">Full Business Address</td>
    <td width="79%" style="border-bottom:1px solid #000;">'.$userBusinessData->business_address.'</td>
	</tr></table></td>	
</tr>
<tr>
	<td style="width:100%"><table width="950" cellspacing="0" cellpadding="0"><tr>
		<td width="21%">Full Billing Address</td>
		<td width="79%" style="border-bottom:1px solid #000;">'.$userBusinessData->full_billing_address.'</td>
	</tr></table></td>
  </tr>
<tr>
	<td style="width:100%"><table width="950" cellspacing="0" cellpadding="0"><tr>
		<td width="22%">Phone at Location</td>
		<td width="28%" style="border-bottom:1px solid #000;">'.$userBusinessData->phone_at_location.'</td>
		<td width="15%" align="center">Best Phone</td>
		<td width="35%" style="border-bottom:1px solid #000;">'.$userBusinessData->best_phone.'</td>
	</tr></table></td>
  </tr>
  
   <tr>
		<td style="width:100%"><table width="950" cellspacing="0" cellpadding="0" border="0"><tr>
			<td width="22%">Business Email</td>
			<td width="28%" style="border-bottom:1px solid #000;">'.$userBusinessData->business_email.'</td>
			<td width="15%" align="center" style="padding-right:10px">Website</td>
			<td width="35%" style="border-bottom:1px solid #000;">'.$userBusinessData->website.'</td>
		</tr></table></td>
  </tr>
 
  <tr>
	<td style="width:100%"><table width="950" cellpadding="0" cellspacing="0"><tr>
		<td width="22%">Years In Business</td>
		<td width="28%" style="border-bottom:1px solid #000;">'.$userData->years_in_business.'</td>
		<td width="15%" align="center">Gross Annual Sales</td>
		<td width="35%" style="border-bottom:1px solid #000;">'.$userData->gross_annual_sales.'</td>
	</tr></table></td>
  </tr>
 
  <tr> 
	<td><table width="950" ><tr>
		<td width="30%">Do you currently have cash advance?</td>
		<td width="13%" align="center">'.$currentBalance.'</td>
		<td width="8%">With who?</td>
		<td width="25%" style="border-bottom:1px solid #000;">'.$userData->balance_from_what_company.'</td>
		<td width="10%" align="right">Balance</td>
		<td width="15%" style="border-bottom:1px solid #000;">'.$userData->balance_outstanding.'</td>
	</tr></table></td></tr>
  <tr><td ><table width="950" ><tr>
    <td width="30%" >Current Credit Card Processor</td>
    <td width="70%" style="border-bottom:1px solid #000;">&nbsp;</td>
    </tr></table></td>
  </tr>';
        $text    .='</table>   
  	</td>
  </tr>
  </table>
  
  
  <table width="950" border="0" cellpadding="5" cellspacing="0" style="font-family:arial;">
  <tr>
    <td height="20"></td>
  </tr>
  <tr>
    <td style="border:solid 1px #000;"> 
  <table width="950" border="0" cellpadding="5" cellspacing="0" style="font-size:12px;font-family:arial;">
    
  <tr>
    <td width="17%" ><strong>Owner #1 Name</strong></td>
	<td width="33%" colspan="2" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_name.'</td>
    <td width="10%" align="center" >Title</td>
    <td width="40%" colspan="2" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_title.'</td>
  </tr>
  
  <tr>
    <td width="17%">Date of Birth</td>
    <td width="33%" colspan="2" style="border-bottom:1px solid #000;">'.$o1dob.'</td>
    <td width="10%" align="center" >SSN</td>
    <td width="40%" colspan="2" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_ssn.'</td>
	
  </tr>
  <tr>
    <td width="17%" >Full Home Address</td>
    <td width="83%" colspan="5" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_home_address.'</td>
    
  </tr>
    
   <tr>
		<td width="17%">Home Phone</td>
		<td width="18%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_home_phone.'</td>
		<td width="15%">Mobile Phone</td>
		<td width="15%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_cell_phone.'</td>
		<td width="15%">Email</td>
		<td width="20%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_email.'</td>
   
   
  </tr>
 
   <tr><td colspan="6" style="width:100%"><table width="950" cellspacing="0" border="0" cellpadding="0">
   <tr>
		<td width="18%"><table width="140" cellpadding="0" cellspacing="0" border="0"><tr><td width="80%">Own/Rent</td><td width="20%" align="right">$</td></tr></table></td>
		<td width="13%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_payment.' '.$userPersonalData->owner_1_own_or_rent.'</td>
		<td width="15%" align="center">Years There</td>
		<td width="10%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_years_there.'</td>
		<td width="14%">Drivers License #</td>
		<td width="16%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_drivers_license.'</td>
		<td width="10%">State</td>
		<td width="10%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_1_drivers_license_state.'</td>
  </tr></table></td></tr>

	<tr><td colspan="6" width="100%">&nbsp;</td></tr>
  
    <tr>
    <td width="17%" ><strong>Owner #2 Name</strong></td>
	<td width="33%" colspan="2" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_name.'</td>
    <td width="10%" align="center">Title</td>
    <td width="40%" colspan="2" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_title.'</td>
  </tr>
  
  <tr>
    <td width="17%">Date of Birth</td>
    <td width="33%" colspan="2" style="border-bottom:1px solid #000;">'.$o2dob.'</td>
    <td width="10%" align="center">SSN</td>
    <td width="40%" colspan="2" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_ssn.'</td>
	
  </tr>
  <tr>
    <td width="17%" >Full Home Address</td>
    <td width="83%" colspan="5" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_home_address.'</td>
    
  </tr>
    
   <tr>
		<td width="17%">Home Phone</td>
		<td width="13%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_home_phone.'</td>
		<td width="10%">Mobile Phone</td>
		<td width="10%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_cell_phone.'</td>
		<td width="15%">Email</td>
		<td width="35%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_email.'</td>
   
   
  </tr>
 
   <tr><td colspan="6" width="100%"><table width="950" cellspacing="0" cellpadding="0" >
		<tr>
		<td width="18%"><table width="140" cellpadding="0" cellspacing="0" border="0"><tr><td width="80%">Own/Rent</td><td width="20%" align="right">$</td></tr></table></td>
		<td width="13%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_own_or_rent.'</td>
		<td width="15%" align="center">Years There</td>
		<td width="10%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_years_there.'</td>
		<td width="14%">Drivers License #</td>
		<td width="16%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_drivers_license.'</td>
		<td width="10%">State</td>
		<td width="10%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_drivers_license_State.'</td>
		</tr></table></td>
  </tr> </table>
  </td></tr></table>
  
  <table width="950" border="0" cellpadding="0" cellspacing="0" >
      <tr>
        <td height="20"></td>
      </tr>
      <tr>
        <td style="border:solid 1px #000;">
          <table width="950" border="0" cellpadding="10px" cellspacing="0" style="font-size:9px;text-align:justify;font-family:arial;">
            <tr><td>I hereby represent that all the above information is true and understand that making false statements might be considered fraud. By providing the above information, the applicant(s) authorize you to whom this application is made or your agents to investigate my/our financial responsibility and credit worthiness, specifically principal and corporate entities, and will provide financial statements, tax returns, etc. as you deem necessary. A photocopy of this authorization will be deemed as acceptable for release of credit information. I/We authorize Money Works Direct, Inc. to receive pertinet information regarding the commercial lease for the above referenced location from my leasing company and or agent. I/we authorize you to update my/our credit profile from time to time in the future, as you deem appropriate. By signing below, each of the aboe listed business and business ownet/officer (individually and collectiverly, "you") authorize Money Works Direct and each of its representatives, successors, assigns and designees ("Recipients") that may be involved with or acquire commercial loans having daily repayment features or purchases of future receivables including Merchant Cash Advance transcation, including without limitation the application therefor (collectively, "Transcation") to obtain consumer or personal, business and investigative reports and other information about you, including credit card processor statements and bank statements, from one or more consumer reporting agencies, such as TransUnion, Experian and Equifax, and from other credit bureaus, banks, creditors and other third parties. You also authorize Money Works Direct to transmit this application form, along with any of the foregoing informaiton obtained in connection with this application, to any or all of the Recipients for the foregoing purposes. You also consent to the release, by any creditor or financial institution, of any information relating to any of you, to Money Works Direct and to each of the Recipients, on its own behalf.
            </td></tr>
          </table>
        </td>
      </tr>
     <tr>
        <td height="150"></td>
     </tr>
   <tr>
     <td>
       <table width="950" border="0" cellpadding="10" cellspacing="0" style="font-size:12px;font-family:arial;">
        <tr>
		    <td width="15%" >Signature#1</td>
            <td width="25%" style="border-bottom:1px solid #000;"></td>
            <td width="15%">Printed Name</td>
            <td width="25%" style="border-bottom:1px solid #000;">'.$userData->fname.' '.$userData->lname.'</td>
            <td width="10%">Date</td>
            <td width="10%" style="border-bottom:1px solid #000;">'.date('m/d/Y').'</td>  

        </tr>
       </table>
      </td>
    </tr>';

        $text .= '<tr>
    <td height="50"></td>
    </tr>
    <tr><td>
   <table width="950" border="0" cellpadding="5" cellspacing="0" style="font-size:12px;font-family:arial;">
    <tr>
        <td width="15%" >Signature#2</td>
        <td width="25%" style="border-bottom:1px solid #000;"></td>
        <td width="15%">Printed Name</td>
        <td width="25%" style="border-bottom:1px solid #000;">'.$userPersonalData->owner_2_name.'</td>
        <td width="10%">Date</td>
        <td width="10%" style="border-bottom:1px solid #000;">'.date('m/d/Y').'</td>  

    </tr>
   </table>
  </td>
</tr>';

        $text .= '</table>';

        $mpdf = new mPDF('utf-8', 'Letter', 0, '', 10, 10, 5, 5, 5,0);
        $mpdf->WriteHTML($text);
        $mpdf->fontdata = array(
            "opensans" => array(
                'R' => 'OpenSans-Regular.ttf'
            ));
        $content = $mpdf->Output("upload/docusign-pdf/".$filename,"F");

        $path   =   "upload/docusign-pdf/";
        return $file = $path.$filename;

    }
}
