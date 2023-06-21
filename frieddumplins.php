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
        <nav class="nav container">
    <a href="home.php" class="nav__logo">
        <img src="img/logo.png" loading="lazy" alt="logo image" href="home.php">
        Sushi
    </a>

    <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
            <li class="nav__item">
                <a href="home.php" class="nav__link">Home</a>
            </li>
            <li class="nav__item">
                <a href="home.php#about" class="nav__link">About Us</a>
            </li>
            <li class="nav__item">
                <a href="#" class="nav__link" onclick="toggleDropdown(event)">Recipe</a>
                <div id="recipe-dropdown" class="dropdown-menu">
                    <a href="Onigiri.php">Onigiri</a>
                    <a href="Springrolls.php">Spring Rolls</a>
                    <a href="sushirolls.php">Sushi Rolls</a>
                    <a href="frieddumplins.php">Fired Dumplings</a>
                    <a href="ramen.php">Ramen</a>
                </div>
            </li>
            <li class="nav__item">
                <a href="contact.php" class="nav__link">Contact Us</a>
            </li>
        </ul>

        <!-- Close -->
        <div class="nav__close" id="nav-close">
            <i class="ri-close-line"></i>
        </div>

        <img src="img/leaf-branch-4.png" loading="lazy" alt="nav image" class="nav__img-1">
        <img src="img/leaf-branch-3.png" loading="lazy" alt="nav image" class="nav__img-2">
    </div>

    <div class="nav__buttons">
        <!-- the user icon -->
        <a href="index.php" class="nav__link">
            <i class="ri-user-3-fill"></i>
        </a>

        <!-- the change button-->
        <i class="ri-contrast-2-fill change-theme" id="theme-button"></i>

        <!--Toggle-->
        <div class="nav__toggle" id="nav-toggle">
            <i class="ri-apps-2-line"></i>
        </div>
    </div>
</nav>
        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== Recipe ====================-->
            <section class="recipe section" id="recipe">
            <h1 class="recipetitle">Fried Dumplings</h1>
            <div class="recipe__container container grid">
                    <img src="img/popular-fried-dumplings-sprinkled.png" alt=""  loading="lazy" class="recipe__image">
                

                    <div class="recipe__data">
                        <table>
                            <tr>
                                <th>Recipe</th>
                                <th>Ingredients</th>
                            </tr>

                            <tr>
                                <td>1 pound</td>
                                <td>group pork</td>
                            </tr>
                            <tr>
                                <td>1 cup</td>
                                <td>cabbage, finely chopped</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>green onions, finely chopped</td>
                            </tr>
                            <tr>
                                <td>2 cloves</td>
                                <td>garlic, minced</td>
                            </tr>
                            <tr>
                                <td>1 teaspoon</td>
                                <td>ginger, grated</td>
                            </tr>
                            <tr>
                                <td>1 tablespoon</td>
                                <td>soy sauce</td>
                            </tr>
                            <tr>
                                <td>1 tablespoon</td>
                                <td>sesame oil</td>
                            </tr>
                            <tr>
                                <td>1/2 teaspoon</td>
                                <td>salt</td>
                            </tr>
                            <tr>
                                <td>1/4 teaspoon</td>
                                <td>black pepper</td>
                            </tr>
                            <tr>
                                <td>30 - 40 gyoza</td>
                                <td>wrappers</td>
                            </tr>
                            <tr>
                                <td>1/4 cup water</td>
                                <td>water</td>
                            </tr>
                            <tr>
                                <td>3 cup</td>
                                <td>vegetable oil, for frying</td>
                            </tr>
                            <tr>
                                <td>2 tablespoons</td>
                                <td>soy sauce</td>
                            </tr>
                            <tr>
                                <td>2 tablespoons</td>
                                <td>rice vinegar</td>
                            </tr>
                            <tr>
                                <td>1 tablespoon</td>
                                <td>sesame oil</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>green onion, finely chopped</td>
                            </tr>
                            
                        </table>
                    </div>
                   </div>
            </section>


            <!--==================== Steps ====================-->
                <div class="step__container">
                <ol>
                    <li>In a large mixing bowl, combine the ground pork, cabbage, green onions, garlic, ginger, soy sauce, sesame oil, salt, and black pepper. Mix well until all ingredients are evenly incorporated.</li>
                    <li>Take a gyoza wrapper and place about 1 tablespoon of the filling mixture in the center of the wrapper.</li>
                    <li>Moisten the edge of the gyoza wrapper with a little water using your finger. Fold the wrapper in half to create a half-moon shape. Pinch and pleat the edges together to seal the dumpling. Repeat this process with the remaining wrappers and filling.</li>
                    <li>Heat a large non-stick skillet over medium heat. Add 1-2 tablespoons of vegetable oil to the skillet.</li>
                    <li>Place the gyoza in the skillet in a single layer, flat side down. Cook for 2-3 minutes until the bottoms are golden brown.</li>
                    <li>Pour 1/4 cup of water into the skillet, immediately cover the skillet with a lid, and let the gyoza steam for about 5 minutes or until the water evaporates.</li>
                    <li>Remove the lid and continue cooking the gyoza for another 2-3 minutes until the bottoms become crispy again.</li>
                    <li>Remove the gyoza from the skillet and repeat the cooking process with the remaining gyoza.</li>
                    <li>In a small bowl, prepare the dipping sauce by combining soy sauce, rice vinegar, sesame oil, and chili oil (if using). Stir well to combine.</li>
                    <li>Serve the gyoza hot with the dipping sauce on the side. Garnish with chopped green onions.</li>
                </ol>
                </div>
                

            <!--==================== Feedback ====================-->
            <section class="feedback section" id="feedback">
                
            </section>

            
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
            <?php include "php/footer.php";?>
        </footer>

        <!--========== SCROLL UP ==========-->


        <!--=============== SCROLLREVEAL ===============-->
        <script src=""></script>

        <!--=============== MAIN JS ===============-->
        <script src="js/main.js"></script>
    </body>
</html>