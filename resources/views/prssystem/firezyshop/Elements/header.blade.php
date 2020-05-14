<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WHG5Z5T"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="{{config('global.THEME_FRONT_PLUG').'/js/jquery.mockjax.js'}}"></script>
<script src="{{config('global.THEME_FRONT_PLUG').'/js/bootstrap-typeahead.js'}}"></script>
<style type="text/css">
	.typeahead li{
		padding:8px;
		font-size: 13px;
		background-color:'#CCC'
		}
</style>
<header id="header">
<div class="header-banner">
</div>
<nav class="header-nav">
	<div class="container">
		<div class="hidden-md-down">
			<div class="left-nav">
				
			</div>
			
			<div class="right-nav">
				
<!-- Block links module -->
<div id="links_block_top" class="block links">
	<h3 class="h3 title_block ">
		<i class="material-icons"></i>
	</h3>
	
		
	<ul id="tm_toplink" class="block_content">
			 
			<li>
				<a href="#" title="home">home</a></li>
					 
			<li>
				<a href="#" title="new collection">new collection</a></li>
					 
			<li>
				<a href="#" title="contact us">contact us</a></li>
					 
			<li>
				<a href="#" title="brands">brands</a></li>
					 
			<li>
				<a href="#" title="returns">returns</a></li>
					 
			<li>
				<a href="#" title="special">special</a></li>
				</ul>
</div>

			</div>
		</div>
		
			<div class="hidden-lg-up text-xs-center mobile">
				<div class="text-xs-left mobile hidden-lg-up mobile-menu">
			  <div class="menu-container">
			    <div class="menu-icon">
			     <div class="cat-title"> <i class="material-icons menu-open"></i></div>
			    </div>

			</div>
			<div class="top-logo" id="_mobile_logo"></div>
			<div class="pull-xs-right" id="_mobile_cart"></div>
			<div class="pull-xs-right" id="_mobile_user_info"></div>
			
			<div class="right-nav">
				
<!-- Block links module -->
<div id="links_block_top" class="block links">
	<h3 class="h3 title_block ">
		<i class="material-icons"></i>
	</h3>
	
		
	<ul id="tm_toplink" class="block_content">
			 
			<li><a href="{{env('APP_URL')}}" title="Home">Home</a></li>
			<li><a href="{{url('/seller',['pincode'=>$pincode['pincode']])}}" title="New Seller">new Seller</a></li>
			<li><a href="{{url('page/aboutus')}}" title="About Us">About Us</a></li>
			<li><a href="#" title="Find Your Nearest Seller">Best Seller</a></li>
			<li><a href="#" title="Write us ~ Contact Us">Write us</a></li>
			<li><a href="#" title="Become Distributor">Distributor</a></li>
				</ul>
</div>

			</div>
			<div class="clearfix"></div>
		</div>
        
	</div>
</div></nav>



	<div class="header-top">
		<div class="header-div">
		<div class="container">
		        	<div class="header_logo hidden-md-down" id="_desktop_logo">
 				<a href="{{url('/')}}">
 					<h1 style="color: white;font-size: 31px;font-weight: bold;font-family: monospace;">Go4Shop</h1>
				</a>
  			</div>

		<div id="search_widget" class="col-lg-4 col-md-5 col-sm-12 search-widget" data-search-controller-url="#">
		<span class="search_button"></span>
		<div class="searchtoggle">
		<form method="get" action="{{url('/seller')}}">
			<input type="text" id="demo3" name="s" value="" placeholder="Enter Your address OR Zipcode e.g 201301" aria-label="Search" class="ui-autocomplete-input" autocomplete="off">
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
			<li><a href="#" title="Find Your Nearest Seller">Best Seller</a></li>
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
	var  jsonData = <?php echo json_encode($pincode['addressArray']); ?>;
	$('#demo3').typeahead({
        source: <?php echo json_encode($pincode['addressArray']); ?>,
	    displayField: 'full_name',
	 });

	
	$('#demo4').typeahead({
		 ajax: "{{env('SITE_URL').'/getaddresslist'}}",
	});
</script>