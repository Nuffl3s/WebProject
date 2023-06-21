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
    <a href="#" class="nav__logo">
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
            <h1 class="recipetitle">Sushi Rolls</h1>
            <div class="recipe__container container grid">
                    <img src="img/popular-sushi-rolls.png" alt="" loading="lazy" class="recipe__image">
                

                    <div class="recipe__data">
                        <table>
                            <tr>
                                <th>Recipe</th>
                                <th>Ingredients</th>
                            </tr>

                            <tr>
                                <td>2 cups</td>
                                <td>Japanese short-grain sushi rice</td>
                            </tr>
                            <tr>
                                <td>4 tablespoons</td>
                                <td>rice vinegar</td>
                            </tr>
                            <tr>
                                <td>2 tablespoons</td>
                                <td>sugar</td>
                            </tr>
                            <tr>
                                <td>1 teaspoon</td>
                                <td>salt</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>nori sheets</td>
                            </tr>
                            <tr>
                                <td>250 grams</td>
                                <td>Fresh raw fish</td>
                            </tr>
                            <tr>
                                <td>3 tablespoons</td>
                                <td>Soy sauce</td>
                            </tr>
                            <tr>
                                <td>3 tablespoons</td>
                                <td>pickled ginger</td>
                            </tr>
                            <tr>
                                <td>3 tablespoons</td>
                                <td>wasabi</td>
                            </tr>
                        </table>
                    </div>
                   </div>
            </section>


            <!--==================== Steps ====================-->
                <div class="step__container">
                <ol>
                    <li>Cook the sushi rice: Rinse the rice in cold water until the water runs clear. Cook the rice according to the package instructions or using a rice cooker. Once cooked, transfer the rice to a large bowl and let it cool slightly.</li>
                    <li>Prepare the sushi vinegar: In a small saucepan, combine the rice vinegar, sugar, and salt. Heat the mixture over low heat until the sugar and salt dissolve. Remove from heat and let the vinegar mixture cool.</li>
                    <li>Season the rice: Pour the sushi vinegar mixture over the cooked rice. Using a wooden spatula, gently fold and mix the rice to evenly distribute the vinegar. Be careful not to overmix and mash the rice. Let the seasoned rice cool completely.</li>
                    <li>Prepare the sushi fillings: Slice the fish, avocado, cucumber, carrot, and any other desired fillings into long, thin strips.</li>
                    <li>Assemble the sushi rolls:
                        <ul>
                        <li><span class="arrow">-></span> Place a bamboo sushi mat on a clean surface. Put a sheet of nori on top of the mat.</li>
                        <li><span class="arrow">-></span> Moisten your hands with water to prevent the rice from sticking. Take a handful of sushi rice and spread it evenly over the nori, leaving a small border at the top edge.</li>
                        <li><span class="arrow">-></span> Arrange your desired fillings horizontally in the center of the rice.</li>
                        <li><span class="arrow">-></span> Begin rolling the sushi by lifting the edge of the mat closest to you, while holding the fillings in place with your fingers. Roll the mat tightly away from you, applying gentle pressure to shape the roll.</li>
                        <li><span class="arrow">-></span> Wet the top border of the nori sheet with a bit of water to seal the roll.</li>
                        <li><span class="arrow">-></span> Repeat the process with the remaining nori sheets and fillings.</li>
                        </ul>
                    </li>
                    <li>Slice and serve: Using a sharp knife, slice each sushi roll into bite-sized pieces. Wipe the knife with a damp cloth between each slice to keep it clean and prevent sticking. Arrange the sushi rolls on a serving platter.</li>
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