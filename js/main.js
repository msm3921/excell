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

