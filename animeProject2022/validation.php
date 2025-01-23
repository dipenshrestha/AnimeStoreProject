<?php session_start();?>
<?php
        $host="sql200.infinityfree.com";
        $user="if0_38160417";
        $password="jbQqVQtj4qzf5d";
        $database="if0_38160417_animestore";
        $con = mysqli_connect($host,$user,$password,$database);

        if(!$con){
            die('Could not Connect My Sql:');
        }

        if(isset($_POST['login']))
        {	
            // variable for student 
	        $username = $_POST['user_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "select * from user where username='$username' and email='$email'";
            $result = mysqli_query($con, $sql);
            if($result){
                while($row = mysqli_fetch_assoc($result)){
                    $hash = $row['password'];

                    // Verify the hash against the password entered
                    $verify = password_verify($password, $hash);
                    
                    // Print the result depending if they match
                    if ($verify) {
                        $_SESSION["username"]= $username;
                        header('location:home.php?success='.'true');
                    } 
                    else {
                        header('location:index.php?success='.'false');
                    }
                }
            }
            else {
                header('location:index.php?success='.'false');
            }
	        mysqli_close($con);
        }
?>