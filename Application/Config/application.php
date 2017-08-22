<?php
return (object) [
    'showDebug' => false,
    'website' => (object) [
        'title' => 'Black Framework',
        'brand' => 'Website Example',
        'footerFrontLegend' => '&copy; Footer Legend - ' . date('Y'),
        'footerAdminLegend' => 'Copyright',
    ],
    'database' => (object) [
        'host' => 'localhost',
        'databaseName' => 'myapplication',
        'user' => 'root',
        'password' => 'root',
        'logging' => false,
    ],
    'defaults' => (object) [
        'layout' => '/Modules/Main/Views/layouts/baseLayout.phtml',
        'viewHelpers' => '/Modules/Main/Views/Helpers',
        'viewPartials' => '/Modules/Main/Views/_partials',
    ],
];
