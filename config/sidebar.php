<?php

return [

    /* -----------------------------------------------------------------
     |  Sidebar's items
     | -----------------------------------------------------------------
     */

    'items' => [
        [
            'name'        => 'shop::main',
            'title'       => 'Shop',
            'icon'        => 'fas fa-fw fa-shop',
            'roles'       => [],
            'permissions' => [],
            'children'    => [
                [
                    'name'        => 'shop::main.dashboard',
                    'title'       => 'Statistics',
                    'icon'        => 'fa fa-fw fa-tachometer-alt',
                    'route'       => 'admin::shop.index',
                    'roles'       => [
                        'shop-moderator',
                    ],
                    'permissions' => [
                        'admin::shop.statistics.index',
                    ],
                ],
            ],
        ],
    ],
];
