<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- header area start -->
    <header class="header_area">
        <div class="container">
            <div class="logo"> <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/header-logo.png" alt="logo"></a> </div>
            <div class="header_right">
                <nav id="navigation1" class="navigation">
                    <div class="nav-header">
                        <div class="nav-toggle"></div>
                    </div>
                    <div class="nav-menus-wrapper">
                        <ul class="nav-menu nav-menu_inner align-to-right">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu(
                    array(
                        'container'  => '',
                        'items_wrap' => '%3$s',
                        'theme_location' => 'primary',
                    )
                );

            } 
            ?>
                            <!-- <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li>
                                <a href="#">Packages <span><i class="fa fa-angle-down"></i></span></a>
                                <ul class="nav-dropdown">
                                    <li><a href="#">Package One</a></li>
                                    <li><a href="#">Package Two</a></li>
                                    <li><a href="#">Package Three</a></li>
                                    <li><a href="#">Package Four</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Contact Us</a></li> -->
                            
            <a href="get-a-quote.html" class="my_account visasnav">Visa and Book Flights</a>
                        </ul>
                    </div>
                    
                </nav>
                <a href="contact-us.html" class="my_account visas">Contact us</a>
				
            </div>
        </div>
    </header>    <!-- header area stop -->