<?php

class MailComponent {
    /* $MailComponent = new MailComponent; 
      $message=$MailComponent->prepairmail("forget_password.html",array("[NAME]","[USERNAME]","[PASSWORD]","[SITENAME]"),   array($name,$username,$password,$activesitename));
      $MailComponent->mailto($user_record['email'],'Forget Passowrd',$message,'admin@admin.com','') */

    public function prepairmail($templateid, $arr1, $arr2, $basepath = "") {
        //chmod("templates", 777);
        // $file       =   file_get_contents("templates/emails/$filename");
        $templateContent = EmailTemplates::model()->findByPk($templateid);
        $filecontent = $templateContent->content;
        $content = str_replace($arr1, $arr2, $filecontent);
		
		$site_url = Yii::app()->getBaseUrl(true);
		
		
		$contact_email = Settings::get('contact_email');
		
		
        $data = array();
        $data['content'] = $content;
        $data['subject'] = $templateContent->subject;

        return $data;
    }

    public function mailto($to, $subject, $message, $from="", $basepath = "") {
        if(empty($from)){
           $from =  Yii::app()->params['from'];
        }
        $site_name = Yii::app()->params['DEFAULTSITENAME'];

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: '.$site_name.' <' . $from . '>' . "\r\n";


        if (mail($to, $subject, $message, $headers)) {
            return true;
        } else {
            return false;
        }
    }

    public function get_email_subject($name) {

        $resultSet = Yii::app()->db->createCommand("select subject from au_email_templates WHERE template_name='" . $name . "'")->query();
        $row = $resultSet->read();

        return $row["subject"];
    }

    public function mailsend($to, $from, $subject, $message, $attachment = '', $fromName = null) {
        //$phpmailerPath = Yii::getPathOfAlias('ext.phpmailer');
        //include($phpmailerPath . DIRECTORY_SEPARATOR . 'PHPMailer.php');

		
		
        $mail = new JPhpMailer;

        $mail->IsMail();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup server
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'vnkmrjain@gmail.com';                            // SMTP username
        $mail->Password = 'munmunjain488';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

        /*$mail->Host = Yii::app()->params['phpmailerhost'];  // Specify main and backup server
        $mail->SMTPAuth = Yii::app()->params['phpmailersmtpauth'];                               // Enable SMTP authentication
        $mail->Username = Yii::app()->params['phpmailerusername'];                            // SMTP username
        $mail->Password = Yii::app()->params['phpmailerpassword'];                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted*/

        $mail->From = $from;
        if ($fromName == null) {
            $mail->FromName = 'Money Works Direct';
        } else {
            $mail->FromName = $fromName;
        }

        $mail->AddAddress($to, 'Recipent');  // Add a recipient
        $mail->MsgHTML($message);

        if (isset($attachment) && !empty($attachment)) {
            //$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
            $mail->AddAttachment($attachment, basename($attachment));    // Optional name
        }
        $mail->IsHTML(true);                                  // Set email format to HTML

        $mail->Subject = $subject;
        if (!$mail->Send()) {
            return false;
        } else {
            return true;
        }
    }

}

?>
