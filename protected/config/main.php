<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'MoneyWorksDirect',
    'theme' => 'moneyworksdirect',
    'defaultController' => 'index',		
	'layout'=>'main',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.modules.*',
        'application.widgets.*',
        'ext.ckeditor.CKEditor',
        'ext.phpmailer.JPhpMailer',
		'ext.gdriveapi.GApi',
		'application.vendor.mpdf.*',
		'application.vendor.docusign-php-client.*',
    ),
    'modules' => array(
      /*   'webcpanel' => array(
			'components' => array(
			'user' => array(
					'class' => 'CWebUser',
					'allowAutoLogin' => true,
					'loginUrl' => array('webcpanel/account/login'),					
					'StateKeyPrefix' => '_webcpanel',
					),
			),
	),*/
        // uncomment the following to enable the Gii tool
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '123456'
            
        ),
    ),
    'sourceLanguage'=>Yii::app()->session['defaultlanguage'],
	'language'=>Yii::app()->session['defaultlanguage'],
    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            'loginUrl' => array('account/login'),
        ),
        // uncomment the following to enable URLs in path-format
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
			
        // database settings are configured in database.php
        'db' => require(dirname(__FILE__) . '/database.php'),
        'authManager' => array(
            'class' => 'CDbAuthManager',
            'defaultRoles' => array('authenticated', 'guest'),
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
           // 'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
        'messages' => array(
            'class' => 'CDbMessageSource',
            'forceTranslation' => true,
            'connectionID'=>'db'
       ),
    ),
     
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => require(dirname(__FILE__) . '/params.php'),
);
