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
        <link rel="stylesheet" href="css/recipecss.css">

        <title>Sushi</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <?php include "php/header.php";?>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== Recipe ====================-->
            <section class="recipe section" id="recipe">
                <div class="recipe__container container grid">
                    <img src="img/recipe-sushi-rolls.png"  alt="" class="recipe__image">

                    <div class="recipe__data">
                        <h1 class="recipe__title">
                            Sushi Rolls
                            <div>
                                <img src="img/narutomaki1.png" loading="lazy" alt="home image">
                            </div>
                        </h1>

                        <p>
                            Sushi rolls are a delicious and popular dish that combines 
                            savory, sweet, and tangy flavors with a variety of textures. 
                            They are enjoyed by many people around the world and are a staple of Japanese cuisine.
                        </p>

                    </div>
                </div>

                <img src="img/leaf-branch-2.png" loading="lazy" alt="recipe image" class="recipe__leaf1">
                <img src="img/leaf-branch-4.png" loading="lazy" alt="recipe image" class="recipe__leaf2">
            </section>

            <!--==================== information ====================-->
            <section class="info section" id="info">
                
            </section>

            <!--==================== Ingredients ====================-->
            <section class="ingredients section" id="ingredients">
                
            </section>

            <!--==================== Steps ====================-->
            <section class="steps section" id="step">
                
            </section>

            <!--==================== Recommendations ====================-->
            <section class="recommendation  section" id="recommendation">
                
            </section>

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
        <script src="js/recipe.js"></script>
    </body>
</html>