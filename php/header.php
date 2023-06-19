<nav class="nav container">
    <a href="#" class="nav__logo">
        <img src="img/logo.png" loading="lazy" alt="logo image">
        Sushi
    </a>

    <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
            <li class="nav__item">
                <a href="../index.php" class="nav__link">Home</a>
            </li>
            <li class="nav__item">
                <a href="../index.php#about" class="nav__link">About Us</a>
            </li>
            <li class="nav__item">
                <a href="#" class="nav__link" onclick="toggleDropdown(event)">Recipe</a>
                <div id="recipe-dropdown" class="dropdown-menu">
                    <a href="../Onigiri.php">Onigiri</a>
                    <a href="../Springrolls.php">Spring Rolls</a>
                    <a href="../sushirolls.php">Sushi Rolls</a>
                    <a href="../frieddumplins.php">Fired Dumplings</a>
                    <a href="../ramen.php">Ramen</a>
                </div>
            </li>
            <li class="nav__item">
                <a href="../contact.php" class="nav__link">Contact Us</a>
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
        <a href="../login.php" class="nav__link">
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
