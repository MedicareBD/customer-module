<?php

return [
    'name' => 'Customer',

    'menus' => [
        ['header' => 'User Management', 'order' => 2],
        [
            'text' => 'Customers',
            'icon' => 'fas fa-users',
            'can' => 'customers-read',
            'order' => 3,
            'submenu' => [
                [
                    'text' => 'Add Customer',
                    'route' => 'admin.customers.create',
                    'can' => 'customers-create',
                ],
                [
                    'text' => 'Manage Customers',
                    'route' => 'admin.customers.index',
                    'can' => 'customers-read',
                ],
                [
                    'text' => 'Credit Customer',
                    'route' => 'admin.customers.credit',
                    'can' => 'customers-credit-read',
                ],
                [
                    'text' => 'Paid Customer',
                    'route' => 'admin.customers.paid',
                    'can' => 'customers-paid-read',
                ],
                [
                    'text' => 'Customer Ledger',
                    'route' => 'admin.customers.ledger',
                    'can' => 'customers-ledger-read',
                ],
            ],
        ],
    ],
];
