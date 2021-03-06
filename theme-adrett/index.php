<?php

/**
 * Configuration
 */
return [

    /**
     * Unique name that identifies your theme.
     */
    'name' => 'theme-adrett',

    /**
     * Define menu positions.
     * Will be listed in the backend so that users
     * can assign menus to these positions.
     */
    'menus' => [

        'main' => 'Main',

    ],

    /**
     * Define widget positions.
     * will be listed in the backend so that users
     * can publish widgets in these positions.
     */
    'positions' => [

        'sidebar' => 'Sidebar',
        'top' => 'Top'

    ],

    /**
    The default setting for the widget position
    */
    'node' => [

        'top_style' => 'uk-block-muted'

    ],



    /**
    The default setting for the widget
    */
    'widget' => [

        'panel' => ''

    ],

    /**
    * Settings url
    */
    'settings' => '@site/settings#site-theme',
    /**
     * Define theme configuration.
     * This is the theme's default configuration. During run-time, they will be merged with
     * settings the user has set in the backend. The default configuration can therefore
     * be overwritten.
     */
    'config' => [
        'navbar_sticky' => false
    ],

    /**
    */
    'events' => [

        'view.system/site/admin/settings' => function ($event, $view) use ($app) {
                $view->script('site-theme', 'theme:app/bundle/site-theme.js', 'site-settings');
                $view->data('$theme', $this);
         },

         'view.system/site/admin/edit' => function ($event, $view) {
                 $view->script('node-theme', 'theme:app/bundle/node-theme.js', 'site-edit');
             },

         'view.system/widget/edit' => function ($event, $view) {
             $view->script('widget-theme', 'theme:app/bundle/widget-theme.js', 'widget-edit');
         }

    ]

];
