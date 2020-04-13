<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- Responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- IE Compatibility meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Description meta -->
        <meta name="description" content="...">
        <!-- Author meta -->
        <meta name="author" content="Bootstrap Temple">

        <!-- Page Title -->
        <title>homepage</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href=" favicon.ico">

        <!-- Bootstrap -->
        <link rel="stylesheet" href=" bootstrap.min.css">
        <!-- Custom font icons -->
        <link rel="stylesheet" href="https://file.myfontastic.com/6AeAYiqp5KBjSiZ2tE8WJW/icons.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/ font-awesome.min.css">
        <!-- Slider -->
        <link rel="stylesheet" href=" slider.min.css">
        <!-- Lightbox Pop up -->
        <link rel="stylesheet" href=" lightbox.min.css">
        <!-- Datepicker -->
        <link rel="stylesheet" href=" datepicker.min.css">
        <!-- Datepicker -->
        <link rel="stylesheet" href=" timepicki.min.css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href=" owl.carousel.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href=" style.default.css">
        <!-- Modernizr -->
        <script type="text/javascript" src=" modernizr.custom.79639.min.js"></script>
    </head>
    <body>
    <?php
$servername = "localhost";
$dbusername = "root";
$password = "";
$dbname="turington";
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$college=$_POST['college'];/////////index1=database,primary1=table

// Create connection
$conn = new mysqli($servername, $dbusername, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$query = "INSERT INTO registrationform (name, email, contact,college) VALUES
    ('" . $_POST["name"] . "', '" . $_POST["email"] . "', '" . $_POST["contact"] . "', '" . $_POST["college"] . "')";
    if ($conn->query($query)===TRUE){
      echo "Record!!";
    }
    else {
      echo "Error:" .$query ."<br>" . $conn->error;
    }

    $conn->close();

?>



        <div class="page-holder">
            <!-- Navbar -->
            <header class="header">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header"><a href="index.html" class="navbar-brand"><img src="logo55.png" alt="Turington"></a>
                            <div class="navbar-buttons">
                                <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
                            </div>
                        </div>
                        <div id="navigation" class="collapse navbar-collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#hero">HOME</a></li>
                                <li><a href="#about">ABOUT</a></li>
                                <li><a href="#services">SPEAKERS</a></li>
                                <li><a href="#dishes">ATTRACTIVE</a></li>
                                <li><a href="#offers">SPONSORS</a></li>
                                <li><a href="#menu">SCHEDULE</a></li>
                                
                                <li><a href="#gallery">GLIMPSES</a></li>
                                <li><a href="#booking">REGISTER</a></li>
                                <li><a href="#contact">CONTACT US</a></li>
                                
                            </ul>
                            <a href="#" class="btn navbar-btn btn-unique hidden-sm hidden-xs" id="open-reservation">Register</a>
                        </div>
                    </div>
                </nav>
            </header><!-- End Navbar -->



            <!-- Hero Section -->
            <section id="hero" class="hero">
                <div id="slider" class="sl-slider-wrapper">

                    <div class="sl-slider">
                        <!-- slide -->
                        <div class="sl-slide bg-1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                            <div class="sl-slide-inner" style="background-image: url(logo9.jpg);">
                                <div class="container">
                                    <h2>Ramanujan College<span class="text-primary">Dept. of Computer Science</span></h2>
                                    <h1>TURINGTON</h1>
                                    <p>An elegant technical fest <a href="https://bootstraptemple.com/" target="_blank">University of Delhi</a>.</p>
                                </div>
                            </div>
                        </div>
                        <!-- slide -->
                        <div class="sl-slide bg-2" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                            <div class="sl-slide-inner" style="background-image: url(logo14.jpg);">
                                <div class="container">
                                    <h1></h1>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <!-- slide -->
                        <div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                            <div class="sl-slide-inner" style="background-image: url(logo12.jpg);">
                                <div class="container">
                                    <h2>Visit <span class="text-primary">Turington</span></h2>
                                    <h1>Hurry up!! Do registeration</h1>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End sl-slider -->

                    <!-- slider pagination -->
                    <nav id="nav-dots" class="nav-dots">
                        <span class="nav-dot-current"></span>
                        <span></span>
                        <span></span>
                    </nav>

                    <!-- scroll down btn -->
                    <a id="scroll-down" href="#about" class="hidden-xs"></a>

                    <!-- social icons menu -->
                    <div class="social">
                        <div class="wrapper">
                            <ul class="list-unstyled">
                                <li><a href="https://www.facebook.com/turington/">
         <img src="fb.png" class="fb" height="30px"></img><br></a></li><li>
         <a href="https://twitter.com/Turingtonreboot">
         <img src="download.jpg" height="30px" class="twit"></img></a>

        </li>
                            </ul>
                            <span>Follow us on</span>
                        </div>
                    </div>
                </div><!-- End slider-wrapper -->
            </section><!-- End Hero Section -->



            <!-- Details -->
            
            <!-- End Details-->


            <!-- About Section -->             <section id="about"
class="about">                 <div class="container text-center">
<header>                         <h2>About Turington</h2>
<h3>Check our story</h3>                     </header>                     <p
class="lead">Named after the greatest computer scientist of all times, Alan
Turing, Turington is an inter college fest organized by the Department of Computer Science,
Ramanujan College (University of Delhi). Turington is about showing
off the research and innovations. It is about promoting the technology on the
largest possible scale to the common in the best possible way. It is about
celebration, also promotion of hard-work. We invite people, scholars and
students from all fields to visit as audience.</p></div>
</section>             <!-- End About Section -->


            <!-- Services Section -->
            <section id="services" class="services">
                <div class="container text-center">
                    <header>
                        <h2>Our Esteemed Personalities </h2>
                        <h3>Our Specialities</h3>
                    </header>

                    <div class="row">
                        <!-- item -->
                        <div class="col-sm-4 service">
                            <img src="img1.jpg" height="400">
                            <div class="text">
                                <h4>Dr.Nikhil Rajput</h4>
                                <p>PHD holder in Computer and System Sciences and working as an Professor in Computer science Department at Ramanujan College ,University of Delhi, and has intrest in Digital Electronics,Information theory,image processing and computer networks.</p>
                            </div>
                        </div>

                        <!-- item -->

                                            </div>
                </div>
            </section>
            <!-- End Services Section -->


            <!-- App Section -->
            <!-- End App Section -->



            <!-- Dishes Section -->
            <section id="dishes" class="dishes">
                <div class="container text-center">
                    <header>
                        <h2>Signature Thesaurus</h2>
                        <h3>Tricky and excited events are waiting for you.</h3>
                    </header>
                    <!-- Set up your HTML -->
                    <div class="owl-carousel owl-theme">
                        <!-- item -->
                        <div class="dish">
                            <div class="profile">
                                <img src="img4.jpg" class="img-responsive"  alt="Turington">
                                                            </div>
                            <div class="text">
                                <h4>Back Track</h4>
                                <p>Reverse Coding</p>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="dish">
                            <div class="profile">
                                <img src="img17.jpg" class="img-responsive"  alt="Turington">
                                                            </div>
                            <div class="text">
                                <h4>Judge me if u can</h4>
                                <p>Quiz</p>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="dish">
                            <div class="profile">
                                <img src="img 18.jpg" class="img-responsive"  alt="Turington">
                                                            </div>
                            <div class="text">
                                <h4>Tech-Tambola</h4>
                                <p>Recommeded</p>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="dish">
                            <div class="profile">
                                <img src="extempore.png" class="img-responsive"  alt="Turington">
                                
                            </div>
                            <div class="text">
                                <h4>Extempore</h4>
                                <p>with lots of excitement</p>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="dish">
                            <div class="profile">
                                <img src="nfs.jpg" class="img-responsive"  alt="Turington">
                                
                            </div>
                            <div class="text">
                                <h4>Lan Gaming</h4>
                                <p>Increase your craziness</p>
                            </div>
                        </div>

                        <!-- item -->
                        <div class="dish">
                            <div class="profile">
                                <img src="tek.jpg" class="img-responsive"  alt="Turington">
                                                            </div>
                            <div class="text">
                                <h4>Tekken 3</h4>
                                <p>take gon as a key player</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Dishes Section -->


            <!-- Offers Section -->
            <section id="offers" class="offers">
                <div class="container text-center">

                    <header>
                        <h2>Our Sponsors and media partners</h2>
                        <h3>Buddies</h3>
                    </header>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="item">
                               
                                <div class="profile">
                                    <img src="spo.png"  alt="Turington" class="img-responsive">
                                </div>
                                <div class="text">
                                    <h4>Ramanujan College</h4>
                                    <p class="after text-primary text-large"></p>
                                    <p class="before text-muted text-large"></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="item">
                               
                                <div class="profile">
                                    <img src="spo2.jpg"  alt="Turington" class="img-responsive">
                                </div>
                                <div class="text">
                                    <h4>DU Beats</h4>
                                    <p class="after text-primary text-large"></p>
                                    <p class="before text-muted text-large"></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="item">
                               
                                <div class="profile">
                                    <img src="spo3.jpg"  alt="Turington" class="img-responsive">
                                </div>
                                <div class="text">
                                    <h4>Ramanujan college</h4>
                                    <p class="after text-primary"></p>
                                    <p class="before text-muted"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Offers Section -->


            <!-- Menu Section -->
            <section id="menu" class="menu">
                <div class="container">
                    <header class="text-center">
                        <h2>Our Thesaurus</h2>
                        <h3>Our most popular menu</h3>
                    </header>

                    <div class="menu">
                        <!-- Tabs Navigatin -->
                        <ul class="nav nav-tabs text-center has-border" role="tablist">
                            <li role="presentation" ><a href="#" aria-controls="breakfast" role="tab" data-toggle="tab">DAY1</a></li>
                            
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">

                            <!-- Breakfast Panel -->
                            <div role="tabpanel" class="tab-pane active" id="breakfast">
                                <div class="row">
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item recommended has-border clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Ceremony</h5>
                                                <p>10:00 AM</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary"></strong>
                                                <span class="text-medium"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item recommended has-border clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Venturia</h5>
                                                <p>11:30 AM</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary"></strong>
                                                <span class="text-medium"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item recommended has-border clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Judge me if you can(quiz)</h5>
                                                <p>1:30 PM</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary"></strong>
                                                <span class="text-medium"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item recommended has-border clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Web Mania</h5>
                                                <p>2:30 PM</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary"></strong>
                                                <span class="text-medium"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item recommended has-border clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Rubik's Cube</h5>
                                                <p>3:30 PM</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary"></strong>
                                                <span class="text-medium"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item recommended has-border clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Sudoko</h5>
                                                <p>4:00 PM</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary"></strong>
                                                <span class="text-medium"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <!-- item -->
                                    
                                    <!-- item -->
                                    
                                   
                                    </div>
                                </div>
                            </div><!-- End Breakfasant Panel-->
                             <ul class="nav nav-tabs text-center has-border" role="tablist">
                            <li role="presentation" ><a href="#" aria-controls="breakfast" role="tab" data-toggle="tab">DAY2</a></li>
                            
                        </ul>
                         <div class="tab-content">

                            <!-- Breakfast Panel -->
                            <div role="tabpanel" class="tab-pane active" id="breakfast">
                                <div class="row">
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item recommended has-border clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Back Track</h5>
                                                <p>11:00 AM</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary"></strong>
                                                <span class="text-medium"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item recommended has-border clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Lan Gaming</h5>
                                                <p>1:00 PM</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary"></strong>
                                                <span class="text-medium"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item recommended has-border clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Mock Cid</h5>
                                                <p>3:00 AM</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary"></strong>
                                                <span class="text-medium"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- item -->
                                    <div class="col-sm-6">
                                        <div class="menu-item recommended has-border clearfix">
                                            <div class="item-details pull-left">
                                                <h5>Prom</h5>
                                                <p>5:00 AM</p>
                                            </div>
                                            <div class="item-price pull-right">
                                                <strong class="text-large text-primary"></strong>
                                                <span class="text-medium"></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- item -->
                                    
                                    </div>
                                </div>
                            </div><!-- End Breakfasant Panel-->
                       

                            <!-- lunch Panel -->
                          </div>
                    </div>
                </div>
            </section>
            <!-- End Menu Section -->


            <!-- Events Section -->
            

            <!-- Gallery Section -->
            <section id="gallery" class="gallery">
                <div class="container text-center">
                    <header>
                        <h2>Our Gallery</h2>
                        <h3>Discover the photo gallery</h3>
                    </header>

                    <div class="gellery">
                        <div class="row">
                            <!-- Item -->
                            <div class="col-md-3 col-sm-4 col-xs-6 col-xs-6 col-custom-12">
                                <div class="item">
                                    <img src="g1.jpg" alt="image">
                                    <a href="g1.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                        <span class="icon-search"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- Item -->
                            <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                                <div class="item">
                                    <img src="g2.jpg" alt="image">
                                    <a href="g2.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                        <span class="icon-search"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- Item -->
                             <!-- Item -->
                            <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                                <div class="item">
                                    <img src="g3.jpg" alt="image">
                                    <a href="g3.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                        <span class="icon-search"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- Item -->
                            <!-- Item -->
                            <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                                <div class="item">
                                    <img src="g4.jpg" alt="image">
                                    <a href="g4.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                        <span class="icon-search"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- Item -->
                            <!-- Item -->
                            <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                                <div class="item">
                                    <img src="g5.jpg" alt="image">
                                    <a href="g5.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                        <span class="icon-search"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- Item -->
                            <!-- Item -->
                            <div class="col-md-3 col-sm-4 col-xs-6 col-custom-12">
                                <div class="item">
                                    <img src="g6.jpg" alt="image">
                                    <a href="g6.jpg" data-lightbox="image-1" data-title="Image Caption" class="has-border">
                                        <span class="icon-search"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- Item -->
                            <!-- Item -->
                            
                        </div>
                    </div>
                </div>
            </section>


            <!-- Booking Section -->
            <section id="booking" class="booking">
                <div class="container text-center">
                    <header>
                        <h2>Don't skip this chance</h2>
                        <h3>Enjoy your day with Turington @Ramanujun College</h3>
                    </header>

                    <div class="row">
                        <div class="form-holder col-md-10 col-md-push-1 text-center">
                            <div class="ribbon">
                                <i class="fa fa-star"></i>
                            </div>

                            <h2>Register</h2>
                            <h3>Book your day</h3>

                            <form id="booking-form" method="POST" action="">
                                <div class="row">
                                    <div class="col-md-10 col-md-push-1">
                                        <div class="row">
                                            <label for="name" class="col-sm-6 unique">Name
                                                <input name="name" type="text" id="name" required>
                                            </label>
                                            <label for="email" class="col-sm-6 unique">Email
                                                <input name="email" type="email" id="email" required>
                                            </label>
                                            <label for="contact" class="col-sm-6 unique">Contact
                                                <input name="contact" type="contact" id="contact" required>
                                            </label>
                                            <label for="college" class="col-sm-6 unique">College/Institution
                                                <input name="college" type="text" id="college" required>
                                            </label>
                                            
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn-unique">Register Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Booking Section -->


            <!-- End Booking Section -->
            <section id="contact" class="contact">
                <div id="map"></div>
                <div class="container text-center">
                    <div class="form-holder">
                        <header>
                            <h2>Contact Us</h2>
                            <h3>Feel free to contact us</h3>
                        </header>

                        <form method="POST" action="" id="contact-form">
                            <div class="row">
                                <label for="user-name" class="col-sm-6 unique">Name
                                    <input type="text" name="username" id="user-name" required>
                                </label>
                                <label for="user-email" class="col-sm-6 unique">Email
                                    <input type="email" name="useremail" id="user-email" required>
                                </label>
                                <label for="message" class="col-sm-12 unique">Your Message
                                    <textarea name="message" id="message" required></textarea>
                                </label>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn-unique" id="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- End Booking Section -->


            <!-- Footer -->
            <footer id="mainFooter" class="mainFooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 brief">
                            <div class="header">
                            <h6>TURINGTON</h6>
                        
                            </div>
                            <p>
This is an  event that is going to be held in <a href="https://www.google.co.in/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=0ahUKEwj8yae9kd_RAhXEwI8KHWm5CxUQFggbMAA&url=http%3A%2F%2Frcdu.in%2F&usg=AFQjCNHp4zbmk_AvfqrzgTe1xI05hoORNg&sig2=yVXi6NL6BdKZsfMqQzz8vQ">RAMANUJAN COLLEGE.</a> We are sure this would be your unforgetable moment of 
 your life.You will
get a change to prove yourself in this competitive era.We suppose you are
not going to miss this chance.</p></div>

                        <div class="col-md-4 contact">
                            <div class="header">
                                <h6>CONTACT</h6>
                            </div>
                            <ul class="contact list-unstyled">
                                <li><span class="icon-map text-primary"></span>Kalkaji,Near Deshbandhu College,<br>&nbsp &nbsp &nbsp New Delhi,Delhi 110019</li>
                                <li><span class="icon-mail text-primary"></span>turingtonreboot@gmail.com</li>
                                
                                
                            </ul>
                        </div>

                        <div class="col-md-4 newsletter">
                            <div class="header">
                                <h6>BUNKER</h6>
                            </div>
                            <p> Department of Computer Science<br>
        <a href="https://www.google.co.in/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=0ahUKEwj8yae9kd_RAhXEwI8KHWm5CxUQFggbMAA&url=http%3A%2F%2Frcdu.in%2F&usg=AFQjCNHp4zbmk_AvfqrzgTe1xI05hoORNg&sig2=yVXi6NL6BdKZsfMqQzz8vQ">Ramanujan College,</a><a href="https://www.google.co.in/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=0ahUKEwjKlr6Cwt_RAhVDK48KHQSEBlAQFggcMAA&url=http%3A%2F%2Fdu.ac.in%2F&usg=AFQjCNH1jGKXdbRIVwtdDLApW5EkHH8unA&sig2=nCpb6dVt-0-4hy8oSGykBw" >University Of Delhi,</a><br>
        Kalkaji,<br>New Delhi-110019<br>
        India.
    </p>
                            
                        </div>
                    </div>

                    <ul class="social list-unstyled list-inline">
                        <li><a href="https://twitter.com/Turingtonreboot">
         <img src="download.jpg" height="30px" class="twit"></img></li>
                        <li><a href="https://www.facebook.com/turington/">
         <img src="fb.png" class="fb" height="30px"></img><br>
         </li>
                    </ul>
                </div>

                <div class="copyrights">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-5">
                                <ul class="list-unstyled list-inline">
                                    <li><a href="#">Policy Privacy</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>

                            <div class="col-sm-7">
                                <p>&copy;Turington 2017.<a href="https://bootstraptemple.com/" target="_blank"></a></p>
                                <!-- Please do not remove the backlink to us unless you have purchased the attribution-free license at https://bootstraptemple.com. It is part of the license conditions. Thanks for understanding :) -->
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->

            <!-- scroll top btn -->
            <div id="scrollTop" class="btn-unique">
                <i class="fa fa-angle-up"></i>
            </div><!-- end scroll top btn -->


            <!-- moadal booking form -->
            <div class="reservation-overlay hidden-sm hidden-xs">
                <section id="reservation-modal" class="reservation-modal">
                    <div id="close"><i class="icon-close"></i></div>

                    <div class="container">
                        <div class="row">
                            <div class="form-holder col-md-12 text-center">
                                <h2>Register</h2>
                                <h3>Book your day now</h3>

                                <form id="booking-form-alternative" method="POST"  action="">
                                    <div class="row">
                                        <div class="col-md-push-1 col-sm-10">
                                            <div class="row">
                                                <label for="cname" class="col-sm-6 unique">Name
                                                    <input name="clientname" type="text" id="cname" required>
                                                </label>
                                                <label for="cemail" class="col-sm-6 unique">Email
                                                    <input name="clientemail" type="email" id="cemail" required>
                                                </label>
                                                <label for="ccollege" class="col-sm-6 unique">College/Institution
                                                    <input name="cclientcollege" type="text" id="cnumber" required>
                                                </label>
                                                <label for="ccontact" class="col-sm-6 unique">Contact
                                                    <input name="clientcontact" type="text" id="cnumber" required>
                                                </label>
                                                
                                                <div class="col-sm-12">
                                                    <button type="submit" class="btn-unique">Register Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div><!-- end modal booking form -->
        </div>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src=" bootstrap.min.js"></script>
        <script src=" jquery.ba-cond.min.js"></script>
        <script src=" jquery.slitslider.min.js"></script>
        <script src=" owl.carousel.min.js"></script>
        <script src=" lightbox.min.js"></script>
        <script src=" datepicker.min.js"></script>
        <script src=" datepicker.en.min.js"></script>
        <script src=" timepicki.min.js"></script>
        <script src=" jquery.validate.min.js"></script>
        <script src=" smooth.scroll.min.js"></script>
        <script type="text/javascript" src=""></script>
        <script src=" map.min.js"></script>
        <script src=" script.js"></script>
    </body>
</html>
