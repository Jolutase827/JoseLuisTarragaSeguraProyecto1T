<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($postId=$post->insertar($dbConn->link)){
    header("HTTP/1.1 200 OK");
    echo json_encode("Insertado el post numero $postId");
    exit();
    }
    }