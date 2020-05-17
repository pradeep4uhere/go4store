
<style type="text/css">
	.menuHeader{
		background-color: #2457aa;
	    padding: 10px;
	    margin: -8px;
	    font-size: 17px;
	    font-family: sans-serif;
	    color: #FFF;
	    font-weight: 600;
	    margin-bottom: 10px;
	}
</style>
<nav class="header-nav">
	<div class="container">
		<div class="hidden-md-down">
			<div class="left-nav"></div>
			<div class="right-nav">
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
			  <div class="menu-container" style="top:55px;">
			    <div class="menu-icon">
			     <div class="cat-title" > <i class="material-icons menu-open"></i></div>
			    </div>
			</div>
			<div class="top-logo" id="_mobile_logo"><a href="{{route('homePage')}}" style="font-size: 28px; color: #FFF; font-weight: bold">
                  <!-- <img class="logo img-responsive" src"" alt="Demo Store"> -->
                  Go4Shop
                </a></div>
              <div id="search_widget" class="pull-xs-left col-lg-4 col-md-5 col-sm-12 search-widget" style="margin-top:8px; margin-left:10%; color: #FFF">
              	@if(Auth::user()) Welcome {{ucfirst(strtolower(Auth::user()->first_name))}}, @else Welcome Guest, @endif
			  </div>  
			<div class="pull-xs-right" id="_mobile_cart" style="margin-top: 8px; margin-left: 5px;">
						<div class="blockcart cart-preview inactive" data-refresh-url="">
			    		<div class="header blockcart-header dropdown js-dropdown">
						<a rel="nofollow" href="{{route('cart')}}"> 
						<div class="cart-image">
							<i class="fa fa-shopping-cart" style="color: #FFF; font-size: 24px;"></i>
						<span class="cart-products-count">0</span>
						</div>
						<div class="cart-price" >
						<span class="hidden-md-down cart">My cart</span>
						<span class="hidden-md-down value">$0.00</span>
					</div>
					<div id="bgimage"></div>
					</a>
				    </div>
			  </div>
			</div>
<div class="pull-xs-right" id="_mobile_user_info" style="margin-left: 9px; display: block">
<div class="tm_userinfotitle1">My Account</div>
<i class="fa fa-user" style="font-size: 24px;color: #FFF"></i>
@if(Auth::user())
  <ul class="user-info" style="margin-top:-9px; ">
        <a href="#" title="Log in to your customer account" rel="nofollow">
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

<div id="search_widget" class="col-lg-4 col-md-5 col-sm-12 search-widget" style="margin-top: 9px;">
	<i class="fa fa-ellipsis-v" style="font-size: 25px;color: #FFF"></i>
</div>
			
<div class="right-nav">
<!-- Block links module -->
<div id="links_block_top" class="block links">
	<h3 class="h3 title_block ">
		<i class="material-icons"></i>
	</h3>
	<ul id="tm_toplink" class="block_content">
			 
			<li>
				<a href="{{route('homePage')}}" title="home">home</a></li>
					 
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
			<div class="clearfix"></div>
		</div>
        
	</div>
</div>
</nav>

<div id="mobile_top_menu_wrapper" class="row hidden-lg-up slide" style="display: none">
<div class="mobile-menu-inner">
<div class="menu-icon active">
	<div class="menuHeader">
		<div class="container">
		<div class="row">
			<div class="col-sm-10 col-md- pull-xs-left" style="width: 80%;float: left;">Menu @if(Auth::user()) Hi, {{ucfirst(strtolower(Auth::user()->first_name))}} @endif</div>
			<div style="width: 20%;float: right;" class="pull-xs-right"><i class="fa fa-close pull-xs-right" style="color: #FFF"></i></div>
		</div>
		</div>
	</div>
</div>
<div class="js-top-menu mobile" id="_mobile_top_menu">
	<ul class="tm_sf-menu top-menu" id="top-menu" data-depth="0">
		<li class="category " id="tmcategory-6">
			<a href="{{route('homePage')}}" class="dropdown-item" data-depth="0"><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a>
		</li>
		@if(Auth::user())
		
		<li class="category " id="tmcategory-6">
			<a href="{{route('cart')}}" class="dropdown-item" data-depth="0"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Cart Items</a>
		</li>
		<li class="category " id="tmcategory-6">
			<a href="{{route('login')}}" class="dropdown-item" data-depth="0"><i class="fa fa-inr"></i>&nbsp;&nbsp;My Order</a>
		</li>
		<li class="category " id="tmcategory-6">
			<a href="{{route('register')}}" class="dropdown-item" data-depth="0"><i class="fa fa-gear"></i>&nbsp;&nbsp;Setting</a>
		</li>
		@else
		<li class="category " id="tmcategory-6">
			<a href="{{url('page/aboutus')}}" class="dropdown-item" data-depth="0"><i class="fa fa-home"></i>&nbsp;&nbsp;About Us</a>
		</li>
		<li class="category " id="tmcategory-6">
			<a href="{{route('login')}}" class="dropdown-item" data-depth="0"><i class="fa fa-user"></i>&nbsp;&nbsp;Login</a>
		</li>
		<li class="category " id="tmcategory-6">
			<a href="{{route('register')}}" class="dropdown-item" data-depth="0"><i class="fa fa-user"></i>&nbsp;&nbsp;Register</a>
		</li>
		@endif
		<li class="category " id="tmcategory-6">
			<a href="{{route('becomeseller')}}" class="dropdown-item" data-depth="0"><i class="fa fa-shopping-bag"></i>&nbsp;&nbsp;Become Seller</a>
		</li>
		<li class="category " id="tmcategory-6">
			<a href="{{route('becomeseller')}}" class="dropdown-item" data-depth="0"><i class="fa fa-handshake-o"></i>&nbsp;&nbsp;Partner With Us</a>
		</li>
		<li class="category " id="tmcategory-6">
			<a href="{{route('contactus')}}" class="dropdown-item" data-depth="0"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Contact Us</a>
		</li>
		<li class="category " id="tmcategory-6">
			<a href="{{route('contactus')}}" class="dropdown-item" data-depth="0"><i class="fa fa-life-ring"></i>&nbsp;&nbsp;Help</a>
		</li>	
		@if(Auth::user())
			<li class="category " id="tmcategory-6">
			<a href="{{route('logout')}}" class="dropdown-item" data-depth="0"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Sing Out</a>
		</li>
		@endif
		
</ul>
</div>
<div id="_mobile_currency_selector"></div>
<div id="_mobile_language_selector"></div>
<div id="_mobile_contact_link"></div>
</div>
</div>

<script type="text/javascript">
	$(".cat-title").click(function(){
		$("#mobile_top_menu_wrapper").toggle();
	});
	$(".fa-ellipsis-v").click(function(){
		$(".user-info").toggle();
		openPinCodeBox();
	});

	$("#_mobile_user_info").click(function(){
		$(".user-info").toggle();
	});
	$(".fa-close").click(function(){
		$("#mobile_top_menu_wrapper").toggle();
	});


</script>