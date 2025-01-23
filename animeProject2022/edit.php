<?php
        $host="sql200.infinityfree.com";
        $user="if0_38160417";
        $password="jbQqVQtj4qzf5d";
        $database="if0_38160417_animestore";
        $con = mysqli_connect($host,$user,$password,$database);

        if(!$con){
            die('Could not Connect My Sql:');
        }

        if(isset($_POST['editdetail']))
        {	 
	        $username = $_POST['username'];
            $productname = $_POST['productname'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
    
            //upadting details
            $sql = "UPDATE `product` SET `productname`='$productname',`price`='$price',`quantity`='$quantity' WHERE `username`= '$username'";

                if (mysqli_query($con, $sql)) {
                    header('location:viewitem.php');
                }else {
                    echo 'Product update operation failed';
                }

	        mysqli_close($con);
        }
?>