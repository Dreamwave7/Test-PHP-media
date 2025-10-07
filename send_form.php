<?php
require_once 'environment_config.php';
require_once 'api_funcs.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

//    $ip =$_SERVER['HTTP_CLIENT_IP'];
    if ( !isset($_SERVER['HTTP_CLIENT_IP'])){
        $ip =$_SERVER['REMOTE_ADDR'];
    }

    $box_id = 28;
    $offer_id = 5;
    $countryCode = 'GB';
    $language = 'en';
    $password = 'qwerty12';


    $data = [
       "firstName" => $_POST['firstName'],
       "lastName" => $_POST['lastName'],
       "phone" => $_POST['phone'],
       "email" => $_POST['email'],
       "countryCode" => $countryCode,
       "box_id" => $box_id,
       "offer_id" => $offer_id,
       "landingUrl" => $_SERVER['HTTP_HOST'],
       "ip" => $ip,
       "password" => $password,
       "language" => $language,
    ];

    addlead($data);

    header('Location: form_page.php');
    exit();

}