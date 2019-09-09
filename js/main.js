jQuery(function()  {

    //Cache the window object
    var jQuerywindow=jQuery(window);

    //Parallax background effect
    jQuery('section[data-type="background"]').each(function(){

        var jQuerybgobj = jQuery(this); //assigning the object

        jQuery(window).scroll(function(){
            //scroll the background at var speed
            //the yPos is negative value bc we're scrolling UP!

            var yPos = -(jQuerywindow.scrollTop()/jQuerybgobj.data('speed'));

            //Put together our final background position
            var coords = '50% '+yPos+'px';

            //Move the background
            jQuerybgobj.css({backgroundPosition:coords});
        })//end window scroll
    });
});

//  function descLength($){
    
//     console.log(text.substring(1, 4));
//  }

//  window.onload = descLength;


jQuery(document).ready(function($){
    

	$('.readmore').click(showMeMore);
	$('.readless').click(showMeLess);
	
	function showMeMore(){
		event.preventDefault();
        $('.readmore').hide();
        $('.readmore').removeClass("stubborn");
        $('.readless').addClass("stubborn");
		$('.show-this-on-click').slideDown(function(){
            console.log('Show More');
	});
	
	}
	function showMeLess(){
		event.preventDefault();
        $('.readless').hide();
        $('.readless').removeClass("stubborn");
        $('.readmore').addClass("stubborn");
		$('.show-this-on-click').slideUp(function(){
            console.log('Show Less');
			});
		
	}
	
});


// jQuery(document).ready(function($){

//     $('.project img').on('click',function(){
//         var target = $(this).html();
//         var id = $(this).attr('id');
//         var imageUrl=0
//         var albumUrl=0
//         console.log(target);

//         $('#mylightbox iframe').attr('src', albumUrl);
//         $('#mylightbox div').html(target);
//         $('#mylightbox img').attr('src', imageUrl);
//         $('[data-featherlight]').trigger('click');
         
//           // insert all your dynamic stuff here...
//         }) //END REQUEST2
 
// }) ;