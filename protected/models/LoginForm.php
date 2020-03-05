<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	public $username;
	public $password;
	public $rememberMe;
	public $email;
	private $_identity;
	public $userType; // added new member
	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	 public function __construct($arg='Front') { // default it is set to Front     
        $this->userType = $arg;
		//echo $this->userType; die;
    }
	public function rules()
	{
		return array(
			// username and password are required
			array('email,password', 'required'),
            array('email', 'email'),
			// rememberMe needs to be a boolean
			array('rememberMe', 'boolean'),
			// password needs to be authenticated
			array('password', 'authenticate'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'email'=> 'Email',
			'password'=> 'Password',			
			'rememberMe'=>'Remember me',
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
				
		if(!$this->hasErrors())
		{
			
			$this->_identity=new UserIdentity($this->email,$this->password);
			if($this->_identity->authenticate($this->userType))
				$this->addError('error', $this->_identity->authenticate());
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{		
		if ($this->_identity === null) {
            $this->_identity = new UserIdentity($this->email, $this->password);
            $this->_identity->authenticate();
        }
		
        switch ($this->_identity->errorCode) {
            case UserIdentity::ERROR_NONE:
                $duration = $this->rememberMe ? 3600 * 24 * 30 : 0; // 30 days
                Yii::app()->user->login($this->_identity, $duration);
                break;
            case UserIdentity::ERROR_USERNAME_INVALID:				
                $this->addError('email', 'Email address is incorrect.');
                break;
			case UserIdentity::ERROR_PASSWORD_INVALID:
                $this->addError('password', 'Password is incorrect.');
                break;
            default: // UserIdentity::ERROR_PASSWORD_INVALID
                $this->addError('password', 'Password is incorrect.');
                break;
        }
		
        if ($this->_identity->errorCode === UserIdentity::ERROR_NONE) {
            $this->onAfterLogin(new CEvent($this, array()));			
            return true;
        } else {
            return false;
        }
	}
	
	public function onAfterLogin($event) {
        if ($this->rememberMe == 1) {
            $cookieUsername = new CHttpCookie("username", $this->email);
            $cookieUsername->expire = time() + 60 * 60 * 24 * 15;
            $cookiePassword = new CHttpCookie("password", $this->password);
            $cookiePassword->expire = time() + 60 * 60 * 24 * 15;

            $cookieRememberme = new CHttpCookie("rememberMe", '1');
            $cookieRememberme->expire = time() + 60 * 60 * 24 * 15;

            Yii::app()->request->cookies['username'] = $cookieUsername;
            Yii::app()->request->cookies['password'] = $cookiePassword;
            Yii::app()->request->cookies['rememberMe'] = $cookieRememberme;
        } else {
            unset(Yii::app()->request->cookies['username']);
            unset(Yii::app()->request->cookies['password']);
            unset(Yii::app()->request->cookies['rememberMe']);
            $cookieRememberme = new CHttpCookie("rememberMe", '0');
            $cookieRememberme->expire = time() + 60 * 60 * 24 * 15;
            Yii::app()->request->cookies['rememberMe'] = $cookieRememberme;
        }
            $user_id = Yii::app()->user->getState('user_id');
            $user_record = Users::model()->findByAttributes(array('id' => $user_id));
           // $user_record->lastlogin = (!empty($user_record->xcurrentlogin)) ? 
            //$user_record->save();
    }
}
