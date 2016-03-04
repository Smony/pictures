<?php 
class Cms56d9a2e58a983_1716138284Class extends \Cms\Classes\PageCode
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
    $user = Auth::getUser();

    // переменная $userId должна содержать ID текущего пользователя
    //$userId = '2';

    $key = md5('XMVcDXruK1VC4voS' . '2');

    // переменная $userName должна содержать имя текущего пользователя
    $userName = 'vasya';

    // переменная $userGender должна содержать пол текущего пользователя (m или f)
    $userGender = 'm';

    // переменная $userAvatar должна содержать путь к файлу с аватаром текущего пользователя
    $userAvatar = "123123";

    // переменная $userProfile должна содержать путь к странице пользователя текущего пользователя
    $userProfile = "123123";

}
public function onTest()
{
    $value1 = post('value1');
    $value2 = post('value2');
    $this['answer'] = $value1 + $value2;
}

}
