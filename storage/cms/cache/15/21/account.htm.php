<?php 
class Cms56d6bd1bc8a9d_430491416Class extends \Cms\Classes\PageCode
{
public function onInit()
{
    //$this->imageUploader->bindModel('files', Project::find(1));
    //new Project;
    #$this->imageUploader->bindModel('photoTest',new \Rainlab\User\Models\User);


    //var_dump($this->page);

//Auth::user->id
//echo '<pre>';
    //print_r(Auth::user->id);
       // echo '</pre>';
//die();


}
public function onStart()
{

/*
    $target = '/'.$path.'/1_new.jpg';

    if ($diskClient->delete($target)) {
        echo 'Файл "' . $target . '" был удален';
    }

*/
}
public function onTest()
{
    $value1 = post('value1');
    $value2 = post('value2');
    $this['answer'] = $value1 + $value2;
}

}
