<?php 
/**
 * Template Name: About Us
 * 
 */ 

get_header(); ?>
  <?php 
    if(get_field('banner_image')){
   ?>  
<!------ banner area start -------->
<div class="subbanner" style="background-image:url(<?php echo get_field('banner_image')['url'];?>);">
<?php } ?>
  <div class="container">
    <h1><?php the_title(); ?></h1>
    <nav class="breadcrumb"> 
        <a class="breadcrumb-item" href="<?php echo home_url(); ?>">home</a> <span class="breadcrumb-item active"><?php the_title(); ?></span> </nav>
  </div>
</div>
<!------ banner area stop --------> 
    
  <?php
          while ( have_posts() ) : the_post();
        $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full'); 
         ?>  
    <!------------- contact area start ------------->
    <div class="aboutus">
        
        <div class="container">
            <div class="aboutarea">
           <div class="row">
               <div class="col-lg-5 col-md-6">
                   <div class="aboutimg"><img src="<?php echo $image[0];?>" alt="#" title="" /></div>
               </div>
               <div class="col-lg-7 col-md-6">
               <div class="abtxt">
                    <?php the_content(); ?>
                </div>
               </div>
            </div>
                </div>
            <div class="aboutarea mt-5 pt-5">
           <div class="row">
               <div class="col-lg-7 col-md-6 about-cont">
               <div class="abtxt">

                <?php echo get_field('our_mission'); ?>
                   </div>
               </div>
               <div class="col-lg-5 col-md-6 about-img">
                   <div class="aboutimg"><img src="<?php echo get_field('our_mission_image')['url']; ?>" alt="<?php echo get_field('our_mission_image')['alt']; ?>" title="" /></div>
               </div>
               
            </div>
                </div>
        </div>
		<div class="text-center mt-5"><a href="<?php echo get_field('contact_us_link'); ?>" class="btn btn-primary"><?php echo get_field('contact_us_text'); ?></a></div>
    </div>
    <?php endwhile;  ?>
    <!------------- selling package area stop ------------->
<?php get_footer(); ?>