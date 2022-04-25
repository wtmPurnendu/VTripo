<?php
   /**
    * The template for displaying archive pages
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    *
    * @package WordPress
    * @subpackage Twenty_Twenty_One
    * @since Twenty Twenty-One 1.0
    */
   
   get_header();
   
   $description = get_the_archive_description();
   ?>
<!------ banner area start -------->
<div class="subbanner" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/inner-banner1.jpg);">
   <div class="container">
      <h1>packages</h1>
      <nav class="breadcrumb"> <a class="breadcrumb-item" href="<?php echo home_url();?>">home</a> <span
         class="breadcrumb-item active"><?php the_archive_title();?></span> </nav>
   </div>
</div>
<!------ banner area stop -------->
<!--------- listing area start ---------->
<section class="listing_area">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <h4>packages</h4>


			<?php if ( have_posts() ) : ?>
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();
			$imgurl = get_the_post_thumbnail_url( get_the_ID(), 'full' );
			$content = get_the_excerpt();
			$title = get_the_title();
		   
			//$id = $loop->post->ID;
			$id = get_the_ID();
		  
			$image_id = get_post_thumbnail_id();
			$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
			$image_title = get_the_title($image_id);
		  
			//Acf field value
			$total_days__night = get_field('total_days__night');
			$customizable = get_field('customizable');
			?>
				
				<div class="listing_box">
          <div class="row row-7">
            <div class="col-lg-9 col-md-9">
              <div class="media"> 
                <img src="<?php echo $imgurl;?>" alt="<?php echo $image_alt;?>" class="img_box">
                <div class="media-body"> <a href="<?php the_permalink(); ?>" class="link"><?php echo $title;?></a>
                  <div class="box_one">
                    <ul>
                      <?php if($total_days__night){?>
                      <li class="day"><i class="far fa-clock"></i> <?php echo $total_days__night;?></li>
                      <?php } ?>
                        <?php if($customizable=="Yes"){?>
                      <li>customizable</li>
                      <?php } ?>
                    </ul>
                  </div>
                  <div class="box_two">
                    <h3>Hotel included in Package :</h3>
                    <ul>
                  <?php if( have_rows('hotel_stars') ): ?>
                  <?php $ps=1; while( have_rows('hotel_stars') ): the_row(); 
                      $total_star = get_sub_field('total_star');
                      $star_price = get_sub_field('star_price');
                    ?>
                    
<li>
    <input type="radio" onclick="check1('<?php echo $star_price;?>', '<?php echo $id; ?>')" id="radio-<?php echo $ps; ?><?php echo $id; ?>" name="selector-<?php echo $id; ?>" value="<?php echo $star_price;?>">
    <label for="radio-<?php echo $ps; ?><?php echo $id; ?>"><?php echo $total_star;?> Star</label>
    <div class="check"></div>
  </li>
                  <?php $ps++; endwhile; ?>
                  <?php endif; ?>
                     



                    </ul>
                  </div>
                  <div class="box_three">
                    <ul>


                    <?php if( have_rows('extra_facility_copy') ): ?>
                  <?php $pps=1; while( have_rows('extra_facility_copy') ): the_row(); 
                      $facility_texts = get_sub_field('facility_texts');
                      $facility_prices = get_sub_field('facility_prices');
                    ?>
    <li> <?php echo $facility_texts;?> :
        <label class="switch" for="checkbox-<?php echo $pps;?><?php echo $id; ?>">
        <input type="checkbox" onclick="check2('<?php echo $facility_prices;?>', '<?php echo $id; ?>')"  name="one_check_<?php echo $id; ?>" class="one_check" id="checkbox-<?php echo $pps;?><?php echo $id; ?>" value="<?php echo $facility_prices;?>"/>
        <div class="slider round"></div>
        </label>
      </li>

                  <?php $pps++; endwhile; ?>
                  <?php endif; ?>
                      

                      
                      
                    </ul>
                  </div>
                  <div class="box_four"> 
                      <?php if(get_field('attractions')){?>
                    <p><strong>Attractions : </strong> <?php echo get_field('attractions'); ?></p>
                      <?php } ?>
                  <?php if( have_rows('attractions_locations') ): ?>
                  <?php 
                  $pps=1; 
                  while( have_rows('attractions_locations') ): the_row(); 
                      $location = get_sub_field('location');
                      $facility_prices = get_sub_field('facility_prices');
                    ?>
                    <div class="tag"><?php echo $location;?></div>
                  <?php $pps++; endwhile; ?>
                  <?php endif; ?>
                   
                    
                  </div>
                  <div class="box_five">
                    <div class="d-flex justify-content-start">
                      
                    <?php if( have_rows('extra_facility') ): ?>
                  <?php 
                  $pps=1; 
                  while( have_rows('extra_facility') ): the_row(); 
                      $facility_text = get_sub_field('facility_text');
                      $facility_image = get_sub_field('facility_image');
                    ?>
                   <div class="box_catagory">
                      <img src="<?php echo $facility_image['url'];?>" alt="<?php echo $facility_image['alt'];?>" title="" />
                        <p><?php echo $facility_text;?></p>
                      </div>
                  <?php $pps++; endwhile; ?>
                  <?php endif; ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3">
              <div class="pacakge_price">
                <div class="w-100">
                  <?php if(get_field('off_tri')){?>
                  <div class="tag"><?php echo get_field('off_tri');?></div>
                  <?php } ?>


                  <p>STARTING FROM</p>
<input type="hidden"  name="totprice" id="totprice_<?php echo $id; ?>" value="<?php echo get_field('tprice'); ?>">
<input type="hidden" name="" class="answerhi_<?php echo $id; ?>" id="answerhi_<?php echo $id; ?>" value="">
<input type="hidden" name="" id="hh_<?php echo $id; ?>" value="">

<h3><i class="fas fa-rupee-sign"></i> <div id="answer_<?php echo $id; ?>"><?php echo get_field('tprice'); ?></div>  /-</h3>
                  <p>Per Person on twin sharing</p>
                  <a href="<?php the_permalink(); ?>" class="btn">VIEW DETAILS</a> </div>
              </div>
            </div>
          </div>
        </div>
			<?php
			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

            









         </div>
      </div>
   </div>
</section>
<!--------- listing area stop ---------->
<?php get_footer(); ?>