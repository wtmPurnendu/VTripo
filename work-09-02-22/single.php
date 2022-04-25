<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();


 //Acf field value
 $total_days__night = get_field('total_days__night');
 $customizable = get_field('customizable');
?>

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
<!------ banner area stop --------> 
<!--------- details area start ---------->
<section class="package_details_area">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div id="sync1" class="slider owl-carousel">
          
		<?php 
			$images = get_field('tugallery');
			if( $images ): ?>
			<?php foreach( $images as $image ): ?>
		<div class="item">
			<img src="<?php echo esc_url($image['sizes']['medium_large']); ?>" />
		</div>
		<?php endforeach; ?>
		<?php endif; ?>

		</div>
        <div id="sync2" class="navigation-thumbs owl-carousel">

		<?php 
			$images = get_field('tugallery');
			if( $images ): ?>
			<?php foreach( $images as $image ): ?>
		<div class="item">
			<img src="<?php echo esc_url($image['sizes']['medium_large']); ?>" />
		</div>
		<?php endforeach; ?>
		<?php endif; ?>
         
        </div>
      </div>
      <div class="col-lg-4">
        <div class="details_right">
          <h2 class="heading"><?php the_title(); ?></h2>
          <div class="box_one">
            <ul>
              <li class="day"><i class="far fa-clock"></i> <?php echo $total_days__night;?></li>
              <?php if($customizable=="Yes"){?>
                      <li>customizable</li>
                      <?php } ?>
            </ul>
          </div>
          <div class="box_two">
            <h3>Highlights :</h3>
            <h4>Hotel included in Package :</h4>
            <ul>
			<?php if( have_rows('hotel_stars') ): ?>
                  <?php $ps=1; while( have_rows('hotel_stars') ): the_row(); 
                      $total_star = get_sub_field('total_star');
                      $star_price = get_sub_field('star_price');
                    ?>
                    <li>
                        <input type="radio" onclick="check3('<?php echo $star_price;?>')" id="radio-<?php echo $ps; ?>" name="selector" value="<?php echo $star_price;?>">
                        <label for="radio-<?php echo $ps; ?>"><?php echo $total_star;?> Star</label>
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
      <!-- <li> <?php echo $facility_texts;?> :
          <label class="switch" for="checkbox-<?php echo $pps;?>">
          <input type="checkbox" id="checkbox-<?php echo $pps;?>" />
          <div class="slider round"></div>
          </label>
        </li> -->
  <li> <?php echo $facility_texts;?> :
        <label class="switch" for="checkbox-<?php echo $pps;?>">
        <input type="checkbox" name="one_check4" class="one_check4" id="checkbox-<?php echo $pps;?>" value="<?php echo $facility_prices;?>"/>
        <div class="slider round"></div>
        </label>
  </li>

                  <?php $pps++; endwhile; ?>
                  <?php endif; ?>
            </ul>
          </div>
          <div class="box_two">
           
			<?php if(get_field('attractions')){?>
                    <h4>Attractions : <?php echo get_field('attractions'); ?></h4>
            <?php } ?>
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
          <div class="price">
            <p>Starting from :
           
			<?php if(get_field('off_tri')){?>
                  <div class="offer_tag"><?php echo get_field('off_tri');?></div>
                  <?php } ?>
            </p>
<input type="hidden"  name="totprice" id="totprice" value="<?php echo get_field('tprice'); ?>">
<input type="hidden" name="" class="answerhi" id="answerhi" value="">
<input type="hidden" name="" id="hh" value="">

            <h3><i class="fas fa-rupee-sign"></i> <div id="answer"><?php echo get_field('tprice'); ?></div> /- 
              <?php if (get_field('tprice_copy')): ?>
                <span><i class="fas fa-rupee-sign"></i> <?php echo get_field('tprice_copy'); ?> /-</span>
              <?php endif ?>
              

            </h3>

            <p>Per Person on twin sharing</p>
            <div><a href="javascript:void(0);" data-toggle="modal" data-target="#myModal" class="btn btn-custom">Customise & Book</a></div>
          </div>
        </div>
      </div>

		<?php
		//Tab Section
		//Information
		$lavel1 = get_field('lavel');
		$departurereturn_location_text = get_field('departure_&_return_location_text');
		$departurereturn_location = get_field('departure_&_return_location');
		$overview = get_field('overview');
		//Tour Plan
		$tplavel = get_field('tplavel');
		
    //Additional Info
    $Additionallavel= get_field('ailavel');
		?>



      <div class="col-lg-12">
        <div class="package_description">
          <ul class="nav nav-tabs">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#tab1"><?php echo $lavel1;?></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab2"><?php echo $tplavel;?></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab3"><?php echo $Additionallavel; ?></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab4">FAQ</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab5">Review</a> </li>
          </ul>
          
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="tab1">
              <div class="information_box">
                <h3 class="heading"><?php echo $lavel1;?> :</h3>
                <div class="body">
                  <div class="box">
                    <h4><?php echo $departurereturn_location_text;?></h4>
					<?php if($departurereturn_location){?>
                    <p><?php echo $departurereturn_location;?></p>
					<?php }?>
                  </div>
                  <?php echo $overview;?>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab2">
              <div class="information_box">
                <h3 class="heading"><?php echo $tplavel;?> :</h3>
                <div class="body">
                  <div class="box">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      
					
				<?php if( have_rows('tour_plan') ): ?>
                  <?php  $pks=1;  while( have_rows('tour_plan') ): the_row(); 
                      $tour_plan_title = get_sub_field('tour_plan_title');
                      $tour_plan_content = get_sub_field('tour_plan_content');
                    ?>
                  <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $pks; ?>" aria-expanded="<?php if($pks==1){?>true<?php } else{?>false<?php } ?>" aria-controls="collapse-<?php echo $pks; ?>">
                            <div class="day_tag">Day <?php echo $pks; ?></div>
                            <?php echo $tour_plan_title;?> </a> </h4>
                        </div>
                        <div id="collapse-<?php echo $pks; ?>" class="panel-collapse collapse <?php if($pks==1){?>in show<?php }?>" role="tabpanel" aria-labelledby="heading-<?php echo $pks; ?>">
                          <div class="panel-body"><?php echo $tour_plan_content;?></div>
                        </div>
                      </div>
                  <?php $pks++; endwhile; ?>
                  <?php endif; ?>
					
					


                    </div>
                  </div>
                </div>
              </div>
            </div>
			
            <div class="tab-pane" id="tab3">
              <div class="information_box">
                <h3 class="heading"><?php echo $Additionallavel;?> :</h3>
                <div class="body">
                  <div class="box">
                    <h4>Cost includes :</h4>
                    <ul class="list1">
					<?php if( have_rows('cost_includes') ): ?>
                  <?php   while( have_rows('cost_includes') ): the_row(); 
                      $cost_includes_text = get_sub_field('cost_includes_text');
                      
                    ?>
                   <li><?php echo $cost_includes_text;?></li>
                  <?php  endwhile; ?>
                  <?php endif; ?>
                     
                     
                    </ul>
                  </div>
                </div>
              </div>
            </div>
			<?php 
			//faq
				$faqlavel= get_field('faqlavel');
			?>
            <div class="tab-pane" id="tab4">
              <div class="information_box">
                <h3 class="heading"><?php echo $faqlavel;?> :</h3>
                <div class="body">
                  <div class="box">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                     
					
					
					<?php if( have_rows('faq') ): ?>
                  <?php  $pkss=1;  while( have_rows('faq') ): the_row(); 
                      $tour_plan_title = get_sub_field('faq_question');
                      $tour_plan_content = get_sub_field('faq_answer');
                    ?>
                  <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $pkss; ?>" aria-expanded="<?php if($pkss==1){?>true<?php } else{?>false<?php } ?>" aria-controls="collapse<?php echo $pkss; ?>">
                            <div class="day_tag">Day <?php echo $pkss; ?></div>Q.
                            <?php echo $tour_plan_title;?> </a> </h4>
                        </div>
                        <div id="collapse<?php echo $pkss; ?>" class="panel-collapse collapse <?php if($pkss==1){?>in show<?php }?>" role="tabpanel" aria-labelledby="heading<?php echo $pkss; ?>">
                          <div class="panel-body"><?php echo $tour_plan_content;?></div>
                        </div>
                      </div>
                  <?php $pkss++; endwhile; ?>
                  <?php endif; ?>

                     


                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab5">
              <div class="information_box">
                <h3 class="heading">TRAVELEr Review :</h3>
                <div class="body">
                  <div class="box">
                    <div class="d-flex justify-content-between">
				<?php if( have_rows('review_section') ): ?>
                  <?php  $pkss=1;  while( have_rows('review_section') ): the_row(); 
                      $review_title = get_sub_field('review_title');
                      $review_content = get_sub_field('review_content');
					  $review_image = get_sub_field('review_image');
					  $review_count = get_sub_field('review_count');
                    ?>
                  	<div class="details_review">
                        <div class="media"> <img src="<?php echo  $review_image['url'];?>" alt="<?php echo  $review_image['alt'];?>" class="img_box">
                          <div class="media-body">
                            <h4><?php echo $review_title;?></h4>
                            <h5>
								<?php
							for ($x =1; $x <= $review_count; $x++) {?>

								<i class="zmdi zmdi-star"></i>

								<?php
 
								}
								
								?>
								
								
							
							</h5>
                          </div>
                        </div>
                        <p><?php echo $review_content;?></p>
                      </div>
                  <?php $pkss++; endwhile; ?>
                  <?php endif; ?>



                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="text-center mt-5"><a href="#" class="btn mr-2">Book this Tour</a></div> -->
      </div>
    </div>
  </div>
</section>
<!--------- details area stop ----------> 
      <!----------- footer area stop ----------> 
<div class="form_one">
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-lg">
     <div class="modal-content">

        <!-- Modal body -->
        <div id="overlay">
  <div class="cv-spinner">
    <span class="spinner"></span>
  </div>
</div>
        <!----------------->
        <div class="modal-body">
           <button type="button" class="close" data-dismiss="modal"><i class="zmdi zmdi-close"></i></button>
           <h3>Customize <strong>Tour Package</strong></h3>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla blandit augue ac tortor ornare aliquam. Cras pulvinar nunc consectetur viverra tempus.</p>
            <form type="post" action="" id="newCustomerForm">
<input type="hidden" name="mainprice" id="mainprice" value="<?php echo get_field('tprice'); ?>">
<input type="hidden" name="package" id="package" value="<?php echo the_title(); ?>">
           <div class="row row-7">
              <div class="col-lg-6 col-md-6">
                 <div class="form-group">
                    <label>Name</label>
                    <input type="text" required name="name" class="form-control" placeholder="Your Name">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/man.png" alt="#" title="" class="icon" /> 
                 </div>
              </div>
              <div class="col-lg-6 col-md-6">
                 <div class="form-group">
                    <label>Email</label>
                    <input type="email" required name="email" class="form-control" placeholder="Your Email">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/email.png" alt="#" title="" class="icon" /> 
                 </div>
              </div>
              <div class="col-lg-12 col-md-12">
                 <div class="form-group">
                    <label>Phone</label>
                    <input type="text" required name="phone" class="form-control" placeholder="Your Phone">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" alt="#" title="" class="icon" /> 
                 </div>
              </div>
              <div class="col-lg-12 col-md-12">
                 <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" required name="message" placeholder="Message"></textarea>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/chat2.png" alt="#" title="" class="icon" /> 
                 </div>
              </div>
              <div class="col-lg-12 col-md-12">
                <input type="hidden" name="action" value="get_data"/>
                 <button type="submit" class="btn">Plan my Holiday</button>
              </div>
           </div>
           </form>

        </div>
     </div>
  </div>
</div>
</div>
<?php
get_footer();
?>

<script type="text/javascript">
jQuery(document).on('submit', '#newCustomerForm', function(event) {
    event.preventDefault(); 
    var newCustomerForm = jQuery(this).serialize();
    jQuery("#overlay").fadeIn(300);　
 jQuery.ajax({
        type: 'POST',
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        dataType:'json',
        data: newCustomerForm, success: function (result) {

       if(result){
        jQuery("#overlay").fadeOut(300);
        console.log(result);
        swal("Message Send", "", "success", {
  button: "ok",
});
        jQuery('#newCustomerForm')[0].reset();
       }
        },
        error: function () {
            
            swal("Error Message Send", "", "error", {
  button: "ok",
});
        }
    });






});


</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style type="text/css">
    #button{
  display:block;
  margin:20px auto;
  padding:10px 30px;
  background-color:#eee;
  border:solid #ccc 1px;
  cursor: pointer;
}
#overlay{   
  position: fixed;
  top: 0;
  z-index: 100;
  width: 100%;
  height:100%;
  display: none;
  background: rgba(0,0,0,0.6);
}
.cv-spinner {
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;  
}
.spinner {
  width: 40px;
  height: 40px;
  border: 4px #ddd solid;
  border-top: 4px #2e93e6 solid;
  border-radius: 50%;
  animation: sp-anime 0.8s infinite linear;
}
@keyframes sp-anime {
  100% { 
    transform: rotate(360deg); 
  }
}
.is-hide{
  display:none;
}
</style>