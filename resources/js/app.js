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

jQuery(document).ready(function () {
  const callback = function (entries) {
    entries.forEach((entry) => {
      console.log(entry);
  
      if (entry.isIntersecting) {
        entry.target.classList.add("animate-fadeIn");
      } else {
        entry.target.classList.remove("animate-fadeIn");
      }
    });
  };
  
  const observer = new IntersectionObserver(callback);
  
  const targets = document.querySelectorAll(".scroll-show");
  targets.forEach(function (target) {
    target.classList.add("opacity-0");
    observer.observe(target);
  });
});



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



