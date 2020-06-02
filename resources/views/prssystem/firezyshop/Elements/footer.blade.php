
 <?php $footeMenu = config('global.FOOTER_MENU'); 
 //dd($footeMenu);?>
<footer id="footer">
<div class="footer-before container">
<div class="container">
</div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row footer">
<div class="col-md-4 links block links hb-animate-element top-to-bottom">
  <h3 class="h3 hidden-md-down">policy</h3>
    <div class="title h3 block_title hidden-lg-up" id="footer_sub_menu_47856" data-toggle="collapse">
	<span class="">policy</span>
	<span class="pull-xs-right">
	  <span class="navbar-toggler collapse-icons">
		<i class="material-icons add"></i>
		<i class="material-icons remove"></i>
	  </span>
	</span>
  </div>
  <ul id="_footer_sub_menu_47856" class="collapse block_content">
  	<?php foreach($footeMenu['FIRST'] as $menukey=>$menuUrl){ ?>
		  <li>
		<a id="link-product-page-prices-drop-3" class="cms-page-link" href="{{route('viewPage',['slug'=>$menuUrl])}}" title="Our special products">
		  {{$menukey}}
		</a>
	  </li>
	<?php } ?>
		 
	  </ul>
</div>
<div class="col-md-4 links block links hb-animate-element top-to-bottom">
  <h3 class="h3 hidden-md-down">Go4shop</h3>
    <div class="title h3 block_title hidden-lg-up" id="footer_sub_menu_93800" data-toggle="collapse">
	<span class="">Go4shop</span>
	<span class="pull-xs-right">
	  <span class="navbar-toggler collapse-icons">
		<i class="material-icons add"></i>
		<i class="material-icons remove"></i>
	  </span>
	</span>
  </div>
  <ul id="_footer_sub_menu_93800" class="collapse block_content">
		<?php foreach($footeMenu['SECOND'] as $menukey=>$menuUrl){ ?>
		  <li>
		<a id="link-product-page-prices-drop-3" class="cms-page-link" href="{{route('viewPage',['slug'=>$menuUrl])}}" title="Our special products">
		  {{$menukey}}
		</a>
	  </li>
	<?php } ?>
	  </ul>
</div>
<div class="col-md-4 links block links hb-animate-element top-to-bottom">
  <h3 class="h3 hidden-md-down">help</h3>
    <div class="title h3 block_title hidden-lg-up"  id ="footer_sub_menu_61326" data-target="#footer_sub_menu_61326" data-toggle="collapse">
	<span class="">help</span>
	<span class="pull-xs-right">
	  <span class="navbar-toggler collapse-icons">
		<i class="material-icons add"></i>
		<i class="material-icons remove"></i>
	  </span>
	</span>
  </div>
  <ul id="_footer_sub_menu_61326" class="collapse block_content">
		<?php foreach($footeMenu['THIRD'] as $menukey=>$menuUrl){ ?>
		  <li>
		<a id="link-product-page-prices-drop-3" class="cms-page-link" href="{{route('viewPage',['slug'=>$menuUrl])}}" title="Our special products">
		  {{$menukey}}
		</a>
	  </li>
	<?php } ?>
	  </ul>
</div>

<div class="block-contact footer-block col-xs-12 col-sm-4 links wrapper hb-animate-element right-to-left">
  
   		<h3 class="block-contact-title hidden-md-down"><a href="#">address</a></h3>
      
		<div class="title h3 hidden-lg-up block_title" id="block-contact_list" data-target="#block-contact_list" data-toggle="collapse">
		  <span class="">address</span>
		  <span class="pull-xs-right">
			  <span class="navbar-toggler collapse-icons">
				<i class="material-icons add"></i>
				<i class="material-icons remove"></i>
			  </span>
		  </span>
		</div>
	  
	  <ul id="_block-contact_list" class="collapse">
          <li class="address">
      <!-- <i class="material-icons">&#xE55F;</i> -->
   <span class="contactdiv" style="color: white"> Go4shop.online<br>Mahagun Mywoods, Gaur City-2<br>Greater Noida West<br>Pin-201309, Uttar Pradesh</span>
    </li>
	  
         <li class="number">
       
            <i class="material-icons" style="color: white">&#xE324;</i>
        <span style="color: white"> {{env('ADMIN_MOBILE')}}</span>
    </li>
      

	 
            	  <li class="email">
       
        		<i class="material-icons" style="color: white">&#xE554;</i>
        <a href="mailto:Sales@yourcompany.com" class="dropdown">{{env('MAIL_FROM_ADDRESS')}}</a>
		</li>
      	  </ul>
  
</div>

<div class="links block_newsletter block col-lg-12 col-md-12 col-sm-12">
<h3 class="block_title hidden-md-down">Subscribe Now</h3>
<h3 class="block_title hidden-lg-up title" id="block_email_toggle" data-toggle="collapse">Subscribe Now
    <span class="pull-xs-right">
      <span class="navbar-toggler collapse-icons">
      <i class="material-icons add"></i>
      <i class="material-icons remove"></i>
      </span>
    </span>
  </h3>
    <div class="col-md-12 col-xs-12 block_content collapse" id="_block_email_toggle">
              <p class="text">You may unsubscribe at any moment. please find our contact info in the legal notice.</p>
            <form action="#footer" method="post">
       
          <div class="col-xs-12">

              <div class="input-wrapper">
              <input name="email" type="email" value="" placeholder="Enter Email ID" aria-labelledby="block-newsletter-label">



            <input class="btn btn-primary pull-xs-right hidden-xs-down" name="submitNewsletter" type="submit" value="Subscribe">
           

            <input class="btn btn-primary pull-xs-right hidden-sm-up" name="submitNewsletter" type="submit" value="OK">
           
            <input type="hidden" name="action" value="0">
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="col-xs-12">
                        </div>
       
      </form>
    </div>
  </div>

<div id="overlay" style="display:none;" ></div>
<div id="overlayForm" class="newsletter-main" style="display:none;">
  <div class="tm-newsletter-popup-close">
  <!--   <a class="tm_close" href="javascript:void(0)">
      <i class="material-icons">clear</i>
    </a>
 -->
  </div>
  <div class="left-block">
        <div class="tm-newsletter-popup">
      <img src="{{config('global.THEME_FRONT_IMAGE')}}/shutterstock_569761816.jpg">
        </div>
  </div>
  <div class="right-block">
      <div class="inner">
  
      <div class="clearfix newsletter-content">
        <div class="innerbox-newsletter"><h3 class="newsletter_title">YOUR PINCODE</h3><div class="newsletter-text"><p>Get instant updates about our new seller and promos! Special offers  for your nearest seller in your location.</p></div></div>
      </div>
      <div class="newsletter-form">
        <form action="{{route('savepincode')}}" method="POST">
        @csrf
        <div class="newsletter-popup-form">
          <div class="input-wrapper">
            <input class="newsletter-input-email" id="newsletter_input_email" type="text" name="pincode" size="10" placeholder="Enter your pincode" maxlength="6" minlength="6" required="required">
          </div>
        </div>
        <div id="regisNewsletterMessage"></div>
        
          <div class="coupon-side clearfix">
          <div class="coupon-wrapper clearfix">
            <div id="coupon-element" class="coupon">
              <div class="dashed-border">
                <button value="Submit" name="pincodebtn" type="submit" class="btn btn-primary" style="width: 100%">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <div class="newsletter-checkbox">                    
        <div class="checkbox">
          
        </div>
        </div>
      </form>
      </div>
      </div> 
    </div>   
</div>

<script src="{{config('global.THEME_FRONT_PLUG').'/plugin/jquery.min.js'}}"></script>
<script type="text/javascript">
function openPinCodeBox(){
	$("#overlay").css({'display':'block'});
	$("#overlayForm").css({'display':'block'});
}
$(document).ready(function(){
	var pincode = "{{$pincode['pincode']}}";
	if(pincode==''){
		$("#overlay").css({'display':'block'});
		$("#overlayForm").css({'display':'block'});
	}

	
});
</script>

<script type="text/javascript">
	$(".cat-title").click(function(){
		$("#mobile_top_menu_wrapper").toggle();
	});

	$(".fa-ellipsis-v").click(function(){
		$(".user-info").hide();
    $("#tm_toplink").toggle();
    $(".search_widget_mobile").hide();
		//openPinCodeBox();
	});

  $(".fa-search").click(function(){
    $(".user-info").hide();
    $("#tm_toplink").hide();
    $(".search_widget_mobile").toggle();
  });

	$("#_mobile_user_info").click(function(){
		$(".user-info").toggle();
    $("#tm_toplink").hide();
    $(".search_widget_mobile").hide();
	});
	$(".fa-close").click(function(){
		$("#mobile_top_menu_wrapper").toggle();
	});

  $('#footer_sub_menu_61326').click(function(){
    $("#_footer_sub_menu_61326").toggleClass("collapse in");
  });


  $('#footer_sub_menu_93800').click(function(){
    $("#_footer_sub_menu_93800").toggleClass("collapse in");
  });


  $('#footer_sub_menu_47856').click(function(){
    $("#_footer_sub_menu_47856").toggleClass("collapse in");
  });


  $('#block_email_toggle').click(function(){
    $("#_block_email_toggle").toggleClass("collapse in");
  });


  $('#block-contact_list').click(function(){
    $("#_block-contact_list").toggleClass("collapse in");
  });
  
</script>
<div class="tm-show-newsletter-popup open">
	<div class="tm-coupon-small">
		<div class="tab-image"></div>
		<div class="shears-small"></div>
		<div class="dashes-d"></div>
		<div class="dashes-b"></div>
		<div class="share-coupon-small-wrapper"><a href="javascript: void(0)"><span>Discount</span></a></div>
	</div>
</div>



      
    </div>
  
</div>
  </div>

   <div class="footer-after hb-animate-element bottom-to-top">
<div class="container">
<div id="links_block_footer" class="block links">
<ul id="tm_footerlink" class="block_content ">
<?php foreach($footeMenu['BOTTOM'] as $menukey=>$menuUrl){ ?>
<li>
<a id="link-product-page-prices-drop-3" class="cms-page-link" href="{{route('viewPage',['slug'=>$menuUrl])}}" title="{{$menukey}}">
	  {{$menukey}}
	</a>
<?php } ?>
</ul>
</div>
<div id="tmpaymentcmsblock" class="links hb-animate-element right-to-left">
<div class="title h3 block_title hidden-md-down">
<h3 class="h3">payment</h3>
  <div class="payment">
<p><a href="#"> <img src="{{config('global.THEME_FRONT_IMAGE')}}/visa.png" alt="logo.png"></a></p>
<p><a href="#"> <img src="{{config('global.THEME_FRONT_IMAGE')}}/discover.png" alt="logo.png"></a></p>
<p><a href="#"> <img src="{{config('global.THEME_FRONT_IMAGE')}}/American-Express-icon.png" alt="logo.png"></a></p>
<p><a href="#"> <img src="{{config('global.THEME_FRONT_IMAGE')}}/maestro.png" alt="logo.png"></a></p>
<p><a href="#"> <img src="{{config('global.THEME_FRONT_IMAGE')}}/paypal.png" alt="logo.png"></a></p>
</div>
  </div>
  <div class="title h3 block_title hidden-lg-up" data-target="#footer_payment" data-toggle="collapse">
	<span class="h3">payment options</span>
	<span class="pull-xs-right">
	  <span class="navbar-toggler collapse-icons">
		<i class="material-icons add">&#xE313;</i>
		<i class="material-icons remove">&#xE316;</i>
	  </span>
	</span>
	 <ul class="" id="footer_payment">
     <div class="payment">
<p><a href="#"> <img src="{{config('global.THEME_FRONT_IMAGE')}}/visa.png" alt="logo.png"></a></p>
<p><a href="#"> <img src="{{config('global.THEME_FRONT_IMAGE')}}/discover.png" alt="logo.png"></a></p>
<p><a href="#"> <img src="{{config('global.THEME_FRONT_IMAGE')}}/American-Express-icon.png" alt="logo.png"></a></p>
<p><a href="#"> <img src="{{config('global.THEME_FRONT_IMAGE')}}/maestro.png" alt="logo.png"></a></p>
<p><a href="#"> <img src="{{config('global.THEME_FRONT_IMAGE')}}/paypal.png" alt="logo.png"></a></p>
</div>
    </ul>
  </div>
</div>
<p class="copyright">
  <a class="_blank" href="#" target="_blank">
    © 2020 - www.go4shop.online
  </a>
</p>
</div>
</div>
<a class="top_button" href="#" style="">&nbsp;</a>
</footer>
<script type="text/javascript">

$( document ).ready(function() {
	
	
});
</script>
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c6bd5e677e0730ce043a919/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<script> 
    document.onreadystatechange = function() { 
        if (document.readyState !== "complete") { 
            document.querySelector( 
              "body").style.visibility = "hidden"; 
            document.querySelector( 
              "#loader").style.visibility = "visible"; 
        } else { 
            document.querySelector( 
              "#loader").style.display = "none"; 
            document.querySelector( 
              "body").style.visibility = "visible"; 
        } 
    }; 
</script>

