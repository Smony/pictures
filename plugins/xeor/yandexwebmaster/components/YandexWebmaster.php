<?php namespace Xeor\YandexWebmaster\Components;

use Cms\Classes\ComponentBase;
use Xeor\YandexWebmaster\Models\YandexWebmasterSettings;

class YandexWebmaster extends ComponentBase
{

  public function componentDetails()
  {
    return [
      'name'        => 'Webmaster',
      'description' => 'Insert your Webmaster meta tag inside any page.'
    ];
  }

  public function onRender()
  {
    // Using settings
    $settings = YandexWebmasterSettings::instance();
    $this->page['webmaster'] = $settings->webmaster;
  }

}