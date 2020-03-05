<?php 
class GApi extends CApplicationComponent {

var $GAPIS = 'https://www.googleapis.com/';
var $GAPIS_AUTH = $GAPIS . 'auth/';
var $GOAUTH = 'https://accounts.google.com/o/oauth2/';

var $CLIENT_ID = '894372676987-jfnpivdbktdb1lrretpe8s72q0di31vd.apps.googleusercontent.com';
var $CLIENT_SECRET = 'L5M_VxmSz5y4RtuDKSbBl9gl';
var $REDIRECT_URI = Yii::app()->getBaseUrl(true).'/gapi.php';
var $SCOPES = array($GAPIS_AUTH . 'drive', $GAPIS_AUTH . 'drive.file', $GAPIS_AUTH . 'userinfo.email', $GAPIS_AUTH . 'userinfo.profile');
var $STORE_PATH = 'credentials.json';

public function uploadFile($credentials, $filename, $targetPath)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $this->GAPIS . 'upload/drive/v2/files?uploadType=media');

	curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, file_get_contents($filename));
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER,
			array('Content-Type : application/pdf', 'Content-Length:' . filesize($filename),
					'Authorization: Bearer ' . getAccessToken($this->credentials))
	);

	$postResult = curl_exec($ch);
	curl_close($ch);

	return json_decode($postResult, true);
}

public function getStoredCredentials($path)
{

	$credentials = json_decode(file_get_contents($path), true);

	if (isset($credentials['refresh_token']))
		return $credentials;

	$expire_date = new DateTime();
	$expire_date->setTimestamp($credentials['created']);
	//$expire_date->add(new DateInterval('PT' . $credentials['expires_in'] . 'S'));

	$current_time = new DateTime();

	if ($current_time->getTimestamp() >= $expire_date->getTimestamp())
	{
		$credentials = null;
		unlink($path);
	}

	return $credentials;
}

public function storeCredentials($path, $credentials)
{

	$credentials['created'] = (new DateTime())->getTimestamp();
	file_put_contents($path, json_encode($credentials));
	return $credentials;
}

public function requestAuthCode()
{

	//global $GOAUTH, $CLIENT_ID, $REDIRECT_URI, $SCOPES;
	$url = sprintf($this->GOAUTH . 'auth?scope=%s&redirect_uri=%s&response_type=code&client_id=%s&approval_prompt=force&access_type=offline',
			urlencode(implode(' ', $this->SCOPES)), urlencode($this->REDIRECT_URI), urlencode($this->CLIENT_ID)
	);
	header('Location:' . $url);
}

public function requestAccessToken($access_code)
{

	//global $GOAUTH, $CLIENT_ID, $CLIENT_SECRET, $REDIRECT_URI;
	$url = $this->GOAUTH . 'token';
	$post_fields = 'code=' . $access_code . '&client_id=' . urlencode($this->CLIENT_ID) . '&client_secret=' . urlencode($this->CLIENT_SECRET)
			. '&redirect_uri=' . urlencode($this->REDIRECT_URI) . '&grant_type=authorization_code';

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
	curl_setopt($ch, CURLOPT_POST, true);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);

	$result = curl_exec($ch);

	curl_close($ch);

	return json_decode($result, true);
}

public function getAccessToken($credentials)
{

	$expire_date = new DateTime();
	$expire_date->setTimestamp($credentials['created']);
	$expire_date->add(new DateInterval('PT' . $credentials['expires_in'] . 'S'));

	$current_time = new DateTime();

	if ($current_time->getTimestamp() >= $expire_date->getTimestamp())
		return $credentials['refresh_token'];
	else
		return $credentials['access_token'];

}

public function authenticate()
{

	//global $STORE_PATH;

	if (file_exists($this->STORE_PATH))
		$credentials = getStoredCredentials($this->STORE_PATH);
	else
		$credentials = null;

	if (!(isset($_GET['code']) || isset($credentials)))
		$this->requestAuthCode();

	if (!isset($credentials))
		$credentials = $this->requestAccessToken($_GET['code']);

	if (isset($credentials) && isset($credentials['access_token']) && !file_exists($this->STORE_PATH))
		$credentials = $this->storeCredentials($STORE_PATH, $credentials);

	return $credentials;
}
}

?>