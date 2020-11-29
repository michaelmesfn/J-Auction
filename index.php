<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J-Auction</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/style.css">

    <script src="ajax.js"></script>
</head>
<body>

    <main>
            <div class="container">
                <nav class="nav-bar">
                    <ul class="nav-start">
    
                    <li><form class="form-check" method="POST">
                        <input type="text" name="search" placeholder="Search here...">
                        </form>
                    </li>
                    <li class="logos">
                        <i class="fas fa-search fa-2x"></i>
                    </li>
                    </ul>
    
                        <ul class="nav-mid">

                        <li> <a class="nav-check" href='searchpage/searchpage.php'> Search Page</a> </li>
                            <li> <a class="nav-check" href='#bid'> Recent Bids</a> </li>
                            <li> <a href='#'><div class="logo">
                                <img src= img/logo.png></a></li>
                            <li> <a href='#categorys'> Categories</a> </li>
                            <li> <a href='Map/maps.php'> Maps </a> </li>

                            <?php
                            if(isset($_SESSION["id"])){
                                echo "<li> <a href='maintenance/maintenances.php'> Maintenance</a> </li>";
                            }
                            else{
                                echo "<li> <a href='adminlogin/adminlogin.php'> Maintenance</a> </li>";
                            }
                            ?>
                        </ul>

                    
                        <ul class="nav-right">
                            <li><a href='#modal' class="modal-triger">Login</a></li>
                            <li><a href='#modals' class="modal-triger">Register</a></li>
                            <li><a href='#'><i class="fas fa-shopping-cart"></i></a></li>
                        </ul>
                </nav>
            </div>
    
            <!-- Banner-->
            <header class="banner">
                <div class=bannerText>
                    <h2> Jacobs E-Auction Platform</h2>
                <p>
                    Auction, Bid, Buy or Sell<br>
                    Perfect E-Commerce Auction Platform for Jacobs Students
                </p>
                <a href="#bid" class="btn">
                    VIEW <br><br>RECENT BIDS<br><br> HERE
                </a>
                </div>
            
            </header>

            <!-- Login -->

            <div class="modal" id="modal">
                <div class="modal__dialog">
                  <section class="modal__content">
                    <div class="loginbox">
                  <img src="img/avatar.png" class="avatar">
                      <a href="#" class="modal__close"><i class="fas fa-times fa-2x"></i></a>
                      <h1>LOGIN HERE</h1>
                      <form action="index.php" method="POST">
                          <p>Username</p>
                          <input type="text" name="" placeholder="Enter Username">
                          <p>Password</p>
                          <input type="password" name="" placeholder="Enter Password">
                          <input type="submit" name="" value="Login">
                          <div class="pwdtext">
                            <a href="#">Forgot your password?</a><br>
                            <a href='#modals'>Don't have an account?</a>
                          </div>
                      </form>
                      
                  </div>
                    
                  </section>
                </div>
              </div>

              <!-- Register -->
            <div class="modals" id="modals">
                <div class="modal__dialog">
                  <section class="modal__content">
                    <div class="loginbox">
                        <div class="loginsbox">
                            <img src="img/avatar.png" class="avatar">
                      <a href="#" class="modal__close"><i class="fas fa-times fa-2x"></i></a>
                      <h1>REGISTER HERE</h1>
                      <form action="registers.php" method="post" >  
                          <p>Username</p>
                          <input type="text" name="u_name" required placeholder="Enter first name">

                          <p>E-mail address</p>
                          <input type="text" name="u_email" required placeholder="Enter e-mail address">
                          
                          
                          <p>Password</p>
                          <input type="password" name="u_pwd1" required placeholder="Enter Password">
                          

                          <p>Repeat Password</p>
                          <input type="password" name="u_pwd2" required placeholder="Enter Password">
                          <?php if(isset($password_match_error)){ ?>
                    <p><?php echo $password_match_error ?></p>
                <?php } ?>

                          <input type="submit" name="" value="Register">
                          
                      </form>
                      
                  </div>
                    

                        </div>
                  
                  </section>
                </div>
              </div>
        
        <!-- Recent Bids-->

        <section id="bid" class="recentBids">
            <h1> RECENT BIDS </h1>
            <div class="bidsDisplay">
                <div>
                    <img src="img/bid1.jpeg">
                    <h3>Nike Shoes</h3>
                    <p>Almost new, Classy Nike Shoes. Yours perfect sports shoes for this season.
                        <br> <span>Starting Bid Price: 50 $ </span>
                    </p>
                    <div class="btndiv">
                        <button class="bidbutton"><i id="gavel" class="fas fa-gavel fa-2x"></i><span class="bidtext">Bid Here !</span></button>
                    </div>
                </div>
    
                <div>
                    <img src="img/bid2.jpeg">
                    <h3>Laptop</h3>
                    <p>Almost new, Classy Laptop. Yours perfect laptop for this season.
                        <br> <span>Starting Bid Price: 50 $ </span>
                    </p>
                    <div class="btndiv">
                        <button class="bidbutton"><i id="gavel" class="fas fa-gavel fa-2x"></i><span class="bidtext">Bid Here !</span></button>
                    </div>
                </div>
    
                <div>
                    <img src="img/bid3.jpeg">
                    <h3>Pants</h3>
                    <p>Almost new, Classy Pants. Yours perfect jeans for this season.
                        <br> <span>Starting Bid Price: 20 $ </span>
                    </p>
                    <div class="btndiv">
                        <button class="bidbutton"><i id="gavel" class="fas fa-gavel fa-2x"></i><span class="bidtext">Bid Here !</span></button>
                    </div>
                    
                </div>

                <div>
                    <img src="img/bid4.jpeg">
                    <h3>Jewelry Beads</h3>
                    <p>Almost new, Classy Jewelry Beads. Yours perfect jewelry for this season.
                        <br> <span>Starting Bid Price: 30 $ </span>
                    </p>
                    <div class="btndiv">
                        <button class="bidbutton"><i id="gavel" class="fas fa-gavel fa-2x"></i><span class="bidtext">Bid Here !</span></button>
                    </div>
                </div>

                <div>
                    <img src="img/bid5.jpeg">
                    <h3>Painting</h3>
                    <p>Almost new, Classical old painting. Perfect painting to decor your house.
                        <br> <span>Starting Bid Price: 500 $ </span>
                    </p>
                    <div class="btndiv">
                        <button class="bidbutton"><i id="gavel" class="fas fa-gavel fa-2x"></i><span class="bidtext">Bid Here !</span></button>
                    </div>
                </div>

                <div>
                    <img src="img/bid6.jpeg">
                    <h3>Mercedes Benz</h3>
                    <p>Almost new, Classy Mercedes benz. Yours perfect car for this season.
                        <br> <span>Starting Bid Price: 10000 $ </span>
                    </p>
                    <div class="btndiv">
                        <button class="bidbutton"><i id="gavel" class="fas fa-gavel fa-2x"></i><span class="bidtext">Bid Here !</span></button>
                    </div>
                </div>
            </div>

        </section>

            <!-- Categories --> 
            <section id="categorys" class="catBanner">
                <h1> Categories</h1> 
                <div class="categories">
                    <div class="category-num" style="background-image: url('img/cat1.jpeg')">
                        <div class="categoryType">
                            <div>
                                Electronics
                            </div>
                        </div>
                        
                    </div>
        
                    <div class="category-num" style="background-image: url('img/cat2.jpeg')">
                        <div class="categoryType">
                            <div>
                                Fashion
                            </div>
                        </div>
                    </div>
        
                    <div class="category-num" style="background-image: url('img/cat3.jpeg')">
                        <div class="categoryType">
                            <div>
                                Jewelry
                            </div>
                        </div>
                    </div>
        
                    <div class="category-num" style="background-image: url('img/cat4.jpeg')">
                        <div class="categoryType">
                            <div>
                                Vehicle
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- Footer -->

            <section class="footer">
                <footer>All rights reserved by J-Auction</footer>
                <a href="imprint.html" target="_blank"> Imprint </a>
            </section>
    </main>    
</body>
</html>