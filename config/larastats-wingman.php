<?php

return [
    'larastats' => [
        'domain' => env('LARASTATS_DOMAIN'),

        'exception_logger' => [
            'endpoint' => env('LARASTATS_EXCEPTION_LOGGER_ENDPOINT', '/api/exceptions'),
        ],
    ]
];
