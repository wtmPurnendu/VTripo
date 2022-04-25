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
            <div class="logo"> <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/header-logo.png" alt="logo"></a> </div>
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
                         
                            
            <a href="get-a-quote.html" class="my_account visasnav">Visa and Book Flights</a>
                        </ul>
                    </div>
                    
                </nav>
                <a href="<?php echo home_url('/contact-us/');?>" class="my_account visas">Contact us</a>
				
            </div>
        </div>
    </header>    <!-- header area stop -->