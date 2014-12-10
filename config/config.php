<?php
return array(
    'swiftmailer.options' => array(
        'host' => getenv('smtp.host'),
        'port' => getenv('smtp.port'),
        'username' => getenv('smtp.username'),
        'password' => getenv('smtp.password'),
        'encryption' => getenv('smtp.encryption'),
        'auth_mode' => 'login'
    ),
    'db.options' => array(
        'driver' => 'pdo_mysql',
        'host' => 'localhost',
        'port' => 3306,
        'user' => getenv('database.user'),
        'password' => getenv('database.password'),
        'dbname' => getenv('database.name'),
        'cache' => 'array' // array, apc, xcache...
    ),
    'bitly' => array( //usado para compartilhar os orçamentos. o /share é obrigatório
        'url'   => getenv('bitly.url'),
        'token' => getenv('bitly.token')
    )
);
