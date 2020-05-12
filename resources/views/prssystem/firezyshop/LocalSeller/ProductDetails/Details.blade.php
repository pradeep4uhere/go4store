<?php //dd($seller);?>
<section id="wrapper">     
    <div class="container"> 
          <div id="columns_inner">
              <nav data-depth="3" class="breadcrumb hidden-sm-down">
              <div class="container"><h1 class="h1 products-section-title text-uppercase ">Reviews</h1>
              <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
              <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                <a itemprop="item" href="{{route('homePage')}}">
                <span itemprop="name">Home</span>
              </a>
              <meta itemprop="position" content="1">
              </li>
                
              <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
              <a itemprop="item" href="{{url('seller/'.$seller['pincode'].'/'.$seller['businessusername'])}}">
                <span itemprop="name">{{$seller['business_name']}}</span>
              </a>
              <meta itemprop="position" content="2">
              </li>
                
              <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
              <a itemprop="item" href="#">
                <span itemprop="name">{{$productDetails->product['title']}}</span>
              </a>
              <meta itemprop="position" content="3">
              </li>


              </ol>
              </div>
              </nav>
          
<div id="content-wrapper" class="right-column col-xs-12 col-sm-8 col-md-9">
<section id="main" itemscope="" itemtype="https://schema.org/Product">
<div class="row">
<div class="col-md-5 product_main_img">
<section class="page-content" id="content">
<div class="product-leftside">
<ul class="product-flags">
<li class="product-flag on-sale">On sale!</li>
<li class="product-flag new">New</li>
</ul>
 @include('prssystem.firezyshop.LocalSeller.ProductDetails.ProductImageSlider')
<div class="scroll-box-arrows">
<i class="material-icons left"></i>
<i class="material-icons right"></i>
</div>
</div>
</section>
</div>


<div class="col-md-7 product_middle">
<h1 class="productpage_title" itemprop="name">{{$productDetails->product['title']}}</h1>
<div class="hook-reviews">
<div class="comments_note">
<div class="star_content clearfix">
<div class="star star_on"></div>
<div class="star star_on"></div>
<div class="star star_on"></div>
<div class="star star_on"></div>
<div class="star"></div>
</div>
<span>%s Review(s)&nbsp;</span>
</div>
</div>
                    
<div class="product-information">
<!-- begin catalog/_partials/product-prices.tpl -->
<div class="product-prices">
<div class="product-price h5 has-discount" itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
<link itemprop="availability" href="https://schema.org/InStock">
<meta itemprop="priceCurrency" content="USD">
<div class="current-price">
<span itemprop="price" content="19.12">₹{{$productDetails['selling_price']}}</span>
<!-- <span class="discount discount-percentage">Save 20%</span> -->
</div>
</div>
<div class="product-discount">
  <span class="regular-price">₹{{$productDetails['price']}}</span>
</div>          
<div class="tax-shipping-delivery-label"></div>
</div>


            
<div id="product-description-short-1" itemprop="description">
  <p>{{$productDetails['description']}}</p>
</div>
            
            
<div class="product-actions">
<form action="{{url('/cartpage')}}" method="get" id="add-to-cart-or-refresh">
<div class="">
<!-- begin modules/stfeature/views/templates/hook/st_compare_button.tpl -->
<div class="compare">
  <a class="st-compare-button btn-product btn" href="#" data-id-product="1" title="Add to Compare">
    <span class="st-compare-bt-content">
      Unit: {{$productDetails->product->Brand['name']}}
    </span>
    

  </a>
</div>
<!-- end modules/stfeature/views/templates/hook/st_compare_button.tpl -->


                
<!-- begin modules/stfeature/views/templates/hook/st_wishlist_button.tpl -->
<div class="wishlist">
      <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="1" data-id-product-attribute="1" title="Add to Wishlist">
      <span class="st-wishlist-bt-content">
        {{$productDetails['quantity_in_unit']}}&nbsp;{{$productDetails->product->Unit['name']}}
      </span>
    </a>
  </div>
<!-- end modules/stfeature/views/templates/hook/st_wishlist_button.tpl -->
<br/>
<div class="clearfix"></div>
</div>
<div class="">
<!-- begin modules/stfeature/views/templates/hook/st_compare_button.tpl -->
<div class="compare">
  <a class="st-compare-button btn-product btn" href="#" data-id-product="1" title="Add to Compare">
    <span class="st-compare-bt-content">
      Manufacture By {{$productDetails->product->Brand['name']}}
    </span>
    

  </a>
</div>
<!-- end modules/stfeature/views/templates/hook/st_compare_button.tpl -->


                
<!-- begin modules/stfeature/views/templates/hook/st_wishlist_button.tpl -->
<div class="wishlist">
      <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="1" data-id-product-attribute="1" title="Add to Wishlist">
      <span class="st-wishlist-bt-content">
        <img src="{{config('global.THEME_URL_FRONT_IMAGE')}}/Liefstatus_Gruen_04de426b.png.gif"> Certified Brand Seller
      </span>
    </a>
  </div>
<!-- end modules/stfeature/views/templates/hook/st_wishlist_button.tpl -->
<br/>
<div class="clearfix"></div>
</div>

                 
                    
<div class="product-add-to-cart">
<span class="control-label">Quantity</span>
<div class="product-quantity">
  <div class="qty">
    <select class="form-control form-control-select" id="group_1" data-product-attribute="1" name="group[1]">
        <option value="1" selected="selected">1</option>
        <option value="2" >2</option>
        <option value="3" >3</option>
        <option value="4" >4</option>
        <option value="5" >5</option>
        <option value="6" >6</option>
        <option value="7" >7</option>
        <option value="8" >8</option>
        <option value="9" >9</option>
        <option value="10" >10</option>
    </select>
  </div>

  <div class="add">		
    <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="button" onClick="addToCart('{{encrypt($productDetails->id)}}','{{str_slug($productDetails->product['title'])}}')">
      <i class="fa fa-shopping-cart"></i>&nbsp;Add to cart
    </button>
   
    &nbsp;
    <button class="btn btn-danger add-to-cart" data-button-action="add-to-cart" type="button" onClick="buyNow('{{encrypt($productDetails->id)}}','{{str_slug($productDetails->product['title'])}}')" >
      <i class="fa fa-inr"></i>&nbsp;Buy Now
    </button>
    <span id="product-availability"></span>
  </div>
</div>
<div class="clearfix"></div>



<p class="product-minimal-quantity">Only 2 Left</p>
</div>
</form>
</div>
                
<!-- begin modules/stfeature/views/templates/hook/st_compare_button.tpl -->
<div class="compare">
	<a class="st-compare-button btn-product btn" href="#" data-id-product="1" title="Add to Compare">
		<span class="st-compare-bt-content">
			<i class="fa fa-area-chart"></i>
			Add to Compare
		</span>
		

	</a>
</div>
<!-- end modules/stfeature/views/templates/hook/st_compare_button.tpl -->


                
<!-- begin modules/stfeature/views/templates/hook/st_wishlist_button.tpl -->
<div class="wishlist">
			<a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="1" data-id-product-attribute="1" title="Add to Wishlist">
			<span class="st-wishlist-bt-content">
				<i class="fa fa-heart" aria-hidden="true"></i>
				Add to Wishlist
			</span>
		</a>
	</div>
<!-- end modules/stfeature/views/templates/hook/st_wishlist_button.tpl -->
</div>
</div>

    <div class="right_cms">

    <!-- begin Right Banner TOP -->
      @include('prssystem.firezyshop.LocalSeller.ProductDetails.RightBannerTop')
    <!-- begin Right Banner TOP -->

    <!-- begin Right Banner Bottom -->
      @include('prssystem.firezyshop.LocalSeller.ProductDetails.RightBanner')
    <!-- begin Right Banner Bottom -->
    </div>



</div>
  

<div class="row">
<div class="col-md-12"> 
    <section class="product-tabcontent" style="margin-top: 25px">  
    <div class="tabs">
      <!--Tabs Slider Start Here-->
        @include('prssystem.firezyshop.LocalSeller.ProductDetails.Tabs')
      <!--Tabs Product Slider Ends Here-->
    </div>
</section>
</div>
</div> 




<div class="row">
<div class="col-md-12"> 
    <section class="product-tabcontent">  
    <div class="tabs">
      <!--Feature Product Slider Start Here-->
       <?php /* @include('prssystem.firezyshop.LocalSeller.FeatureProducts.featureProducts') */?>
      <!--Feature Product Slider Ends Here-->
    </div>
</section>
</div>
</div> 


</section>
</div>
</div>
</div>
</section>


<script type="text/javascript">
function getAlert(a,b,c){
  swal({
    title:a,
    text: b,
    icon: c,
  });
}
//Add To Cart 
function addToCart(pid,title){
@if(Auth::check()) 
var Auth ="<?php echo Auth::user()->id ?>";
@else
var Auth =0;
@endif
if(Auth>0){
    var csrf="{{csrf_token()}}";
    var postJson={_token:csrf,pid:pid,name:title};
    $.ajax({
      type:'POST',
      url:"{{route('addtocart')}}",
      data:postJson,        
      dataType:'json',        
      success:function(res){
        //var result = JSON.parse(res);
        console.log(res);
        if(res.status=='success'){
          getAlert('Great',res.message,res.status);
          $('#itemCount').text(res.cart.count);
        }

            if(res.status=='error'){
                getAlert('Great',res.message,res.status);
            }
      }
    });
}else{
    getAlert('Opps Login Required!!','You have to login first!!','error');
}
}
</script>
   
  