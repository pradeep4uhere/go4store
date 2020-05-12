<!DOCTYPE html>
<html lang="en" class="">
<head>
@include('prssystem.firezyshop.layouts.HomePage.homePageMetaHead')
<!-- Templatemela added -->
<link href="{{config('global.THEME_FRONT_CSS').'/css'}}" rel="stylesheet"> 
<link href="{{config('global.THEME_FRONT_CSS').'/css(1)'}}" rel="stylesheet"> 
<link href="{{config('global.THEME_FRONT_CSS').'/css(2)'}}" rel="stylesheet"> 

<!-- Templatemela added -->

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700" rel="stylesheet"> 

<!-- Owl Stylesheets -->
<link rel="stylesheet" href="{{config('global.THEME_FRONT_PLUG').'/plugin/owl.carousel.min.css'}}">
<link rel="stylesheet" href="{{config('global.THEME_FRONT_PLUG').'/plugin/css/owl.theme.default.min.css'}}">
<link rel="stylesheet" href="{{config('global.THEME_FRONT_CSS').'/theme.css'}}">
<link rel="stylesheet" href="{{config('global.THEME_FRONT_CSS').'/font-awesome.css'}}" media="all">
<link rel="stylesheet" href="{{config('global.THEME_FRONT_CSS').'/psproductcountdown.css'}}" media="all">
<link rel="stylesheet" href="{{config('global.THEME_FRONT_CSS').'/1-simple.css'}}" media="all">
<link rel="stylesheet" href="{{config('global.THEME_FRONT_CSS').'/psblog.css'}}" media="all">
<link rel="stylesheet" href="{{config('global.THEME_FRONT_CSS').'/lightbox.css'}}" media="all">
<link rel="stylesheet" href="{{config('global.THEME_FRONT_CSS').'/productcomments.css'}}" media="all">
<link rel="stylesheet" href="{{config('global.THEME_FRONT_CSS').'/front.css'}}" media="all">
<link rel="stylesheet" href="{{config('global.THEME_FRONT_CSS').'/tmcouponpop.css'}}" media="all">
<link rel="stylesheet" href="{{config('global.THEME_FRONT_CSS').'/jquery-ui.min.css'}}" media="all">
<link rel="stylesheet" href="{{config('global.THEME_FRONT_CSS').'/jquery.ui.theme.min.css'}}" media="all">
<link rel="stylesheet" href="{{config('global.THEME_FRONT_CSS').'/jquery.fancybox.css'}}" media="all">
<link rel="stylesheet" href="{{config('global.THEME_FRONT_CSS').'/tm_verticalmenu.css'}}" media="all">
<link rel="stylesheet" href="{{config('global.THEME_FRONT_CSS').'/flexslider.css'}}" media="all">
<link rel="stylesheet" href="{{config('global.THEME_FRONT_CSS').'/tmcategorylist.css'}}" media="all">
<link rel="stylesheet" href="{{config('global.THEME_FRONT_CSS').'/tm_categoryslider.css'}}" media="all">
<link rel="stylesheet" href="{{config('global.THEME_FRONT_CSS').'/custom.css'}}" media="all">
</head>
<body id="category" class="lang-en country-us currency-usd layout-left-column page-category tax-display-disabled category-id-2 category-home category-id-parent-1 category-depth-level-1">
<main>
<!-- BEGIN MAIN CONTENT -->
@yield('content')
<!-- END MAIN CONTENT -->

<!-- begin page level js -->
@yield('footer_scripts')
<!-- end page level js -->


</main>
<script src="{{config('global.THEME_FRONT_PLUG').'/plugin/jquery.min.js'}}"></script>
<script src="https://kit.fontawesome.com/a651bac95e.js" crossorigin="anonymous"></script>
<script src="{{config('global.THEME_FRONT_PLUG').'/plugin/owl.carousel.js'}}"></script>
<script src="{{config('global.THEME_FRONT_PLUG').'/js/sweetalert.min.js'}}"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $(".fa-chevron-down, .sortingDivOption").on('click',function(){
      $('.sortingDiv').toggle();
  });  
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















