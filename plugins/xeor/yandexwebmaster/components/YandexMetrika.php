<?php namespace Xeor\YandexWebmaster\Components;

use Cms\Classes\ComponentBase;
use Xeor\YandexWebmaster\Models\YandexWebmasterSettings;

class YandexMetrika extends ComponentBase
{

  public function componentDetails()
  {
    return [
      'name'        => 'Metrika',
      'description' => 'Insert your Metrika code inside any page.'
    ];
  }

  public function onRender()
  {
    // Using settings
    $settings = YandexWebmasterSettings::instance();
    $this->page['metrika'] = $settings->metrika;
  }

}