<?php

define('DIR_UPLOAD','uploads/plant_images/');
define('DIR_UPLOAD_GROUP','uploads/group_images/'); 
define('DIR_UPLOAD_GALLERY_IMAGE','uploads/gallery_images/'); 

    ob_start();
    session_start();   

    include 'func/album.func.php';
    include 'func/image.func.php';
    include 'func/user.func.php';
    include 'func/thumb.func.php';
    include 'func/function.php';
    
    $servername = "localhost";
    $username = "newscyec_garden";
    $password = "O[@u8%Cn39.h";  
    $database = "newscyec_garden";

    try{  
        $conn = new mysqli($servername, $username, $password, $database);
    }
    catch (Exception $e){
        echo "FAILS";
    }
?>