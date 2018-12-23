<?php
include "config.php";
session_start();
if($link->connect_error) {
           die('Could not connect');
        }
        echo 'Connected successfully';
mysqli_clode($link);



?>