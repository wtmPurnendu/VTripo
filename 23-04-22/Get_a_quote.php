<?php 
/**
 * Template Name: Get a quote
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
            <div class="contactarea">
                
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="contactimg wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".1s">
                                <img src="<?php echo $image[0];?>" alt="#" title="" /></div>
                        </div>
                        <div class="col-lg-7">
                            <div class="contbox wow fadeInRight" data-wow-duration="3s" data-wow-delay=".1s">
                                <h1>Get a quote <?php echo ucfirst($_GET['booking']); ?></h1>
<?php echo do_shortcode('[contact-form-7 id="122" title="GET A QUOTE"]');?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------------- selling package area stop ------------->
            <?php endwhile;  ?>
<?php get_footer(); ?>

<script>
  jQuery( "#booking" ).change(function() {
    if(jQuery(this).val()=="One way"){
      jQuery("#departingdate").hide();
      
    }else{
      jQuery("#departingdate").show();
      jQuery("#pp").hide();
      jQuery("#qq").show();
    }
});
</script>