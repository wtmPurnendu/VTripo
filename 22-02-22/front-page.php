<?php get_header(); ?>
  <!------------ banner area start ----------->
    <section class="banner_main_area">
        <div class="banner_area" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/banner-1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 bannner_contain_area">
                        <div class="banner_contain wow fadeInLeft" data-wow-duration="3s" data-wow-delay=".1s">
                            <h1><?php echo get_field('banner_text');?></h1>
                            <p><?php echo get_field('banner_sub_text');?></p>
                        </div>
                    </div>
                    <div class="col-lg-6 banner_image_area">
                        <div class="banner_image">
                            <div class="row row-7">


                                <div class="col-lg-7 col-md-7 col-7">
                                    <div class="row">
                                        <div class="col-lg-10 col-md-10 col-10 offset-2">
                                            <div class="banner_img_box banner_img_1"><img src="<?php echo get_field('banner_image');?>" /></div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <div class="banner_img_box banner_img_2"><img src="<?php echo get_field('banner_image_two');?>" /></div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <div class="banner_img_box banner_img_2"><img src="<?php echo get_field('banner_image_three');?>" /></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-5 col-md-5 col-5">
                                    <div class="row row-7">
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <div class="banner_img_box banner_img_3"><img src="<?php echo get_field('banner_image_four');?>" /></div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-6">
                                            <div class="banner_img_box banner_img_3"><img src="<?php echo get_field('banner_image_five');?>" /></div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="banner_img_box banner_img_4"><img src="<?php echo get_field('banner_image_six');?>" /></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-5 col-md-5 col-5 pl-0">
                                    <div class="banner_img_box banner_img_5"><img src="<?php echo get_field('banner_image_seven');?>" /></div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-4">
                                    <div class="banner_img_box banner_img_5"><img src="<?php echo get_field('banner_image_eight');?>" /></div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-3">
                                    <div class="banner_img_box banner_img_5"><img src="<?php echo get_field('banner_image_nine');?>" /></div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>
    <!------------ banner area stop ----------->

    <!------- search area start -------->
    <section class="search_area">
        <div class="container">
            <div class="search_body">
            <form method="get" action="<?php echo site_url();?>/packages">

                <div class="d-flex justify-content-center">
                    <div class="form-group">
                        <label>Depart Form:</label>
                        <select class="form-control" name="depart">
                        <option value="">Choose Location</option>
                        <?php 
                         $taxonomies = get_terms( array(
                         'taxonomy' => 'depart_form',
                         'hide_empty' => false
                     ) );
                     foreach($taxonomies as $term) { 
                    ?>
                       <option value="<?php echo $term->term_id;?>" ><?php echo $term->name; ?></option>
                    <?php }  ?>
                        </select>
                        <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/location.png" alt="" title="" /></div>
                    </div>
                    <div class="form-group">
                        <label>Going To:</label>
                        <select class="form-control" name="going">
                            <option value="">Choose Location</option>
                    <?php 
                         $taxonomies = get_terms( array(
                         'taxonomy' => 'going_to',
                         'hide_empty' => false
                     ) );
                     foreach($taxonomies as $term) { 
                    ?>
                       <option value="<?php echo $term->term_id;?>" ><?php echo $term->name; ?></option>
                    <?php }  ?>
                        </select>
                        <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/location.png" alt="" title="" /></div>
                    </div>
                    <div class="form-group">
                        <label>No of Persons:</label>
                        <select class="form-control" name="persons">
                        <?php 
                         $taxonomies = get_terms( array(
                         'taxonomy' => 'persons',
                         'hide_empty' => false
                     ) );
                     foreach($taxonomies as $term) { 
                    ?>
                       <option value="<?php echo $term->term_id;?>" ><?php echo $term->name; ?></option>
                    <?php }  ?>
                        </select>
                        <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/user.png" alt="" title="" /></div>
                    </div>
                    <div class="form-group">
                        <label>Travel Form:</label>
                        <input type="date" class="form-control" placeholder="" name="dedate">
                        <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/calender.png" alt="" title="" /></div>
                    </div>
                    <div class="form-group">
                        <label>To:</label>
                        <input type="date" class="form-control" placeholder="" name="todate">
                        <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/calender.png" alt="" title="" /></div>
                    </div>
                    <button class="btn-search" type="submit">search</button>
                </div>

                </form>


            </div>
        </div>
    </section>
    <!------- search area stop -------->
<?php 
    $packageTitle = get_field('hot_selling_packages_title');
    $hot_selling_packages_title_copy = get_field('hot_selling_packages_title_copy');
    $hot_selling_packages_content = get_field('hot_selling_packages_content');
    //$hot_selling = get_field('hot_selling');
?>
    <!------------- selling package area start ------------->
    <section class="selling_package_area">
        <h5 class="heading wow fadeInDown" data-wow-duration="3s" data-wow-delay=".1s"><?php echo $hot_selling_packages_title_copy;?></h5>
        <div class="container">
            <div class="heading_area wow fadeInUp" data-wow-duration="3s" data-wow-delay=".1s">
                <h3><?php echo $packageTitle;?></h3>
                <p><?php echo $hot_selling_packages_content;?></p>
            </div>

            <div class="hot_selling_carousel owl-carousel" id="hot_selling_slider">
                
<?php 
$hot_selling =get_field('hot_selling');
if( $hot_selling ): ?>
    <?php foreach( $hot_selling as $term ): 
        $hot_selling_image = get_field('hot_selling_image',$term);
        ?>
        <div class="selling_package_box">
        <a href="<?php echo site_url();?>/packages/?p=<?php echo $term->slug;?>">
            <div class="img_box">
                <?php if($hot_selling_image){?>
                <img src="<?php echo $hot_selling_image['url'];?>" alt="<?php echo $hot_selling_image['alt'];?>" title="<?php echo $hot_selling_image['name'];?>" />
                    <?php } else{?>
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/02/placeholder-image.png" alt="<?php echo $hot_selling_image['alt'];?>" title="<?php echo $hot_selling_image['name'];?>" />
                    <?php }?>
            </div>
            <h4><?php echo esc_html( $term->name ); ?></h4>
            <p><?php echo esc_html( $term->description ); ?></p>
            <h5><?php echo esc_html( $term->count ); ?> packages)</h5>
        </a>
    </div>
    <?php endforeach; ?>
   
<?php endif; ?>



            </div>

        </div>
    </section>
    <!------------- selling package area stop ------------->
<?php
    $kerala_packages_title = get_field('kerala_packages_title');
    $kerala_packages_title_copy = get_field('kerala_packages_title_copy');
    $kerala_packages_content = get_field('kerala_packages_content');
    
?>
    <!---------- kerala package area start ----------->
    <section class="kerala_package_area">
        <h5 class="heading wow fadeInDown" data-wow-duration="3s" data-wow-delay=".1s"><?php echo $kerala_packages_title_copy; ?></h5>
        <div class="container">
            <div class="heading_area wow fadeInUp" data-wow-duration="3s" data-wow-delay=".1s">
                <h3><?php echo $kerala_packages_title; ?></h3>
                <p><?php echo $kerala_packages_content; ?></p>
            </div>
            <div class="row row-7">

            <?php
$kerala_packages_list = get_field('kerala_packages_list');
if( $kerala_packages_list ): ?>
   
    <?php foreach( $kerala_packages_list as $post ): 
        setup_postdata($post); 
        
        $imgurl = get_the_post_thumbnail_url($post, 'full' );
        ?>
       
              



                <div class="col-lg-4 col-md-4 col-6">
                    <div class="kerala_package_box">
                        <a href="<?php echo site_url();?>/packages/?p=kerala">
                            <div class="box">
                            <?php if($imgurl){?>
                <img src="<?php echo $imgurl;?>" alt="" title="" />
                    <?php } else{?>
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/02/placeholder-image.png" alt="<?php echo $hot_selling_image['alt'];?>" title="<?php echo $hot_selling_image['name'];?>" />
                    <?php }?>
                                <div class="contain_box">
                                    <div class="w-100">
                                        <div class="box_two"><?php the_field( 'total_days__night' ); ?></div>
                                        <h3>Starting From ₹<?php the_field( 'tprice' ); ?></h3>
                                        <p>(2+ packages)</p>
                                    </div>
                                </div>
                            </div>
                            <h4 class="heading_text text1"><?php the_title(); ?></h4>
                        </a>
                    </div>
                </div>


                <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?> 

                


                <div class="col-lg-12 text-center mt-5">
                    <a href="<?php echo home_url('/packages/'); ?>" class="btn-view">view more Packages</a>
                </div>

            </div>
        </div>
    </section>
    <!---------- kerala package area stop ----------->

    <!------------ enquery about area start ----------->
    <section class="enquery_about_area">
        <div class="container">
            <div class="enquery_body wow fadeInUp" data-wow-duration="3s" data-wow-delay=".1s">
                <h3>enquire about</h3>
                <ul class="enquery_list">
                    <li>
                        <a href="#">
                            <div class="enquery">
                                <div class="img_box"><img src="<?php echo get_template_directory_uri(); ?>/images/enquery1.png" alt="#" title="" /></div>
                                <p>Flights</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="enquery">
                                <div class="img_box"><img src="<?php echo get_template_directory_uri(); ?>/images/enquery2.png" alt="#" title="" /></div>
                                <p>Hotels</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="enquery">
                                <div class="img_box"><img src="<?php echo get_template_directory_uri(); ?>/images/enquery3.png" alt="#" title="" /></div>
                                <p>Buses</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="enquery">
                                <div class="img_box"><img src="<?php echo get_template_directory_uri(); ?>/images/enquery4.png" alt="#" title="" /></div>
                                <p>Trains</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!------------ enquery about area stop ----------->

    <!-------- explore area start --------->
    <section class="explore_area" style="background-image: url(<?php echo get_field('explore_background_image');?>">
        <div class="container">
            
            <div class="d-flex justify-content-end">
                <div class="explore_box wow fadeInRight" data-wow-duration="3s" data-wow-delay=".1s">
                    <h3><?php echo get_field('explore_title');?></h3>
                    <a href="<?php echo get_field('explore_bottom_link');?>" class="btn"><?php echo get_field('explore_bottom');?></a>
                </div>
            </div>            

        </div>
    </section>
    <!-------- explore area stop --------->

    <!------------ main area start ---------->
    <section class="main_area">
        <div class="sape1"></div>
        <div class="container">
            <div class="india_packages">
                <h5 class="heading wow fadeInDown" data-wow-duration="3s" data-wow-delay=".1s">PACKAGES</h5>
                <div class="heading_area wow fadeInUp" data-wow-duration="3s" data-wow-delay=".1s">
                    <h3>All India Packages</h3>
                    <p>WE OFFER THE BEST TOUR PACKAGES THAT FIT ALL YOUR NEEDS</p>
                </div>
                <div class="row row-7">
                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="row row-7">
                            <div class="col-lg-12">
                                <div class="india_package_one">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/rajasthan.jpg" alt="rajasthan" title="" />
                                        <div class="box">
                                            <div class="w-100">
                                                <h3>Rajasthan</h3>
                                                <h4>Starting From ₹25,000</h4>
                                                <p>(15+ packages)</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="india_package_two">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/delhi.jpg" alt="rajasthan" title="" />
                                        <div class="box">
                                            <div class="w-100">
                                                <h3>delhi</h3>
                                                <h4>Starting From ₹25,000</h4>
                                                <p>(15+ packages)</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-6">
                                <div class="india_package_two">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/goa.jpg" alt="rajasthan" title="" />
                                        <div class="box">
                                            <div class="w-100">
                                                <h3>goa</h3>
                                                <h4>Starting From ₹25,000</h4>
                                                <p>(15+ packages)</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-12">
                        <div class="india_package_three">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/kulu-manali.jpg" alt="rajasthan" title="" />
                                <div class="box">
                                    <div class="w-100">
                                        <h3>kulu-manali</h3>
                                        <h4>Starting From ₹25,000</h4>
                                        <p>(15+ packages)</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="india_package_four">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/manali.jpg" alt="rajasthan" title="" />
                                <div class="box">
                                    <div class="w-100">
                                        <h3>Manali Group Tour</h3>
                                        <h4>Starting From ₹25,000</h4>
                                        <p>(15+ packages)</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="india_package_four">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/kashmir.jpg" alt="rajasthan" title="" />
                                <div class="box">
                                    <div class="w-100">
                                        <h3>Kashmir</h3>
                                        <h4>Starting From ₹25,000</h4>
                                        <p>(15+ packages)</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
                $international_packages_title = get_field('international_packages_title');
                $international_packages_title_copy = get_field('international_packages_title_copy');
                $international_packages_content = get_field('international_packages_content');
                $international_packages = get_field('international_packages');
            ?>
            <div class="package_area">
                <h5 class="heading wow fadeInDown" data-wow-duration="3s" data-wow-delay=".1s">Packages</h5>
                <div class="heading_area wow fadeInUp" data-wow-duration="3s" data-wow-delay=".1s">
                    <h3><?php echo $international_packages_title;?></h3>
                    <p>We offer the best tour packages that fit all your needs</p>
                </div>

                <div class="package_carousel owl-carousel" id="package_slider">
                    


                <?php 
$international_packages =get_field('international_packages');
if( $international_packages ): ?>
    <?php foreach( $international_packages as $term ): 
        $hot_selling_image = get_field('hot_selling_image',$term);
        ?>
         <a href="<?php echo site_url();?>/packages/?p=international"><div class="package_box">

                        <div class="img_box">
                        <?php if($hot_selling_image){?>
                <img src="<?php echo $hot_selling_image['url'];?>" alt="<?php echo $hot_selling_image['alt'];?>" title="<?php echo $hot_selling_image['name'];?>" />
                    <?php } else{?>
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/02/placeholder-image.png" alt="<?php echo $hot_selling_image['alt'];?>" title="<?php echo $hot_selling_image['name'];?>" />
                    <?php }?>
                            <div class="img_contain"><h3><?php echo $term->name;?></h3></div>
                        </div>
                        <h5>Starting From ₹50,000</h5>
                        <p><?php echo $term->count;?> packages)</p>
        </div></a>
    <?php endforeach; ?>
   
<?php endif; ?>

                   



                    


                </div>

            </div>
        </div>
    </section>
    <!------------ main area stop ---------->

    <!----------- testimonial area start ---------->
    <section class="testimonial_area">
        <div class="testimonial_bg"><h5 class="wow fadeInDown" data-wow-duration="3s" data-wow-delay=".1s">testimonial</h5></div>
        <div class="container">
            <div class="heading_area wow fadeInUp" data-wow-duration="3s" data-wow-delay=".1s">
                <h3>Our Reviews</h3>
                <p>We provide personalized or customised tours</p>
            </div>

            <div class="testimonial_carousel owl-carousel" id="testimonial_slider">
                

            <?php 
	$args = array( 'post_type' => 'testimonials','orderby' => 'ID','order' => 'ASC','posts_per_page' => -1 );
	$loop = new WP_Query( $args );			 
	while ( $loop->have_posts() ) : $loop->the_post();							
	$imgurl = get_the_post_thumbnail_url( get_the_ID(), 'full' );
$content = get_the_excerpt();
  $title = get_the_title();
  $image2 = get_field('pimage');
	//$key_value = get_post_meta( get_the_ID(), 'my_key', true );
	//$class = ($key_value=='left') ? 'class="docs"' : 'class="docs2"' ;
$image_id = get_post_thumbnail_id();
  $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
  $image_title = get_the_title($image_id);
?>
	
<?php endwhile; wp_reset_postdata(); ?>


                <div class="testimonial_box">
                    <div class="box">
                        <div class="img_box">
                        <?php if($imgurl){?>
                <img src="<?php echo $imgurl;?>" alt="" title="" />
                    <?php } else{?>
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2022/02/placeholder-image.png" alt="<?php echo $hot_selling_image['alt'];?>" title="<?php echo $hot_selling_image['name'];?>" />
                    <?php }?>
                        </div>
                        <h3>Amazing India and trip</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec congue nunc, non commodo nisi. In volutpat faucibus magna, quis posuere nibh malesuada sed. Donec quis erat eget eros semper placerat ac a augue.<img src="<?php echo get_template_directory_uri(); ?>/images/collon2.png" alt="collon2" title="" class="ml-2" /></p>
                    </div>
                    <div class="comment_for">
                        <h5>- Ho Meng Liew</h5>
                        <div class="star"><i class="zmdi zmdi-star"></i><i class="zmdi zmdi-star"></i><i class="zmdi zmdi-star"></i><i class="zmdi zmdi-star"></i><i class="zmdi zmdi-star"></i></div>
                    </div>
                </div>




                



            </div>
        </div>
    </section>
    <!----------- testimonial area stop ---------->
<?php get_footer(); ?>