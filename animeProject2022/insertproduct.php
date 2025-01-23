<?php
        $host="sql200.infinityfree.com";
        $user="if0_38160417";
        $password="jbQqVQtj4qzf5d";
        $database="if0_38160417_animestore";
        $con = mysqli_connect($host,$user,$password,$database);

        if(!$con){
            die('Could not Connect My Sql:');
        }

        if(isset($_POST['submitdetail']))
        {	
            // variable for student 
	        $username = $_POST['productid'];
            $productname = $_POST['productname'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
    
            //inserting in user table
	        $sql = "INSERT INTO `product`(`username`, `productname`, `price`, `quantity`) VALUES ('$username','$productname','$price','$quantity')";

                if (mysqli_query($con, $sql)) {
                    header('location:home.php?username='.$username);
                }else {
                    echo 'Product ordering failed';
                }

	        mysqli_close($con);
        }
?>