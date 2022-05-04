<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://www.husslesystems.com">
    <link rel="shortcut icon" href="/wp-content/themes/hussle/assets/images/favicon.ico"> 

	<?php
	    wp_head();
	?>

</head> 
 
<body>

    <div class="loading-screen">
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
            <span class="loading-words">E&nbsp;</span>
            <span class="loading-words">V</span>
            <span class="loading-words">E</span>
            <span class="loading-words">R</span>
            <span class="loading-words">S</span>
            <span class="loading-words">E</span>
            
        </div>
    </div>

    <div class="container">

        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">

            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none"></a>

            

            <a href="/" class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">

                <?php
                    if(function_exists('the_custom_logo'))
                    {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo           = wp_get_attachment_image_src($custom_logo_id, 'full');

                    }
                ?>
                <img class="logo" height="50"
                src="<?php echo $logo[0] ?>" 
                alt="logo">

            </a>

            <div class="col-md-3 text-end">
                
               <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="bi bi-arrow-down-left-square-fill"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php
                                wp_nav_menu(
                                    [
                                        'menu'           => 'primary',
                                        'container'      => '',
                                        'theme_location' => 'primary',
                                        'items_wrap'     => '<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">%3$s</ul>',

                                    ]
                                );
                            ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>

            </div>

        </header>

        <?php
            // sidebar widget
            dynamic_sidebar('sidebar-1');
        ?>
        <?php
            // www name
            echo get_bloginfo('name');
        ?>

        <div class="main-wrapper">
            <div class="page-title theme-bg-light text-center gradient py-5">
                <h1 class="heading">
                    <?php
                        // page title
                        the_title();
                    ?>
                </h1>
            </div>
