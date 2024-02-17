<div class="topbar">

    <?php wp_nav_menu(array(
        'theme_location' => 'top-nav',
        'container' => '',
        'items_wrap' => '
                        <div class="top-nav__container">
                        <ul class="top-nav" id="topNav">
                            %3$s
                        </ul></div>',
        'menu_id' => ''
    ));
    ?>

</div>
<nav class="main-nav full-width test" id="mainNav">
    <div class="sticky-wrapper">
        <div class="main-nav__wrapper">

            <div class="main-nav__logo">
                <a href="/">
                    <img src="/wp-content/themes/vitalskintheme/assets/logo.svg" alt="VitalSkin Logo" class="logo">
                </a>
            </div>

            <div class="main-nav__bar">
                <button class="hamburger-button" id="hamburgerButton" aria-label="mobile-nav">
                    <div class="hamburger-button__bar--top"></div>
                    <div class="hamburger-button__bar--middle"></div>
                    <div class="hamburger-button__bar--bottom"></div>
                </button>
            </div>

            <div class="main-nav__drawer">

                <?php wp_nav_menu(array(
                    'theme_location' => 'primary-nav',
                    'container' => '',
                    'items_wrap' => '
                        <div class="primary-nav__container">
                        <ul class="primary-nav" id="primaryNav">
                            %3$s
                        </ul></div>',
                    'menu_id' => ''
                ));
                ?>

            </div>

        </div>
        <div class="main-nav__overlay"></div>
    </div>
</nav>