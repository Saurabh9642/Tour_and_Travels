<?php session_start(); ?>
<!DOCTYPE html>
<?php
require_once("Connection.php");
if(!isset($_SESSION["login_sess"]))
{
    header("location:login1.php");
}
$email=$_SESSION["login_email"];
$findresult = mysqli_query($connection, "SELECT * FROM `register` WHERE Email_Id='$email' ");
if($res = mysqli_fetch_array($findresult))
{
    $Username=$res['Username'];
    $Email_Id=$res['Email_Id'];
    $image=$res['image'];
}
?>
<html>
    <title>My Account</title>
    <link rel="stylesheet" href="web.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        .that{
            width: 350px;
            height: 350px;
            font-size: 19px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px black;
            margin-top: 10px;
            margin-left: 600px;
            display: none;
        }
        
        .that.active{
            display: block;
        }
        h3{
           text-align: center;
        }
        .there{
            margin-top: -60px;
            margin-right: 15px;
            float: right;
            padding: 10px;
            width: 120px;
            font-size: 20px;
            cursor: pointer;
            color: #2c19d8;
            box-shadow:10px 10px 20px #5d06cf;
        }
        .self{
            margin-top: 20px;
            margin-left: 40px;
            padding: 10px;
            border-radius: 10px;
        }
        .yourself{
            margin-top: 20px;
            margin-left: 40px;
            padding: 10px;
            border-radius: 10px;
        }
        table{
            margin-left: 30px;
        }
        .cl{
            margin-top: -330px;
            margin-left: 300px;
            cursor: pointer;
        }
        .navbar{
            position: fixed;
            background: white;
            width: 1300px;
            height: 70px;
        }
        
        .navbar :hover {
    
    color: black;
}
    </style>
    <body>
    <div class="wrapper">
    <section id="Home">
            <nav class="navbar">
                <h1 class="logo"> GOLDEN <span style="color: rgb(20, 194, 238);">WINGS</span></h1>
                <ul>
                    <li><a class="active" href="#Home">HOME</a></li>
                    <li><a href="#Services">SERVICES</a></li>
                    <li><a href="#Destination">DESTINATION</a></li>
                    <li><a href="#Offer">SPECIAL OFFER</a></li>
                    <li><a href="http://localhost/jadhav/client_report.php">Ticket Details</a></li>
                    <button id="Profile" class="there">Profile</button>
                    <div class="that">
                        <br>
                         <center>
                         <?php
                        if($image==NULL)
                            {
                                echo '<img src="user.png" style="width:100px;height:100px;margin-top:6px;">';
                            }
                        else
                            {
                                echo '<img src="image/'.$image.'"  style="width:150px;height:140px;margin-top:6px;">';
                            }
                        ?>
                        </center>
                        <br>
                        <h3>Hello, <?php echo $Username ; ?></h3>
                    <table>
                    <tr>
                        <th>Username :</th>
                        <td><?php echo $Username; ?></td>
                        </tr>
                        <br>
                    <tr>
                        <th>Email_Id  :</th>
                        <td><?php echo $Email_Id; ?></td>
                        </tr>
                    </table>
                    <button class="yourself"><a href="Edit_profile12.php">Edit Profile</a></button>
                    <button class="self"><a href="logout.php">Logout</a></button>
                    <div class="cl">
                    <p id="cl">&#10006;</p>
                    </div>
                </div>
                </ul>
        </nav>
            <input type="button" name="abc" value="Book with Us !">
            <div class="center">
                <h1>Explore The Beauty<br>Of The Beautiful<br><span style="color: #659ff0">World</span></h1>
                    <p>Discover amzaing places at exclusive deals.<br>
                        Eat, Shop, Visit interesting places around the world.</p>
                        <div class="abc">
                            <input type="text" placeholder="Search Anythink You Want..."> 
                            <i class="fa-sharp fa-solid fa-magnifying-glass"></i>    
                        </div>    
            </div>
            <center>
                <a href="https://www.Google.com"><img class="pre" src="nor.png"></a>
                <a href="https://www.instagram.com"><img class="pre" src="i2r.png"></a>
                <a href="https://www.twitter.com"><img class="pre" style="height: 55px; width: 55px; margin-bottom: 15px;" src="tr.png"></a>
                <a href="https://www.facebook.com"><img class="pre" style="height: 48px; width: 48px; margin-bottom: 20px;" src="Facebook.png"></a>
                <a href="https://www.whatsapp.com"><img class="pre" style="height: 50px; width: 59px;" src="whatsapp.png"></a>
            </center>
            </center>
        </div>
        </section>
        <div>
            <div class="steps">
                <center>
                    <h4 style="font-size: 22px; color: rgb(155, 156, 159); letter-spacing: 2px; margin-top: 60px;">3 STEPS TO THE PERFECT TRIP</h4>
                    <h2> FIND TRAVEL PERFECTION, WITH THE <BR> WISDOM OF EXPERTS</h2>
                        <h5> naturally head of the class when it comes to luxury travel planning,because we do more homework than anyone else,<br>
                        with a few little sweeteners thrown in! Travel to the four corners of the world,without going around in circles</h5>
                        <img src="Screenshot1.png">
                        <button style="width: 200px; height: 50px; font-size: 16px;box-shadow: 5px 5px 10px rgb(164, 234, 237);"> LETS PLAN YOUR TRIP</button>
                </center>
            </div>
        </div>

        <section id="Services">
        <br>
        <br>
        <center><h1 style="margin-top: 80px; font-size: 35px; font-weight: 900;color: rgb(4, 5, 5);">
            OUR <span style="color: rgb(44, 103, 204);">SERVICES</span></h1></center>
            <div class="new">
                <div class="card">
                    <div class="single-card">
                        <div class="front"></div>
                            <div class="back">
                                <div class="content">
                                    <h2>Intergrated Booking</h2>
                                    <p style="margin-top: 15px; font-size: 15px;">Voyage lets you define ticket availability and easily manage all booking right from your Word Press dashboard</p>
                                    <p class="socials">
                                    <a href="https://www.Google.com"><img class="pre" style="margin: 10px; height: 40px; width: 40px;" src="nor.png"></a>
                                        <a href="https://www.whatsapp.com"><img class="pre" style="margin: 10px; height: 40px; width: 40px;" src="i2r.png"></a>
                                        <a href="https://www.twitter.com"><img class="pre" style="margin: 10px; height: 40px; width: 40px;" src="tr.png"></a>
                                    </p>
                                </div>   
                            </div>
                    </div>
                </div>
                <div class="card">
                    <div class="single-card">
                        <div style="background-image: url(our4.webp);" class="front"></div>
                            <div class="back">
                                <div class="content">
                                    <h2>Advanced Search Filters</h2>
                                    <p style="margin-top: 15px; font-size: 15px;">The powerfull Advanced Search Filters in Voyage let user search tours by destination,time,type,price range and more..</p>
                                    <p class="socials">
                                    <a href="https://www.Google.com"><img class="pre" style="margin: 10px; height: 40px; width: 40px;" src="nor.png"></a>
                                        <a href="https://www.whatsapp.com"><img class="pre" style="margin: 10px; height: 40px; width: 40px;" src="i2r.png"></a>
                                        <a href="https://www.twitter.com"><img class="pre" style="margin: 10px; height: 40px; width: 40px;" src="tr.png"></a>
                                    </p>
                                </div>   
                            </div>
                    </div>
                </div>
                <div class="card">
                    <div class="single-card">
                        <div style="background-image: url(our5.jpg);" class="front"></div>
                            <div class="back">
                                <div class="content">
                                    <h2>Connect with Paypal</h2>
                                    <p style="margin-top: 15px; font-size: 15px;">With Paypal integration,all you have to do to let user pay for booked trips in enter your Paypal ID in the appropriate field..</p>
                                    <p class="socials">
                                    <a href="https://www.Google.com"><img class="pre" style="margin: 10px; height: 40px; width: 40px;" src="nor.png"></a>
                                        <a href="https://www.whatsapp.com"><img class="pre" style="margin: 10px; height: 40px; width: 40px;" src="i2r.png"></a>
                                        <a href="https://www.twitter.com"><img class="pre" style="margin: 10px; height: 40px; width: 40px;" src="tr.png"></a>
                                    </p>
                                </div>   
                            </div>
                    </div>
                </div>
                <div class="card">
                    <div class="single-card">
                        <div style="background-image: url(our6.jpg);" class="front"></div>
                            <div class="back">
                                <div class="content">
                                    <h2>Google Maps</h2>
                                    <p style="margin-top: 15px; font-size: 15px;">Beautiful Google Maps make it easy to display the exact location of all your amazing travel destination and execiting...</p>
                                    <p class="socials">
                                    <a href="https://www.Google.com"><img class="pre" style="margin: 10px; height: 40px; width: 40px;" src="nor.png"></a>
                                        <a href="https://www.whatsapp.com"><img class="pre" style="margin: 10px; height: 40px; width: 40px;" src="i2r.png"></a>
                                        <a href="https://www.twitter.com"><img class="pre" style="margin: 10px; height: 40px; width: 40px;" src="tr.png"></a>
                                    </p>
                                </div>   
                            </div>
                    </div>
                </div>
                <div class="card">
                    <div class="single-card">
                        <div style="background-image: url(our7.jpg);" class="front"></div>
                            <div class="back">
                                <div class="content">
                                    <h2>HOUSING</h2>
                                    <p style="margin-top: 15px; font-size: 15px;">It is the place where a person stays during their travels. And it serves as a shelter, rest area. You can find hotels, camps, timeshares, and private residences within this service.</p>
                                    <p class="socials">
                                    <a href="https://www.Google.com"><img class="pre" style="margin: 10px; height: 40px; width: 40px;" src="nor.png"></a>
                                        <a href="https://www.whatsapp.com"><img class="pre" style="margin: 10px; height: 40px; width: 40px;" src="i2r.png"></a>
                                        <a href="https://www.twitter.com"><img class="pre" style="margin: 10px; height: 40px; width: 40px;" src="tr.png"></a>
                                    </p>
                                </div>   
                            </div>
                    </div>
                </div>
            </div>
        </section>

        
        <section ID="Destination"><br>
        <br>
            <center><h1 style="margin-top: 100px; font-size: 35px; font-weight: 900;color: rgb(13, 15, 15);">
                TOP <span style="color: rgb(44, 103, 204);">DESTINATION</span></h1></center>
                <center><p style="font-size: 21px; font-weight: 300;color: #74797f;margin-top: 20px;">
                    Explore our top destinations voted by more than 100,000+<br> customers around the world.</p></center>  
            <div class="wrapper1"  style="margin-left: -100px;">
                <div class="container1">
                    <div class="hero-section1">
                        <div class="image1"> 
                            <img src="Punjab.jpg"> 
                            <div class="content1">
                                <h1>Punjab</h1>
                                <center><p>Visit Punjab, and you will see that the large heartedness of the people is as real as their cuisine</p></center>
                                <a href="punjab.html"><center><p style="margin-top: 15px; color: rgb(59, 156, 235); font-size: 17px;">View all tours</p></center></a>
                            </div>
                        </div>
                        <div class="image1"> 
                            <img style="width: 350px;height: 262px;" src="mh.webp"> 
                            <div class="content1">
                                <h1>Maharashtra</h1>
                                <center><p>Maharashtra is like a big canvas painted with distinct colours and patterns to offer a likable picture for the world to see.</p></center>
                                <a href="user.html"><center><p style="margin-top: 15px; color: rgb(59, 156, 235); font-size: 17px;">View all tours</p></center></a>
                            </div>
                        </div>
                        <div class="image1"> 
                            <img src="kashamir.jpg"> 
                            <div class="content1">
                                <h1>kashmir</h1>
                                <center><p>Tourism today has become one of the largest and fastest growing industries of the world.it's famous for her scenic beauty</p></center>
                               <a href="kashmir.html"> <center><p style="margin-top: 15px; color: rgb(59, 156, 235); font-size: 17px;">View all tours</p></center></a>
                            </div>
                        </div>
                        <div class="image1"> 
                            <img style="height: 262px;" src="goa.webp"> 
                            <div class="content1">
                                <h1>Goa</h1>
                                <center><p>Goa is a tourist destination in India that is culturally and historically rich and is also famous for its sunkissed beaches, sand, shacks</p></center>
                                <a href="Goa.html"><center><p style="margin-top: 15px; color: rgb(59, 156, 235); font-size: 17px;">View all tours</p></center></a>
                            </div>
                        </div>
                        <div class="image1"> 
                            <img style="height: 262px;" src="raj.jpg"> 
                            <div class="content1">
                                <h1>Rajasthan</h1>
                                <center><p>Rajasthan is best described as land of Kings and Kingdoms, architectural wonders, cultural extravaganza, fabulous history</p></center>
                                <a href="Rajasthan.html"><center><p style="margin-top: 15px; color: rgb(59, 156, 235); font-size: 17px;">View all tours</p></center></a>
                            </div>
                        </div>
                        <div class="image1"> 
                            <img src="delhi.jpg"> 
                            <div class="content1">
                                <h1>Delhi</h1>
                                <center><p>Delhi is a vital epicenter of strategic and cultural activities in India. Delhi, in all its diversity is a famous tourist destination</p></center>
                                <a href="Delhi.html"><center><p style="margin-top: 15px; color: rgb(59, 156, 235); font-size: 17px;">View all tours</p></center></a>
                                
                            </div> 
                        </div> 
                    </div>
                </div>
            </div> 
        </section>

        <section id="Offer">
            <center><h1 style="margin-top: 700px; font-size: 35px; font-weight: 900;color: rgb(13, 15, 15);">
                SPECIAL <span style="color: rgb(44, 103, 204);">OFFER</span></h1></center>
                <center><p style="font-size: 21px; font-weight: 300;color: #74797f;margin-top: 20px;">
                    Explore our top destinations voted by more than 100,000+<br> customers around the world.</p></center> 
            <div class="ui-card">
                    <img style="height: 450px; max-width: 100%;display: block;" src="maharashtra.jpeg">
                    <div class="description1">
                        <h1>Maharashtra</h1>
                        <p><span style="color: rgb(219, 187, 28);font-size: 22px;float: left;font-weight: 400;">Price :</span> 
                        <span style="margin-right: 160px;">&#8377 10,000</span></p><br>
                        <p><span style="color: rgb(219, 187, 28);font-size: 22px;font-weight: 400;margin-right: 220px;">Day :</span>2 Day</p><br>
                        <p><span style="color: rgb(219, 187, 28);font-size: 22px;font-weight: 400;margin-right: 190px;">Place :</span>Mumbai</p> 
                        <h2>
                            <i style="color: yellow;" class="fa-regular fa-star"></i>
                            <i style="color: yellow;" class="fa-regular fa-star"></i>
                            <i style="color: yellow;" class="fa-regular fa-star"></i>
                            <i style="color: yellow;" class="fa-regular fa-star"></i>
                            <i style="color: yellow;" class="fa-regular fa-star"></i>
                        </h2>
                        <center><a href="offer_registration.php">Book Now</a></center>
                    </div>
                    
            </div> 
            <div class="ui-card">
                <img style="height: 450px; max-width: 100%;display: block;" src="tajmahal.jpeg">
                <div class="description1">
                    <h1>Tajmahal</h1>
                    <p><span style="color: rgb(219, 187, 28);font-size: 22px;float: left;font-weight: 400;">Price :</span> 
                    <span style="margin-right: 160px;">&#8377 5,000</span></p><br>
                    <p><span style="color: rgb(219, 187, 28);font-size: 22px;font-weight: 400;margin-right: 220px;">Day :</span>2 Day</p><br>
                    <p><span style="color: rgb(219, 187, 28);font-size: 22px;font-weight: 400;margin-right: 190px;">Place :</span>Delhi</p> 
                    <h2>
                        <i style="color: yellow;" class="fa-regular fa-star"></i>
                        <i style="color: yellow;" class="fa-regular fa-star"></i>
                        <i style="color: yellow;" class="fa-regular fa-star"></i>
                        <i style="color: yellow;" class="fa-regular fa-star"></i>
                        <i style="color: yellow;" class="fa-regular fa-star"></i>
                    </h2>
                    <center><a href="offer_registration.php">Book Now</a></center>
                </div>
                
        </div>  
        <div class="ui-card">
            <img style="height: 450px; max-width: 100%;display: block;" src="golden1.webp">
            <div class="description1">
                <h1>Punjab</h1>
                <p><span style="color: rgb(219, 187, 28);font-size: 22px;float: left;font-weight: 400;">Price :</span> 
                <span style="margin-right: 160px;">&#8377 8,000</span></p><br>
                <p><span style="color: rgb(219, 187, 28);font-size: 22px;font-weight: 400;margin-right: 220px;">Day :</span>3 Day</p><br>
                <p><span style="color: rgb(219, 187, 28);font-size: 22px;font-weight: 400;margin-right: 190px;">Place :</span>Punjab</p> 
                <h2>
                    <i style="color: yellow;" class="fa-regular fa-star"></i>
                    <i style="color: yellow;" class="fa-regular fa-star"></i>
                    <i style="color: yellow;" class="fa-regular fa-star"></i>
                    <i style="color: yellow;" class="fa-regular fa-star"></i>
                    <i style="color: yellow;" class="fa-regular fa-star"></i>
                </h2>
                <center><a href="offer_registration.php">Book Now</a></center>
            </div>
            
    </div>  
    <div class="ui-card">
        <img style="height: 450px; max-width: 100%;display: block;" src="keral3.jpg">
        <div class="description1">
            <h1>kerala</h1>
            <p><span style="color: rgb(219, 187, 28);font-size: 22px;float: left;font-weight: 400;">Price :</span> 
            <span style="margin-right: 160px;">&#8377 10,000</span></p><br>
            <p><span style="color: rgb(219, 187, 28);font-size: 22px;font-weight: 400;margin-right: 220px;">Day :</span>5 Day</p><br>
            <p><span style="color: rgb(219, 187, 28);font-size: 22px;font-weight: 400;margin-right: 190px;">Place :</span>kerala</p> 
            <h2>
                <i style="color: yellow;" class="fa-regular fa-star"></i>
                <i style="color: yellow;" class="fa-regular fa-star"></i>
                <i style="color: yellow;" class="fa-regular fa-star"></i>
                <i style="color: yellow;" class="fa-regular fa-star"></i>
                <i style="color: yellow;" class="fa-regular fa-star"></i>
            </h2>
            <center><a href="offer_registration.php">Book Now</a></center>
        </div>
        
</div>  
<div class="ui-card">
    <img style="height: 450px; max-width: 100%;display: block;" src="delhi1.jpg">
    <div class="description1">
        <h1>Delhi</h1>
        <p><span style="color: rgb(219, 187, 28);font-size: 22px;float: left;font-weight: 400;">Price :</span> 
        <span style="margin-right: 160px;">&#8377 10,000</span></p><br>
        <p><span style="color: rgb(219, 187, 28);font-size: 22px;font-weight: 400;margin-right: 220px;">Day :</span>2 Day</p><br>
        <p><span style="color: rgb(219, 187, 28);font-size: 22px;font-weight: 400;margin-right: 190px;">Place :</span>Delhi</p> 
        <h2>
            <i style="color: yellow;" class="fa-regular fa-star"></i>
            <i style="color: yellow;" class="fa-regular fa-star"></i>
            <i style="color: yellow;" class="fa-regular fa-star"></i>
            <i style="color: yellow;" class="fa-regular fa-star"></i>
            <i style="color: yellow;" class="fa-regular fa-star"></i>
        </h2>
        <center><a href="offer_registration.php">Book Now</a></center>
    </div>
    
</div>  
<div class="ui-card">
    <img style="height: 450px; max-width: 100%;display: block;" src="m2.jpg">
    <div class="description1">
        <h1>Manali</h1>
        <p><span style="color: rgb(219, 187, 28);font-size: 22px;float: left;font-weight: 400;">Price :</span> 
        <span style="margin-right: 160px;">&#8377 15,000</span></p><br>
        <p><span style="color: rgb(219, 187, 28);font-size: 22px;font-weight: 400;margin-right: 220px;">Day :</span>5 Day</p><br>
        <p><span style="color: rgb(219, 187, 28);font-size: 22px;font-weight: 400;margin-right: 190px;">Place :</span>Manali</p> 
        <h2>
            <i style="color: yellow;" class="fa-regular fa-star"></i>
            <i style="color: yellow;" class="fa-regular fa-star"></i>
            <i style="color: yellow;" class="fa-regular fa-star"></i>
            <i style="color: yellow;" class="fa-regular fa-star"></i>
            <i style="color: yellow;" class="fa-regular fa-star"></i>
        </h2>
        <center><a href="offer_registration.php">Book Now</a></center>
    </div>
</div> 
</section>


    <div class="img2">
        <img style="margin-top: 100px; width: 1200px;border-radius: 30px; margin-left: 50px;" src="offer.png">
    </div>

    <center><h1 style="margin-top: 100px; font-size: 35px; font-weight: 900;color: rgb(13, 15, 15);">
        SPECIAL <span style="color: rgb(44, 103, 204);">HOTELS</span></h1></center>
        <center><p style="font-size: 21px; font-weight: 300;color: #74797f;margin-top: 20px;">
            Explore our top Hotels voted by more than 10,000+<br> customers around the world.</p></center> 
            <div class="gallery-wrap">
                <img  style="width: 50px; height: 50px;" src="a2.png" id="backBtn">
                <div class="grllery">
                    <div>
                        <a href="Booking.php" target="blank"><span><img src="hotel 3.jpg"></span></a>
                        <a href="Booking.php" target="blank"><span><img src="hotel 2.webp"></span></a>
                        <a href="Booking.php" target="blank"><span><img src="hotel 6.jpg"></span></a>
                        <a href="Booking.php" target="blank"><span><img src="hotel 7.webp"></span></a>
                        
                    </div>
                    <div>
                    <a href="Booking.php" target="blank"><span><img src="hotel 4.jpg"></span></a>
                    <a href="Booking.php" target="blank"><span><img src="hotel 5.jpg"></span></a>
                    <a href="Booking.php" target="blank"><span><img src="hotel 7.webp"></span></a>
                    <a href="Booking.php" target="blank"><span><img src="hotel 10.jpg"></span></a>
                    </div>
                    <div>
                    <a href="Booking.php" target="blank"><span><img src="hotel 8.jpg"></span></a>
                    <a href="Booking.php" target="blank"><span><img src="hotel 9.jpg"></span></a>
                    <a href="Booking.php" target="blank"><span><img src="hotel 10.jpg"></span></a>
                    <a href="Booking.php" target="blank"><span><img src="hotel 7.webp"></span></a>
                    </div>
                </div>
                <img style="width: 50px; height: 50px;" src="a1.png" id="nextBtn">
            </div>
            <script type="text/javascript">
                let scrollcontainer = document.querySelector(".grllery");
                let backBtn = document.getElementById("backBtn");
                let nextBtn = document.getElementById("nextBtn");
    
                scrollcontainer.addEventListener("wheel", (evt) => {
                    evt.preventDefault();
                    scrollcontainer.scrollLeft  += evt.deltaY;
                });
                nextBtn.addEventListener("click", ()=>{
                    scrollcontainer.style.scrollBehavior = "smooth"
                    scrollcontainer.scrollLeft += 900;
                });
                backBtn.addEventListener("click", ()=>{
                    scrollcontainer.style.scrollBehavior = "smooth"
                    scrollcontainer.scrollLeft -= 900;
                });
            </script> 
           <center><h1 style="margin-top: 100px; font-size: 35px; font-weight: 900;color: rgb(13, 15, 15);">
            CLIENT <span style="color: rgb(44, 103, 204);">REVIEW</span></h1></center> 
            <center><p style="font-size: 21px; font-weight: 300;color: #74797f;margin-top: 20px;">
                Explore our client voted by more than 5,000+<br> customers around the world.</p></center>  
                <div class="container2">
                    <div class="container_left2">
                        <h1>Read what our customer love about us</h1>
                        <p>
                            Over 50+ Destination frim diverse sector consult us to enhance the
                            user experience of there product and services.
                        </p>
                        <p>
                            Tours and travels businesses offer amazing opportunities to customers not only to explore new places but to also gain new life experiences.
                        </p>
                        <a href="client%20review.html" target="blank"><button style="width: 250px;height: 50px;font-size: 18px;color: #ffff;">
                            Read our success stories</button></a>
                    </div>
                    <div class="container_right2">
                        <div class="card2">
                            <img src="1.jpg" alt="user">
                            <div class="card_content2">
                                <span style="font-size: 2rem;color: var(--primary-color);"><i class="ri-double-quotes-l"></i></span>
                                <div class="card-details2">
                                    <p>
                                        I would like to thank you for your service, our journey through India has been an amazing experience
                                         The service was excellent... 
                                    </p>
                                    <h4>- Sagar Naikawade</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card2">
                            <img src="2.jpg" alt="user">
                            <div class="card_content2">
                                <span><i class="ri-double-quotes-l"></i></i></span>
                                <div class="card-details2">
                                    <p>
                                        The trip was excellent. All arrangements were very nice.
                                          Agent, Driver and Hotel and its employee was Good...
                                    </p>
                                    <h4>- Karan Mane</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card2">
                            <img src="3.jpg" alt="user">
                            <div class="card_content2">
                                <span><i class="ri-double-quotes-l"></i></span>
                                <div class="card-details2">
                                    <p>
                                        Thank you very much for all your assistance for my safe trip to manali.
                                         Will contact you again for my future trips.Thanks again...
                                    </p>
                                    <h4>- Nishit Vetal</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer-distributed">
                    <div class="footer-left">
                        <h3>Golden<span>Wings</span></h3>
                        <p class="footer-links">
                            <a href="#">Home</a>
                            |
                            <a href="#">About Us</a>
                            |
                            <a href="#">Contact</a>
                            |
                            <a href="#">Blogs</a>
                            |
                        </p>
                        <p class="footer-company-name">
                            Copyright @ 2023 <strong>Gloden Wings</strong>All rights reserved
                        </p>
                    </div>
                    <div class="footer-center">
                        <div>
                            <i class="fa-solid fa-location-dot"></i>
                            <p><span>Karad</span>Mumbai</p>
                        </div>
                        <div>
                            <i class="fa fa-phone"></i>
                            <p>+91 8855842905</p>
                        </div>
                        <div>
                            <i class="fa fa-envelope"></i>
                            <p><a href="#">goldenwings45@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="footer_right">
                        <p class="footer-company-about">
                            <span>About the company</span>
                        <strong>Golden Wings</strong>is to provide a convenient way for<br> a customer to book hotels, flight, train and bus for<br> tour purposes.
                        </p>
                        <div class="footer-icons">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </footer>  
    

    <script>
        document.addEventListener("DOMContentLoaded", function() {
        const btn = document.getElementById("Profile");
        const container = document.querySelector(".that");
        const close = document.getElementById("cl");

        btn.addEventListener("click", () => {
        container.classList.add("active");
        });

        close.addEventListener("click", () => {
        container.classList.remove("active");
        });
    });
    </script>
    </body>
</html>