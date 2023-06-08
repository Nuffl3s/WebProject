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
            <!--==================== Recipe ====================-->
            <section class="recipe section" id="recipe">
            <h1>Onigiri</h1>
            <div class="recipe__container container grid">
                    <img src="img/popular-onigiri.png" alt="" class="recipe__image">
                

                    <div class="recipe__data">
                        <table>
                            <tr>
                                <th>Recipe</th>
                                <th>Ingredients</th>
                            </tr>

                            <tr>
                                <td>2 cups</td>
                                <td>Japanese short-grain rice (such as sushi rice)</td>
                            </tr>
                            <tr>
                                <td>2 1/2</td>
                                <td>water</td>
                            </tr>
                            <tr>
                                <td>2 tablespoons</td>
                                <td>Filling of your choice <br>
                                (e.g., canned tuna, grilled salmon, pickled plum, cooked chicken, etc.)
                            </td>
                            </tr>
                            <tr>
                                <td>1/2</td>
                                <td>Nori sheets</td>
                            </tr>
                            <tr>
                                <td>A pinch</td>
                                <td>salt</td>
                            </tr>
                        </table>
                    </div>
                    <img src="img/leaf-branch-2.png" loading="lazy" alt="home image" class="home__leaf1">
                    <img src="img/leaf-branch-4.png" loading="lazy" alt="home image" class="home__leaf2">
                </div>
            </section>


            <!--==================== Steps ====================-->
                <div class="step__container">
                    <ol>
                        <li>Rinse the rice: Place the rice in a large bowl and cover it with cold water. Swirl the rice with your hand and drain the water. Repeat this process 3-4 times until the water runs clear.</li>
                        <li>Cook the rice: Transfer the rinsed rice to a rice cooker or a saucepan. Add water and cook the rice according to the instructions on the package or the rice cooker. Once cooked, let the rice sit for 10 minutes to allow it to steam and become slightly sticky.</li>
                        <li>Prepare the fillings: While the rice is cooking, prepare your desired fillings. For example, you can flake canned tuna and mix it with mayonnaise, soy sauce, and any other seasonings you prefer. You can also cook and season salmon, shred cooked chicken, or use pickled plum as fillings.</li>
                        <li>Season your hands: Before shaping the rice, wet your hands slightly and sprinkle them with a pinch of salt. This will prevent the rice from sticking to your hands.</li>
                        <li>Shape the rice balls: Take a small handful of cooked rice and flatten it slightly in the palm of your hand. Place a spoonful of your chosen filling in the center of the rice. Gently mold the rice around the filling, shaping it into a triangle, oval, or round ball. Make sure the filling is fully enclosed within the rice.</li>
                        <li>Wrap with nori (optional): If you like, you can wrap the rice balls with a strip of nori, which adds a nice flavor and helps to hold the shape. Wrap the nori strip around the bottom half of the rice ball, leaving the top exposed.</li>
                        <li>Repeat and enjoy: Repeat the shaping process with the remaining rice and fillings until you have used them all. Serve the onigiri immediately or pack them for a later snack or lunch.</li>
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