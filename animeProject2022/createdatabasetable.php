<?php 
    $host="sql200.infinityfree.com";
    $user="if0_38160417";
    $password="jbQqVQtj4qzf5d";
    $database="if0_38160417_animestore";
    $con = mysqli_connect($host,$user,$password,$database);

    // creating student tables
    $sql = "CREATE TABLE user(
        userid int NOT NULL auto_increment,
        primary key(userid),
        username varchar(255) not null unique,
        email varchar(50) not null unique,
        password varchar(255) not null
    )";

    // Execute query
    $result = mysqli_query($con,$sql);
    if($result)
    {
        echo "Table created successfully<br>";
    }
    else
    {
        echo "Table not created due to ". mysqli_error($con)."<br>";
    }

    // creating student tables
    $sql = "CREATE TABLE product(
        id int NOT NULL auto_increment,
        primary key(id),
        username varchar(255) not null,
        productname varchar(70) not null,
        price varchar(15) not null,
        quantity varchar(50) not null
    )";

    // Execute query
    $result = mysqli_query($con,$sql);
    if($result)
    {
        echo "Table created successfully<br>";
    }
    else
    {
        echo "Table not created due to ". mysqli_error($con)."<br>";
    }

    mysqli_close($con);
?>
