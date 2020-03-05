<?php

// this contains the application parameters that can be maintained via GUI
return array(
	// this is displayed in the header section
	'title'=>'Money Works Direct',
        'siteurl' => 'http://localhost/moneydirect',
	// this is used in error pages
	'adminEmail'=>'webmaster@example.com',
	//'siteurl'=>'indexportal_saas',

	'templateurl'=>'Index',

	'SITENAME'=>'paspic',
	'LOGINURL'=>'',
	'sessionName'=>'paspic',
	'timer'=>60,

	//development and production
	'server_user'=>'development',

	//default layour setting
	'DEFAULTLOGO'=>'logo.png',
	'DEFAULTSITENAME'=>'paspic',

        


	// number of posts displayed per page
	'listPerPage'=>8,
	'page_size'=>5,
	'page_size_tickets'=>2,
	'page_size_front'=>10,

	'noimage'=>'images/forms/no-image-picture.png', 
    
        // Face Detection Api
        'api_secret' => "39_-9CkZ-Rqx82YinrAepTNxZbCS0ZB1",
        'api_key' => "b1b1ebb7476ec4653549f74353b62db8",
        'attribute' => "glass,pose,gender,age,race,smiling",
        'face_detection_url' => "https://apius.faceplusplus.com/v2/detection/detect",
        
    
        // language sourcemessage
        'sourcemessage_category' => 'paspic',
        
        'default_date_format' => 'Y-m-d',
    
        'from' => 'info@paspic.com',
        
);
