<?php namespace Pensoft\Toolset;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Toolset',
            'description' => 'Toolkit management for researchers and practitioners',
            'author'      => 'Pensoft',
            'icon'        => 'icon-wrench'
        ];
    }

    public function registerNavigation()
    {
        return [
            'toolset' => [
                'label'       => 'Toolset',
                'url'         => Backend::url('pensoft/toolset/tools'),
                'icon'        => 'icon-wrench',
                'permissions' => ['pensoft.toolset.*'],
                'order'       => 500,
                'sideMenu' => [
                    'tools' => [
                        'label'       => 'Tools',
                        'icon'        => 'icon-wrench',
                        'url'         => Backend::url('pensoft/toolset/tools'),
                        'permissions' => ['pensoft.toolset.manage_tools']
                    ],
                    'stages' => [
                        'label'       => 'Stages',
                        'icon'        => 'icon-list-ol',
                        'url'         => Backend::url('pensoft/toolset/stages'),
                        'permissions' => ['pensoft.toolset.manage_stages']
                    ]
                ]
            ]
        ];
    }

    public function registerPermissions()
    {
        return [
            'pensoft.toolset.manage_tools' => [
                'tab'   => 'Toolset',
                'label' => 'Manage Tools'
            ],
            'pensoft.toolset.manage_stages' => [
                'tab'   => 'Toolset',
                'label' => 'Manage Stages'
            ]
        ];
    }
}
