<!DOCTYPE html>
<html lang="en" class="">
<head>
@include('prssystem.firezyshop.layouts.HomePage.homePageMetaHead')
<!-- Templatemela added -->
<link href="{{config('global.THEME_FRONT').'/css'}}" rel="stylesheet"> 
<link href="{{config('global.THEME_FRONT').'/css(1)'}}" rel="stylesheet"> 
<link href="{{config('global.THEME_FRONT').'/css(2)'}}" rel="stylesheet"> 

<!-- Templatemela added -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700" rel="stylesheet"> 

<!-- Owl Stylesheets -->
<link rel="stylesheet" href="{{config('global.THEME_FRONT_PLUG').'/plugin/css/owl.carousel.min.css'}}">
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
<body id="cart" class="lang-en country-us currency-usd layout-left-column page-cart tax-display-disabled">
<main>
<!-- BEGIN MAIN CONTENT -->
@yield('content')
<!-- END MAIN CONTENT -->

<!-- begin page level js -->
@yield('footer_scripts')
<!-- end page level js -->


</main>
<script src="{{config('global.THEME_FRONT_PLUG').'/plugin/jquery.min.js'}}"></script>
<script src="{{config('global.THEME_FRONT_PLUG').'/js/a651bac95e.js'}}" crossorigin="anonymous"></script>
<script src="{{config('global.THEME_FRONT_PLUG').'/plugin/owl.carousel.js'}}"></script>
<script type="text/javascript" src="{{config('global.THEME_FRONT_PLUG').'/js/jquery.flexslider-min.js'}}"></script>
<script src="{{config('global.THEME_FRONT_PLUG').'/js/lightslider.js'}}"></script> 
<script src="{{config('global.THEME_FRONT_PLUG').'/js/jquery-ui.min.js'}}"></script>
<script src="{{config('global.THEME_FRONT_PLUG').'/js/sweetalert.min.js'}}"></script>


  <script type="text/javascript">
    $(function() {
      var $tabButtonItem = $('#tab-button li'),
          $tabSelect = $('#tab-select'),
          $tabContents = $('.tab-contents'),
          activeClass = 'is-active';

      $tabButtonItem.first().addClass(activeClass);
      $tabContents.not(':first').hide();

      $tabButtonItem.find('a').on('click', function(e) {
        var target = $(this).attr('href');

        $tabButtonItem.removeClass(activeClass);
        $(this).parent().addClass(activeClass);
        $tabSelect.val(target);
        $tabContents.hide();
        $(target).show();
        e.preventDefault();
      });

      $tabSelect.on('change', function() {
        var target = $(this).val(),
            targetSelectNum = $(this).prop('selectedIndex');

        $tabButtonItem.removeClass(activeClass);
        $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
        $tabContents.hide();
        $(target).show();
      });
    });

  $(document).ready(function() {
  $('#image-gallery').lightSlider({
        gallery:true,
        item:1,
        thumbItem:5,
        slideMargin: 1,
        speed:500,
        auto:false,
        loop:true,
        onSliderLoad: function() {
            $('#image-gallery').removeClass('cS-hidden');
        }  
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


<script>
  function getCity(state_id){
    var token = "{{csrf_token()}}";
    var POST_LOCATION_URL = "{{route('getcity')}}";
      var postJson={_token:token,state_id:state_id};
    $.ajax({
      type:'POST',
      url:POST_LOCATION_URL,
      data:postJson, 
      beforeSend:function(){
        $('#city').html('Please wait...');
      },       
      success:function(res){
        var result = JSON.parse(res);
        if(result.status=='success'){
          $('#city').html(result.result);
        }
      }
    });

  }



  $(document).ready(function(){
  function getAlert(a,b,c){
    swal({
      title:a,
      text: b,
      icon: c,
    });
  }
  
  $('#payment').click(function(){
    
    var shippingAddress = $('#shippingAddress').val();
    var pickupAddress = $('#pickupAddress').val();
    if(shippingAddress!='' || pickupAddress!=''){
      $('#choosePay').submit();
    }else{
       if($('#delivery').is(':checked')) { 
        getAlert('Error!','Please select atleast one delivery address!','error');
       }else{
        getAlert('Error!','Please Select Shipping Address or Pickup Address!','error');
      }
    }
  });
    
    
    
    
    
  //Select Delevery Address
  $('.del').click(function(){
    var idStr =$(this).attr('id'); 
    var idStrArr =idStr.split('_'); 
    var id =idStrArr[1];
    $('.cardClass').removeClass('bg-info');
    $('#card_'+id).addClass('bg-info');
    $('#shippingAddress').val($('#shipphide_'+id).val());
  });


  $('.pic').click(function(){
    var idStr =$(this).attr('id'); 
    var idStrArr =idStr.split('_'); 
    var id =idStrArr[1];
    $('.cardClass').removeClass('bg-info');
    $('#card_'+id).addClass('bg-info');
    $('#pickupAddress').val($('#picphide_'+id).val());
  });


  $('.remove').click(function(){
    var idStr =$(this).attr('id'); 
    var idStrArr =idStr.split('_'); 
    var id =idStrArr[1];
    $('#card_'+id).parent('div').remove();
    removeAddress(id);
  });
  
  $('.edit').click(function(){
    var idStr =$(this).attr('id'); 
    var idStrArr =idStr.split('_'); 
    var id =idStrArr[1];
    $("#myModal").modal('show');
    $('#addressSpan').html('Update Address');
    getAddress(id);
    //alert('Open Model Box For Update Address');
  });

  function removeAddress(id){
    var token = "{{csrf_token()}}";
    var POST_LOCATION_URL = "{{route('removeaddress')}}";
      var postJson={_token:token,id:id};
    $.ajax({
      type:'POST',
      url:POST_LOCATION_URL,
      data:postJson,        
      success:function(res){
        var result = JSON.parse(res);
        if(result.status=='success'){
          var idStr= "#card_"+id;
          $(idStr).fadeOut();
          getAlert('Success!','Delivery Address Removed!','success');
        }
      }
    });
  }


  function getAddress(id){
    var token = "{{csrf_token()}}";
    var POST_LOCATION_URL = "{{route('getaddress')}}";
      var postJson={_token:token,id:id};
    $.ajax({
      type:'POST',
      url:POST_LOCATION_URL,
      data:postJson,        
      success:function(res){
        var result = JSON.parse(res);
        if(result.status=='success'){
          $('#full_name').val(result.result.full_name);
          $('#address_1').val(result.result.address_1);
          $('#address_2').val(result.result.address_2);
          
          $('#landmarks').val(result.result.landmarks);
          $('#mobile').val(result.result.mobile);
          $('#pincode').val(result.result.pincode);
          $('select[name=state_id]').val(result.result.state_id).change();
          getCity(result.result.state_id);
          setTimeout(function(){
            $('select[name=city_id]').val(result.result.city_id).change();
          },2000);
          $('#id').val(result.result.id);
        }
      }
    });

  }

  
  
  $('.addressType').click(function(){
      if($(this).val()==1){
        $('#delAddress').fadeIn();
        $('#pickAddress').hide();
      }else{
        $('#pickAddress').fadeIn();
        $('#delAddress').hide();
      }
    });
    //$('#pickAddress').fadeOut();
  });
  function updateCart(v,i){
      $('#qntyy').val(v);
      $('#item_id').val(i);
      $('#formcart').submit();
  }
    </script>
</body>
</html>















