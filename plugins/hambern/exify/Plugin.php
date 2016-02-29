<?php namespace Hambern\Exify;

use Hambern\Exify\Models\Exif;
use PHPExif\Reader\Reader;
use System\Classes\PluginBase;
use System\Models\File as FileBase;

/**
 * Exify Plugin Information File
 */
class Plugin extends PluginBase
{

	public function boot()
	{
		FileBase::extend(function ($model) {
			$model->hasOne['exif'] = ['Hambern\Exify\Models\Exif', 'delete' => true];
		});

		FileBase::extend(function ($model) {
			$model->bindEvent('model.afterCreate', function () use ($model) {
				if (strpos($model->content_type, 'image') !== false) {
					$reader = Reader::factory(Reader::TYPE_NATIVE);
					$path = 'http://' . $_SERVER['SERVER_NAME'] . $model->path;
					$data = $reader->read($path)->getData();
					foreach ($data as $k => $v) {
						$fill[snake_case($k)] = $v;
					}
					$exif = Exif::make($fill);
					$model->exif()->save($exif);
				}
			});
			$model->bindEvent('model.beforeDelete', function () use ($model) {
				if (strpos($model->content_type, 'image') !== false) {
					$model->exif()->delete();
				}
			});
		});
	}

	/**
	 * Returns information about this plugin.
	 *
	 * @return array
	 */
	public function pluginDetails()
	{
		return [
			'name'        => 'hambern.exify::lang.plugin.name',
			'description' => 'hambern.exify::lang.plugin.description',
			'author'      => 'Hambern',
			'icon'        => 'icon-camera',
		];
	}

}
