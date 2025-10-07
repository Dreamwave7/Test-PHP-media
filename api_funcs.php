<?php
require_once 'environment_config.php';


function addlead(array $data){

    $headers = [
        'Content-Type: application/json',
        'token: ' .API_TOKEN,
    ];

    $curl = curl_init();
    curl_setopt_array( $curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => API_URL,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS =>json_encode($data ),
        CURLOPT_HTTPHEADER     => $headers


//        CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) '.
//            'AppleWebKit/537.36 (KHTML, like Gecko) '.
//            'Chrome/58.0.3029.110 Safari/537.36'
    ]);
    $response = curl_exec( $curl );
    curl_close( $curl );
//    echo $response;

    return $response;


    };

function getstatuses($filter)
{

    $headers = [
        'Content-Type: application/json',
        'token: ' .API_TOKEN,
    ];

    $curl = curl_init();
    curl_setopt_array( $curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => API_STATUSES,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS =>json_encode($filter ),
        CURLOPT_HTTPHEADER     => $headers

    ]);
    $response = curl_exec( $curl );
    curl_close( $curl );

    if ( !$response) {
        return [];
    }

    $decoding = json_decode($response, true);


    return $decoding['data'];










}

