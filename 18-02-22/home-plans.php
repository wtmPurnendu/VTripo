<?php
/* Template Name: Home Plans */

get_header();  ?>

<div id="overlay">
  <div class="cv-spinner">
    <span class="spinner"></span>
  </div>
</div>
<div class="plans_section wp_left">
<div class="container">
<h2>Quick Possessions</h2>


<div class="row quickbox" id="configform">

<div id="t1">

    <div class="col-md-3" id="configform1"> 

    <select id="property_communities" placeholder="Select Community " multiple="multiple">
           
           <?php 
             $taxonomies = get_terms( array(
                         'taxonomy' => 'property_communities',
                         'hide_empty' => false
                     ) );
                     foreach($taxonomies as $term) { 
            ?>
            <option value="<?php echo $term->term_id;?>" ><?php echo $term->name; ?></option>
             <?php }  ?>
        </select>

  </div>

 <div class="col-md-3"> 
    <select id="property_types" placeholder=" Select Home " multiple="multiple">
            <!--<option onclick="filterSelection('Author')"></option>-->
            <?php
             $quick = $_GET[home];
              $quick2 = $_GET[home2];
            ?>
           <?php
                     $taxonomies = get_terms( array(
                         'taxonomy' => 'property_types',
                         'hide_empty' => false
                     ) );
                     foreach($taxonomies as $term) {
                     ?>
                    <option <?php if($term->term_id == $quick || $term->term_id == $quick2) {?>selected="selected" <?php } ?>value="<?php echo $term->term_id;?>" ><?php echo $term->name; ?></option>
                    <?php }  ?>
            <!-- <option value="Home Plans" >Home Plans</option>
            <option value="Quick Possessions">Quick Possessions</option>
            <option value="Show Homes">Show Homes</option> -->
           
            
        </select>
  </div>

  <div class="col-md-3"> 
    <select id="home_type" placeholder=" Select Home Type " multiple>
           <?php  $taxonomies = get_terms( array(  'taxonomy' => 'home_type','hide_empty' => false
                     ) );foreach($taxonomies as $term) { ?>
 <option selected="selected" value="<?php echo $term->term_id;?>"><?php echo $term->name; ?></option><?php }  ?>
        </select>
  </div>

  <div class="col-md-3"> 
    <select  id="area_range" placeholder=" Select Sq.ft." multiple>
<?php $taxonomies = get_terms( array(   'taxonomy' => 'area_range', 'hide_empty' => false ) );
                     foreach($taxonomies as $term) {?>
                <option selected="selected" value="<?php echo $term->term_id;?>" ><?php echo $term->name; ?></option> <?php }  ?></select></div>
  <div class="col-md-3"><select id="price_range" placeholder=" Select Price " multiple>
         <?php $taxonomies = get_terms( array(  'taxonomy' => 'price_range', 'hide_empty' => false
                     ) );foreach($taxonomies as $term) { ?><option selected="selected" value="<?php echo $term->term_id;?>" ><?php echo $term->name; ?></option>
                     <?php }  ?></select></div>
<!-- <input type="reset" class='clearAll' value="Reset" id="submitbutton"> -->
<button id="clearAll" class='clearAll'>Reset</button>
</div>



</div>




</div>
</div>
<div class="gallery_section wp_left">
<div class="container">
<div class="top_icon">
<img src="<?php bloginfo('template_url');?>/images/Group 437.png" class="img-responsive" />
</div>
<div class="inner_wrapper">
<div class="row" id="opt_lesson_list">
<?php
if(isset($_GET['community']) || isset($_GET['property_type']) || isset($_GET['home_type']) || isset($_GET['area'] ) ||isset($_GET['price']))  {
    $community =$_GET['community'];
    $property_type =$_GET['property_type'];
    $home_type =$_GET['home_type'];
    $area =$_GET['area'];
    $price =$_GET['price'];   
    
     $property_args = array(
    'post_type' => 'property',
    'posts_per_page'=>'-1' ,
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'property_types',
            'field' => 'id',
            'terms' => $property_type
        ),
        array(
            'taxonomy' => 'home_type',
            'field' => 'id',
            'terms' => $home_type,
        ),
            array(
            'taxonomy' => 'area_range',
            'field' => 'id',
            'terms' => $area,
        ),
        array(
            'taxonomy' => 'price_range',
            'field' => 'id',
            'terms' => $price,
        )
    )
);

}
else
{
$property_args = array(
    'post_type' => 'property',
     'posts_per_page'=>'-1',
  
    'tax_query' => array(
        array(
            'taxonomy' => 'property_types',
            'field'    => 'slug',
            'terms'    => 'quick-possession',
        ),
    ),
   
);


}
$property_query = new WP_Query( $property_args );








$property_query = new WP_Query( $property_args );
if ( $property_query->have_posts() ) :
while ( $property_query->have_posts() ) : $property_query->the_post();
$post_id=get_the_id();

if(isset($_GET['community']) || isset($_GET['property_type']) || isset($_GET['home_type']) || isset($_GET['area'] ) ||isset($_GET['price']))  {
    
    $comm_id = $_GET['community'];
    $comm_choose = get_field('communities_choose');
    if(in_array($comm_id, $comm_choose)) {
?>
<div class="col-sm-4">
<div class="wp_gallery_section wp_left">
<div class= "wp_left">
<h3><?php the_title(); ?></h3>
<h5> <?php $comm_sels=get_field('communities_choose'); echo get_field('location__city_name',$comm_sels[0]) ?></h5>
</div>
<div class="gallery_slider wp_left">
<div class="owl-carousel owl-carousel_gallery_slider owl-theme">

    <div class="item"><?php echo get_the_post_thumbnail( $post_id, 'listing-grid', array( 'class' => 'image-responsive' ) );?></div>
    <?php 
$images = get_field('additional_images');
$size = 'flisting-grid'; // (thumbnail, medium, large, full or custom size)
if( $images ): ?>
 
        <?php foreach( $images as $image ): ?>
           <div class="item">
     <img src="<?php echo esc_url($image['sizes']['listing-grid']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
        <?php endforeach; ?>

<?php endif; ?>
    </div>
</div>
<div class= "wp_left">
<h4 class="gallery_red_title"> <?php the_field('sub_title'); ?></h4>
</div>
<ul class="list">
    <li>
<img src="<?php bloginfo('template_url');?>/images/Group 526.png" class="img-responsive" />
<?php 
$bedrooms = get_the_terms( get_the_ID(), 'bedrooms' ); 
foreach($bedrooms as $bedroom) {
    echo $bedroom->name." Bedrooms";
    }
?>
</li>
        <li>
<img src="<?php echo get_template_directory_uri(); ?>/images/icon-small4.png">
<?php 
$bedrooms = get_the_terms( get_the_ID(), 'bathrooms' );
foreach($bedrooms as $bedroom) {
    echo $bedroom->name." Bathrooms";
    }
?>
</li>
    
<li>
<img src="<?php echo get_template_directory_uri(); ?>/images/icon-small3.png">
<?php 
//$bedrooms = get_terms( 'home_type'); 
$bedrooms = get_the_terms( get_the_ID(), 'home_type' );
foreach($bedrooms as $bedroom) {
    echo $bedroom->name;
    }
?>
</li>
<li>
<img src="<?php echo get_template_directory_uri(); ?>/images/icon-small5.png">
<?php 
$bedrooms = get_the_terms( get_the_ID(), 'car_garage' );
foreach($bedrooms as $bedroom) {
    echo $bedroom->name." Car Garage";
    }
?>
</li>


</ul>
<div class="wp_left" style="text-align:">
<a class="view_button" href="<?php the_permalink(); ?>">View</a>
</div>
</div>
</div>
<?php
    }


}

else
{ ?>
<div class="col-sm-4">
<div class="wp_gallery_section wp_left">
<div class= "wp_left">
<h3><?php the_title(); ?></h3>
<h5> <?php $comm_sels=get_field('communities_choose'); echo get_field('location__city_name',$comm_sels[0]) ?></h5>
</div>
<div class="gallery_slider wp_left">
<div class="owl-carousel owl-carousel_gallery_slider owl-theme">

    <div class="item"><?php echo get_the_post_thumbnail( $post_id, 'listing-grid', array( 'class' => 'image-responsive' ) );?></div>
    <?php 
$images = get_field('additional_images');
$size = 'flisting-grid'; // (thumbnail, medium, large, full or custom size)
if( $images ): ?>
 
        <?php foreach( $images as $image ): ?>
           <div class="item">
     <img src="<?php echo esc_url($image['sizes']['listing-grid']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
        <?php endforeach; ?>

<?php endif; ?>
    </div>
</div>
<div class= "wp_left">
<h4 class="gallery_red_title"> <?php the_field('sub_title'); ?></h4>
</div>
<ul class="list lst_newss">
    <li>
<img src="<?php bloginfo('template_url');?>/images/Group 526.png" class="img-responsive" />
<?php 
$bedrooms = get_the_terms( get_the_ID(), 'bedrooms' ); 
foreach($bedrooms as $bedroom) {
    echo $bedroom->name." Bedrooms";
    }
?>
</li>
        <li>
<img src="<?php echo get_template_directory_uri(); ?>/images/icon-small4.png">
<?php 
$bedrooms = get_the_terms( get_the_ID(), 'bathrooms' );
foreach($bedrooms as $bedroom) {
    echo $bedroom->name." Bathrooms";
    }
?>
</li>
    
<li>
<img src="<?php echo get_template_directory_uri(); ?>/images/icon-small2.png">
<?php 
//$bedrooms = get_terms( 'home_type'); 
$bedrooms = get_the_terms( get_the_ID(), 'area' );
foreach($bedrooms as $bedroom) {
    echo $bedroom->name." <b>sq.ft.</b>";
    }
?>
</li>
<li>
<img src="<?php echo get_template_directory_uri(); ?>/images/Group 637.png">
<?php 
echo "<b>".get_field('property_price')."</b>";
/*
$bedrooms = get_the_terms( get_the_ID(), 'car_garage' );
foreach($bedrooms as $bedroom) {
    echo $bedroom->name." Car Garage";
    }
*/
?>
</li>


</ul>
<div class="wp_left" style="text-align:">
<a class="view_button" href="<?php the_permalink(); ?>">View</a>
</div>
</div>
</div>
<?php
     
}

?>




<?php endwhile;

 else: ?>
<p class="ujuj"><?php _e('Sorry, no property  matched your criteria.'); ?></p>
<?php endif; ?>

</div>
</div>
</div>
</div>
<?php get_footer(); ?>

<script type="text/javascript">
jQuery(document).ready(function($) {
   $("#property_communities,#property_types,#home_type,#area_range,#price_range").change(function(){
        call_ajax();
    });
});


function call_ajax(){

    var property_communities = $('#property_communities').val();
    var property_types = $('#property_types').val();
    var home_type = $('#home_type').val();
    var area_range = $('#area_range').val();
    var price_range = $('#price_range').val();
    //alert(price_range)



    $.ajax ({
        type: 'POST',
        //dataType: "json",
        beforeSend: function() {
              $("#overlay").fadeIn(300);
        },
        url: '<?php echo home_url("/ajax-quick/");?>',
        data: {property_com:property_communities, property_type:property_types,hometype:home_type,area_range:area_range,price_range:price_range},
        cache: false,
        success : function(htmlresponse) {
            if (htmlresponse!=""){   
                $("#opt_lesson_list").html(htmlresponse);
                var owl = $(".owl-carousel");
                    owl.owlCarousel({
                        items: 1,
                        navigation: false,
                        autoHeight:true
                    });

                    $("#overlay").fadeOut(300);
            }
            //alert(htmlresponse);
            console.log(htmlresponse);
        },error:function(e){
            alert("error");
        }
    });
   
    //console.log(2); 
}

// $('.clearAll').on('click', function() {
//     alert(2);
//   $('.dropdown').val([]);
// });

    jQuery(function () {
        jQuery("#submitbutton").bind("click", function () {

//jQuery('.choices__button').click();

 jQuery(".choices__item--selectable").remove();
             
            
        });

$("#clearAll").click(function(){

  $("#t1").remove();

   document.getElementById("configform").innerHTML += 
    '<div class="col-md-3"><select id="property_communities" onchange="call_ajax();" placeholder="Select Community " multiple="multiple"><?php 
             $taxonomies = get_terms( array(
                         'taxonomy' => 'property_communities',
                         'hide_empty' => false
                     ) );
                     foreach($taxonomies as $term) { 
            ?><option value="<?php echo $term->term_id;?>" ><?php echo $term->name; ?></option><?php }  ?></select></div><div class="col-md-3"><select id="property_types" onchange="call_ajax();" placeholder=" Select Home " multiple="multiple"><?php
            $quick = $_GET[quick];?><?php
                     $taxonomies = get_terms( array(
                         'taxonomy' => 'property_types',
                         'hide_empty' => false
                     ) );foreach($taxonomies as $term) {?><option value="<?php echo $term->term_id;?>" ><?php echo $term->name; ?></option><?php }  ?></select></div><div class="col-md-3"><select onchange="call_ajax();" id="home_type" placeholder=" Select Home Type " multiple><?php  $taxonomies = get_terms( array(  'taxonomy' => 'home_type','hide_empty' => false) );foreach($taxonomies as $term) { ?><option value=<?php echo $term->term_id;?>"><?php echo $term->name; ?></option><?php }  ?></select></div><div class="col-md-3"><select onchange="call_ajax();"   id="area_range" placeholder="Select Sq.ft." multiple><?php $taxonomies = get_terms( array(   'taxonomy' => 'area_range', 'hide_empty' => false ) ); foreach($taxonomies as $term) {?><option value="<?php echo $term->term_id;?>" ><?php echo $term->name; ?></option> <?php }  ?></select></div><div class="col-md-3"><select id="price_range" onchange="call_ajax();" placeholder=" Select Price " multiple><?php $taxonomies = get_terms( array(  'taxonomy' => 'price_range', 'hide_empty' => false
                     ) );foreach($taxonomies as $term) { ?><option value="<?php echo $term->term_id;?>" ><?php echo $term->name; ?></option><?php } ?></select></div><button id="clearAll" class="clearAll">Reset</button>';

 var multipleCancelButton = new Choices('#property_communities', {
 removeItemButton: true,
 });
  var multipleCancelButton = new Choices('#property_types', {
 removeItemButton: true,
 });

    var multipleCancelButton = new Choices('#home_type', {
 removeItemButton: true,
 });

       var multipleCancelButton = new Choices('#area_range', {
 removeItemButton: true,
 });

        var multipleCancelButton = new Choices('#price_range', {
 removeItemButton: true,
 });

});




    });
</script>


<style>
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