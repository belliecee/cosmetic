<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/bootstrap');
//Yii::setPathOfAlias('editable', dirname(__FILE__).'/../extensions/x-editable');
Yii::setPathOfAlias('yiiwheels', dirname(__FILE__).'/../extensions/yiiwheels');
Yii::setPathOfAlias('mymodule', dirname(__FILE__).'/../extensions/mymodule');
Yii::setPathOfAlias('newmodule', dirname(__FILE__).'/../extensions/newmodule');
return array(
        'theme'=>'bootstrap', // requires you to copy the theme under your themes directory
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Cosmetic Web',

	// preloading 'log' component
	'preload'=>array('log','boostrap'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
            
               // 'editable.*', //easy include of editable classes
                'bootstrap.helpers.TbHtml',
                //'bootstrap.helpers.TbHtml',
               
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'maketable',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'ppp---',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
                        'generatorPaths'=>array(
                            'bootstrap.gii',
                        ),
		),
            
		
	),

	// application components
	'components'=>array(
            /*
                'bootstrap'=>array(
                    'class'=>'ext.bootstrap.components.Bootstrap',
                    
                    //'responsiveCss' => true,
                ),
             * 
             */ 'bootstrap' => array(
                    'class' => 'bootstrap.components.TbApi',   
                ),
              
                'yiiwheels' => array(
                        'class' => 'yiiwheels.YiiWheels',
                ),
            
                'authManager'=>array(
                    'class'=>'CDbAuthManager',
                    'connectionID'=>'db',
                ),
            
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
                //X-editable config
            /*
                    'editable' => array(
                        'class'     => 'editable.EditableConfig',
                        'form'      => 'bootstrap',        //form style: 'bootstrap', 'jqueryui', 'plain' 
                        'mode'      => 'popup',            //mode: 'popup' or 'inline'  
                        'defaults'  => array(              //default settings for all editable elements
                           'emptytext' => 'Click to edit'
                        )
                  ),        
            */
              
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
                       
                   
			'rules'=>array(
                                //'user/<username:\w+>' => "user/view",
                                
				
                                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                            
                              //  'user/view/<username:\w+>'=>'user/view',
                   
                            
                            '' => 'site/index', // normal URL rules
                          
                            
                         
			),
		),
		
                /*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
                 * 
                 */
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=cosmetic',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'fibo5813',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);