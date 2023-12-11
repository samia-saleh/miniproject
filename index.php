<?php

// Define a constant
define('ROOT_PATH', '/miniproject/');
define('ROOT_BASE', __DIR__);


// require_once('config.php');
require_once('inc/app.php');

$pageName = myAppRequestRoute();
$pageName = explode('?', $pageName)[0];
//=============================================================


if($pageName == 'download'){
    if(isset($_GET['path']))
    {
        //Read the url
        $url = ROOT_BASE.'\\'.str_replace("/","\\",$_GET['path']);
        // echo ''.$url.''; exit;

        //Clear the cache
        clearstatcache();

        //Check the file path exists or not
        if(file_exists($url)) {

            //Define header information
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($url).'"');
            header('Content-Length: ' . filesize($url));
            header('Pragma: public');

            //Clear system output buffer
            flush();

            //Read the size of the file
            readfile($url,true);

            //Terminate from the script
            die();
        }
    }
}






//=============================================================
// Construct the file path
$filePath = 'pages/' . $pageName . '.php';

// echo $filePath; exit;
// Check if the file exists
if (file_exists($filePath)) {
    require_once('layout/header.php');
    // Include or require the file
    require_once($filePath);
    require_once('layout/footer.php');
} else {
    require_once('layout/header.php');
    // File not found, handle the error
    require_once('pages/notfound.php');
    require_once('layout/footer.php');
}