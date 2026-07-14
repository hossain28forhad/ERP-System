<?php

return [

    [
        'title' => 'Dashboard',
        'icon'  => 'home',
        'route' => 'admin.dashboard',
    ],

    [
        'title' => 'User Management',
        'icon'  => 'users',

        'children' => [

            [
                'title'=>'Users',
                'route'=>'admin.users.index'
            ],

            [
                'title'=>'Roles',
                'route'=>'admin.roles.index'
            ],

            [
                'title'=>'Permissions',
                'route'=>'admin.permissions.index'
            ],

        ]

    ],

    [
        'title'=>'Inventory',

        'icon'=>'boxes',

        'children'=>[

            [
                'title'=>'Products',
                'route'=>'admin.products.index'
            ],

            [
                'title'=>'Categories',
                'route'=>'admin.categories.index'
            ],

            [
                'title'=>'Brands',
                'route'=>'admin.brands.index'
            ],

            [
                'title'=>'Units',
                'route'=>'admin.units.index'
            ],

        ]

    ],

];