<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/jig/assets/css/index.css">
    <title>JIG</title>

    <link rel="shortcut icon" href="/jig/assets/img/favicon.ico" type="image/x-icon"/>
</head>
<body>
<?php
    if(session_id() == '') { // Start session if none found
        session_start();
    }
?>
