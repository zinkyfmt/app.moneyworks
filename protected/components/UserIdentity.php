<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	 private $_id;
	 //public $userType = 'Front';
	/*public function authenticate()
	{
		$users=array(
			// username => password
			'demo'=>'demo',
			'admin'=>'admin',
		);
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}*/
	
	public function authenticate($userType = 'Front') {
		if($userType=='Front') // This is front login
        { 
        $user_record = Users::model()->findByAttributes(array('email' => $this->username));
		if ($user_record == null) {
			$this->errorCode=self::ERROR_USERNAME_INVALID;
        } else if ($user_record->password !== $this->md5_encrypt($this->password)) {
           $this->errorCode=self::ERROR_PASSWORD_INVALID;
        } else {			
            $this->_id = $user_record->id;
            $this->setState('user_firstname', $user_record->fname);
            $this->setState('user_lastname', $user_record->lname);
            //$this->setState('last_login', $user_record->xlastlogin);
            //$this->setState('current_login', $user_record->xcurrentlogin); 
		//	$this->setState('user_pic', $user_record->profile_pic);  			
            $this->setState('user_id', $user_record->id);
			
            $this->setState('user_email', $user_record->email);
			$this->setState('fullname', $user_record->fname . " " . $user_record->lname);
            $this->setState('password', $this->password);   			
            $roledata = Yii::app()->authManager->getAuthAssignments($user_record->id);
            $itemname = '';			
            foreach ($roledata as $item) {
                $itemname = $item->itemname;
            }					
            $this->setState('user_role', $itemname);
            $this->errorCode = self::ERROR_NONE;
        } 		
        return $this->errorCode;
	}
	if($userType=='Back')// This is admin login
        { 
			$user_record = Users::model()->findByAttributes(array('email' => $this->username, 'xstatus' => 'active registered'));
		if ($user_record == null) {
			$this->errorCode=self::ERROR_USERNAME_INVALID;
        } else if ($user_record->password !== $this->md5_encrypt($this->password)) {
           $this->errorCode=self::ERROR_PASSWORD_INVALID;
        } else {			
            $this->_id = $user_record->id;
            $this->setState('isAdmin', '1');
			$this->setState('roles', 'admin');	
			$this->setState('user_id', $user_record->id);	
			$this->setState('user_mid', $user_record->mid);	
			$this->setState('fullname', $user_record->xname . " " . $user_record->xfamilyname);			
            $roledata = Yii::app()->authManager->getAuthAssignments($user_record->id);
			//echo '<pre>'; print_r($roledata); die;
            $itemname = '';			
            foreach ($roledata as $item) {
                $itemname = $item->itemname;
            }					
            $this->setState('user_role', $itemname);
            $this->errorCode = self::ERROR_NONE;
        } 		
        return $this->errorCode;
		}
    }

    public function getId() {
        return $this->_id;
    }

    public static function md5_encrypt($plain_text, $password = '', $iv_len = 16) {
        /*$plain_text .= "\x13";
        $n = strlen($plain_text);
        if ($n % 16)
            $plain_text .= str_repeat("\0", 16 - ( $n % 16 ));
        $i = 0;
        $enc_text = self::get_rnd_iv($iv_len);
        $iv = substr($password ^ $enc_text, 0, 512);
        while ($i < $n) {
            $block = substr($plain_text, $i, 16) ^ pack('H*', md5($iv));
            $enc_text .= $block;
            $iv = substr($block . $iv, 0, 512) ^ $password;
            $i += 16;
        }
        return base64_encode($enc_text);*
         * 
         */
        return md5($plain_text);
    }

    public static function get_rnd_iv($iv_len) {
        $iv = '';
        while ($iv_len-- > 0) {
            $iv .= chr(mt_rand() & 0xFF);
        }
        return $iv;
    }

    public static function md5_decrypt($enc_text, $password = '', $iv_len = 16) {
       /* $enc_text = base64_decode($enc_text);
        $n = strlen($enc_text);
        $i = $iv_len;
        $plain_text = '';
        $iv = substr($password ^ substr($enc_text, 0, $iv_len), 0, 512);
        while ($i < $n) {
            $block = substr($enc_text, $i, 16);
            $plain_text .= $block ^ pack('H*', md5($iv));
            $iv = substr($block . $iv, 0, 512) ^ $password;
            $i += 16;
        }
        return preg_replace('/\\x13\\x00*$/', '', $plain_text);
        * 
        */
        return $password;
    }

    public static function getIp() {
        $ip = $_SERVER['REMOTE_ADDR'];

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        return $ip;
    }
}