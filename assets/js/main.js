$(document).ready(function () { 
    // navbar shrink
    $(window).on("scroll", function(){
        if($(this).scrollTop() > 90){
            $(".navbar").addClass("navbar-shrink")
        }else{
            $(".navbar").removeClass("navbar-shrink")
        }
    })

    // section2
    $('.section2-carousel').owlCarousel({
        loop:true,
        margin:0,
        responsiveClass:true,
        autoplay: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

	// tim
	$('.tim-carousel').owlCarousel({
		loop:false,
		margin:0,
		responsiveClass:true,
		autoplay: true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1000:{
				items:3
			}
		}
	})
 })
