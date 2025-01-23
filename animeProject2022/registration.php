<?php
        $host="sql200.infinityfree.com";
        $user="if0_38160417";
        $password="jbQqVQtj4qzf5d";
        $database="if0_38160417_animestore";
        $con = mysqli_connect($host,$user,$password,$database);

        if(!$con){
            die('Could not Connect My Sql:');
        }

        if(isset($_POST['register']))
        {	
            // variable for student 
	        $username = $_POST['user_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            // The hash of the password that
            // can be stored in the database
            $hash = password_hash($password, PASSWORD_DEFAULT);
            
            //inserting in user table
	        $sql = "INSERT INTO `user`(`username`, `email`, `password`) VALUES ('$username','$email','$hash')";

                if (mysqli_query($con, $sql)) {
                    header('location:index.php?success='.'true');
                }else {
                    header('location:index.php?success='.'false');
                }
	        mysqli_close($con);
        }
    ?>