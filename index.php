    <?php
    require __DIR__ . '/app/src/app.php';
?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Restaurant</title>
    <meta name="description" content="E-Prophet Media is a web development agency based in California.">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway:200,400,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sintony:wght@400;700&display=swap" rel="stylesheet">
    
    <link href="css/tiny-slider.css" rel="stylesheet">
    
   <script src="https://kit.fontawesome.com/1da4174dfa.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/normalize.css">
       <script>
        function myFunction() {
            var x = document.getElementById("mMenu");
            if (x.style.display === "block") {
            x.style.display = "none";
            } else {
            x.style.display = "block";
            } 
        }
    </script>
    <link rel="stylesheet" href="css/style.css">
 
</head>

<body>
    <header class="site-header">
        <div class="container flex-container">
             <div class="logo">
                <a href="index.php"><img src="image/logo-min.png" alt="Logotipas"></a>
            </div>
            <div class="m-nav flex-container">
                <ul class="main-nav flex-container">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#reservation">Reservation</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#footer">Contact</a></li>
                </ul>
            </div>
            <nav class="mobile-nav">
                <ul id="mMenu" class="flex-container"> 
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#reservation">Reservation</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#footer">Contact</a>
                </ul>
                <a href="javascript:void(0);" class="icon flex-container" onclick="myFunction()">
                    <i class="fa fa-bars" style="font-size: 2em"></i>
                </a>
            </nav>
            <div>
             <a href="#reservation" class="btn" style="text-decoration: none; padding: 20px 35px">BOOK YOUR TABLE</a>
            </div>
        </div>
    </header>
    <section class="hero">
        <div class="container flex-container">
            <div class="txt flex-container">
                <h1>Teast your fav dish <br>from <span>luxury restaurent</span></h1>
            </div>
            <div class="stack-top">
                    <img src="image/image_explore_food_menu.png" alt="explore food menu">
                </div>
        </div>
    </section>
    <section class="hero2">
         <div class="container flex-container">
             
                 <ul class="hero-nav flex-container">
                     <li><a href="#review"><img src="image/icon_read_reviews.png"></a></li>
                     <li><a href="tel:1-008 005 006"><img src="image/icon_phone.png"></a></li>
                     <li><a href="tel: 1-008 005 006"><h2>1-008 005 006 </h2></a></li>
                </ul>
        </div>
    </section>
    <section>
    <section class="about"><!--raudonas stac-->
        <div class="container"> <!--centravimas-->
          <div class="about-layout flex-container">
            <div class="about-left flex-container"> <!--rozinis stac-->
                <div>
                    <h2>About Restourant</h2> 
                </div>
                <div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book <span id="dots">...</span><span id="more">Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
                </div>
                <div>
                    <button onclick="readAbout()" id="myBtn" class="btn flex-container" type="button">READ MORE</button>
                </div>
            </div> <!--rozinis stac pabaiga-->
        
            <div class="about-right flex-container grid-container">
                        <img class="img1" src="image/image_food-min.png" alt="Image of food">
                        <img class="img2" src="image/image_green_food.png" alt="Image of green food">
                        <img class="img3" src="image/image_people-min.png" alt="People in restaurant">
                        <img class="img4" src="image/image_pizza-min.png" alt="Image of pizza">
              </div><!--rozinis stac pabaiga-->   </div>
        </div><!-- zalio stac pabaiga-->
    </section><!-- raudono stac pabaiga-->
    <section class="today-spec"><!--raudonas stac-->
        <div class="conntainer" > <!--centravimas-->
            <div class="today-spec-header" >
               <h2>Today Specials</h2> 
            </div>
            <div class="container todayspec-stack-top flex-container">
                <div class="todayspec-food">
                    <div>
                        <img src="image/image_specials_bowl.png" alt="Bowl of food">
                    </div>
                    <div class="todayspec-food-info">
                        <div class="todayspec-food-name">
                            <h2>Food Name One</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been text of the printing and text typesetting industry.</p>
                            <hr>
                        </div>
                        <div class="today-spec-footer flex-container">
                            <div>
                                <h3>HOME <br><span style="color: #fe4c8d;">DELIVERY</span></h3>
                            </div>
                            <div>
                                 <a href="tel: 1-008 005 006"><p>1-008 005 006</p></a>
                            </div>
                            <div>
               <h4><span style="font-size: 20px;"> &#36;</span>89.00</h4>
                            </div>
                        </div>                
                    </div>
            </div>
            
            <div class="todayspec-food"><!--rozinis-->
                <div>
                    <img src="image/image_specials_pizza.png" alt="Pizza from today specials">
                </div>
           <div class="todayspec-food-info">
               <div class="todayspec-food-name">
                   <h2>Food Name Two</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been text of the printing and text typesetting industry.</p>
                   <hr>
               </div>
                <div class="today-spec-footer flex-container">
                    <div>
                        <h3>HOME <br><span style="color: #fe4c8d;">DELIVERY</span></h3>
                    </div>
                    <div>
                         <a href="tel: 1-008 005 006"><p>1-008 005 006</p></a>
                    </div>
                    <div>
                        <h4><span style="font-size: 20px;"> &#36;</span>99.00</h4>
                    </div>
                </div>                
            </div>
                
            </div><!--rozinio pabaiga-->
        </div><!--centravimo pabaiga-->
    </div>
   </section>
    <section class="today-spec2">
    </section>
    <section id="menu" class="menu"><!--raudonas-->
        <div class="container"><!--centravimas-->
            <div class="manu-title"><!--rozinis 1-->
                <h3>Food Menu</h3>
                
            </div><!--rozinis 1 pabaiga-->
            <div class="menu-nav flex-container">
                <div><!--rozinis 2-->
                    <ul class="menu-nav-icons flex-container">
                        <li> <a href="#"><img style="color: #fea100;" src="image/menu.png"></a></li>
                        <li> <a href="#"><img style="color: #fea100;" src="image/breakfast.png"></a></li>
                        <li> <a href="#"><img style="color: #fea100;" src="image/lunch.png"></a></li>
<!-- Nepavyko padaryti funkcionalumo:(
                        <li> <a href="#"><img style="color: #fea100;" src="image/snack.png"></a></li>
                        <li> <a href="#"><img style="color: #fea100;" src="image/pizza.png"></a></li>
                        <li> <a href="#"><img style="color: #fea100;" src="image/soup.png"></a></li>
                        <li> <a href="#"><img style="color: #fea100;" src="image/dinner.png"></a></li>
-->
                    </ul >
                    <ul class="menu-nav-text flex-container">
                        <li> <button onclick="all()" id="AllBtn">All</button></li>
                        <li> <button onclick="breakfast()" id="BreakfastBtn">Breakfast</button></li>
                        <li> <button onclick="lunch()" id="LunchBtn">Lunch</button></li>
<!--
                        <li> <a href="#">Snack</a></li>
                        <li> <a href="#">Pizza</a></li>
                        <li> <a href="#">Soups</a></li>
                        <li> <a href="#">Dinner</a></li>
-->
                    </ul>
                    
                </div><!--rozinis 2 pabaiga-->
            </div>
    <div class="menu-list flex-container"> 
        <div><!--rozinis 3-->
            <div class="menu-list-left flex-container all"><!--melynas-->
                <div>
                    <h3>ULTIMATE ORGANIC FRUIT SALAD</h3>
                    <p>Survived not only five centuries but the leap</p>
                </div>
                <div>
                     <h4><span style="font-size: 20px;"> &#36;</span>50.00</h4>
                </div>
            </div><!--melynas pabaiga-->
            <hr>
            <div class="menu-list-left flex-container all">
                <div>
                    <h3>ULTIMATE ORGANIC FRUIT SALAD</h3>
                    <p>Survived not only five centuries but the leap</p>
                </div>
                <div>
                     <h4><span style="font-size: 20px;"> &#36;</span>68.00</h4>
                </div>
            </div>
            <hr>
            <div class="menu-list-left flex-container all">
                <div>
                    <h3>ULTIMATE ORGANIC FRUIT SALAD</h3>
                    <p>Survived not only five centuries but the leap</p>
                </div>
                <div>
                     <h4><span style="font-size: 20px;"> &#36;</span>22.00</h4>
                </div>
            </div>
            <hr>
            <div class="menu-list-left flex-container all">
                <div>
                    <h3>ULTIMATE ORGANIC FRUIT SALAD</h3>
                    <p>Survived not only five centuries but the leap</p>
                </div>
                <div>
                     <h4><span style="font-size: 20px;"> &#36;</span>39.00</h4>
                </div>
            </div>
            <hr>
            
<!--            BREAKFAST LEFT-->
            
            <div class="menu-list-left flex-container" id="breakfast" style="display: none"><!--melynas-->
                <div>
                    <h3>THIS IS BREAKFAST</h3>
                    <p>Survived not only five centuries but the leap</p>
                </div>
                <div>
                     <h4><span style="font-size: 20px;"> &#36;</span>1.00</h4>
                </div>
            </div><!--melynas pabaiga-->
            
            <!--            LUNCH LEFT-->
             <div class="menu-list-left flex-container" id="lunch" style="display: none"><!--melynas-->
                <div>
                    <h3>THIS IS LUNCH</h3>
                    <p>Survived not only five centuries but the leap</p>
                </div>
                <div>
                     <h4><span style="font-size: 20px;"> &#36;</span>1.00</h4>
                </div>
            </div><!--melynas pabaiga-->
            <hr>
        </div><!--rozinis 3 pabaiga-->
        <div><!--rozinis 4-->
            <div class="menu-list-left flex-container all"><!--melynas-->
                <div>
                    <h3>ULTIMATE ORGANIC FRUIT SALAD</h3>
                    <p>Survived not only five centuries but the leap</p>
                </div>
                <div>
                     <h4><span style="font-size: 20px;"> &#36;</span>42.00</h4>
                </div>
            </div><!--melynas pabaiga-->
            <hr>
            <div class="menu-list-left flex-container all">
                <div>
                    <h3>ULTIMATE ORGANIC FRUIT SALAD</h3>
                    <p>Survived not only five centuries but the leap</p>
                </div>
                <div>
                     <h4><span style="font-size: 20px;"> &#36;</span>37.00</h4>
                </div>
            </div>
            <div class="menu-list-left flex-container all">
                <div>
                    <h3>ULTIMATE ORGANIC FRUIT SALAD</h3>
                    <p>Survived not only five centuries but the leap</p>
                </div>
                <div>
                     <h4><span style="font-size: 20px;"> &#36;</span>66.00</h4>
                </div>
            </div>
            <hr>
            <div class="menu-list-left flex-container all">
                <div>
                    <h3>ULTIMATE ORGANIC FRUIT SALAD</h3>
                    <p>Survived not only five centuries but the leap</p>
                </div>
                <div>
                     <h4><span style="font-size: 20px;"> &#36;</span>54.00</h4>
                </div>
            </div>
            <hr>
        </div><!--rozinis 4 pabaiga-->
     </div><!--centravimas pabaiga-->
  </div>            
</section><!--raudonas pabaiga-->
        
<section id="review" class="slider"><!--raudonas-->
    <div class="container flex-container"><!--centravimas-->
        <div class="slider-container">
            <div class="testimonial t1">
                <h3>Lukas K.</h3>
                <blockquote cite="https://www.huxley.net/bnw/four.html"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p> 
                 </blockquote>            
                <img src="image/image_review-min.png" alt="User photo">
                <h3>LUKAS K.</h3>
                <img src="image/image_starts.png" width="77px" height="auto" alt="Five stars">
            </div>
            <div class="testimonial t2">
                <h3>Kaspisija L.</h3>
                <blockquote cite="https://www.huxley.net/bnw/four.html"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p> 
                </blockquote>    
                <img src="image/image_review-min.png" alt="User photo">
                <h3>DR. PRABAKARAN JOHN</h3>
                <img src="image/image_starts.png" width="77px" height="auto" alt="Five stars">
            </div>
            <div class="testimonial t3">
                <h3>Mauricijus D.</h3>
                <blockquote cite="https://www.huxley.net/bnw/four.html"><p>Lorem Ipsum is simply dummy text of the printing and typesetting in 1500s</p> 
                </blockquote>
                <img src="image/image_review-min.png" alt="User photo">
                <h3>DR. PRABAKARAN JOHN</h3>
                <img src="image/image_starts.png" width="77px" height="auto" alt="Five stars">
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>  
     </div><!--centravimas pabaiga-->
</section><!--raudonas pabaiga-->
<section id="reservation" class="reserve"><!--raudonas-->
    <div class="container"><!--centravimas-->
        <div class="reserve-text">
            <h2>Reserve your table</h2>
        </div>
        <div class="reserve-div"><!--??? paklaust!-->
<!--            <div class="reserve-img">-->
                <img src="image/image_restaurant-min.png" alt="Photo of restaurant">
<!--            </div>-->
          <div class="reserve-inputs">
            <form id="contact" action="index.php" method="post">
                <div class="inputs flex-container">
                        <div style="width: 100%;">
                            <div class="inputaaa flex-container">
                                <input type="text" name="vardas" placeholder="Name*" required/>
                                <img src="image/user.svg">
                            </div>
                            <hr>
                            <input class="input-date-time" type="time" name="laikas" placeholder="Time*" required/>
                            <hr>
                            <div class="inputaaa flex-container">
                                 <input type="text" name="sveciai" placeholder="Guests*" required/>
                                <img src="image/guests.svg">
                            </div>
                            <hr>
                        </div>
                        <div style="width: 100%;">
                            <input type="date" name="data" placeholder="Date*" required/>
                            <hr>
                            <div class="inputaaa flex-container">
                                <input type="email" name="email" placeholder="Email*" required/>
                                <img src="image/email.svg">
                            </div>
                            <hr>
                            <div class="inputaaa flex-container">
                            <input type="tel" name="phone" placeholder="Phone*" required/><img src="image/phone.svg">
                                </div>
                            <hr>
                        </div>
                    </div>
                <div>
                    <ul class="reserve-right-nav flex-container">
                        <li>
                        <input name="submit" type="submit" value="make a reservation" class="btn"></li>
                        <li><h3><a href="tel: 1-008 005 006">YOU CAN ALSO CALL<br><span>FOR A RESERVATION</span></a></h3></li>
                        <li><h2><a href="tel: 1-008 005 006">1-008 005 006</a></h2></li>
                    </ul>
                </div>
                </form>
        </div><!--rozinis  pabaiga-->
    </div>
</div><!--centravimas pabaiga-->
</section><!--raudonas pabaiga-->
</section>
    <footer id="footer" class="footer">
        <div class="container"><!--centravimas-->
                <div class="footer-container flex-container"><!--rozinis-->
                    <div class="navigation">
                        <h3>Navigation</h3>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                    <li><a href="#reservation">Reservation</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#footer">Contact</a></li>
                        </ul>
                    </div>
                
                    <div class="footer-contact"><!--rozinis-->
                        <h3>Contacts</h3>
                        <ul>
                            <li><a href="mailto: luxuryrestourant@exp.com">luxuryrestourant@exp.com</a></li>
                            <li><a href="tel: 1-008 005 006">1-008 005 006</a></li>
                            <li><a href="http://facebook.com"><img src="image/icon_facebook.png"></a></li>
							<li><a href="http://google.com"><img src="image/icon_twitter.png"></a></li>
							<li><a href="http://twitter.com"><img src="image/icon_google+.png"></a></li>
                        </ul>
                    </div>
                    <div class="app"><!--rozinis-->
                            <h3>Our app available</h3>
                            <ul>
                                <li><a href="https://www.apple.com/ios/app-store/"><img src="image/icon_app_store.jpg"></a></li>
                                <li><a href="https://play.google.com/store"><img src="image/icon_google_play.png"></a></li>
                            </ul>
                    </div><!--rozinis  pabaiga-->
            </div>
            <div class="all-rights_reserved flex-container"> 
                <hr>
                <h3> <span>2016 &reg </span>       LUXURY RESTAURANT, <span> ALL RIGHTS RESERVED </span></h3>
                <hr>
            </div>
        </div>
    </footer>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
