<?php

$dir = "";
if($_SERVER['SERVER_NAME'] == "cidota.com.br"){
    $dir = "/";
}else if($_SERVER['SERVER_NAME'] == "localhost"){
    $dir = "/pharmaciap/";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <base href="//<?=$_SERVER['SERVER_NAME'].$dir?> ">
        <title><?= $titulo ?></title>
        <link rel="stylesheet" href="public/css/custom.css">
        <link rel="stylesheet" href="public/css/bootstrap.css">
        <link rel="stylesheet" href=" <?= base_url("css/bootstrap.css") ?> ">
    </head>
    <body style="background-color: #11111">