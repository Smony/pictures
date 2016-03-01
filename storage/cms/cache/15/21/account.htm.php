<?php 
use Yandex\Disk\DiskClient;class Cms56d590749a730_1625606265Class extends \Cms\Classes\PageCode
{
public function onInit()
{
    //$this->imageUploader->bindModel('files', Project::find(1));
    //new Project;
    $this->imageUploader->bindModel('photoTest',new \Rainlab\User\Models\User);


    //var_dump($this->page);

//Auth::user->id
//echo '<pre>';
    //print_r(Auth::user->id);
       // echo '</pre>';
//die();


}




public function onStart()
{

    require_once 'phar://yandex-php-library_master.phar/vendor/autoload.php';

    define('ACCESS_TOKEN', 'bbbef0b0944e4ce79219ac5884cbbebc');

    $diskClient = new DiskClient(ACCESS_TOKEN);
    $diskClient->setServiceScheme(DiskClient::HTTPS_SCHEME);

    $diskSpace = $diskClient->diskSpaceInfo();

    echo ACCESS_TOKEN;

    #echo user.name;

    #$path = $this->page['user'];

    #$dirContent = $diskClient->createDirectory($path);

    #if ($dirContent) {

        #$this['qwe'] = 'Создана новая директория "' . $path . '"!';

    #}

}
public function onTest()
{
    $value1 = post('value1');
    $value2 = post('value2');
    $this['result'] = "12 123";
}


}
