// Navigation toggle
// jQuery(document).ready(function () {
//   const main_navigation = jQuery("#primary-menu");
// 
//   jQuery("#primary-menu-toggle").on("click", function (e) {
//     e.preventDefault();
// 
//     //main_navigation.toggleClass('hidden');
//     main_navigation.slideToggle();
//   });
// });

// Navigation toggle
jQuery(document).ready(function () {
  const main_navigation = jQuery("#primary-menu");
  const hamburger = jQuery(".c-hamburger")

  jQuery("#primary-menu-toggle").on("click", function (e) {
    e.preventDefault();

    main_navigation.slideToggle();
    hamburger.toggleClass( "active" );
  });
});

//jQuery("a[rel^='prettyPhoto']").prettyPhoto();

jQuery(document).ready(function () {
  jQuery('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    keyboard: true,                 //Boolean: Allow slider navigating via keyboard left/right keys
    multipleKeyboard: true,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider2'
  });
   
  jQuery('#slider2').flexslider({
   animation: "slide",
   controlNav: false,
   keyboard: true,                 //Boolean: Allow slider navigating via keyboard left/right keys
   multipleKeyboard: true,
   animationLoop: false,
   slideshow: false,
   sync: "#carousel"
  });
  
  jQuery("a[rel^='prettyPhoto']").prettyPhoto();
});

