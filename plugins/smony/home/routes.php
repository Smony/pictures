<?php
    use Yandex\Disk\DiskClient;

    require_once 'phar://yandex-php-library_master.phar/vendor/autoload.php';

    Route::match(['get', 'post'], 'upload', function () {

        $user = Auth::getUser();
        define('ACCESS_TOKEN', 'bbbef0b0944e4ce79219ac5884cbbebc');

        $diskClient = new DiskClient(ACCESS_TOKEN);
        $diskClient->setServiceScheme(DiskClient::HTTPS_SCHEME);

        #$diskSpace = $diskClient->diskSpaceInfo();
        $path = $user->email;
/*
            if ($user) {
               $diskClient->createDirectory($path);
            }
*/

        $storeFolder = '../../../uploads' . '/' . $user->id;

        if (!empty($_FILES)) {

            #$fileName = '1.jpg';
            #$newName = '1_new.jpg';

            $tempFile = $_FILES['file']['tmp_name'];
            #var_dump($tempFile);
/*
            foreach ($_FILES as $file) {
                $tempFile = $file;
            }
  */
            #Log::info(var_export($_FILES, true));
            #$targetPath = dirname(__FILE__) . '/' . $storeFolder;

            $diskClient->uploadFile(
                '/'.$path.'/',
                array(
                    'path' => $tempFile,
                    'size' => filesize($tempFile),
                    'name' => time() . '-' . $_FILES['file']['name']
                )
            );

    /*
            if (!file_exists($targetPath)) {
                mkdir($targetPath, 0777);
            }
    */
            #$targetFile =  $targetPath . '/' . time() . '-' . $_FILES['file']['name'];
            #move_uploaded_file($tempFile,$targetFile);
        }
    });


