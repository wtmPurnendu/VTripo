<?php 
/**
 * Template Name: Packages
 * 
 */ 

get_header(); ?>
<?php if(get_field('banner_image')){?>
<!------ banner area start -------->
<div class="subbanner" style="background-image:url(<?php echo get_field('banner_image')['url'];?>);">
<?php } ?>
<div class="container">
    <h1><?php the_title(); ?></h1>
    <nav class="breadcrumb"> <a class="breadcrumb-item" href="<?php echo home_url(); ?>">home</a> 
    <span class="breadcrumb-item active"><?php the_title(); ?></span> </nav>
  </div>
</div>
<!------ banner area stop -------->   
    
    
<!--------- listing area start ---------->
<section class="listing_area">
  <div class="container">
    <div class="row">
      <div class="col-lg-3"> 
        <!-----mobile start------>
        <div id="main">
          <div class="accordion" id="faq">
            <div class="card">
              <div class="card-header" id="faqhead1"> <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1">Filter</a> </div>
              <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                <div class="card-body">
                  <div class="filter_box">
                    <div class="search_box">
                      <input type="text" class="form-control" placeholder="Search...">
                      <button class="btn-search"><i class="zmdi zmdi-search"></i></button>
                    </div>
                    <form method="get" action="">
                    <div class="filter">
                      <h3>Packages Type</h3>
                      <ul>


<?php 
$wcatTerms = get_terms(
'packages', array('hide_empty' => 0,  'order' =>'asc', 'parent' =>0));
        foreach($wcatTerms as $wcatTerm) : 
?>
                        <li>
                          <div class="form-group">
                            <input name="packa" type="checkbox" value="<?php echo $wcatTerm->slug; ?>" id="check-<?php echo $wcatTerm->term_id; ?>" onclick="this.form.submit()">
                            <label for="check-<?php echo $wcatTerm->term_id; ?>"><?php echo $wcatTerm->name; ?></label>
                          </div>
                        </li>
<?php endforeach;  ?>

                        <!-- <li>
                          <div class="form-group">
                            <input type="checkbox" id="check2">
                            <label for="check2">International</label>
                          </div>
                        </li>


                        <li>
                          <div class="form-group">
                            <input type="checkbox" id="checknew2">
                            <label for="checknew2">Honeymoon</label>
                          </div>
                        </li> -->


                      </ul>
                    </div>
                    <div class="filter">
                      <h3>Destination</h3>
                      <ul>
                        <li>
                          <div class="form-group">
                            <input type="checkbox" id="check3">
                            <label for="check3">Kerala</label>
                          </div>
                        </li>
                        <li>
                          <div class="form-group">
                            <input type="checkbox" id="check4">
                            <label for="check4">Rajasthan</label>
                          </div>
                        </li>
                        <li>
                          <div class="form-group">
                            <input type="checkbox" id="check5">
                            <label for="check5">Goa</label>
                          </div>
                        </li>
                        <li>
                          <div class="form-group">
                            <input type="checkbox" id="check6">
                            <label for="check6">Kashmir</label>
                          </div>
                        </li>
                        <li>
                          <div class="form-group">
                            <input type="checkbox" id="check7">
                            <label for="check7">Kullu-Manali</label>
                          </div>
                        </li>
                        <li>
                          <div class="form-group">
                            <input type="checkbox" id="check8">
                            <label for="check8">Delhi</label>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="filter">
                      <h3>Price</h3>
                      <ul>
                        <li>
                          <div class="form-group">
                            <input type="checkbox" id="check9">
                            <label for="check9">Below ₹5000</label>
                          </div>
                        </li>
                        <li>
                          <div class="form-group">
                            <input type="checkbox" id="check10">
                            <label for="check10">₹5000 - ₹10,000.00</label>
                          </div>
                        </li>
                        <li>
                          <div class="form-group">
                            <input type="checkbox" id="check11">
                            <label for="check11">₹10,000.00 - ₹20,000.00</label>
                          </div>
                        </li>
                        <li>
                          <div class="form-group">
                            <input type="checkbox" id="check12">
                            <label for="check12">₹20,000.00 - ₹30,000.00</label>
                          </div>
                        </li>
                        <li>
                          <div class="form-group">
                            <input type="checkbox" id="check13">
                            <label for="check13">₹30,000.00 - ₹40,000.00</label>
                          </div>
                        </li>
                        <li>
                          <div class="form-group">
                            <input type="checkbox" id="check14">
                            <label for="check14">₹40,000.00 - ₹50,000.00</label>
                          </div>
                        </li>
                        <li>
                          <div class="form-group">
                            <input type="checkbox" id="check15">
                            <label for="check15">Above ₹50,000.00</label>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="filter">
                      <h3>star</h3>
                      <ul>
                    
                        <li>
                          <div class="form-group">
                            <input type="checkbox" id="check16">
                            <label for="check16">3 Star</label>
                          </div>
                        </li>
                        <li>
                          <div class="form-group">
                            <input type="checkbox" id="check17">
                            <label for="check17">4 Star</label>
                          </div>
                        </li>
                        <li>
                          <div class="form-group">
                            <input type="checkbox" id="check18">
                            <label for="check18">5 Star</label>
                          </div>
                        </li>
                        <li>
                          <div class="form-group">
                            <input type="checkbox" id="check19">
                            <label for="check19">Standard</label>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="filter">
                      <h3>Inclusions</h3>
                      <ul>
                        <li>
                          <div class="form-group">
                            <input type="checkbox" id="check20">
                            <label for="check20"><img src="<?php echo get_template_directory_uri(); ?>/images/car-icon.png" alt="#" />Cab</label>
                          </div>
                        </li>
                        <li>
                          <div class="form-group">
                            <input type="checkbox" id="check21">
                            <label for="check21"><img src="<?php echo get_template_directory_uri(); ?>/images/cutlery-icon.png" alt="#" />Meal</label>
                          </div>
                        </li>
                      </ul>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-----mobile stop------>
        
        <div class="filter_box filterin">
          <div class="search_box">
            <input type="text" class="form-control" placeholder="Search...">
            <button class="btn-search"><i class="zmdi zmdi-search"></i></button>
          </div>
          <form method="get" action="">
          <div class="filter">
            <h3>Packages</h3>
            <ul>
<?php
  $p = $_GET['p'];
  //echo $p;
  $my_str_arr = preg_split ("/,/", $p);
  //echo '<pre>';
  //print_r($my_str_arr);
?>
<?php 
$wcatTerms = get_terms(
'packages', array('hide_empty' => 0,  'order' =>'asc', 'parent' =>0));
        foreach($wcatTerms as $wcatTerm) : 
?>
<li>
  <div class="form-group">
    <input name="p" <?php if (in_array($wcatTerm->slug, $my_str_arr)){?>checked<?php } ?> class="p" type="checkbox" value="<?php echo $wcatTerm->slug; ?>" id="checkd-<?php echo $wcatTerm->term_id; ?>">
    <label for="checkd-<?php echo $wcatTerm->term_id; ?>"><?php echo $wcatTerm->name; ?></label>
  </div>
</li>
<?php endforeach;  ?>


            </ul>
          </div>
          <div class="filter">
            <h3>Destination</h3>
            <ul>
<?php 
//d for = destination
$wcatTerms = get_terms(
'destination', array('hide_empty' => 0,  'order' =>'asc', 'parent' =>0));
        foreach($wcatTerms as $wcatTerm) : 
?>
              <li>
                <div class="form-group">
                  <input type="checkbox" class="d" name="d" value="<?php echo $wcatTerm->slug; ?>" id="checkdd-<?php echo $wcatTerm->term_id; ?>">
                  <label for="checkdd-<?php echo $wcatTerm->term_id; ?>"><?php echo $wcatTerm->name; ?></label>
                </div>
              </li>
<?php endforeach;  ?>


            </ul>
          </div>
          <div class="filter">
            <h3>Price</h3>
            <ul>
              <li>
                <div class="form-group">
                  <input type="checkbox" id="check9">
                  <label for="check9">Below ₹5000</label>
                </div>
              </li>
              <li>
                <div class="form-group">
                  <input type="checkbox" id="check10">
                  <label for="check10">₹5000 - ₹10,000.00</label>
                </div>
              </li>
              <li>
                <div class="form-group">
                  <input type="checkbox" id="check11">
                  <label for="check11">₹10,000.00 - ₹20,000.00</label>
                </div>
              </li>
              <li>
                <div class="form-group">
                  <input type="checkbox" id="check12">
                  <label for="check12">₹20,000.00 - ₹30,000.00</label>
                </div>
              </li>
              <li>
                <div class="form-group">
                  <input type="checkbox" id="check13">
                  <label for="check13">₹30,000.00 - ₹40,000.00</label>
                </div>
              </li>
              <li>
                <div class="form-group">
                  <input type="checkbox" id="check14">
                  <label for="check14">₹40,000.00 - ₹50,000.00</label>
                </div>
              </li>
              <li>
                <div class="form-group">
                  <input type="checkbox" id="check15">
                  <label for="check15">Above ₹50,000.00</label>
                </div>
              </li>
            </ul>
          </div>
          <div class="filter">
            <h3>star</h3>
            <ul>
              <li>
                <div class="form-group">
                  <input type="checkbox" id="check16">
                  <label for="check16">3 Star</label>
                </div>
              </li>
              <li>
                <div class="form-group">
                  <input type="checkbox" id="check17">
                  <label for="check17">4 Star</label>
                </div>
              </li>
              <li>
                <div class="form-group">
                  <input type="checkbox" id="check18">
                  <label for="check18">5 Star</label>
                </div>
              </li>
              <li>
                <div class="form-group">
                  <input type="checkbox" id="check19">
                  <label for="check19">Standard</label>
                </div>
              </li>
            </ul>
          </div>
          <div class="filter">
            <h3>Inclusions</h3>
            <ul>
              <li>
                <div class="form-group">
                  <input type="checkbox" id="check20">
                  <label for="check20"><img src="<?php echo get_template_directory_uri(); ?>/images/car-icon.png" alt="#" />Cab</label>
                </div>
              </li>
              <li>
                <div class="form-group">
                  <input type="checkbox" id="check21">
                  <label for="check21"><img src="<?php echo get_template_directory_uri(); ?>/images/cutlery-icon.png" alt="#" />Meal</label>
                </div>
              </li>
            </ul>
          </div>
          </form>
        </div>
      </div>
      <div class="col-lg-9">
      <h3>Packages</h3>

<?php 
// $args = array(
//     'tax_query' => array(
//         'relation' => 'AND',
//         array(
//             'taxonomy' => 'taxonomy1',
//             'field' => 'slug',
//             'terms' => array( 'slug-one' )
//         ),
//         array(
//             'taxonomy' => 'taxonomy2',
//             'field' => 'slug',
//             'terms' => array( 'slug-two' )
//         )
//     )
// );

//echo $p;
  //$args = array( 'post_type' => 'tourist','orderby' => 'ID', 'packages' => 'regenerative-sports-spine-and-spa','order' => 'ASC','posts_per_page' => -1 );


	$args = array( 'post_type' => 'tourist', 'packages' => $p,'orderby' => 'ID', 'order' => 'ASC','posts_per_page' => -1 );
	$loop = new WP_Query( $args );	
 	 
	while ( $loop->have_posts() ) { $loop->the_post();							
	$imgurl = get_the_post_thumbnail_url( get_the_ID(), 'full' );
  $content = get_the_excerpt();
  $title = get_the_title();
 
  $id = $loop->post->ID;

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
<input type="hidden" name="" class="answerhi" id="answerhi_<?php echo $id; ?>" value="">
<input type="hidden" name="" id="hh_<?php echo $id; ?>" value="">

<h3><i class="fas fa-rupee-sign"></i> <div id="answer_<?php echo $id; ?>"><?php echo get_field('tprice'); ?></div>  /-</h3>
                  <p>Per Person on twin sharing</p>
                  <a href="<?php the_permalink(); ?>" class="btn">VIEW DETAILS</a> </div>
              </div>
            </div>
          </div>
        </div>
         <?php } wp_reset_postdata(); ?>


<!-- <div class="row">
  <div class="col-lg-12">
    <h4>No Packages found !</h4>
  </div>
</div> -->


   

      </div>
    </div>
  </div>
</section>
<!--------- listing area stop ----------> 
<?php get_footer(); ?>