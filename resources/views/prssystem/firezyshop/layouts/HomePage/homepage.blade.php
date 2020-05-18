<!DOCTYPE html>
<html lang="en" class="">
<head>
@include('prssystem.firezyshop.layouts.HomePage.homePageMetaHead')
<!-- Templatemela added -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> 

<link rel="stylesheet" href="{{config('global.THEME_FRONT_CSS').'/go4shop.online.css'}}">
</head>
<body id="index" class="lang-en country-us currency-usd layout-full-width page-index tax-display-disabled">
<main>
<!-- BEGIN MAIN CONTENT -->
   @yield('content')
<!-- END MAIN CONTENT -->

<!-- begin page level js -->
@yield('footer_scripts')
<!-- end page level js -->


</main>

<script src="{{config('global.THEME_FRONT_PLUG').'/js/compressed.js'}}"></script>
<script src="https://kit.fontawesome.com/a651bac95e.js" crossorigin="anonymous"></script>

<script type="text/javascript">
  
  $('.tm_userinfotitle_account').on('click',function(){
    $(".user-info").toggle();
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {
  $("#owl-demo1").owlCarousel({
    navigation: false,
      navigationText: [
        "<i class='fa fa-arrow-circle-left'></i>",
        // "<a class='next carousel_next'>></a>",
        "<i class='fa fa-arrow-circle-right'></i>"
        ],
   // $(".owl-wrapper").owlCarousel({
    items : 1,
      itemsDesktop : [1199,1],
      itemsDesktopSmall : [980,1],
      itemsTablet: [768,1],
      itemsTabletSmall: false,
      itemsMobile : [479,1],
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:false,
      stopOnHover:true,
      touchDrag: true,
      //Autoplay
      autoPlay : true,
      //Pagination
      pagination : false,
      paginationNumbers: false,

      // Responsive 
      responsive: true,
      responsiveRefreshRate : 200,
      responsiveBaseWidth: window,

      // CSS Styles
      baseClass : "owl-carousel",
      theme : "owl-theme",
   
      //Lazy load
      lazyLoad : false,
      lazyFollow : true,
   
      //Auto height
      autoHeight : false,
  });


  

  $("#owl-demo-seller").owlCarousel({
    navigation: true,
      navigationText: [
        "<div class='customNavigation'><a class='btn prev cat_prev'>&nbsp;</a></div>",
        // "<a class='next carousel_next'>></a>",
        "<div class='customNavigation'><a class='btn next cat_next'>&nbsp;</a></div>"
        ],
   // $(".owl-wrapper").owlCarousel({
    items : 3,
      itemsDesktop : [1199,4],
      itemsDesktopSmall : [980,3],
      itemsTablet: [768,2],
      itemsTabletSmall: false,
      itemsMobile : [479,1],
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:false,
      stopOnHover:true,
      touchDrag: true,
      //Autoplay
      autoPlay : true,
      //Pagination
      pagination : true,
      paginationNumbers: false,

      // Responsive 
      responsive: true,
      responsiveRefreshRate : 200,
      responsiveBaseWidth: window,

      // CSS Styles
      baseClass : "owl-carousel",
      theme : "owl-theme",
   
      //Lazy load
      lazyLoad : false,
      lazyFollow : true,
   
      //Auto height
      autoHeight : false,
  });

  $("#owl-demo-new-seller").owlCarousel({
    navigation: true,
      navigationText: [
        "<div class='customNavigation'><a class='btn prev cat_prev'>&nbsp;</a></div>",
        // "<a class='next carousel_next'>></a>",
        "<div class='customNavigation'><a class='btn next cat_next'>&nbsp;</a></div>"
        ],
   // $(".owl-wrapper").owlCarousel({
    items : 3,
      itemsDesktop : [1199,4],
      itemsDesktopSmall : [980,3],
      itemsTablet: [768,2],
      itemsTabletSmall: false,
      itemsMobile : [479,1],
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:false,
      stopOnHover:true,
      touchDrag: true,
      //Autoplay
      autoPlay : true,
      //Pagination
      pagination : true,
      paginationNumbers: false,

      // Responsive 
      responsive: true,
      responsiveRefreshRate : 200,
      responsiveBaseWidth: window,

      // CSS Styles
      baseClass : "owl-carousel",
      theme : "owl-theme",
   
      //Lazy load
      lazyLoad : false,
      lazyFollow : true,
   
      //Auto height
      autoHeight : false,
  });

  $("#owl-demo-best-seller").owlCarousel({
    navigation: true,
      navigationText: [
        "<div class='customNavigation'><a class='btn prev cat_prev'>&nbsp;</a></div>",
        // "<a class='next carousel_next'>></a>",
        "<div class='customNavigation'><a class='btn next cat_next'>&nbsp;</a></div>"
        ],
   // $(".owl-wrapper").owlCarousel({
    items : 3,
      itemsDesktop : [1199,4],
      itemsDesktopSmall : [980,3],
      itemsTablet: [768,2],
      itemsTabletSmall: false,
      itemsMobile : [479,1],
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:false,
      stopOnHover:true,
      touchDrag: true,
      //Autoplay
      autoPlay : true,
      //Pagination
      pagination : true,
      paginationNumbers: false,

      // Responsive 
      responsive: true,
      responsiveRefreshRate : 200,
      responsiveBaseWidth: window,

      // CSS Styles
      baseClass : "owl-carousel",
      theme : "owl-theme",
   
      //Lazy load
      lazyLoad : false,
      lazyFollow : true,
   
      //Auto height
      autoHeight : false,
  });

  $("#owl-demo-best-client").owlCarousel({
    navigation: false,
      navigationText: [
        "<div class='customNavigation'><a class='btn prev cat_prev'>&nbsp;</a></div>",
        // "<a class='next carousel_next'>></a>",
        "<div class='customNavigation'><a class='btn next cat_next'>&nbsp;</a></div>"
        ],
   // $(".owl-wrapper").owlCarousel({
    items : 9,
      itemsDesktop : [1199,4],
      itemsDesktopSmall : [980,3],
      itemsTablet: [768,2],
      itemsTabletSmall: false,
      itemsMobile : [479,1],
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:false,
      stopOnHover:true,
      touchDrag: true,
      //Autoplay
      autoPlay : true,
      //Pagination
      pagination : true,
      paginationNumbers: false,

      // Responsive 
      responsive: true,
      responsiveRefreshRate : 200,
      responsiveBaseWidth: window,

      // CSS Styles
      baseClass : "owl-carousel",
      theme : "owl-theme",
   
      //Lazy load
      lazyLoad : false,
      lazyFollow : true,
   
      //Auto height
      autoHeight : false,
  });


  $("#owl-demo2").owlCarousel({
    navigation: true,
      navigationText: [
        "<div class='customNavigation'><a class='btn prev cat_prev'>&nbsp;</a></div>",
        // "<a class='next carousel_next'>></a>",
        "<div class='customNavigation'><a class='btn next cat_next'>&nbsp;</a></div>"
        ],
   // $(".owl-wrapper").owlCarousel({
    items : 6,
      itemsDesktop : [1199,4],
      itemsDesktopSmall : [980,3],
      itemsTablet: [768,2],
      itemsTabletSmall: false,
      itemsMobile : [479,2],
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:false,
      stopOnHover:true,
      touchDrag: true,
      //Autoplay
      autoPlay : true,
      //Pagination
      pagination : true,
      paginationNumbers: false,

      // Responsive 
      responsive: true,
      responsiveRefreshRate : 200,
      responsiveBaseWidth: window,

      // CSS Styles
      baseClass : "owl-carousel",
      theme : "owl-theme",
   
      //Lazy load
      lazyLoad : false,
      lazyFollow : true,
   
      //Auto height
      autoHeight : false,
  });
  $("#owl-demo").owlCarousel({
    navigation: true,
      navigationText: [
        "<div class='customNavigation'><a class='btn prev cat_prev'>&nbsp;</a></div>",
        // "<a class='next carousel_next'>></a>",
        "<div class='customNavigation'><a class='btn next cat_next'>&nbsp;</a></div>"
        ],
   // $(".owl-wrapper").owlCarousel({
    items : 5,
      itemsDesktop : [1199,4],
      itemsDesktopSmall : [980,3],
      itemsTablet: [768,2],
      itemsTabletSmall: false,
      itemsMobile : [479,1],
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:false,
      stopOnHover:true,
      touchDrag: true,
      //Autoplay
      autoPlay : true,
      //Pagination
      pagination : true,
      paginationNumbers: false,

      // Responsive 
      responsive: true,
      responsiveRefreshRate : 200,
      responsiveBaseWidth: window,

      // CSS Styles
      baseClass : "owl-carousel",
      theme : "owl-theme",
   
      //Lazy load
      lazyLoad : false,
      lazyFollow : true,
   
      //Auto height
      autoHeight : false,
  });

  $("#owl-demo3").owlCarousel({
    navigation: true,
      navigationText: [
        "<div class='customNavigation'><a class='btn prev cat_prev'>&nbsp;</a></div>",
        // "<a class='next carousel_next'>></a>",
        "<div class='customNavigation'><a class='btn next cat_next'>&nbsp;</a></div>"
        ],
   // $(".owl-wrapper").owlCarousel({
    items : 5,
      itemsDesktop : [1199,4],
      itemsDesktopSmall : [980,3],
      itemsTablet: [768,2],
      itemsTabletSmall: false,
      itemsMobile : [479,1],
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:false,
      stopOnHover:true,
      touchDrag: true,
      //Autoplay
      autoPlay : true,
      //Pagination
      pagination : true,
      paginationNumbers: false,

      // Responsive 
      responsive: true,
      responsiveRefreshRate : 200,
      responsiveBaseWidth: window,

      // CSS Styles
      baseClass : "owl-carousel",
      theme : "owl-theme",
   
      //Lazy load
      lazyLoad : false,
      lazyFollow : true,
   
      //Auto height
      autoHeight : false,
  });



  });
</script>
</body>
</html>















