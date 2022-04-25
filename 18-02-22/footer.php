<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
 <!----------- footer area start ---------->
    <footer class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-4">
                            <div class="footer footer_sape">
                                <div class="footer_logo"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" align="logo" title="" /></div>
                                <p class="copyright">Copyright © 2022 <a href="#" target="_blank">VTripo</a>. All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4">
                            <div class="footer footer_sape">
                                <h3>Quick Links</h3>
                                <ul>
                                <?php
                                if ( has_nav_menu( 'quick' ) ) {
                                    wp_nav_menu(
                                        array(
                                            'container'  => '',
                                            'items_wrap' => '%3$s',
                                            'theme_location' => 'quick',
                                        )
                                    );

                                } 
                                ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4">
                            <div class="footer footer_sape">
                                <h3>Other Links</h3>
                                <ul>
                                <?php
            if ( has_nav_menu( 'other-link' ) ) {
                wp_nav_menu(
                    array(
                        'container'  => '',
                        'items_wrap' => '%3$s',
                        'theme_location' => 'other-link',
                    )
                );

            } 
            ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="footer">
                        <h3>Contact Us</h3>
                        <div class="d-flex justify-content-between">
                            <div class="address_box">
                                <h4><?php echo get_field('address_title_1','option'); ?></h4>
                                <p><?php echo get_field('address_1','option'); ?></p>
                            </div>
                            <div class="address_box">
                                <h4><?php echo get_field('address_title_2','option'); ?></h4>
                                <p><?php echo get_field('address_2','option'); ?></p>
                            </div>
                        </div> 
                        <div class="address_box w-50">
                            <h4><?php echo get_field('address_title_3','option'); ?></h4>
                            <p><?php echo get_field('address_3','option'); ?></p>
                        </div>                       
                    </div>
                </div>
            </div>
            <div class="text-center">
                <ul class="footer_social_link">
                 
                <?php if( have_rows('social','option') ): ?>
                  <?php while( have_rows('social','option') ): the_row(); 
                     $social_logo = get_sub_field('social_logo');
                     $social_link = get_sub_field('social_link');
                ?>
                <li>
                  <a href="<?php echo $social_link; ?>" target="_blank">
                    <img src="<?php echo $social_logo['url'];?>" alt="<?php echo $social_logo['alt'];?>" title="<?php echo $social_logo['name'];?>" />
                  </a>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>
               
                  </ul>
            </div>
        </div>
    </footer>
    <!----------- footer area stop ---------->

    <a href="#" class="chat"><img src="<?php echo get_template_directory_uri(); ?>/images/chat.png" /></a>

   
<?php wp_footer(); ?>
<script>
    new WOW().init();
</script>
<script type="text/javascript">
//jQuery('#check_id').val();


function check1(browser,id) {
    
    var a = parseInt(browser);
    var totprice = parseInt(jQuery('#totprice_'+id).val());
    var hidenvalue = parseInt(jQuery('#hh_'+id).val());

    if(hidenvalue){
        var subtotal = totprice + a + hidenvalue;
        jQuery("#answer_"+id).html(subtotal);
        jQuery(".answerhi_"+id).val(subtotal);
    }else{
        var subtotal = totprice + a;
        jQuery("#answer_"+id).html(subtotal);
        jQuery(".answerhi_"+id).val(subtotal);
    }
    
   //alert(variable);
}

function check2(value,id){
    //alert(id);
    //alert(value);
    var tot=0;
    var mytext=[];
    var name_id = 'one_check_'+id;
    jQuery('input[name="'+name_id+'"]:checked').each(function(i){
    tot+=parseInt(jQuery(this).val());
    mytext[i] =  jQuery(this).next('label').text();

    
    });



    var totprice = parseInt(jQuery('#totprice_'+id).val());
    var e = jQuery(".answerhi_"+id).val();
    //hidden value
    var hh = parseFloat((+tot));
    //alert(hh);
    jQuery("#hh_"+id).val(hh);
    
    if(e){
    var total6 =  parseFloat((+tot + +e));
    
    jQuery("#answer_"+id).html(total6);
    
    }else{
    var total6 =  parseFloat((+tot + +totprice));
    
    jQuery("#answer_"+id).html(total6);
    }
}


//Details page
function check3(browser) {
    var a = parseInt(browser);
    var totprice = parseInt(jQuery('#totprice').val());
    var hidenvalue = parseInt(jQuery('#hh').val());

    if(hidenvalue){
        var subtotal = totprice + a + hidenvalue;
        jQuery("#answer").html(subtotal);
        jQuery(".answerhi").val(subtotal);
    }else{
        var subtotal = totprice + a;
        jQuery("#answer").html(subtotal);
        jQuery(".answerhi").val(subtotal);
    }
    
   //alert(variable);
}

jQuery('.one_check4').change(function(){
    
    var tot=0;
    var mytext=[];
    jQuery('input[name="one_check4"]:checked').each(function(i){
    tot+=parseInt(jQuery(this).val());
    //mytext[i] =  $(this).next('label').text()+':'+$(this).val();
    mytext[i] =  jQuery(this).next('label').text();

    
    });



    var totprice = parseInt(jQuery('#totprice').val());
    var e = jQuery(".answerhi").val();
    //hidden value
    var hh = parseFloat((+tot));
    //alert(hh);
    jQuery("#hh").val(hh);
    
    if(e){
    var total6 =  parseFloat((+tot + +e));
    
    jQuery("#answer").html(total6);
    jQuery("#mainprice").val(total6);
    
    }else{
    var total6 =  parseFloat((+tot + +totprice));
    
    jQuery("#answer").html(total6);
    jQuery("#mainprice").val(total6);
    }
   
   




});


//jQuery('.one_check').change(function(){
    
    // var tot=0;
    // var mytext=[];
    // jQuery('input[name="one_check"]:checked').each(function(i){
    // tot+=parseInt(jQuery(this).val());
    // //mytext[i] =  $(this).next('label').text()+':'+$(this).val();
    // mytext[i] =  jQuery(this).next('label').text();

    
    // });



    // var totprice = parseInt(jQuery('#totprice').val());
    // var e = jQuery(".answerhi").val();
    // //hidden value
    // var hh = parseFloat((+tot));
    // //alert(hh);
    // jQuery("#hh").val(hh);
    
    // if(e){
    // var total6 =  parseFloat((+tot + +e));
    
    // jQuery("#answer").html(total6);
    
    // }else{
    // var total6 =  parseFloat((+tot + +totprice));
    
    // jQuery("#answer").html(total6);
    // }
   
   

//alert(jQuery(".final_amount").html(tot));
    //jQuery(".final_amount").html(tot);
    //jQuery(".mytext").val(mytext);
 
    //jQuery(".final_amount").html(+total6 + +tot);


//});
</script>
<script type="text/javascript">

jQuery(document).ready(function(){
var favorite = [];
var destination = [];
var price = [];
var star = [];
var inclusions = [];

jQuery('.p').click(function() {
  //1
    jQuery.each(jQuery("input[name='dp']:checked"), function(){
          price.push(jQuery(this).val());
    });
    //2
    jQuery.each(jQuery("input[name='p']:checked"), function(){
      favorite.push(jQuery(this).val());
    });
    //3
    jQuery.each(jQuery("input[name='d']:checked"), function(){
      destination.push(jQuery(this).val());
    });
    //4
    jQuery.each(jQuery("input[name='ss']:checked"), function(){
      star.push(jQuery(this).val());
    });
    //5
    jQuery.each(jQuery("input[name='in']:checked"), function(){
      inclusions.push(jQuery(this).val());
    });
var url = 'https://webtechnomind.co.in/VTripo/packages/?p='+favorite.join(",")+'&d='+destination.join(",")+'&pp='+price.join(",")+'&ss='+star.join(",")+'&in='+inclusions.join(",");
window.location.href = url;

});
//Destination
jQuery('.d').click(function() {
 //1
    jQuery.each(jQuery("input[name='dp']:checked"), function(){
          price.push(jQuery(this).val());
    });
    //2
    jQuery.each(jQuery("input[name='p']:checked"), function(){
      favorite.push(jQuery(this).val());
    });
    //3
    jQuery.each(jQuery("input[name='d']:checked"), function(){
      destination.push(jQuery(this).val());
    });
    //4
    jQuery.each(jQuery("input[name='ss']:checked"), function(){
      star.push(jQuery(this).val());
    });
    //5
    jQuery.each(jQuery("input[name='in']:checked"), function(){
      inclusions.push(jQuery(this).val());
    });
var url = 'https://webtechnomind.co.in/VTripo/packages/?p='+favorite.join(",")+'&d='+destination.join(",")+'&pp='+price.join(",")+'&ss='+star.join(",")+'&in='+inclusions.join(",");
window.location.href = url;

});
//Destination end
//Price
jQuery('.dp').click(function() {
    //alert(2);
    //1
    jQuery.each(jQuery("input[name='dp']:checked"), function(){
          price.push(jQuery(this).val());
    });
    //2
    jQuery.each(jQuery("input[name='p']:checked"), function(){
      favorite.push(jQuery(this).val());
    });
    //3
    jQuery.each(jQuery("input[name='d']:checked"), function(){
      destination.push(jQuery(this).val());
    });
    //4
    jQuery.each(jQuery("input[name='ss']:checked"), function(){
      star.push(jQuery(this).val());
    });
    //5
    jQuery.each(jQuery("input[name='in']:checked"), function(){
      inclusions.push(jQuery(this).val());
    });
var url = 'https://webtechnomind.co.in/VTripo/packages/?p='+favorite.join(",")+'&d='+destination.join(",")+'&pp='+price.join(",")+'&ss='+star.join(",")+'&in='+inclusions.join(",");
window.location.href = url;

});
//Price End

//Star
jQuery('.ss').click(function() {
    //alert(3);
    //1
    jQuery.each(jQuery("input[name='dp']:checked"), function(){
          price.push(jQuery(this).val());
    });
    //2
    jQuery.each(jQuery("input[name='p']:checked"), function(){
      favorite.push(jQuery(this).val());
    });
    //3
    jQuery.each(jQuery("input[name='d']:checked"), function(){
      destination.push(jQuery(this).val());
    });
    //4
    jQuery.each(jQuery("input[name='ss']:checked"), function(){
      star.push(jQuery(this).val());
    });
    //5
    jQuery.each(jQuery("input[name='in']:checked"), function(){
      inclusions.push(jQuery(this).val());
    });
var url = 'https://webtechnomind.co.in/VTripo/packages/?p='+favorite.join(",")+'&d='+destination.join(",")+'&pp='+price.join(",")+'&ss='+star.join(",")+'&in='+inclusions.join(",");
window.location.href = url;

});
//Star End


//Inclusions
jQuery('.in').click(function() {
    
    //1
    jQuery.each(jQuery("input[name='dp']:checked"), function(){
          price.push(jQuery(this).val());
    });
    //2
    jQuery.each(jQuery("input[name='p']:checked"), function(){
      favorite.push(jQuery(this).val());
    });
    //3
    jQuery.each(jQuery("input[name='d']:checked"), function(){
      destination.push(jQuery(this).val());
    });
    //4
    jQuery.each(jQuery("input[name='ss']:checked"), function(){
      star.push(jQuery(this).val());
    });
    //5
    jQuery.each(jQuery("input[name='in']:checked"), function(){
      inclusions.push(jQuery(this).val());
    });
var url = 'https://webtechnomind.co.in/VTripo/packages/?&p='+favorite.join(",")+'&d='+destination.join(",")+'&pp='+price.join(",")+'&ss='+star.join(",")+'&in='+inclusions.join(",");
alert(url);
window.location.href = url;

});
//Inclusions End


});


//var url = 'https://webtechnomind.co.in/VTripo/packages/?p='+favorite.join(",")+'&d='+destination.join(",");
//window.location.href = url;





//alert(favorite.join(","));
console.log(favorite.join(","));

</script>
</body>
</html>
