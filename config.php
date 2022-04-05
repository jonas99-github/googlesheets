<?php
require_once 'vendor/autoload.php';
require_once 'class-db.php';
  
define('GOOGLE_CLIENT_ID', '196921418959-bve3hoignlgm6f8ppq3ptd2hkgeauitd.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
  
$config = [
    'callback' => 'https://localhost:3030/googlesheets/callback.php',
    'keys'     => [
                    'id' => GOOGLE_CLIENT_ID,
                    'secret' => GOOGLE_CLIENT_SECRET
                ],
    'scope'    => 'https://www.googleapis.com/auth/spreadsheets',
    'authorize_url_parameters' => [
            'approval_prompt' => 'force', // to pass only when you need to acquire a new refresh token.
            'access_type' => 'offline'
    ]
];
  
$adapter = new Hybridauth\Provider\Google( $config );
