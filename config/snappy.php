<?php

return [

    'pdf' => [
        'enabled' => true,
        'binary'  => 'C:\path\to\wkhtmltopdf', // Ganti dengan path yang benar
        'timeout' => false,
        'options' => [],
        'env'     => [],
    ],

    'image' => [
        'enabled' => true,
        'binary'  => env('WKHTML_IMG_BINARY', '/usr/local/bin/wkhtmltoimage'),
        'timeout' => false,
        'options' => [],
        'env'     => [],
    ],

];
