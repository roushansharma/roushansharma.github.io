function followCursor() {
        var $circleCursor = $('.cursor');
        function moveCursor(e) {
	        var t = e.clientX + "px",
                n = e.clientY + "px";
			
	        TweenMax.to($circleCursor, .2, {
                left: t,
                top: n,
	            ease: 'Power1.easeOut'
            });
        }
        $(window).on('mousemove', moveCursor);
  
        // simple zoom
        function zoomCursor(e) {
	        TweenMax.to($circleCursor, .1, {
	            scale: 4,
	            ease: 'Power1.easeOut'
            });
		    $($circleCursor).removeClass('cursor-close');
        }  
        $('a, .zoom-cursor').on('mouseenter', zoomCursor);
  
        // close
        function closeCursor(e) {
	        TweenMax.to($circleCursor, .1, {
	            scale: 4,
	            ease: 'Power1.easeOut'
            });
		    $($circleCursor).addClass('cursor-close');
        }  
        $('.trigger-close').on('mouseenter', closeCursor);  

        // default
        function defaultCursor(e) {
	        TweenLite.to($circleCursor, .1, {
	            scale: 1,
	            ease: 'Power1.easeOut'
            });
		    $($circleCursor).removeClass('cursor-close');
        }
  
        $('a, .zoom-cursor, .trigger-close, .trigger-plus').on('mouseleave', defaultCursor);
    };
	
	followCursor(); //Init
(function($){
    "use strict"
    var rou = {};

    rou.WebLoad = function(){
      document.getElementById("loading").style.display = "none"; 
    }



    rou.ClientSlider = function(){
      var testimonials_slider = $('#client-slider-single');
        testimonials_slider.owlCarousel({
            loop: true,
            margin: 30,
            nav:false,
            responsive: {
              0: {
                items: 1
              },
              600: {
                items: 1
              },
              768: {
                items: 1
              },
              991: {
                items: 1
              },
              1140: {
                items: 2
              }
            }
        });
    }

    rou.BlogSlider = function(){
      var testimonials_slider = $('#portfolio-slider-single');
        testimonials_slider.owlCarousel({
            loop: true,
            margin: 30,
            nav:false,
            responsive: {
              0: {
                items: 1
              },
              768: {
                items: 1
              },
              991: {
                items: 2
              },
              1140: {
                items: 3
              }
            }
        });
    }

    rou.MasoNry = function () {
      var portfolioWork = $('.portfolio-content');
        $(portfolioWork).isotope({
            resizable: false,
            itemSelector: '.portfolio-item',
            layoutMode: 'masonry',
            filter: '*'
          });
          //Filtering items on portfolio.html
          var portfolioFilter = $('.filter li');
          // filter items on button click
          $(portfolioFilter).on( 'click', function() {
            var filterValue = $(this).attr('data-filter');
            portfolioWork.isotope({ filter: filterValue });
          });
          //Add/remove class on filter list
          $(portfolioFilter).on( 'click', function() {
            $(this).addClass('active').siblings().removeClass('active');
          });
    }


    rou.PopupVideo = function(){
      $('.popup-video').magnificPopup({
              disableOn: 700,
              type: 'iframe',
              mainClass: 'mfp-fade',
              removalDelay: 160,
              preloader: false,
              fixedContentPos: false
        });
    }

    rou.LightboxGallery = function(){
      $('.portfolio-col').magnificPopup({
          delegate: '.lightbox-gallery',
          type: 'image',
          tLoading: '#%curr%',
          mainClass: 'mfp-fade',
          fixedContentPos: true,
          closeBtnInside: true,
          gallery: {
              enabled: true,
              navigateByImgClick: true,
              preload: [0, 1] 
          }
      });
    }

     rou.mTypeIt = function() {
        new TypeIt('#type-it', {
            speed: 450,
            loop:true,
            strings: [
              'Web Designer',
              'Web Developer'
            ],
            breakLines: false
        }); 
    }

    
    // Window on Load
    $(window).on("load", function(){
      rou.MasoNry(),
      rou.WebLoad();
    });

    $( document ).ready(function() {
        rou.ClientSlider(),
        rou.BlogSlider(),
        rou.MasoNry(),
        rou.PopupVideo(),
        rou.LightboxGallery(),
        rou.mTypeIt();
    });

})(jQuery);


