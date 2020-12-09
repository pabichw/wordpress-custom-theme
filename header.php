<header>
    <nav class="top-nav">
        <div class="top-nav__content">
            <div class="content__logo-wrapper">
                <a href='/'>
                    <?php display_custom_logo() ?>
                </a>
            </div>
            <div class="content__menu-wrap">
                <ul class="menu-wrap__menu">
                    <li class="menu__option"><a data-scroll href='/#o-nas'>O nas</a></li>
                    <li class="menu__option"><a href='/cennik'>Cennik</a></li>
                    <li class="menu__option menu__option--highlighted"><a data-scroll href='/#kontakt'>Kontakt</a></li>
                </ul>
                <div class="menu-wrap__burger">
                    <button id="burger-button"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/menu.svg" alt="menu-icon"/></button>
                </div>
            </div>
        </div>
    </nav>
    <nav id='mobile-menu' class="mobile-nav">
        <div class="mobile-nav_mobile-menu-wrap">
            <ul class="mobile-menu-wrap__mobile-menu">
                <li class="mobile-menu__option"><a data-scroll href='/#o-nas'>O nas</a></li>
                <li class="mobile-menu__option"><a href='/cennik'>Cennik</a></li>
                <li class="mobile-menu__option mobile-menu__option--highlighted"><a data-scroll href='/#kontakt'>Kontakt</a></li>
            </ul>
        </div>
    </nav>
</header>