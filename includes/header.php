<header class="container">
    <div class="header-navigation">
        <p class="navigation-text">shop</p>
        <p class="navigation-text">read</p>
        <p class="navigation-text">020 8004 7160</p>
    </div>
    <div class="header-logo">
        <a href="index.php"><img src="images/header/logo.svg" alt="MANUAL"></a>
    </div>
    <div class="header-navigation">
        <a class="navigation-text" href="#">about</a>
        <? if (!isset($USER['id'])) { ?>
            <a class="navigation-text" href="login_up.php">login</a>
        <? } else { ?>
            <a class="navigation-text" href="user_profile.php">profile</a>
        <? } ?>
        <img src="images/header/basket.svg" alt="корзина">
    </div>
</header>