<?php

return [
    '__name' => 'lib-shorturl',
    '__version' => '0.0.2',
    '__git' => 'git@github.com:getmim/lib-shorturl.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'https://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-shorturl' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'LibShorturl\\Model' => [
                'type' => 'file',
                'base' => 'modules/lib-shorturl/model'
            ],
            'LibShorturl\\Iface' => [
                'type' => 'file',
                'base' => 'modules/lib-shorturl/interface'
            ],
            'LibShorturl\\Library' => [
                'type' => 'file',
                'base' => 'modules/lib-shorturl/library'
            ]
        ],
        'files' => []
    ],
    'libShortURL' => [
        'shorteners' => []
    ]
];
