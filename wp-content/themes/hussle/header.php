<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="hussleverse.dev">
    <link rel="shortcut icon" href="/wp-content/themes/hussle/assets/images/logo.png"> 

	<?php
	    wp_head();
	?>

</head> 
 
<body>

    <div id="loadingScreen" class="loading-screen">

        <div class="loading-text">
            <span class="loading-words">W</span>
            <span class="loading-words">E</span>
            <span class="loading-words">L</span>
            <span class="loading-words">C</span>
            <span class="loading-words">O</span>
            <span class="loading-words">M</span>
            <span class="loading-words">E&nbsp;</span>
            <span class="loading-words">T</span>
            <span class="loading-words">O&nbsp;</span>
            <span class="loading-words">H</span>
            <span class="loading-words">U</span>
            <span class="loading-words">S</span>
            <span class="loading-words">S</span>
            <span class="loading-words">L</span>
            <span class="loading-words">E</span>
            <span class="loading-words">V</span>
            <span class="loading-words">E</span>
            <span class="loading-words">R</span>
            <span class="loading-words">S</span>
            <span class="loading-words">E</span>
        </div>

        <div class="loading-footer">
            <span>// in development, see you soon</span>
        </div>

    </div>

    <header class="header-main sticky-top">

        <div class="col-md-4 column-header quick-menu hide-m">
            <a>Quick Contacts</a>
        </div>
        <div class="col-md-4 column-header logo">
            <a href="/">
                <?php
                    if(function_exists('the_custom_logo'))
                    {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo           = wp_get_attachment_image_src($custom_logo_id, 'full');
                    }
                ?>
                <img class="logo" height="20" src="<?php echo $logo[0] ?>" alt="logo">
            </a>
        </div>

        <div class="col-md-4 column-header main-menu">
            <?php
                wp_nav_menu(
                    [
                        'menu'           => 'primary',
                        'container'      => '',
                        'theme_location' => 'primary',
                        'items_wrap'     => '<ul class="nav nav-lg">%3$s</ul>',

                    ]
                );
            ?>

            <!-- //!TODO: burger-mobile-menu? -->
            <div class="body-burger">
                <input type="checkbox" id="checkbox2" class="checkbox2 hide">
                <label for="checkbox2">
                    <div class="hamburger hamburger2">
                        <span class="bar bar1"></span>
                        <span class="bar bar2"></span>
                        <span class="bar bar3"></span>
                        <span class="bar bar4"></span>
                    </div>
                </label>
            </div>
            <!-- <div class="modal hide">
                <?php
                    wp_nav_menu(
                        [
                            'menu'           => 'primary',
                            'container'      => '',
                            'theme_location' => 'primary',
                            'items_wrap'     => '<ul class="nav nav-sm">%3$s</ul>',

                        ]
                    );
                ?>
            </div> -->
        </div>

    </header>

    <div class="main-wrapper">
