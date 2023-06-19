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
            <h1 class="recipetitle">Ramen</h1>
            <div class="recipe__container container grid">
                    <img src="img/recently_ramen.png" alt="" class="recipe__image" loading="lazy" id="ramen__image">
                

                    <div class="recipe__data">
                        <table>
                            <tr>
                                <th>Recipe</th>
                                <th>Ingredients</th>
                            </tr>

                            <tr>
                                <td>4 cups</td>
                                <td>chicken borth</td>
                            </tr>
                            <tr>
                                <td>2 cup</td>
                                <td>water</td>
                            </tr>
                            <tr>
                                <td>2 tablespoons</td>
                                <td>soy sauce</td>
                            </tr>
                            <tr>
                                <td>1 tablespoon</td>
                                <td>miso paste</td>
                            </tr>
                            <tr>
                                <td>1 teaspoon</td>
                                <td>sesame oil</td>
                            </tr>
                            <tr>
                                <td>2 cloves</td>
                                <td>ginger, grated</td>
                            </tr>
                            <tr>
                                <td>1 tablespoon</td>
                                <td>vegetable oil</td>
                            </tr>
                            <tr>
                                <td>8 ounces</td>
                                <td>ramen noodles</td>
                            </tr>
                            <tr>
                                <td>4-6 ounces</td>
                                <td>sliced cooked pork or chicken</td>
                            </tr>
                            <tr>
                                <td>1 </td>
                                <td> soft-boiled egg</td>
                            </tr>
                            <tr>
                                <td>2-3 stalks</td>
                                <td>sliced green onions</td>
                            </tr>
                            <tr>
                                <td>1-2</td>
                                <td>Nori sheets</td>
                            </tr>
                            <tr>
                                <td>1/4 to 1/2 cup</td>
                                <td>bean sprouts</td>
                            </tr>
                            <tr>
                                <td>1/4 to 1/2 cup</td>
                                <td>Corn Kernels</td>
                            </tr>
                            <tr>
                                <td>1/4 to 1/2 cup</td>
                                <td>Bamboo shoots</td>
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
                    <li>In a large pot, heat the vegetable oil over medium heat. Add the minced garlic and grated ginger, and sauté for 1-2 minutes until fragrant.</li>
                    <li>Add the chicken broth, water, soy sauce, miso paste, and sesame oil to the pot. Stir well to combine the ingredients. Bring the broth to a simmer and let it cook for about 10 minutes to allow the flavors to meld.</li>
                    <li>While the broth is simmering, prepare the ramen noodles according to the package instructions. Drain and set aside.</li>
                    <li>Prepare the desired toppings: Slice the cooked pork or chicken into thin strips, peel and halve the soft-boiled eggs, slice the green onions, and cut the nori sheets into small rectangles.</li>
                    <li>Once the broth is ready, taste and adjust the seasoning if needed. You can add more soy sauce or miso paste to adjust the flavor to your liking.</li>
                    <li>To serve, divide the cooked ramen noodles among serving bowls. Ladle the hot broth over the noodles.</li>
                    <li>Arrange the desired toppings on top of the noodles and broth. You can include sliced pork or chicken, soft-boiled eggs, green onions, nori, bean sprouts, corn kernels, and bamboo shoots.</li>
                    <li>Serve the Japanese ramen immediately and enjoy while hot.</li>
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