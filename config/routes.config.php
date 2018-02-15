<?php

return [
    'ticket-admin' => [
        'type' => 'Segment',
        'options' => [
            'route' => '/reports',
            'defaults' => [
                'controller' => \ConferenceTools\TicketsAdmin\Controller\ReportController::class,
                'action' => 'index',
            ],
        ],
        'may_terminate' => true,
    ],
];
