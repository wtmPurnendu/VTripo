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
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Packages</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Terms and Condition</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-4">
                            <div class="footer footer_sape">
                                <h3>Other Links</h3>
                                <ul>
                                    <li><a href="#">Flights</a></li>
                                    <li><a href="#">Hotels</a></li>
                                    <li><a href="#">Buses</a></li>
                                    <li><a href="#">Trains</a></li>
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
                                <h4>Delhi :</h4>
                                <p>Office UG-23, Upper Ground Floor, Plot 10, Vishal Tower, Janakpuri, District Centre, Delhi-110058</p>
                            </div>
                            <div class="address_box">
                                <h4>Dubai :</h4>
                                <p>Office 606, Single Business Tower, Business Bay, Dubai, UAE email : <a href="mailto:info@bizdesn.com">info@bizdesn.com</a></p>
                            </div>
                        </div> 
                        <div class="address_box w-50">
                            <h4>Kochi :</h4>
                            <p>#36/122, Namboori Madam Centre, Pathadipalam, Kalamessery, Kochi-682024</p>
                        </div>                       
                    </div>
                </div>
            </div>
            <div class="text-center">
                <ul class="footer_social_link">
                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.png" alt="facebook icon" title="" /></a></li>
                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.png" alt="twitter icon" title="" /></a></li>
                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram-icon.png" alt="instagram icon" title="" /></a></li>
                    <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/youtube-icon.png" alt="youtube icon" title="" /></a></li>
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


function check(browser) {
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

jQuery('.one_check').change(function(){
    
    var tot=0;
    var mytext=[];
    jQuery('input[name="one_check"]:checked').each(function(i){
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
    
    }else{
    var total6 =  parseFloat((+tot + +totprice));
    
    jQuery("#answer").html(total6);
    }
   
   

//alert(jQuery(".final_amount").html(tot));
    //jQuery(".final_amount").html(tot);
    //jQuery(".mytext").val(mytext);
 
    //jQuery(".final_amount").html(+total6 + +tot);


});
</script>
</body>
</html>