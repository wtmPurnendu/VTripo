jQuery(window).scroll(function () {
  if (jQuery(this).scrollTop() > 100) {
    jQuery(".header_area").addClass("fix");
  } else {
    jQuery(".header_area").removeClass("fix");
  }
});



 jQuery(document).ready(function() {
        jQuery(".menu li").find("ul").parent().append("<span></span>");
       jQuery(".menuButton").click(function() {
           jQuery( ".menuButton" ).toggleClass( "arrow_change" );
		 	jQuery(".menuButton + ul").slideToggle(); 
		});
	   jQuery(".menu ul li span").click(function(){
           if(jQuery("span").parent().children("ul").is(":visible")){
               jQuery(this).parent().siblings().children("ul").slideUp();
           }
            jQuery(this).parent().children("ul").slideToggle();  
    });
    });
 
 jQuery(".myAccount span").click(function() {
           jQuery( ".myAccount span" ).toggleClass( "arrow_change" );
		 	jQuery(".myAccountDropdown").slideToggle(); 
		});
		
    //testimonial slider

        $('#testimonial_slider').owlCarousel({
            navigation : true,     
            autoplay: true,
            autoplayTimeout:3000,
            loop: true,
            margin:50,
            nav:false,
            dots:true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                    margin: 10,
                },
                768: {
                    items: 2, 
                    margin:10,                   
                },
                992: {
                    items: 2,
                },
                1000: {
                    items: 2,
                }
            }
        });


        // package slider

        $('#package_slider').owlCarousel({
            navigation : true,     
            autoplay: true,
            autoplayTimeout:3000,
            loop: true,
            margin:20,
            nav:true,
            dots:false,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            responsive: {
                0: {
                    items: 2,
                    margin: 10,
                },
                600: {
                    items: 3,
                    margin: 10,
                },
                768: {
                    items: 3,                    
                },
                992: {
                    items: 3,
                },
                1000: {
                    items: 4,
                }
            }
        });

        // hot selling
        $('#hot_selling_slider').owlCarousel({
            navigation : true,     
            autoplay: true,
            autoplayTimeout:3000,
            loop: true,
            margin:0,
            nav:true,
            dots:false,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            responsive: {
                0: {
                    items: 2,
                },
                600: {
                    items: 3,
                },
                768: {
                    items: 3,                    
                },
                992: {
                    items: 3,
                },
                1000: {
                    items: 4,
                }
            }
        });


       // details image

        var sync1 = $(".slider");
var sync2 = $(".navigation-thumbs");

var thumbnailItemClass = '.owl-item';

var slides = sync1.owlCarousel({
    video:true,
  startPosition: 12,
  items:1,
  loop:true,
  margin:5,
  autoplay:true,
  autoplayTimeout:6000,
  autoplayHoverPause:false,
  nav: false,
  dots: false
}).on('changed.owl.carousel', syncPosition);

function syncPosition(el) {
  $owl_slider = $(this).data('owl.carousel');
  var loop = $owl_slider.options.loop;

  if(loop){
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);
    if(current < 0) {
        current = count;
    }
    if(current > count) {
        current = 0;
    }
  }else{
    var current = el.item.index;
  }

  var owl_thumbnail = sync2.data('owl.carousel');
  var itemClass = "." + owl_thumbnail.options.itemClass;


  var thumbnailCurrentItem = sync2
  .find(itemClass)
  .removeClass("synced")
  .eq(current);

  thumbnailCurrentItem.addClass('synced');

  if (!thumbnailCurrentItem.hasClass('active')) {
    var duration = 300;
    sync2.trigger('to.owl.carousel',[current, duration, true]);
  }   
}
var thumbs = sync2.owlCarousel({
  startPosition: 12,
  items:4,
  loop:false,
  margin:5,
  autoplay:false,
  nav: false,
  dots: false,
  onInitialized: function (e) {
    var thumbnailCurrentItem =  $(e.target).find(thumbnailItemClass).eq(this._current);
    thumbnailCurrentItem.addClass('synced');
  },
})
.on('click', thumbnailItemClass, function(e) {
    e.preventDefault();
    var duration = 300;
    var itemIndex =  $(e.target).parents(thumbnailItemClass).index();
    sync1.trigger('to.owl.carousel',[itemIndex, duration, true]);
}).on("changed.owl.carousel", function (el) {
  var number = el.item.index;
  $owl_slider = sync1.data('owl.carousel');
  $owl_slider.to(number, 100, true);
});