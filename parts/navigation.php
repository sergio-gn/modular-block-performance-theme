<style>
    :root{
        --main-colour: #1094c4;
        --main_colour_darker: #01698f;
        --secondary-colour: #7d89aa;
        --background-colour: #21242f;
        --font-gradient-left: #30513A;
        --font-gradient-right: #607466;
        --white_tone: #fff;
        --white_tone_darker: #f0f0f0;
        --black_tone: #030501;
        --grey_tone: #353535;
        --light_grey_tone: #cdcdcd;
    }
    @media screen and (max-width: 600px) {
        #wpadminbar {
            position: fixed !important;
        }
    }
    /*******  globals *********/
    body{
        margin: 0;
    }
    header{
        font-family: system-ui;
    }
    .text-primary{
        color: var(--main-colour);
    }
    .custom-logo img {
        height: auto;
        max-height: 3rem;
    }
    /* Custom Buttons */
    .cta_button{
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        display: flex!important;
        align-items: center;
        gap: 0.35rem;
        display: block;
        width: fit-content;
        border-radius: 10rem;
        padding: 0.75rem 1rem;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        display: flex!important;
        gap: 0.35rem;
        width: fit-content;
        border-radius: 10rem;
        padding: 0.75rem 1rem;
        text-decoration:none;
        --tw-bg-opacity: 1;
        --tw-text-opacity: 1;
        transition-duration: 1s;
        transition-property: all;
        transition-timing-function: cubic-bezier(.4,0,.2,1);
        overflow: hidden;
        height: 2rem;
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
    .cta_button_text{
        position: relative;
        z-index: 1;
    }
    .cta_button_primary {
        background-color: var(--main-colour);
        color: var(--white_tone);
        fill: var(--white_tone);
    }
    .cta_button_primary:before {
        --tw-bg-opacity: 1;
        background-color: var(--main_colour_darker);
        content: "";
        height: 0;
        left: 0;
        outline: none;
        position: absolute;
        top: 0;
        transition: all .8s ease;
        width: 0;
        z-index: 1;
    }
    .cta_button_primary:hover {
        --tw-shadow: 4px 4px #ffae35;
        --tw-shadow-colored: 4px 4px;
    }
    .cta_button_primary:hover:before {
        --tw-text-opacity: 1;
        border-radius: 50px;
        color: rgb(255 255 255);
        height: 30px;
        transform: scale(36.5);
        width: 30px;
    }

    .cta_button_secondary {
        background-color: var(--white_tone);
        color: var(--main-colour);
        fill: var(--main-colour);
        border: 1px solid var(--white_tone);
    }
    .cta_button_secondary:before {
        --tw-bg-opacity: 1;
        background-color: var(--main-colour);
        content: "";
        height: 0;
        left: 0;
        outline: none;
        position: absolute;
        top: 0;
        transition: all .8s ease;
        width: 0;
        z-index: 1;
    }
    .cta_button_secondary:hover {
        --tw-shadow: 4px 4px #ffae35;
        --tw-shadow-colored: 4px 4px;
        color: var(--white_tone);
    }
    .cta_button .cta_button_secondary {
        transition: fill 1.5s ease;
    }
    .cta_button:hover .cta_button_secondary{
        fill: var(--white_tone);
    }
    .cta_button_secondary:hover:before {
        --tw-text-opacity: 1;
        border-radius: 50px;
        color: var(--white_tone);
        height: 30px;
        transform: scale(36.5);
        width: 30px;
    }
    
    /* Custom Buttons */
    /* Contact Form */
    .wpcf7{
        width: 40vw;
    }
    .wpcf7-form input, .wpcf7-form textarea {
        background: var(--white_tone);
        padding: 1rem;
        border-radius: 1rem;
        border: none;
        color: var(--black_tone);
        width: 100%;
        box-sizing: border-box;
        box-shadow: 0px 2px 5px -1px rgba(0, 0, 0, 0.3);
        border: solid 1px #cfcfcf;
    }
    .wpcf7-form input[type="submit"]{
        background: var(--main-colour);
        padding: 1rem;
        border-radius: 1rem;
        border:none;
        width:100%;
        color: var(--white_tone);
        box-shadow: 0px 12px 18px -6px rgba(0, 0, 0, 0.3);
        cursor: pointer;
    }
    .wpcf7-form label{
        color: var(--main-colour);
    }
    @media(max-width:1100px){
        .wpcf7{
            width: 100vw;
        }
    }
    /* Contact Form */
    /* Fixed width container */
    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
        box-sizing: border-box;
    }

    /* Responsive fixed width container for small screens */
    @media (min-width: 576px) {
        .container {
            max-width: 540px;
        }
    }

    /* Responsive fixed width container for medium screens */
    @media (min-width: 768px) {
        .container {
            max-width: 720px;
        }
    }

    /* Responsive fixed width container for large screens */
    @media (min-width: 992px) {
        .container {
            max-width: 1100px;
        }
    }

    /* Responsive fixed width container for extra large screens */
    @media (min-width: 1200px) {
        .container {
            max-width: 1400px;
        }
    }
    .menu-item a{
        text-decoration: none;
        color: #000;
        font-weight: 600;
    }
    .img-auto{
        width:100%;
        height:auto;
    }
    .p-1{
        padding:1rem;
    }
    .py-1{
        padding: 1rem 0;
    }
    .d-flex{
        display:flex;
    }
    .flex-end{
        justify-content: flex-end;
    }
    .align-center{
        align-items: center;
    }
    .justify-center{
        justify-content: center;
    }
    .justify-between{
        justify-content: space-between;
    }
    .d-grid{
        display:grid;
    }
    .grid-4{
        grid-template-columns: 1fr 1fr 1fr 1fr;
    }
    .grid-5{
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    }
    .text-center{
        text-align:center;
    }
    .text-right{
        text-align:right;
    }
    .text-white{
        color:#fff;
    }
    .gap-_25{
        gap: 0.25rem;
    }
    .gap-1{
        gap:1rem;
    }
    .gap-2{
        gap:2rem;
    }
    /*******  top-bar *********/
    .top-bar{
        background-color: #000;
    }
    .link-header{
        color:#fff;
        text-decoration: none;
    }
    .link-header:hover{
        color: #d42127;
    }
    .social-icon{
        background: #d42127;
        border-radius: 5px;
        padding: 8px;
    }
    .social-icon:hover{
        background: #fff;
        border-radius: 5px;
        padding: 8px;
    }
    .social-icon:hover svg {
        fill: #d42127;
    }
    /*******  navbar-bar *********/
    .navbar-bar{
        position: relative;
        z-index: 90;
    }

    .top-details li{
        list-style: none;
    }
    /*******  navigation bar *********/
    .nav-class{
        display:flex;
        list-style: none;
        gap: 1rem;
    }
    .ast-menu-toggle{
        display:none;
    }
    .icon-arrow{
        display:none;
    }
    .menu-item-has-children .sub-menu {
        display: none;
        transition: display 0.5s ease-in-out;
        list-style: none;
        padding: 0;
        background: var(--white_tone);
        border-radius:1rem;
    }
    .menu-item-has-children:hover .sub-menu {
        display: block;
        position: absolute;
        transition-duration: 1s;
    }
    .menu-item-has-children div > a:after{
        content: '⌵';
        padding: 0 0 0 0.5rem;
    }
    .sub-menu-toggle{
        display:none;
    }
    .menu-item-has-children .icon-arrow{
        display:unset;
    }
    .navigation ul.nav-class {
        display:flex;
        justify-content: space-between;
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    .navigation li a {
        padding:1rem;
        display:block;
        color:var(--main_colour_darker);
        font-weight: bold;
        font-size:1rem;
        text-decoration: none;
    }
    .navigation li a:hover {
        color: var(--main-colour);
    }
    .navigation ul.nav-class li ul.sub-menu {
        display: none;
        position: absolute;
        background-color: #fff;
        box-shadow: rgb(0 0 0 / 15%) 7px 8px 8px 0px;
        padding: 0;
        z-index:999;
        overflow:hidden;
    }
    .navigation ul.nav-class li ul.sub-menu li {
        display: block;
    }
    .navigation ul.nav-class li:hover ul.sub-menu {
        display: block;
    }
    .menu-item-has-children .sub-menu li a{
        padding:1rem;
        text-decoration: none;
        display:block;
        color: var(--main-colour);
        min-width: 10rem;
    }
    .menu-item-has-children .sub-menu li a:hover{
        background: var(--main-colour);
        color: var(--white_tone);
        transition-duration: 0.5s;
    }
    .navigation .menu-item-has-children .sub-menu li a:hover {
        background: var(--main-colour);
        color: var(--white_tone);
    }
    .head-book{
        color: #fff !important;
        background: linear-gradient(-45deg, #d42127, #000000, #d42127, #000000);
        background-size: 400% 400%;
        animation: gradient 8s ease infinite;
    }
    .head-book a{
        color: #fff !important;
    }
    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }
    .desktop_none{
        display:none;
    }
    .heading_raw h1, .heading_raw h2,.heading_raw h3,.heading_raw h4,.heading_raw h5,.heading_raw h6{
        margin: 0;
        line-height: 1;
    }
    @media(max-width:1100px){
        .menu-item-has-children div > a:after{
            display:none;
        }
        .sub-menu-toggle{
            display:block;
            background: var(--black_tone);
            color: var(--white_tone);
            border: none;
            border-radius: 1rem;
            padding: 0.25rem 0.5rem;
        }
        .menu_item_wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .navigation ul.nav-class li ul.sub-menu{
            position: unset;
            background-color: #ececec;
            box-shadow: rgb(196 202 198) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;
        }
        .cta_buttons_nav{
            display:none;
        }
        .navigation{
            display:none;
        }
        .navigation{
            display:none;
        }
        .mobile_nav{
            padding: 0.7rem;
        }
        .button_mb{
            background: var(--black_tone);
            color:var(--white_tone);
            border: none;
            padding: 0.5rem 1rem;
            border-radius:1rem;
        }
        .navigation ul.nav-class{
            flex-direction: column;
        }
        .navigation.active {
            display: block;
            position: absolute;
            right: 0;
            z-index: 1;
            width: 100%;
            top: 4rem;
            background: var(--white_tone);
        }
        .mb_none{
            display:none;
        }
        .desktop_none{
            display:block;
        }
        .grid-1_mb{
            grid-template-columns: 1fr;
        }
        .p-0_mb{
            padding:0;
        }
        .m-0_mb{
            margin:0;
        }
    }
</style>
<header style="<?php if ( is_user_logged_in() ) { echo 'margin-top: 32px;'; } ?>">
	<div class="navbar-bar">
		<div class="container mobile_nav">
	        <div class="d-flex align-center justify-between gap-1">
	            <div class="custom-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link" rel="home" aria-current="page">
                        <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id, 'full' );
                            if ( $custom_logo_url ) {
                                echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                            } else {
                                echo '<img src="' . esc_url( get_template_directory_uri() . '/path-to-default-logo.png' ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                            }
                        ?>
                    </a>
	            </div>
                <div class="navigation">
                    <div class="container">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'primary_menu',
                                'menu_class' => 'nav-class',
                            ));
                        ?>
                    </div>
                </div>
                <button class="button_mb desktop_none" onclick="toggleActiveClass()">
                    ☰
                </button>
	            <div class="cta_buttons_nav">
                    <?php echo do_shortcode('[custom_buttons]') ?>
	            </div>
	        </div>
        </div>
	</div>
    <script>
        function toggleActiveClass() {
          var menuContainer = document.querySelector('.navigation');
          menuContainer.classList.toggle('active');
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Select all toggle buttons
            var toggleButtons = document.querySelectorAll('.sub-menu-toggle');

            toggleButtons.forEach(function(button) {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Find the parent menu item
                    var parentItem = this.closest('.menu-item-has-children');
                    
                    // Toggle the 'open' class on the parent menu item
                    parentItem.classList.toggle('open');
                    
                    // Find the sub-menu within the parent item and toggle its display
                    var subMenu = parentItem.querySelector('.sub-menu');
                    if (subMenu) {
                        if (subMenu.style.display === 'block') {
                            subMenu.style.display = 'none';
                        } else {
                            subMenu.style.display = 'block';
                        }
                    }
                    
                    // Toggle the aria-expanded attribute
                    if (this.getAttribute('aria-expanded') === 'true') {
                        this.setAttribute('aria-expanded', 'false');
                    } else {
                        this.setAttribute('aria-expanded', 'true');
                    }
                });
            });
        });

    </script>
</header>
