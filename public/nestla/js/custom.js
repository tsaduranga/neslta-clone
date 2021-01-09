

"use strict";

/*=====================*/
	/* 8 - LIGHT-BOX */
	/*=====================*/
	
	/*activity indicator functions*/
	var activityIndicatorOn = function(){
		$('<div id="imagelightbox-loading"><div></div></div>').appendTo('body');
	};
	var activityIndicatorOff = function(){
		$('#imagelightbox-loading').remove();
	};
	
	/*close button functions*/
	var closeButtonOn = function(instance){
		$('<button type="button" id="imagelightbox-close" title="Close"></button>').appendTo('body').on('click touchend', function(){ $(this).remove(); instance.quitImageLightbox(); return false; });
	};
	var closeButtonOff = function(){
		$('#imagelightbox-close').remove();
	};
	
	/*overlay*/
	var overlayOn = function(){$('<div id="imagelightbox-overlay"></div>').appendTo('body');};
	var overlayOff = function(){$('#imagelightbox-overlay').remove();};
	
	/*caption*/
	var captionOff = function(){$('#imagelightbox-caption').remove();};
	var captionOn = function(){
		var description = $('a[href="' + $('#imagelightbox').attr('src') + '"]').data('title');
		if(description.length)
			$('<div id="imagelightbox-caption">' + description +'</div>').appendTo('body');
	};

	/*arrows*/
    var arrowsOn = function(instance, selector) {
        var $arrows = $('<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"><i class="fa fa-chevron-left"></i></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"><i class="fa fa-chevron-right"></i></button>');
        $arrows.appendTo('body');
        $arrows.on('click touchend', function(e) {
            e.preventDefault();
            var $this = $(this);
            if( $this.hasClass('imagelightbox-arrow-left')) {
                instance.loadPreviousImage();
            } else {
                instance.loadNextImage();
            }
            return false;
        });
    };	
	var arrowsOff = function(){$('.imagelightbox-arrow').remove();};	
			
	var selectorG = '.lightbox';
	if($(selectorG).length){
		var instanceG = $(selectorG).imageLightbox({
			quitOnDocClick:	false,
			onStart:		function() {arrowsOn(instanceG, selectorG);overlayOn(); closeButtonOn(instanceG);},
			onEnd:			function() {arrowsOff();captionOff(); overlayOff(); closeButtonOff(); activityIndicatorOff();},
			onLoadStart: 	function() {captionOff(); activityIndicatorOn();},
			onLoadEnd:	 	function() {$('.imagelightbox-arrow').css('display', 'block');captionOn(); activityIndicatorOff();}
		});		
	}			


// 6 pieChart RoundCircle
function expertizeRoundCircle () {
	var rounderContainer = $('.piechart.style-one');
	if (rounderContainer.length) {
		rounderContainer.each(function () {
			var Self = $(this);
			var value = Self.data('value');
			var size = Self.parent().width();
			var color = Self.data('fg-color');

			Self.find('span').each(function () {
				var expertCount = $(this);
				expertCount.appear(function () {
					expertCount.countTo({
						from: 1,
						to: value*100,
						speed: 3000
					});
				});

			});
			Self.appear(function () {					
				Self.circleProgress({
					value: value,
					size: 142,
					thickness: 10,
					emptyFill: 'rgba(208,104,63,1)',
					animation: {
						duration: 3000
					},
					fill: {
						color: color
					}
				});
			});
		});
	};
}

function stickyHeader () {
  if ($('.stricky').length) {
    var strickyScrollPos = $('.stricky').next().offset().top;
    if($(window).scrollTop() > strickyScrollPos) {
      $('.stricky').removeClass('slideIn animated');
      $('.stricky').addClass('stricky-fixed slideInDown animated');
    }
    else if($(this).scrollTop() <= strickyScrollPos) {
      $('.stricky').removeClass('stricky-fixed slideInDown animated');
      $('.stricky').addClass('slideIn animated');
    }
  };
}

// Dom Ready Function
jQuery(document).on('ready', function () {
	(function ($) {
		expertizeRoundCircle();
	})(jQuery);
});

//
(function($) {
 "use strict"
 
 // Accordion Toggle Items
   var iconOpen = 'fa fa-minus',
        iconClose = 'fa fa-plus';

    $(document).on('show.bs.collapse hide.bs.collapse', '.accordion', function (e) {
       var $target = $(e.target);
         $target.siblings('.accordion-heading').find('em').toggleClass(iconOpen + ' ' + iconClose);
         if(e.type == 'show') {
           jQuery('#accordion2 em.icon-fixed-width').removeClass(iconOpen);
           jQuery('#accordion2 em.icon-fixed-width').addClass(iconClose);
           jQuery('#accordion2 .accordion-toggle').removeClass('active');
           jQuery('#accordion2 .accordion-body.collapse').removeClass('in');
           $target.prev('.accordion-heading').find('.accordion-toggle').addClass('active');
           $target.prev('.accordion-group').find('.accordion-body.collapse').addClass('in');            
           $target.siblings('.accordion-heading').find('em').addClass('fa-minus');
           $target.siblings('.accordion-heading').find('em').removeClass('fa-plus');
         }
             
         if(e.type == 'hide') {
           jQuery('#accordion2 em.icon-fixed-width').removeClass(iconOpen);
           jQuery('#accordion2 em.icon-fixed-width').addClass(iconClose);
           jQuery('#accordion2 .accordion-toggle').removeClass('active');
           jQuery('#accordion2 .accordion-body.collapse').removeClass('in');
           $(this).find('.accordion-toggle').not($target).removeClass('active');
           $target.siblings('.accordion-heading').find('em').addClass('fa-plus');
           $target.siblings('.accordion-heading').find('em').removeClass('fa-minus');
         }
   }); 
})(jQuery);

//

	  
$(window).scroll(function() {
        if ($(this).scrollTop() > 120){  
        $('#main-navigation-wrapper').removeClass('slideIn animated');
          $('#main-navigation-wrapper').addClass("sticky_header slideInDown animated");
        }
        else{
        $('#main-navigation-wrapper ').removeClass('sticky_header slideInDown animated');
           $('#main-navigation-wrapper ').addClass('slideIn animated');
        }
});
 $(document).ready(function(){
        $(".mob_drop_arrow").click(function(){
          $(this).parent().find(".submenu").toggleClass("show_sub_menu")
        $(this).parent().find(".nav_drop_ar").toggleClass("show")
        $(this).parent().find(".mob_drop_arrow").toggleClass("active")
        })
		
// coming soon js
		
// $('ul.coming-list li .number').each(function () {
    // $(this).prop('Counter',0).animate({
        // Counter: $(this).text()
    // }, {
        // duration: 3000,
        // easing: 'swing',
        // step: function (now) {
            // $(this).text(Math.ceil(now));
        // }
    // });
// });
})

function customTabSingleService () {
    if ($('.tabmenu-box').length) {
        var tabWrap = $('.tab-content-box');
        var tabClicker = $('.tabmenu-box ul li');
        
        tabWrap.children('div').hide();
        tabWrap.children('div').eq(0).show();
        tabClicker.on('click', function() {
            var tabName = $(this).data('tab-name');
            tabClicker.removeClass('active');
            $(this).addClass('active');
            var id = '#'+ tabName;
            tabWrap.children('div').not(id).hide();
            tabWrap.children('div'+id).fadeIn('500');
            return false;
        });        
    }
}

// Dom Ready Function
jQuery(document).on('ready', function () {
	(function ($) {
        // add your functions
     
        customTabSingleService ();
	})(jQuery);
});
