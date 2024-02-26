<?php
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "school_db";
 $conn= new mysqli($hostName,$userName,$password,$dbName);
 if($conn){
    echo "";
 }else{
    echo "not connected";
 }

  ?>