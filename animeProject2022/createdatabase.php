<?php
    $host="sql200.infinityfree.com";
    $user="if0_38160417";
    $password="jbQqVQtj4qzf5d";
    $database="if0_38160417_animestore";
    // establish connection
    $con = mysqli_connect($host,$user,$password) or die('Unable to connect mysql' . mysql_error($con));
    $sql = "CREATE DATABASE animestore"; 
        mysqli_query($con,$sql);

        if(!$con){
            die('Could not connect: ' . mysqli_error());
        }
        else{
            echo "Database Created successfully!";
        }
        mysqli_close($con);
?>