<?php
    session_start();
    $host="sql200.infinityfree.com";
        $user="if0_38160417";
        $password="jbQqVQtj4qzf5d";
        $database="if0_38160417_animestore";
    $con = mysqli_connect($host,$user,$password,$database);

    if(!$con){
        die('Could not Connect My Sql:');
    }

    $id = $_GET ['id'];
    $sql = "DELETE FROM `product` where id = $id";  
    $result= mysqli_query($con, $sql);

    if($result){
        header('location:viewitem.php');
    }
    else{
        echo "deletion unsuccess".mysqli_error($con);
    }
?>