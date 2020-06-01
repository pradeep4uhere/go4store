<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WHG5Z5T"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<style>
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(../../public/theme/firezyshop/assets/img/megnor/Preloader_2.gif) center no-repeat #fff;
}
.sellerList{
	background-color: cornsilk;
}

@media (max-width: 480px){
	#tm_toplink {
    	top: 45px;
    	left: 24px;
	}
	
	.mobileSearch{
		background-color:'#2457aa'; 
		position: absolute; 
		width: 100%; 
		top: 10px;     
		height: 52px;
    	top: 93px;
    	left: 10px;

	}
	.search_widget_mobile{
		display: block; 
		top:-10px !important; 
		left: 5px !important;
		height: 31px;
		width: '105%';
	}
	.mobileSearch  form input[type="text"]{
		border-radius: 1px !important;
	}
	.searchtoggle {
	    top: -2px;
	    width: 100%;
	    right: 0px;
	}
}
</style>
<div class="se-pre-con" id="loader"></div>
<header id="header">
<div class="header-banner">
</div>
@include('prssystem.firezyshop.Elements.mobileMenu')

	<div class="header-top">
		<div class="header-div">
		<div class="container">
		        	<div class="header_logo hidden-md-down" id="_desktop_logo">
 				<a href="{{url('/')}}">
 					<h1 style="color: white;font-size: 24px;font-weight: bold;font-family: monospace;">
 						<span class="block pull-left">
 						<img src="{{env('APP_URL')}}/public/theme/prssystem/img/front/logo.png" style="max-width: 100%;
						    vertical-align: middle;
						    height: 59px;
						    position: absolute;
						    top: 18px;">
 						</span>
 						<span class="pull-right block" style="font-size: 21px; padding-right: 5px;">
						Go4shop 							
 						</span>
</h1>
				</a>
  			</div>

		<div id="search_widget" class="search_widget_mobile col-lg-4 col-md-5 col-sm-12 search-widget" data-search-controller-url="#">
		<span class="search_button"></span>
		<div class="searchtoggle" style="display: block;">
		<form method="get" action="{{url('/sellersearch')}}">
			<input type="text" id="search-box" name="s" value="" placeholder="Enter Your address OR Zipcode e.g 201301" aria-label="Search" class="ui-autocomplete-input" autocomplete="off"/>
			<input type="hidden" name="sellername" id="sellername">
			<div id="suggesstion-box" style="position: absolute; max-height: 300px; overflow: auto; min-width: 100%"></div>
			<button type="submit">
			<div class="submit-text">search</div>
			</button>
		</form>
		<input type="hidden" name="hiddenJson" id="hiddenJson">
		</div>
		
		</div>
		
<div id="tmnav1cmsblock">
  <div class="navcms_block">
<div class="box-content-cms">
<div class="inner-cms">
<div class="box-cms-content">
<div class="first-content">
<div class="inner-content">
<div class="service-content">
<div class="cms-icon icon-left1"></div>
<div class="service-right">
<div class="title">home</div>
<div class="sub-title">Delivery</div>
</div>
</div>
</div>
</div>
<div class="second-content">
<div class="inner-content">
<div class="service-content">
<div class="cms-icon icon-left2"></div>
<div class="service-right">
<div class="title">contact us</div>
<div class="sub-title">{{env('PHONE_NO')}}</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="third-content">
<div class="offer-content">
<div class="offer-image"></div>
<div class="offer-inner">
<div class="offer_title">My Pincode {{$pincode['pincode']}}</div>
</div>
</div>
</div>
</div>

<div id="mobile_top_menu_wrapper" class="row hidden-lg-up">
  <div class="mobile-menu-inner">
    <div class="menu-icon">
   <div class="cat-title title2">   <i class="material-icons menu-close"></i> </div>
    </div>
    <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
		<div id="_mobile_currency_selector"></div>
		<div id="_mobile_language_selector"></div>
		<div id="_mobile_contact_link"></div>
	</div>
</div>
</div>
</div>
		<div class="header-top-main bg_main">
			<div class="container">
			 
<div id="tm_vertical_menu_top" class="tmvm-contener clearfix col-lg-12  hb-animate-element top-to-bottom">
	
<div class="block-title">
		<a href="becomeseller">
		<div class="menu-icon"></div>
		<div class="menu-title">Become</div>
		<div class="menu-title1">Seller Now</div>
		</a>
		</div>
</div>
<!-- Block links module -->
<div id="links_block_top" class="block links">
	<h3 class="h3 title_block ">
		<i class="material-icons"></i>
	</h3>
	<ul id="tm_toplink" class="block_content">
			<li><a href="{{url('/')}}" title="Home">Home</a></li>
			<li><a href="{{url('/seller/'.$pincode['pincode'])}}" title="New Seller">new Seller</a></li>
			<li><a href="{{url('page/aboutus')}}" title="About Us">About Us</a></li>
			<li><a href="{{url('/seller/'.$pincode['pincode'])}}" title="Find Your Nearest Seller">Best Seller</a></li>
			<li><a href="{{url('contactus')}}" title="Write us ~ Contact Us">Write us</a></li>
			<li><a href="{{url('contactus')}}" title="Become Distributor">Distributor</a></li>
			

	</ul>
</div>
<!-- /Block links module -->
<!-- begin shoppingcart-->
<div id="_desktop_cart">
  <div class="blockcart cart-preview active" data-refresh-url="">
    <div class="header blockcart-header dropdown js-dropdown">
	<a href="{{route('cart')}}" rel="nofollow" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
	<div class="cart-image">
	<div id="bgimage"></div>
		<i class="material-icons shopping-cart">shopping_cart</i>
		<span class="cart-products-count">{{session('countItem')}}</span>
	</div>
	<div class="cart-price">
	<span class="hidden-md-down cart">My cart</span>
		<span class="hidden-md-down value"><i class="fa fa-inr"></i>0.00</span>
		</div>
		</a>
      </div>
  </div>
</div>
<div id="_desktop_user_info">
  
  @if(Auth::user())
  <div class="tm_userinfotitle"><i class="fa fa-user"></i> {{Auth::user()->first_name}}</div>
  <div class="tm_userinfotitle1 tm_userinfotitle_account">My Account</div>
  @else
  <div class="tm_userinfotitle">Sign in</div>
  <a href="{{route('login')}}">
  <div class="tm_userinfotitle1">My Account</div>
  </a>
  @endif
  <i class="material-icons expand-more"></i>
  @if(Auth::user())
  <ul class="user-info">
        <a href="?controller=my-account" title="Log in to your customer account" rel="nofollow">
        <i class="material-icons"></i>
        <span class="hidden-md-down">Welcome, {{Auth::user()->first_name}}</span>
      </a>
    
    <div class="head-wishlist">
      <a class="ap-btn-wishlist dropdown-item" href="{{url('user/profile')}}" title="Wishlist" rel="nofollow">
        <i class="fa fa-user"></i>&nbsp;
        <span>Profile</span>
		<!-- <span class="ap-total-wishlist ap-total"></span> -->
      </a>
    </div>
     <div class="head-compare">
      <a class="ap-btn-compare dropdown-item" href="#" title="Compare" rel="nofollow">
        <i class="fa fa-shopping-cart"></i>&nbsp;
        <span>My Order</span>
<!-- <span class="ap-total-compare ap-total"></span> -->
      </a>
    </div>
     <div class="head-compare">
      <a class="ap-btn-compare dropdown-item" href="#" title="Compare" rel="nofollow">
        <i class="fa fa-gear"></i>&nbsp;
        <span>Setting</span>
<!-- <span class="ap-total-compare ap-total"></span> -->
      </a>
    </div>
  <div class="language-selector-wrapper">
      

        <div class="language-selector dropdown js-dropdown">
        <span class="expand-more hidden-md-down" data-toggle="dropdown">
		<select class="link hidden-lg-up" aria-labelledby="language-selector-label">
		  <option value="?id_lang=1" selected="selected"></option>
		  <option value="?id_lang=2"></option>
		  <option value="?id_lang=3"></option>
		  <option value="?id_lang=4"></option>
		  <option value="?id_lang=5"></option>
		</select>
      </span>
    </div>
  </div>
   <div class="head-compare">
      <a class="ap-btn-compare dropdown-item" href="javascript:void(0);" title="Edit My Pincode" rel="nofollow" onclick="return openPinCodeBox()">
        <i class="fa fa-map-marker"></i>&nbsp;
        <span>Pincode&nbsp;({{$pincode['pincode']}})&nbsp;</span>
      </a>
    </div>
     <div class="head-compare">
      <a class="ap-btn-compare dropdown-item" href="#" title="Refer and Earn More" rel="nofollow">
        <i class="fa fa-inr"></i>&nbsp;
        <span>Refer and Earn</span>
      </a>
    </div>
     <div class="head-compare">
      <a class="ap-btn-compare dropdown-item" href="{{route('becomeseller')}}" title="Register as seller now" rel="nofollow">
        <i class="fa fa-truck"></i>&nbsp;
        <span>Become Seller</span>
      </a>
    </div>
    <div class="currency-selector dropdown js-dropdown">
        <div class="current">
        	<a href="{{route('logout')}}">
            <span class="cur-label"><i class="fa fa-sign-out"></i>&nbsp;Sign Out</span>
        </a>
        </div>

     
    </div></ul>
@endif


</div>


			</div>
		</div>
		</div>
      </header>

<script type="text/javascript">
	// AJAX call for autocomplete 
	$(document).ready(function(){
	    
	     $(window).keydown(function(event){
            if(event.keyCode == 13) {
              event.preventDefault();
              return false;
            }
          });
          
          
		$("#search-box").keyup(function(){
			$.ajax({
			type: "GET",
			url: "{{route('getaddresssearchlist')}}",
			data:'keyword='+$(this).val(),
			beforeSend: function(){
				$("#search-box").css("background","#FFF url({{config('global.THEME_FRONT_IMAGE').'/megnor/loading.gif'}}) no-repeat 165px");
			},
			success: function(data){
				console.log(data);
				$("#suggesstion-box").show();
				$("#suggesstion-box").html(data);
				$("#search-box").css("background","#FFF");
			}
			});
		});
	});
	//To select country name
	function selectCountry(val) {
		$("#search-box").val(val);
		$("#suggesstion-box").hide();
	}
	function getValue(e){
		$("#search-box").val($(e).html());
		var listStr = $(e).html();
		var listArr = listStr.split(',');
		if(listArr[0]=='Seller'){
			$("#sellername").val($.trim(listArr[1]));
		}else{
			$("#sellername").val('');
		}
		$("#suggesstion-box").hide();
	}

</script>