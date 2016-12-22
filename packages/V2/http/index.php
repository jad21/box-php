<?php

return [
    "name"       => "V2/http",
    "type"       => "librery",
    "main"       => function ($app) {
    	// var_dump("V2/http");
    },
    "config"     => [
    	"numbers"=>[range(1,10)]
    ],
    'V2\\Http\\' => 'src',
];
