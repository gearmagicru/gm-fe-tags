<?php
/**
 * Этот файл является частью модуля веб-приложения GearMagic.
 * 
 * Файл конфигурации установки модуля.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    'use'         => FRONTEND,
    'id'          => 'gm.fe.tags',
    'name'        => 'Search by the specified tag',
    'description' => 'Output objects associated with the specified tag',
    'namespace'   => 'Gm\Frontend\Tags',
    'path'        => '/gm/gm.fe.tags',
    'route'       => 'tags', // использует BACKEND
    'routes'      => [
        [
            'use'     => FRONTEND,
            'type'    => 'parts',
            'options' => [
                'module' => 'gm.fe.tags',
                'route'  => 'tag',
                'size'   => 2,
                'assign' => ['slug' => 1]
            ]
        ],
        [
            'use'     => BACKEND,
            'type'    => 'crudSegments',
            'options' => [
                'module' => 'gm.fe.tags',
                'route'  => 'tags',
                'prefix' => BACKEND
            ]
        ]
    ],
    'locales'     => ['ru_RU', 'en_GB'],
    'permissions' => ['info'],
    'events'      => [],
    'required'    => [
        ['php', 'version' => '8.2'],
        ['app', 'code' => 'GM CMS']
    ]
];
