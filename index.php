<!--
    Title: Pawsitively Happy Pet Services Website Redesign
    Author: Nicholas Braddock
    School:  Southern Illinois University
    Term: Fall 2022
    Date: 16 Oct 2022
-->
<!DOCTYPE html>
<html lang="en-US">
    <!--Title, Stylesheet, and Meta-->
    <head>
        <title>Pawsitively Happy Pet Services</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Poppins:wght@300&display=swap" rel="stylesheet">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-with, initial-scale=1.0">
        <meta name="keywords" content="Pet Sitting, Pets, Animal Care">
        <meta name="author" content="Nicholas Braddock">
        <link rel="icon" type="image/x-icon" href="images/favicon/favicon.svg">
    </head>
    <body class="index">
        <!--Navigation-->
        <div class="topbar">
        <div class="topbar-image">
                <a href="index.php">
                    <img src="images/logo/logo.png" alt="logo" width="200px">
                </a>
            </div>
            
            <div class="navbar">
                <a href="services.php">Services</a>
                <a href="petPhotoGallery.php">Pet Photo Gallery</a>
                <div class="dropdown">
                    <button class="dropbtn">About Us</button>
                    <div class="dropdown-content">
                        <a href="aboutOurTeam.php">About Our Team</a>
                        <a href="whyChooseUs.php">Why Choose Us?</a>
                        <a href="faq.php">FAQ</a>
                        <a href="joinOurTeam.php">Join Our Team</a>
                        <a href="testimonials.php">Testimonials</a>
                    </div>
                </div>
                <a href="contactUs.php">Contact Us</a>
                <a href="https://www.timetopet.com/portal/phps" target="_blank">Client Portal</a>
            </div>
        </div>
        <!--Section 1 (Visible on Load) - Image with Man and Dog with Intro text-->
        <main class="index">
            <div class="index1Background">
                <div class="index1Text">
                    <h3>
                        Your Friendly Neighborhood
                    </h3>
                    <h1>
                        Pet Sitters
                    </h1>
                </div>
            </div>
            <!--Section 2 - Title, Paragrah, Inquire Button-->
            <div class="indexGreyPadding greyBackground">
                <h2>
                    Striving for a Pawsitively Happy Pet Sitting Experience
                </h2>
                <p>
                    Pet sitting, dog walking, animal waste removal, and more. Our services might be varied, but they all come with the same 
                    promise of quality and dedication to your beloved pets. Our team members are experienced pet lovers with FurBabies of 
                    their own. We offer quick and flexible visits to ensure your pets are always taken care of.
                </p>
                <hr class="red3Line">
                <h3>
                    Request your complementary Quote
                </h3>
                <p>
                    The initial consulataion is free and flexible according to scheduling
                </p>
                <a href="contactUs.html" class="buttonGrey">Inquire Now</a>
            </div>
            <!--Section 3 - Image with Dog and Cat with Quote Over Top-->
            <div class="greyBackground index3Background">
                <div class="index3Text">
                    <h4>
                        "I love animals, somtimes more than people, becuase they don't judge. All they want is love."
                    </h4>
                    <h4>
                        -H.J. Lawson
                    </h4>
                </div>
            </div>
            <!--Section 4 - Our Promise, Button Links for other pages-->
            <div class="indexGreyPadding greyBackground">
                <div class="center">
                    <h2>
                        Our Promise
                    </h2>
                    <p>
                        We never compromise quality for time with your FurBabies and give our clients realistic visit schedules that
                        accomodate their lives. We strive for a truly pawsitive experience and honest customer service.
                    </p>
                </div>
                <hr class="red3Line">
                <!--Line-->
                <!--h2 with button below 3 next to each other-->
                <div class="row">
                    <div class="column3-30">
                        <h2>
                            Our Services
                        </h2>
                        <a href="services.html" class="buttonGrey">Services</a>
                    </div>
                    <div class="column3-30">
                        <h2>
                            Our Pawsitively Happy Pets
                        </h2>
                        <a href="petPhotoGallery.html" class="buttonGrey">Pet Photo Gallery</a>
                    </div>
                    <div class="column3-30">
                        <h2>
                            About Us
                        </h2>
                        <a href="aboutOurTeam.html" class="buttonGrey">Learn More</a>
                    </div>
                </div>
            </div>
        </main>
        <!--Footer - Same on every page-->
        <div class="footer">
            <h2 class="footerh2 footerItems">                    
                Pawsitively Happy Pet Services
            </h2>
            <p class="footerItems">
                <u>Servicing our clients within 15 minutes of:</u>
                <br>
                1001 S. Lincoln Ave.
                <br>
                O'Fallon, IL 62269
            </p>
            <!--Map-->
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3118.8343718382757!2d-89.91354448451868!3d38.58366177962025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x887606bbf5922e0d%3A0xf86e074217721f60!2s1001%20S%20Lincoln%20Ave%2C%20O&#39;Fallon%2C%20IL%2062269!5e0!3m2!1sen!2sus!4v1662761414492!5m2!1sen!2sus" width="80%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="footerItems"></iframe>
            <br>
            <br>
            <div class="footerButtonsLayout">
                <a href="contactUs.html" class="buttonBlue">Inquire Now</a>
                
                <a href="https://www.facebook.com/PawsitivelyHappyPetServices/" target="_blank" class="buttonBlue">Facebook</a>
                
                <a href="https://www.instagram.com/pawsitivelyhappypetservices/" target="_blank" class="buttonBlue">Instagram</a>

                <a href="https://nextdoor.com/pages/pawsitively-happy-pet-services-o-fallon-il/" target="_blank" class="buttonBlue">Nextdoor</a>
            </div>  
        </div>
        <script>
            function myFunction(){
                var x = document.getElementById("myNavbar");
                if (x.className == "navbar") {
                    x.className += "responsive";
                } else {
                    x.className = "navbar";
                }
            }
        </script>
    </body>
</html>