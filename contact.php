<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="img/title logo.png" loading="lazy" type="image/x-icon">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

         <!--=============== FONTS ===============-->
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Lora:wght@500;600&family=Poppins:wght@400;500&display=swap" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="css/css.css">

        <title>Sushi</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <?php include "php/header.php";?>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== Details ====================-->
            <section class="details section" id="details">
		<img src="img/leaf-branch-4.png" loading="lazy" alt="nav image" class="img-1">
		<img src="img/leaf-branch-1.png" loading="lazy" alt="nav image" class="img-2">
                <div class="details__container contianer grid">
                    <div class="details__data">
                        <div class="information">
                            <h2 class="contitle">CONTACT US</h2>
                            <div class="info__data">
                                <div class="call">
                                    <h2><i class="ri-phone-line"></i>Call Us</h2>
                                    <p>+639123456789</p>
                                </div>
                                <div class="email">
                                    <h2><i class="ri-mail-line"></i>Email</h2>
                                    <p>mail@gmail.com</p>
                                </div>
                                <div class="Location">
                                    <h2><i class="ri-map-pin-line"></i>Location</h2>
                                    <p>Cagayan de Oro, 9000 Misamis Oriental</p>
                                </div>
                                <div class="BusinessHours">
                                    <h2><i class="ri-time-line"></i>Business Hours</h2>
                                    <p>Mon - Fri ..... 10 am - 8 pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="#">
                        <div class="inputs">
                            <div class="input__grid">
                                <div class="mail">
                                    <label for="Email">Email</label>
                                    <input type="email" placeholder="Enter your email address" id="useremail">
                                </div>
                                <div class="name">
                                    <label for="username">Name</label>
                                    <input type="text" placeholder="Enter your Name">
                                </div>
                            </div>
                            <div class="address">
                                <label for="useraddresss">Address</label>
                                <input type="text" placeholder="Enter your Address">
                            </div>
                            <div class="feedback">
                                <label for="message">Message</label>
                                <textarea name="message" placeholder="Enter your massage" id="message" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <a href="#" class="conbutton">
                            Send  <i class="ri-mail-send-line"></i>
                        </a>
                    </form>
                </div>


            </section>
        </main>
        <!--=============== MAIN JS ===============-->
        <script src="js/main.js"></script>
    </body>
</html>