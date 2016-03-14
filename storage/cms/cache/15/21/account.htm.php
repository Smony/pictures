<?php 
class Cms56e6837b46075_332286110Class extends \Cms\Classes\PageCode
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
    #$user = Auth::getUser();
    #echo $user;

    $file_array = file("message.txt");

    if(!$file_array)
    {
        echo("Ошибка открытия файла");
    }
    else
    {
        for($i=0; $i < count($file_array); $i++)
        {
            printf("%s<br>", $file_array[$i]);
        }
    }

}
public function onTest()
{
    $value1 = post('value1');
    $value2 = post('value2');
    $this['answer'] = $value1 + $value2;
}

}
