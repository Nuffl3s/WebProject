<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <img src="img/home-sushi-rolls.png" alt="" class="home__image">
                

                    <div class="home__data">
                        <h1 class="home__title">
                            TastyTales
                            <div>
                                <img src="img/narutomaki1.png" loading="lazy" alt="home image">
                                Sushi Food
                            </div>
                        </h1>

                        <p class="home__description">
                            Your go-to destination for mouth-watering sushi recipes and cooking tips. 
                            Discover endless culinary inspiration and elevate your sushi-making skills with our easy-to-follow recipes.
                        </p>

                        <a href="#" class="button">
                            View Recipes <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>

                <img src="img/leaf-branch-2.png" loading="lazy" alt="home image" class="home__leaf1">
                <img src="img/leaf-branch-4.png" loading="lazy" alt="home image" class="home__leaf2">
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                        <span class="section__subtitle">About Us</span>
                        <h2 class="section__title about__title">
                            <div>
                                We Provide
                                <img src="img/rice.png" loading="lazy" alt="about image">
                            </div>
                            Healthy Food
                        </h2>
                        
                        <p class="about__discription">
                            Welcome to our sushi shop! 
                            We are passionate about bringing you the freshest 
                            and most delicious sushi in town. Our chefs carefully 
                            select the highest quality ingredients to create a menu 
                            that offers a variety of traditional and modern sushi rolls, 
                            sashimi, and other Japanese-inspired dishes.
                        </p>
                    </div>
                   <img src="img/about-ramen.png" loading="lazy" alt="about image" class="about__image">
                </div>

                <img src="img/leaf-branch-1.png" loading="lazy" alt="about image" class="about__leaf">
            </section>

            <!--==================== POPULAR ====================-->
            <section class="popular section" id="popular">
                <span class="section__subtitle">The best Food</span>
                <h2 class="section__title">Popular Dishes</h2>

                <div class="popular__container container grid">
                    <article class="popular__card">
                        <img src="img/popular-onigiri.png" loading="lazy" alt="popular image" class="popular__img">
                        
                        <h3 class="popular__name">Onigiri</h3>
                        <span class="popular__description">Japanese Dish</span>

                        <button id="repbutton1" class="popular__button" href="../Onigiri.php">
                            <i class="ri-pages-line"></i>
                        </button>
                    </article>

                    <article class="popular__card">
                        <img src="img/popular-spring-rols.png" loading="lazy" alt="popular image" class="popular__img">
                        
                        <h3 class="popular__name">Spring Rolls</h3>
                        <span class="popular__description">Japanese Dish</span>

                        <button id="repbutton2" class="popular__button" href="../Springrolls.php">
                            <i class="ri-pages-line"></i>
                        </button>
                    </article>

                    <article class="popular__card">
                        <img src="img/popular-sushi-rolls.png" loading="lazy" alt="popular image" class="popular__img">
                        
                        <h3 class="popular__name">Sushi Rolls</h3>
                        <span class="popular__description">Japanese Dish</span>

                        <button id="repbutton3" class="popular__button" href="../sushirolls.php">
                            <i class="ri-pages-line"></i>
                        </button>
                    </article>
                    
                    <article class="popular__card">
                        <img src="img/popular-fried-dumplings-sprinkled.png" loading="lazy" alt="popular image" class="popular__img">
        
                        <h3 class="popular__name">Fried Dumplings</h3>
                        <span class="popular__description">Japanese Dish</span>

                        <button id="repbutton4" class="popular__button" href="../frieddumplins.php">
                            <i class="ri-pages-line"></i>
                        </button>
                    </article>
                </div>
            </section>

            <!--==================== RECENTLY ====================-->
            <section class="recently section" id="recently">
                <div class="recently__container container grid">
                    <div class="recently__data">
                        <span class="section__subtitle">Recently Added</span>
                        <h2 class="section__title">
                            Japanese Ramen
                        </h2>

                        <p class="recently__description">
                            the aroma alone is enough to make your mouth water. 
                            Tender noodles are nestled in the flavorful broth, just waiting to be slurped up. 
                            And then, there's the star of the show: crispy bacon and a perfectly cooked egg, 
                            adding an irresistible smoky flavor and creamy texture to each bite.

                            
                        </p>

                        <a href="../ramen.php" class="button">
                            View Recipe Now
                            <i class="ri-search-eye-line"></i>
                        </a>
                        
                    </div>

                    <img src="img/recently_ramen.png" loading="lazy" alt="recently image" class="recently__img">
                </div>
                <img src="img/leaf-branch-2.png" loading="lazy" alt="recently image" class="recently__leaf-1">
                <img src="img/leaf-branch-3.png" loading="lazy" alt="recently image" class="recently__leaf-2">
            </section>

            <!--==================== NEWSLETTER ====================-->
            <section class="newsletter section">
                <div class="newsletter__contaier container">
                    <div class="newsletter__content grid">
                        <img src="img/newsletterimg.png" loading="lazy" alt="newsletter image" class="newsletter__img">

                        <div class="newsletter__data">
                            <span class="section__subtitle">Newsletter</span>
                            <h2 class="section__title">
                                Will add more soon
                            </h2>

                            <form action="" class="newsletter__form">
                                <input type="email" placeholder="Enter email" class="newsletter__input">

                                <button class="button newsletter__button">
                                    Subscribe <i class="ri-send-plane-line"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
            <?php include "php/footer.php";?>
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line"></i>
        </a>
        <!--=============== MAIN JS ===============-->
        <script src="js/main.js"></script>
    </body>
</html>