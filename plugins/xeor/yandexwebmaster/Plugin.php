<?php namespace Xeor\YandexWebmaster;

use System\Classes\PluginBase;
use Backend\Classes\FormField;

class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Yandex Webmaster',
            'description' => 'Insert Yandex Metrika and Webmaster code inside you pages',
            'author'      => 'Sozonov Alexey',
            'icon'        => 'icon-area-chart'
        ];
    }

    public function registerComponents()
    {
        return [
            'Xeor\YandexWebmaster\Components\YandexMetrika' => 'metrika',
            'Xeor\YandexWebmaster\Components\YandexMetrikaInformer' => 'metrikainformer',
            'Xeor\YandexWebmaster\Components\YandexWebmaster' => 'webmaster'
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Yandex Metrika and Webmaster',
                'description' => 'Manage Yandex Webmaster Settings.',
                'category'    => 'Yandex',
                'icon'        => 'icon-area-chart',
                'class'       => 'Xeor\YandexWebmaster\Models\YandexWebmasterSettings',
                'order'       => 9999
            ]
        ];
    }
}
