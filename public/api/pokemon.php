<?php
    //required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset-UTF-8");

    $qs = isset($_GET["q"]) ? $_GET["q"] : "";

    

    http_response_code(200);
    echo json_encode(array('name' => 'HelloWorld', 'type' => 'Normal'));
?>