<?php

return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Monolog settings
        'logger' => [
            'name'      => 'slim-app',
            'path'      => __DIR__ . '/../logs/app.log',
            'timezone'  => 'Asia/Jerusalem',
            'level'     => 'DEBUG',             
        ],

        // Twig settings        
        'view' => [
            'template_path' => __DIR__ . '/../resources/views/',
            'twig' => [
                'cache' => __DIR__ . '/../caches/',
                'debug' => true,
            ],
        ],

        // Eloquent settings
        'db' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => getenv('DB_DATABASE'),
            'username'  => getenv('DB_USERNAME'),
            'password'  => getenv('DB_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],

        // Nette mail server access
		'mailer' => [
		    'host' 		=> 'smtp.gmail.com',
            'username' 	=> getenv('MAIL_USERNAME'),
            'password' 	=> getenv('MAIL_PASSWORD'),
			'secure' 	=> 'tls',
			'port' 		=> '587',
			
			'context' =>  [ // SMTP, skip gmail certificate validation checks
				'ssl' => [
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
				]				
			],
		],
		'baseUrl' => getenv('BASE_URL')
        
    ],
];
