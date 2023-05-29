<?php

return [
    'models' => [

        'menu' => JoseGuru\LaravelMenu\Models\Menu::class,

        'menu_item' => JoseGuru\LaravelMenu\Models\MenuItem::class,
    ],

    'table_names' => [

        'menus' => 'menus',

        'menu_items' => 'menu_items',
    ]
];