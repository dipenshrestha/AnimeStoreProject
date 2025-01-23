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

        <style>
        /* contact section */
            .contact {
                background: #ccc;
                padding: 20px 0px 50px 0px;
            }
            input[type=text], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type=submit] {
                width: 100%;
                background-color: rgb(172, 170, 170);
                color: #000;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type="email"] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            textarea {
                width: 100%;
            }

            input[type=submit]:hover {
                background-color: rgb(165, 164, 164);
            }
            
            .login-form {
                border-radius: 5px;
                background-color: #ccc;
                padding: 0px 100px 50px 100px;
            }
        </style>

        <script type="text/javascript">
            function dis1(){
                    document.querySelector(".popup-div").style.display="flex";
                    document.querySelector("body").style.overflow="hidden";
                    document.getElementById("i2").value="Itachi Combo";
                    document.getElementById("i3").value="$59.99";
            }

            function dis2(){
                    document.querySelector(".popup-div").style.display="flex";
                    document.querySelector("body").style.overflow="hidden";
                    document.getElementById("i2").value="Angel Demon Couple Pendent";
                    document.getElementById("i3").value="$21.99";
            }

            function dis3(){
                    document.querySelector(".popup-div").style.display="flex";
                    document.querySelector("body").style.overflow="hidden";
                    document.getElementById("i2").value="3D Lamp Anime Figure Solo Leveling";
                    document.getElementById("i3").value="$30.99";
            }

            function dis4(){
                    document.querySelector(".popup-div").style.display="flex";
                    document.querySelector("body").style.overflow="hidden";
                    document.getElementById("i2").value="Anya Forger SpyXFamily t-shirt";
                    document.getElementById("i3").value="$8.99";
            }

            function dis5(){
                    document.querySelector(".popup-div").style.display="flex";
                    document.querySelector("body").style.overflow="hidden";
                    document.getElementById("i2").value="Fairy Tail t-shirt";
                    document.getElementById("i3").value="$8.99";
            }

            function dis6(){
                    document.querySelector(".popup-div").style.display="flex";
                    document.querySelector("body").style.overflow="hidden";
                    document.getElementById("i2").value="One Piece Necklace";
                    document.getElementById("i3").value="$14.99";
            }

            function dis7(){
                    document.querySelector(".popup-div").style.display="flex";
                    document.querySelector("body").style.overflow="hidden";
                    document.getElementById("i2").value="Death Note Bracelet";
                    document.getElementById("i3").value="$9.99";
            }

            function dis8(){
                    document.querySelector(".popup-div").style.display="flex";
                    document.querySelector("body").style.overflow="hidden";
                    document.getElementById("i2").value="Ame No Habakiri Sword Replica";
                    document.getElementById("i3").value="$45.49";
            }

            function dis9(){
                    document.querySelector(".popup-div").style.display="flex";
                    document.querySelector("body").style.overflow="hidden";
                    document.getElementById("i2").value="Zoro Sword Enma";
                    document.getElementById("i3").value="$45.49";
            }

            function dis10(){
                    document.querySelector(".popup-div").style.display="flex";
                    document.querySelector("body").style.overflow="hidden";
                    document.getElementById("i2").value="One Piece All Wanted Poster";
                    document.getElementById("i3").value="$6.99";
            }
        </script>
</head>
<body>
    
    <div id="container" class="container">
        <!-- head and navigation menu -->
        <section class="home" id="home">
        <div id="headContainer">
            <nav>
                <ul>
                    <li><a href="#home"><i class="fa fa-home"></i>  Home</a></li>
                    <li><a href="#products"><i class="fa fa-shopping-cart"></i>  Products</a></li>
                    <li><a href="viewitem.php"><i class="fa fa-shopping-cart"></i>  View Items</a></li>
                    <li><a href="#contact"><i class="fa fa-comment"></i>  Send Message</a></li>
                    <li><a href="#about"><i class="fa fa-info-circle"></i>  About Us</a></li>
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
            <div id="col-1">
                    <img src="images/sololeveling1.png" id="col-1-pic">
            </div>
            <div class="col-2">
                <h1>" It's foolish to fear what we have yet to see and know ! "</h1>
                <a href="#products" class="btn">Explore Now &#8594;</a>
            </div>
        </div>
        </section>

        <!------ latest products ------>
        <div class="offer">
                    <div class="c1">
                        <img src="images/itachi-set.png" class="offer-img1">
                    </div>

                    <div class="c2">
                        <p>Exclusively Available on FAFFL</p>
                        <h1>Itachi Combo</h1>
                        <small>Itachi Combo offers 6 pieces combo accessories, which includes
                            Anime cloak, Cosplay headband, Necklace and Ring.
                        </small>
                        <h2 class="price" id="amount" value="100">Price : $59.99</h2>
                        <a href="#" class="btn" id="btn1" onclick="dis1()">Buy Now &#8594;</a>
                    </div>
        </div>

        <!------ featured products ------>
        <section class="products" id="products">
        <div class="small-container">
            <h2 class="title">Featured Products</h2>
            <div class="row">
                <div class="col-4">
                    <img src="images/angel-demon.jpg" width="400px">
                    <h4>Angel Demon couple pendent</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p id="amount" value="101">$21.99</p>
                    <a href="#" class="btn" id="btn1" onclick="dis2()">Buy Now &#8594;</a>
                </div>
                <div class="col-4">
                    <img src="images/sololeveling-3d-lamp.jpg" width="400px">
                    <h4>3D Lamp Anime Figure Solo Leveling</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p id="amount" value="102">$30.99</p>
                    <a href="#" class="btn" id="btn1" onclick="dis3();">Buy Now &#8594;</a>
                </div>
                <div class="col-4">
                    <img src="images/anya-tshirt.png" width="400px">
                    <h4>Anya forger spyXfamily t-shirt </h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p id="amount" value="103">$8.99</p>
                    <a href="#" class="btn" id="btn1" onclick="dis4();">Buy Now &#8594;</a>
                </div>
                <div class="col-4">
                    <img src="images/fairy-tail.png" width="400px">
                    <h4>Fairy Tail t-Shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p id="amount" value="104">$8.99</p>
                    <a href="#" class="btn" id="btn1" onclick="dis5();">Buy Now &#8594;</a>
                </div>
                <div class="col-4">
                    <img src="images/one-piece-necklace.jpg" width="400px">
                    <h4>One Piece Necklace</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p id="amount" value="105">$14.99</p>
                    <a href="#" class="btn" id="btn1" onclick="dis6();">Buy Now &#8594;</a>
                </div>
                <div class="col-4">
                    <img src="images/death-note.jpg" width="400px">
                    <h4>Death Note Bracelet</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p id="amount" value="106">$9.99</p>
                    <a href="#" class="btn" id="btn1" onclick="dis7();">Buy Now &#8594;</a>
                </div>
                <div class="col-4">
                    <img src="images/ame no habakiri.jpg" width="400px">
                    <h4>Ame no habakiri sword replica</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p id="amount" value="107">$45.49</p>
                    <a href="#" class="btn" id="btn1" onclick="dis8();">Buy Now &#8594;</a>
                </div>
                <div class="col-4">
                    <img src="images/enma.jpg" width="400px">
                    <h4>Zoro sword ENMA</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p id="amount" value="108">$45.49</p>
                    <a href="#" class="btn" id="btn1" onclick="dis9();">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
        </section>

        <!------ latest products ------>
        <div class="offer">
                    <div class="c1">
                        <img src="images/wanted-poster.jpg" class="offer-img1">
                    </div>

                    <div class="c2">
                        <p>Exclusively Available on FAFFL</p>
                        <h1>One Piece All Wanted Poster</h1>
                        <small>One Piece All Wanted Poster offers 12 wanted poster with their bounty, which includes wanted poster of Straw Hat Pirates, Kaido and Shanks.
                        </small>
                        <h2 class="price" id="amount">Price : $6.99</h2>
                        <a href="#" class="btn" id="btn1" onclick="dis10();">Buy Now &#8594;</a>
                    </div>
        </div>

        <!-- -------about section---- -->
        <section class="about" id="about">
            <div class="content1">
                <div class="title"><span style="font-size: 30px;">About us</span></div>
                <div class="about-details">
                    <div class="left">
                        <p>This an online anime accessories web site. Our major commodities are Anime Merchandised Accessories and Cosplay Items which includes manga, figurines, apparel, cosplay tools, cosplay dress etc.
                        <br><br>
                        Our team are continuously working to fulfil the demand of our valued customer by sourcing out from any corner of the globe. We are gradually expanding our inventory every month with new and interesting merchandised products of the hottest anime series.
                        <br><br>
                        As the customer satisfaction is our goal, we always welcome any sorts of suggestion from anyone. Please feel free to contact for any issue that you may need. We will get back at you as soon as possible.</p>
                        <a href="#home" class="btn" id="btn1">Get Started &#8594;</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- -------contact section---- -->
        <section class="contact" id="contact">
        <div class="contact">
            <div class="title">
                <span style="font-size: 30px;">Contact us</span>
            </div>

            <div class="login-form">
                <form action="#">
                    <label for="fname">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your name..." required>
                  
                    <label for="email">Email</label>
                    <input type="Email" id="email" name="email" placeholder="username@email.com" reuired>

                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="your subject..." required>

                    <label for="message">Message</label>
                    <textarea rows="5" cols="20" required></textarea>

                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
        </section>

        <!-- Popup form to give quanty -->
        <div class="popup-div">
            <div class="popup-content">
                <img src="images/cross.png" class="close" width="20px">
                <form method="POST" action="insertproduct.php">
                    <div class="productid">
                        <h5>Username</h5>
                        <input type="text" id="i1" name="productid" value="<?php echo $_SESSION['username'];?>" required readonly>
                    </div>
                    <div class="product">
                        <h5>Product Name</h5>
                        <input type="text" placeholder="Name of product" id="i2" name="productname" required readonly>
                    </div>
                    <div class="price-quantity">
                        <div class="price">
                            <h5>Product Price</h5>
                            <input type="text" placeholder="Price" id="i3" name="price" required readonly>
                        </div>
                        <div class="quantity">
                            <input type="number" placeholder="Quantity" id="i4" name="quantity" autofocus required>
                        </div>
                    </div>
                    <div class="button">
                        <button id="submit_button" name="submitdetail"><i class="fa fa-shopping-cart"></i> ADD TO CART</button>
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
        </script>

        <!-- footer -->
        <div id="footer">
            <footer>
                <div class="quicknavigation">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="viewitem.php">View Items</a></li>
                        <li><a href="#contact">Send Message</a></li>
                        <li><a href="#about">About Us</a></li>
                    </ul>
                </div>

                <div class="row-icon">
                    <ul class="col1-icon">
                        <li><a href="https:\\www.facebook.com" title="facebook"   style="background-color:#3b5998">
                        <i class="fa fa-facebook"></i></a></li>
                        <li><a href="https:\\www.instagram.com" title="instagram"   style="background-color:#b30086">
                        <i class="fa fa-instagram "></i></a></li>
                        <li><a href="https:\\www.twitter.com" title="twitter"   style="background-color:#00aced">
                        <i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>

                <hr class="hrline-buttom">

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
    <?php
    if(isset($_GET['success']) && $_GET['success']){
        echo '<script type="text/javascript"> alert("Welcome, You have logined successfully");</script>';
    }
    ?>
</body>
</html>