<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Anime Store</title>
        <!--link to css-->
		<link rel="stylesheet" type="text/css" href="styles.css">
		<!--link to font awesome-->
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
		<!--code for favicon-->
		<link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
        <link rel="manifest" href="favicon_io/site.webmanifest">

        <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: 20px;
            text-align: center;
            width: 90%;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
            padding: 10px;
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid #c0c0c0;
        }
 
        th,
        td {
            font-weight: bold;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }

        #u{
            padding: 10px 35px 10px 30px;
            background-color: #006600;
            border: 1px #006600 solid;
            border-radius: 10px;
            color: white;
            margin-bottom: 10px;
        }

        #d{
            padding: 10px 35px 10px 40px;
            background-color: red;
            border: 1px red solid;
            border-radius: 10px;
            color: white;
        }

        .viewitem-container{
            padding: 50px;
        }
    </style>
</head>
<body>
    
    <div id="container" class="container">
        <!-- head and navigation menu -->
        <section class="home" id="home">
        <div id="headContainer">
            <nav>
                <ul>
                    <li><a href="home.php"><i class="fa fa-home"></i>  Home</a></li>
                    <li><a href="viewitem.php"><i class="fa fa-shopping-cart"></i>  View Items</a></li>
                    <li>
                        <div class="userdiv">
                            <a href="index.php" class="btn" id="btnlogout">
                            <?php echo $_SESSION['username'];?>
                            <i class="fa fa-sign-out"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>

        <div id="content">
            <div style="margin: -120px 0px 0px -1300px">
                    <img src="images/sololeveling1.png" width="200px">
            </div>
        </div>

        <div class="viewitem-container">
            <div class="viewitem-user">
            <h1>Ordered Products Details Table</h1>
            <table>
                <tr style="background-color: #c0c0c0">
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
                <?php
                    $host="sql200.infinityfree.com";
                    $user="if0_38160417";
                    $password="jbQqVQtj4qzf5d";
                    $database="if0_38160417_animestore";
                    $con = mysqli_connect($host,$user,$password,$database);
            
                    if(!$con){
                        die('Could not Connect My Sql:');
                    }
                    $username = $_SESSION['username'];
                    $sql = "SELECT * FROM product where username = '$username'";

                    $result = mysqli_query($con,$sql);
                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $productname = $row['productname'];
                            $price = $row['price'];
                            $quantity = $row['quantity'];
                ?>
                            <tr>
                                <td><?php echo $productname?></td>
                                <td><?php echo $price?></td>
                                <td><?php echo $quantity?></td>
                                <td>
                                <a href="#"><input type="button" value="Update" id="u" class="edit"></a>
                                <a href="delete.php?id=<?php echo $id?>"><input type="button" value="Delete" id="d"></a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                ?>
            </table>
            </div>
        </div>
        <!-- Popup form to give quanty -->
        <div class="popup-div">
            <div class="popup-content">
                <img src="images/cross.png" class="close" width="20px">
                <form method="POST" action="edit.php">
                    <div class="username">
                        <h5>Username</h5>
                        <input type="text" id="i1" name="username" value="<?php echo $_SESSION['username'];?>" required readonly>
                    </div>
                    <div class="product">
                        <h5>Product Name</h5>
                        <input type="text" placeholder="Name of product" id="i2" name="productname" value="<?php echo $productname?>" required readonly>
                    </div>
                    <div class="price-quantity">
                        <div class="price">
                            <h5>Product Price</h5>
                            <input type="text" placeholder="Price" id="i3" name="price" value="<?php echo $price?>" required readonly>
                        </div>
                        <h5>Quantity</h5>
                        <div class="quantity">
                            <input type="number" placeholder="Quantity" id="i4" name="quantity" value="<?php echo $quantity?>" autofocus required>
                        </div>
                    </div>
                    <div class="button">
                        <button id="submit_button" name="editdetail"><i class="fa fa-edit"></i> Edit Details</button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            document.querySelector(".close").addEventListener("click", function(){
                document.querySelector(".popup-div").style.display = "none";
                document.querySelector("body").style.overflow="auto";
                location.reload();
            })
            document.querySelector(".edit").addEventListener("click", function(){
                document.querySelector(".popup-div").style.display="flex";
                document.querySelector("body").style.overflow="hidden";
            })
            
        </script>
        <!-- footer -->
        <div id="footer">
            <footer style="margin-top:200px;">
                <div class="copy">
                    <div id="logofoot">
                        <img src="images/fafflLogo.png" id="logofootpic">
                    </div>

                    <div id="copyright">
                        <i class="fa fa-copyright"></i> &nbsp; FAFFL - 2022 All rights reserved 
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>