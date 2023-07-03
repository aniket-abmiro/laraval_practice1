<?php

$_SESSION['name'] ="Aniket";
$heading = 'About us';
// dd($_SESSION['name']);
view('about.view.php',[
    'name'=>$_SESSION['name']
]);