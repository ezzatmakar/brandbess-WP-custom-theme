// JavaScript Document *Ibrahim Najib

$( document ).ready(function() {
    'use strict';

    // Header
    $(window).scroll(function(){
        if ($(window).scrollTop() >= 30) {
            $('header').addClass('fixed');
        }
        else {
            $('header').removeClass('fixed');
        }
    });

    // goDown
    $('.goDown').on('click',function(){
        $('html, body').animate({ 
            scrollTop: $('.sectionTwo').offset().top - $('header').outerHeight()
         }, 1000);
    });

    // Mob Menu
    jQuery.fn.clickToggle = function(a,b) {
        function cb(){ [b,a][this._tog^=1].call(this); }
        return this.on("click", cb);
    };

    //sameheight
    if( $('.detailsPage .box').length > 0 ){
        $('.detailsPage .box').responsiveEqualHeightGrid();  
    }
    
    $(".mobMenu").clickToggle(function() {   
            $(this).addClass('open');
            $('.menuContent').addClass('isopen');
        }, function() {
            $(this).removeClass('open');
            $('.menuContent').removeClass('isopen');
    });
    
    function Mobmenu(){
        if ($(window).width() <= 992) {			
            $( ".mainMenu ul" ).first().appendTo('.menuContent');            
        } else{			
            $( ".menuContent ul" ).first().appendTo('.mainMenu');
        }
    }
    Mobmenu();
    $( window ).resize(function() {	  
        Mobmenu();
    });

    
	function galleryitemHeight(){
        var itemwidth = $('.gallerycontainer .grid-item').width();
        $('.gallerycontainer .grid-item').css('height',itemwidth);
    }
    galleryitemHeight();
    
    $(window).on('resize', function () {
        galleryitemHeight();
    });
    
    $('.galleryNav a').click(function(){
        $('.galleryNav a').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $('.gallerycontainer').isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    }); 

    // animation with scroll
    if ($(window).width() > 1024) {

        $(function(){	

			var $window = $(window);
            var scrollTime = 0.9;
            var scrollDistance = 170;
        
            $window.on("mousewheel DOMMouseScroll", function(event){
        
                event.preventDefault();	
        
                var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
                var scrollTop = $window.scrollTop();
                var finalScroll = scrollTop - parseInt(delta*scrollDistance);
        
                TweenMax.to($window, scrollTime, {
                    scrollTo : { y: finalScroll, autoKill:true },
                        ease: Power1.easeOut,
                        overwrite: 5							
                    });
        
            });
        });

        // TweenMax
        var controller = new ScrollMagic.Controller();
        var parallaxTl = new TimelineMax();
 /*       var parallaxT2 = new TimelineMax();
        var parallaxT3 = new TimelineMax();
 */       var parallaxT4 = new TimelineMax();
        var parallaxT5 = new TimelineMax();
        var parallaxT6 = new TimelineMax();
        var parallaxT7 = new TimelineMax();
        var parallaxT8 = new TimelineMax();

        parallaxTl
            .to('.topSection .warp', 1, {y: '100%', ease:Power0.easeNone})
            ;

        var slideParallaxScene1 = new ScrollMagic.Scene({
            triggerElement: '.homeGallery',
            triggerHook: 1,
            duration: '50%'
        })
        .setTween(parallaxTl)
        .addTo(controller);

        
/*
        parallaxT2
            .to('.homeGallery .galleryNav', 1, {y: '100%', ease:Power0.easeNone})
            ;

        var slideParallaxScene2 = new ScrollMagic.Scene({
            triggerElement: '.services',
            triggerHook: 1,
            duration: '30%'
        })
        .setTween(parallaxT2)
        .addTo(controller);

        parallaxT3
            .to('.homeGallery .gallerycontainer', 1, {y: '50%', ease:Power0.easeNone})
            ;

        var slideParallaxScene3 = new ScrollMagic.Scene({
            triggerElement: '.services .content',
            triggerHook: 1,
            duration: '100%'
        })
        .setTween(parallaxT3)
        .addTo(controller);
*/
        parallaxT4
            .from('.gallerycontainer .grid-item:nth-of-type(1)', 1, {x: '-100%', autoAlpha:0, ease:Power0.easeNone})
            .from('.gallerycontainer .grid-item:nth-of-type(2)', 1, {x: '-100%', autoAlpha:0, ease:Power0.easeNone})
            .from('.gallerycontainer .grid-item:nth-of-type(3)', 1, {x: '-100%', autoAlpha:0, ease:Power0.easeNone})
            .from('.gallerycontainer .grid-item:nth-of-type(4)', 1, {x: '-100%', autoAlpha:0, ease:Power0.easeNone})
            .from('.gallerycontainer .grid-item:nth-of-type(5)', 1, {x: '-100%', autoAlpha:0, ease:Power0.easeNone})
            .from('.gallerycontainer .grid-item:nth-of-type(6)', 1, {x: '-100%', autoAlpha:0, ease:Power0.easeNone})
            .from('.gallerycontainer .grid-item:nth-of-type(12)', 1, {x: '100%', autoAlpha:0, ease:Power0.easeNone})
            .from('.gallerycontainer .grid-item:nth-of-type(11)', 1, {x: '100%', autoAlpha:0, ease:Power0.easeNone})
            .from('.gallerycontainer .grid-item:nth-of-type(10)', 1, {x: '100%', autoAlpha:0, ease:Power0.easeNone})
            .from('.gallerycontainer .grid-item:nth-of-type(9)', 1, {x: '100%', autoAlpha:0, ease:Power0.easeNone})
            .from('.gallerycontainer .grid-item:nth-of-type(8)', 1, {x: '100%', autoAlpha:0, ease:Power0.easeNone})
            .from('.gallerycontainer .grid-item:nth-of-type(7)', 1, {x: '100%', autoAlpha:0, ease:Power0.easeNone})
            ;

        var slideParallaxScene4 = new ScrollMagic.Scene({
            triggerElement: '.gallerycontainer .grid-item:nth-of-type(1)',
            triggerHook: 1,
            duration: '55%'
        })
        .setTween(parallaxT4)
        .addTo(controller);

        parallaxT5
            .from('.services .servicesList li:nth-of-type(1)', 1, {x: '100px',autoAlpha:0, width:0, ease:Power0.easeNone})
            .from('.services .servicesList li:nth-of-type(2)', 1, {x: '100px',autoAlpha:0, width:0, ease:Power0.easeNone})
            .from('.services .servicesList li:nth-of-type(3)', 1, {x: '100px',autoAlpha:0, width:0, ease:Power0.easeNone})
            .from('.services .servicesList li:nth-of-type(4)', 1, {x: '100px',autoAlpha:0, width:0, ease:Power0.easeNone})
            ;

        var slideParallaxScene5 = new ScrollMagic.Scene({
            triggerElement: '.services .servicesList',
            triggerHook: 1,
            duration: '70%'
        })
        .setTween(parallaxT5)
        .addTo(controller);

        parallaxT6
            .from('.services .warp', 1, {x: '-200px',y:'-100px',autoAlpha:0, ease:Power0.easeNone})
            ;

        var slideParallaxScene6 = new ScrollMagic.Scene({
            triggerElement: '.services',
            triggerHook: 1,
            duration: '70%'
        })
        .setTween(parallaxT6)
        .addTo(controller);

        parallaxT7
            .from('.signup .warp', 1, {y:'-200px', ease:Power0.easeNone})
            ;

        var slideParallaxScene7 = new ScrollMagic.Scene({
            triggerElement: '.signup',
            triggerHook: 1,
            duration: '70%'
        })
        .setTween(parallaxT7)
        .addTo(controller);

        parallaxT8
            .from('.contactus .warp', 1, {y:'-100px', ease:Power0.easeNone})
            ;

        var slideParallaxScene8 = new ScrollMagic.Scene({
            triggerElement: '.contactus',
            triggerHook: 1,
            duration: '30%'
        })
        .setTween(parallaxT8)
        .addTo(controller);
        
    }
		
}); // Document ready

$(window).load(function(){
    //Filter (Home)
    $('.gallerycontainer').isotope({
        // options
        itemSelector: '.grid-item',
        
    });
});
    


function initialize(pin ,markers) {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap',
        scrollwheel: false,
        styles:[{"elementType": "geometry","stylers": [{"color": "#516059"}]},{"elementType": "labels.icon","stylers": [{"visibility": "off"}]},{"elementType": "labels.text.fill","stylers": [{"color": "#ffffff"}]},{"elementType": "labels.text.stroke","stylers": [{"visibility": "off"}]},{"featureType": "administrative.land_parcel","elementType": "labels.text.fill","stylers": [{"color": "#ffffff"}]},{"featureType": "poi","elementType": "geometry","stylers": [{"color": "#516059"}]},{"featureType": "poi","elementType": "labels.text.fill","stylers": [{"color": "#ffffff"}]},{"featureType": "poi.park","elementType": "geometry","stylers": [{"color": "#516059"}]},{"featureType": "poi.park","elementType": "labels.text.fill","stylers": [{"color": "#ffffff"}]},{"featureType": "road","elementType": "geometry","stylers": [{"color": "#95a29d"}]},{"featureType": "road.arterial","elementType": "labels.text.fill","stylers": [{"color": "#ffffff"}]},{"featureType": "road.highway","elementType": "geometry","stylers": [{"color": "#95a29d"}]},{"featureType": "road.highway","elementType": "labels.text.fill","stylers": [{"color": "#ffffff"}]},{"featureType": "road.local","elementType": "labels.text.fill","stylers": [{"color": "#ffffff"}]},{"featureType": "transit.line","elementType": "geometry","stylers": [{"color": "#95a29d"}]},{"featureType": "transit.station","elementType": "geometry","stylers": [{"color": "#516059"}]},{"featureType": "water","elementType": "geometry","stylers": [{"color": "#515048"}]},{"featureType": "water","elementType": "labels.text.fill","stylers": [{"color": "#ffffff"}]}]
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    map.setTilt(45);


                        
    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>Title here.</h3>' +
        '<p>12345 Salah Salem Rd. <br>Naser City</p>' +        '</div>']
    ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        
        marker = new google.maps.Marker({
            icon: pin,
            position: position,
            map: map,
            title: markers[i][0]
        });
        /*
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));
            */
        // Don't zoom in too far on only one marker
            if (bounds.getNorthEast().equals(bounds.getSouthWest())) {
            var extendPoint1 = new google.maps.LatLng(bounds.getNorthEast().lat() + 0.01, bounds.getNorthEast().lng() + 0.01);
            var extendPoint2 = new google.maps.LatLng(bounds.getNorthEast().lat() - 0.01, bounds.getNorthEast().lng() - 0.01);
            bounds.extend(extendPoint1);
            bounds.extend(extendPoint2);
            }

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
        
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        google.maps.event.removeListener(boundsListener);
        map.setZoom(13);
    });
    
}