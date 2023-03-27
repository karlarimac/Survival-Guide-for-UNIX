<?php

$mysqli = new mysqli('localhost', 'js3199', 'Traceable9#folatre', 'js3199');

if(mysqli_connect_errno()) {
    echo 'connection failed: '.mysqli_connect_error();
    exit();

} else {
    // echo 'connection succesful';
}