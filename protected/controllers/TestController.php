<?php 
 class TestController extends Controller
{
	public function init(){

	}
public function actionPdf(){               
           
       		echo $filename               =   md5(uniqid(time())).".pdf";
       // exit;
        
        $logo = '';
        //if(isset($invoiceSettings->logo_image) && $invoiceSettings->logo_image != ''){
            
            //$logo    = '<img src="'. Yii::app()->getBaseUrl() .'/upload/company-logo/'.$invoiceSettings->logo_image.'" style="height:165px;"/>';
           $logo    ='' ;
        //}
		
		//$style='<style>@page *{margin-top: 0cm;margin-bottom: 0cm;margin-left: 0cm;margin-right: 0cm;}</style>';

        $text    =   '<table width="950" border="0" cellpadding="0" >
  <tr>
    <td style="border:solid 1px #000;">
    <table width="950" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%"><img src="images/logo.jpg" width="399" height="35"  alt=""/></td>
    <td style="font-size:14px; line-height:25px"><strong>ADMINISTRATIVE FORM PLEASE FAX TO:1.646.417.5809</strong><br>
Sales Rep: Julian Giannuzzi</td>
  </tr>
  </table></td>
  </tr>
  <tr>
    <td height="2"></td>
  </tr>
  <tr>
    <td style="border:solid 1px #000;">
    <table width="950" border="0" cellpadding="5" cellspacing="0" style="font-size:14px;">
    <tr>
    <td width="20%">DBA Name</td>
    <td width="30%">Test Value</td>
    <td width="20%">Legal Name</td>
    <td width="30%" colspan="2">Test Value</td>
  </tr>
  
  <tr>
    <td width="20%">Type of Business</td>
    <td width="30%">Value</td>
    <td width="20%">Tax ID</td>
    <td width="20%">Value</td>
    <td width="10%">Corp / LLC / Sole Prop</td>
  </tr>
  <tr>
    <td width="20%">Full Business Address</td>
    <td colspan="5">Address Value</td>
</tr>
<tr>
    <td width="20%">Full Business Address</td>
    <td colspan="5">Address Value</td>
  </tr>
<tr>
    <td width="20%">Phone at Location</td>
    <td width="15%">Phone Value</td>
    <td width="15%">Best Phone</td>
    <td width="15%">Best Phone Value</td>
    <td width="15%">Fax</td>
    <td width="20%">Value</td>
  </tr>
  
   <tr>
	<td width="20%">Business Email</td>
	<td width="30%"  colspan="2">Value</td>
    <td width="20%" >Website</td>
    <td width="30%" colspan="2">Value</td>
  </tr>
 
  <tr>
    <td width="33%" colspan="2" >Years In Business</td>
    <td width="33%" colspan="2">Average Ticket</td>
    <td width="33%" colspan="2">Gross Annual Sales</td>
  </tr>
 
  <tr>
    <td width="40%" colspan="2">Do you currently have cash advance? Y / N</td>
    <td width="30%" colspan="2">With who?</td>
    <td width="30%" colspan="2">Balance</td>
  </tr>
  <tr>
    <td width="50%" colspan="3">Current Credit Card Processor</td>
    <td width="50%" colspan="3">Average Processing Volume</td>
  </tr>
  
   <tr>
    <td width="12%">Last Month Vol.</td>
    <td width="13%">Last Month Vol.</td>
    <td width="12%">#of Tickets</td>
    <td width="13%">#of Tickets</td>
    <td width="12%">2nd Month Vol.</td>
    <td width="13%">2nd Month Vol.</td>
    <td width="12%">#of Tickets</td>
    <td width="13%">#of Tickets</td>
  </tr>
  <tr>
    
    <td width="12%">Last Month Vol.</td>
    <td width="13%">Value</td>
    <td width="12%">#of Tickets</td>
    <td width="13%"> </td>
    <td width="12%">2nd Month Vol.</td>
    <td width="13%"></td>
    <td width="12%">#of Tickets</td>
    <td width="13%"></td>
  </tr>
 
  </table>
   
  	</td>
  </tr>
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td style="border:solid 1px #000;">
    <table width="950" border="0" cellpadding="5" cellspacing="0" style="font-size:14px;">
    <tr>
  <tr>
    <td width="20%" ><strong>Owner #1 Name</strong></td>
	<td width="30%" colspan="3"></td>
    <td width="20%" >Title</td>
    <td width="30%" colspan="3">Value</td>
  </tr>
  
  <tr>
    <td width="20%">Date of Birth</td>
    <td width="30%" colspan="3">Date of Birth</td>
    <td width="20%">SSN</td>
    <td width="30%" colspan="3">Value</td>
	
  </tr>
  <tr>
    <td width="20%" >Full Home Address</td>
    <td width="80%" colspan="7">..........</td>
    
  </tr>
    
   <tr>
		<td width="20%" colspan="2">Home Phone</td>
		<td width="15%">.......</td>
		<td width="15%">Cell Phone</td>
		<td width="15%">......</td>
		<td width="15%">Email</td>
		<td width="20%" colspan="2">..........</td>
   
   
  </tr>
 
   <tr>
		<td width="12%">Own / Rent  $</td>
		<td width="13%">.........</td>
		<td width="12%">Years There</td>
		<td width="13%"> ...............</td>
		<td width="12%">Drivers License #</td>
		<td width="13%">................</td>
		<td width="12%">State</td>
		<td width="13%">..........</td>
  </tr>

    <tr>
    <td width="20%" ><strong>Owner #2 Name</strong></td>
	<td width="30%" colspan="3"></td>
    <td width="20%" >Title</td>
    <td width="30%" colspan="3">Value</td>
  </tr>
  
  <tr>
    <td width="20%">Date of Birth</td>
    <td width="30%" colspan="3">Date of Birth</td>
    <td width="20%">SSN</td>
    <td width="30%" colspan="3">Value</td>
	
  </tr>
  <tr>
    <td width="20%" >Full Home Address</td>
    <td width="80%" colspan="7">..........</td>
    
  </tr>
    
   <tr>
		<td width="20%" colspan="2">Home Phone</td>
		<td width="15%">.......</td>
		<td width="15%">Cell Phone</td>
		<td width="15%">......</td>
		<td width="15%">Email</td>
		<td width="20%" colspan="2">..........</td>
   
   
  </tr>
 
   <tr>
		<td width="12%">Own / Rent  $</td>
		<td width="13%">.........</td>
		<td width="12%">Years There</td>
		<td width="13%"> ...............</td>
		<td width="12%">Drivers License #</td>
		<td width="13%">................</td>
		<td width="12%">State</td>
		<td width="13%">..........</td>
  </tr>
  
  </table>
    </td>
  </tr>
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td style="border:solid 1px #000;">
    <table width="950" border="0" cellpadding="5" cellspacing="0" style="font-size:14px;">
    
  <tr>
		<td width="12%">Business Home Based? Y/N</td>
		<td width="13%">.........</td>
		<td width="12%">Location: Lease/Own</td>
		<td width="13%"> ...............</td>
		<td width="12%">Lease Term</td>
		<td width="13%">................</td>
		<td width="12%">Monthly Rent</td>
		<td width="13%">..........</td>
   </tr>
    <tr>
		<td width="20%">Landlord / Mortgage Co.</td>
		<td width="30%" colspan="2">..........</td>
		<td width="20%">Contact</td>
		<td width="30%" colspan="2">.........</td>
  </tr>
  
   <tr>
		<td width="20%" colspan="2">Contact Phone</td>
		<td width="15%">.......</td>
		<td width="15%">Cell</td>
		<td width="15%">......</td>
		<td width="15%">Email</td>
		<td width="20%" colspan="2">..........</td>   
  </tr>
  </table></td>
   
  </tr>
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td style="border:solid 1px #000;">
    <table width="950" border="0" cellpadding="5" cellspacing="0" style="font-size:14px;">
    
  <tr>
	<td width="20%">Bank Name/Branch</td>
	<td width="15%">.......</td>
	<td width="15%">Contact</td>
	<td width="15%">......</td>
	<td width="15%">Phone</td>
	<td width="20%" >..........</td>
   
  </tr>
	<tr>
	<td width="20%">Trade Reference#1</td>
	<td width="15%">.......</td>
	<td width="15%">Contact</td>
	<td width="15%">......</td>
	<td width="15%">Phone</td>
	<td width="20%">..........</td>
   
  </tr>
    <tr>
	<td width="20%" >Trade Reference#2</td>
	<td width="15%">.......</td>
	<td width="15%">Contact</td>
	<td width="15%">......</td>
	<td width="15%">Phone</td>
	<td width="20%" >..........</td>
   
  </tr>
  
  <tr>
	<td width="20%" >Trade Reference#3</td>
	<td width="15%">.......</td>
	<td width="15%">Contact</td>
	<td width="15%">......</td>
	<td width="15%">Phone</td>
	<td width="20%" >..........</td>   
  </tr>
  </table>
</td></tr>
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td style="border:solid 1px #000;">
    <table width="950" border="0" cellpadding="5" cellspacing="0" style="font-size:14px;">
    <tr>
    <td>
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      
       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </td>
    </tr>
    </table>
  
    </td>
    </tr>
     <tr>
    <td height="5"></td>
  </tr>
   <tr>
    <td>
     <table width="950" border="0" cellpadding="10" cellspacing="0" style="font-size:14px;">
    <tr>
		<td width="20%" >Signature#1</td>
		<td width="15%">.......</td>
		<td width="15%">Printed Name</td>
		<td width="15%">......</td>
		<td width="15%">Date</td>
		<td width="20%" >..........</td>  

    </tr>
    <tr>
		<td width="20%" >Signature#2</td>
		<td width="15%">.......</td>
		<td width="15%">Printed Name</td>
		<td width="15%">......</td>
		<td width="15%">Date</td>
		<td width="20%" >..........</td> 
    </tr>
   
</table></td></tr></table>';        
echo $text;//exit;
        $mpdf = new mPDF('utf-8', 'Letter', 0, '', 10, 10, 5, 5, 5,0);
        $mpdf->WriteHTML($text);
        $content = $mpdf->Output("upload/test-pdf/".$filename,"F");
      exit;  
        $path   =   "upload/test-pdf/";
        $file = $path.$filename;
               
    }
}

?>