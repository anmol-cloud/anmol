<html>
<head>
    <link rel="stylesheet" href="site css/booking form.css">
    <script src="site java/booking.js"></script>
        <link rel="stylesheet"href="css/all.css">
</head>
<body>
    <div id="navbar">
        <span class="s1"><b>A.</B></SPAN>
        <ul class="u1">
            <b>
       <li class="nav_link"><a href="indexmy.php#home-section">Home</a></li>
       <li class="nav_link"><a href="indexmy.php#services-section-main">Services</a></li>
       <li class="nav_link"><a href="indexmy.php#about-us-section">About us</a></li>
       <li class="nav_link"><a href="indexmy.php#contact-us-section">Contact us</a></li>
       <span class="s2"><b><a href="booking form.php">Book now</A></B></SPAN>
        </b>
        </ul>
    </div>
    <div class="booking-picture">
        <img src="images/back.jpeg" height="100%" width="100%">
    </div>
    <div class="book-main-div">
    <div class="book-form-div">
        <form action="booking php.php" method="POST">
            <p> <b> Name</b></p><input class="book-input1" type="text" placeholder="Your name" name="Name">
            <input class="book-input11" type="text" placeholder="surname" name="Sur_name">
            <p> <b>Phone number</b></p>
            <input class="book-input2" type="tel" pattern="[0-9]{2}-[0-9]{5}-[0-9]{5}" placeholder="91-*****-*****" name="Number1">
            <input class="book-input21" type="tel" pattern="[0-9]{2}-[0-9]{5}-[0-9]{5}" placeholder="91-*****-*****" name="Number2">
            <p> <b>E-mail ID</b></p>
            <input class="book-input3" type="text" placeholder="Your E-mail" name="E_mail_ID">
            <p> <b>Site data</b></p>
            <textarea cols="80" rows="5" placeholder="Message" name="Site_data"></textarea>
            <p> <b>Price</b></p>
            <input class="book-input4"type="text" value="400" readonly name="Price">
            <br>
            <input class="book-submit" type="Submit">
            </form>
        </div>
    </div>
    <div class="end-section-d22"> 
        <div class="d22d21"><h1 class="d22d21h">About A.</h1><p class="d22d21p">Our most unhappy customers are our greatest source of learning.</p>
            <div class="d22d211"><i class="fa-brands fa-twitter tw "></i>&nbsp;&nbsp;&nbsp;<i class="fa-brands fa-facebook-f fa "></i>&nbsp;&nbsp;&nbsp;<i class="fa-brands fa-instagram in "></i></div>
        </div> 
        <div class="d22d22">
            <h1 class="d22d22h">Information</h1>
            <p class="d22d22p">
                <i class="fa-solid fa-arrow-right long "onclick="about()"></i>&nbsp;&nbsp;General Enquiry<br>
                <a href="booking form.php"><i class="fa-solid fa-arrow-right long "></i>&nbsp;&nbsp;Booking<br></a>
                <i class="fa-solid fa-arrow-right long "onclick="about()"></i>&nbsp;&nbsp;Privacy<br>
                <a href="indexmy.php#contact-us-section"><i class="fa-solid fa-arrow-right long "></i>&nbsp;&nbsp;Call Us</p>
        </div> 
        <div class="d22d24">
            <h1 class="d22d24h">Have a Questions</h1>
            <span class="d22d24s"><i class="fa-solid fa-location-dot ld"></i><p class="d22d24p">Palampur<br> Himachal pradesh, india<br></p></span>
            <p class="d22d24p1"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+91 8219678364<br>
                <i class="fa-solid fa-paper-plane "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;anmols20202@gmail.com<br>
        </div>
        <div class="d22d3"><p class="d22d3p">Copyright ©2023 All rights reserved | This template is made with &hearts;by anmol</p></div>
    </div>
</body>
</html>