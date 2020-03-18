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
        $text    =   '<table width="900" border="0" cellpadding="0" >
  <tr>
    <td style="border:solid 2px #000;">
    <table width="900" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%"><img src="images/logo.jpg" width="399" height="35"  alt=""/></td>
    <td style="font-size:14px; line-height:25px"><strong>ADMINISTRATIVE FORM PLEASE FAX TO:1.646.417.5809</strong><br>
Sales Rep: Julian Giannuzzi</td>
  </tr>
  </table></td>
  </tr></table>
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td style="border:solid 2px #000;">
    <table width="900" border="1" cellpadding="5" cellspacing="0" style="font-size:12px;">
    <tr><td>
       <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%">DBA Name:------</td>
    <td width="50%">Legal Name--------</td>
  </tr>
  </table>
    </td></tr>
    <tr><td>
     <table width="850" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="33%">Type of Business:------</td>
    <td width="33%">Tax ID--------</td>
    <td width="33%" colspan="2">Corp / LLC / Sole Prop</td>
  </tr>
  </table>
    </td></tr>
      <tr>
    <td width="100%" colspan="4">Full Business Address</td>
    
  </tr>
  <tr>
<td width="100%" colspan="4">Full Billing Address</td>
  </tr>
    <tr><td>  
    <table width="850" border="0" cellpadding="0" cellspacing="0">
   <tr>
    <td width="33%">Phone at Location</td>
    <td width="33%">Best Phone:</td>
    <td width="33%" colspan="2">Fax:</td>
  </tr>
  </table></td></tr>
    <tr><td>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
   <tr>
    <td width="50%" colspan="2">Business Email</td>
    <td width="50%" colspan="2">Website</td>
  </tr>
  </table>
    </td></tr>
    <tr><td>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="33%">Years In Business</td>
    <td width="33%">Average Ticket</td>
    <td width="33%" colspan="2">Gross Annual Sales</td>
  </tr>
  </table>
    </td></tr>
    <tr><td>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="33%">Do you currently have cash advance? Y / N</td>
    <td width="33%">With who?</td>
    <td width="33%" colspan="2">Balance</td>
  </tr>
  </table>
    </td></tr>
    <tr><td>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
     <tr>
    <td width="50%" colspan="2">Current Credit Card Processor</td>
    <td width="50%" colspan="2">Average Processing Volume</td>
  </tr>
  </table>
    </td></tr>
    <tr><td>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
   <tr>
    <td width="25%">Last Month Vol.</td>
    <td width="25%">#of Tickets</td>
    <td width="25%">2nd Month Vol.</td>
    <td width="25%">#of Tickets</td>
  </tr>
  </table>
    </td></tr>
    <tr><td>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
   <tr>
    <td width="25%">Last Month Vol.</td>
    <td width="25%">#of Tickets</td>
    <td width="25%">2nd Month Vol.</td>
    <td width="25%">#of Tickets</td>
  </tr>
  </table>
    </td></tr>
  </table>
  	</td>
  </tr>
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td style="border:solid 2px #000;">
    <table width="900" border="0" cellpadding="5" cellspacing="0">
    <tr><td>
       <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%" colspan="2"><strong>Owner #1 Name:</strong>------</td>
    <td width="50%" colspan="2">Title--------</td>
  </tr>
  </table>
    </td></tr>
    <tr><td>
     <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%">Date of Birth:------</td>
    <td width="50%">SSN--------</td>
  </tr>
  </table>
    </td></tr>
      <tr>
    <td width="100%" colspan="4">Full Home Address</td>
    
  </tr>
    <tr><td>  
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
   <tr>
    <td width="33%">Home Phone</td>
    <td width="33%">Cell Phone</td>
    <td width="33%" colspan="2">Email</td>
  </tr>
  </table></td></tr>
    <tr><td>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
   <tr>
    <td width="25%">Own / Rent  $ </td>
    <td width="25%">Years There</td>
     <td width="25%">Drivers License #</td>
    <td width="25%">State</td>
  </tr>
  </table>
    </td></tr>
    <tr><td>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%"><strong>Owner #2 Name</strong></td>
    <td width="50%">Title</td>
   
  </tr>
  </table>
    </td></tr>
    <tr><td>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%">Date of Birth</td>
     <td width="50%">SSN</td>
  </tr>
  </table>
    </td></tr>
    <tr><td>
   Full Home Address
    </td></tr>
    <tr><td>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
   <tr>
    <td width="33%">Home Phone</td>
    <td width="33%">Cell Phone</td>
    <td width="33%">Email</td>
  </tr>
  </table>
    </td></tr>
    <tr><td>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
   <tr>
    <td width="25%">Own / Rent $</td>
    <td width="25%">Years There</td>
    <td width="25%">Drivers License#</td>
    <td width="25%">State</td>
  </tr>
  </table>
    </td></tr>
  </table>
    </td>
  </tr>
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td style="border:solid 2px #000;">
    <table width="900" border="0" cellpadding="5" cellspacing="0">
    <tr><td>
       <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="70%" colspan="2">Business Home Based? Y/N &nbsp;&nbsp;&nbsp;  Location:Lease / Own&nbsp;&nbsp;&nbsp; Lease Term------</td>
    <td width="30%" colspan="2">Monthly Rent--------</td>
  </tr>
  </table>
    </td></tr>
    <tr><td>
     <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%">Landlord / Mortgage Co.------</td>
    <td width="50%">Contact--------</td>
  </tr>
  </table>
    </td></tr>
    
    <tr><td>  
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
   <tr>
    <td width="33%">Contact Phone</td>
    <td width="33%">Cell</td>
    <td width="33%">Email</td>
  </tr>
  </table></td></tr>
    <tr><td>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
   <tr>
    <td width="25%">Own / Rent  $ </td>
    <td width="25%">Years There</td>
     <td width="25%">Drivers License #</td>
    <td width="25%">State</td>
  </tr>
  </table>
    </td></tr>
    <tr><td>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="50%"><strong>Owner #2 Name</strong></td>
    <td width="50%">Title</td>
   
  </tr>
  </table>
    </td></tr>
   
  </table>
    
    </td>
  </tr>
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td style="border:solid 2px #000;">
    <table width="900" border="0" cellpadding="5" cellspacing="0">
    <tr><td>
       <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="33%">Bank Name / Branch:------</td>
    <td width="33%">Contact --------</td>
     <td width="33%">Phone --------</td>
  </tr>
  </table>
    </td></tr>
    <tr><td>
       <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="33%">Trade Reference#1------</td>
    <td width="33%">Contact --------</td>
     <td width="33%">Phone --------</td>
  </tr>
  </table>
    </td></tr>
    <tr><td>
       <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="33%">Trade Reference#2------</td>
    <td width="33%">Contact --------</td>
     <td width="33%">Phone --------</td>
  </tr>
  </table>
    </td></tr>
    <tr><td>
       <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="33%">Trade Reference#3------</td>
    <td width="33%">Contact --------</td>
     <td width="33%">Phone --------</td>
  </tr>
  </table>
    </td></tr>
  </table></td>
  </tr>
    <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td style="border:solid 2px #000;">
    <table width="900" border="0" cellpadding="5" cellspacing="0">
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
     <table width="900" border="0" cellpadding="10" cellspacing="0">
    <tr>
    <td width="33%">Signature#1</td>
     <td width="33%">Printed Name</td>
      <td width="33%">Date</td>
    </tr>
    <tr>
    <td width="33%">Signature#1</td>
     <td width="33%">Printed Name</td>
      <td width="33%">Date</td>
    </tr>
    </td>
  </tr>
</table>';        
echo $text;//exit;
        $mpdf = new mPDF();
        $mpdf->WriteHTML($text);
        $content = $mpdf->Output("upload/test-pdf/".$filename,"F");
      exit;  
        $path   =   "upload/test-pdf/";
        $file = $path.$filename;
               
    }
}

?>