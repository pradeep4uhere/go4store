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
  <span class="btn-success pull-left" style="margin-right: 10px;display: block; width: 45px; padding:2px 2px 2px 5px; border-radius: 10px">4.5/5</span>
  <i class="fa fa-star" style="color: gold"></i>
  <i class="fa fa-star" style="color: gold"></i>
  <i class="fa fa-star" style="color: gold"></i>
  <i class="fa fa-star" style="color: gold"></i>
  <i class="fa fa-star" ></i>
</div>
<span style="display: block;margin-right: 10px;"> 45% Review(s)&nbsp;</span>
</div>
</div>
<?php if($productDetails['description']!=''){ ?>
<div id="product-description-short-1" itemprop="description">
  <p>Descriptions: {{$productDetails['description']}}</p>
</div>
<?php } ?>
                    
<div class="product-information">
<!-- begin catalog/_partials/product-prices.tpl -->
<div class="product-prices">
<div class="product-price h5 has-discount" itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
<link itemprop="availability" href="https://schema.org/InStock">
<meta itemprop="priceCurrency" content="USD">
<div class="current-price">
<span itemprop="price" content="{{$productDetails['selling_price']}}">₹{{$productDetails['selling_price']}}</span>
<span class="discount discount-percentage">Save ₹{{$productDetails['price'] - $productDetails['selling_price']}}</span>
</div>
</div>
<div class="product-discount">
  <span class="regular-price">₹{{$productDetails['price']}}</span>
</div>    
</div>
<div class="product-actions">
<form action="{{url('/cartpage')}}" method="get" id="add-to-cart-or-refresh">
<div class="">
<!-- begin modules/stfeature/views/templates/hook/st_compare_button.tpl -->

<div class="wishlist">
      <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="1" data-id-product-attribute="1" title="Add to Wishlist">
      <span class="st-wishlist-bt-content">
        Unit: {{$productDetails['quantity_in_unit']}}&nbsp;{{$productDetails->product->Unit['name']}}
      </span>
    </a>
  </div>
 
<br/>
<div class="clearfix"></div>
</div>
<div class="">
<div class="wishlist">
      <a class="st-wishlist-button btn-product btn" href="#" data-id-wishlist="" data-id-product="1" data-id-product-attribute="1" title="Add to Wishlist">
      <span class="st-wishlist-bt-content">
        <img src="{{config('global.THEME_URL_FRONT_IMAGE')}}/Liefstatus_Gruen_04de426b.png.gif"> {{$productDetails->product->Brand['name']}} Certified Brand Seller
      </span>
    </a>
  </div>

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
    <button class="btn btn-danger add-to-cart" style="padding: 6px; width: 30%" data-button-action="add-to-cart" type="button" onClick="gotocartPage()" >
      <i class="fa fa-inr"></i>&nbsp;Buy Now
    </button>
    <span id="product-availability"></span>
  </div>
</div>
<div class="clearfix"></div>
<p class="product-minimal-quantity">Today In Stock</p>
</div>
</form>
</div>
                
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


<div id="servicecms"> 
<div class="container">
<div id="servicecmsblock" class="block_content">
<div class="service1">
<div class="service-cms-banner-list1">
<div class="service-icon smile"></div>
<div class="service-details">
<div class="title">free delivery</div>
<div class="description">Orders Over INR 200</div>
</div>
</div>
<div class="service-cms-banner-list2">
<div class="service-icon thumbs-up"></div>
<div class="service-details">
<div class="title">Money Back Guarantee</div>
<div class="description">with a 30 day</div>
</div>
</div>
<div class="service-cms-banner-list3">
<div class="service-icon plane"></div>
<div class="service-details">
<div class="title">Best Online support</div>
<div class="description">Hours: 8AM -11PM</div>
</div>
</div>
<div class="service-cms-banner-list4">
<div class="service-icon money"></div>
<div class="service-details">
<div class="title">More Shop, More Win</div>
<div class="description">Enter Now</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="tab-main-title">
<h2 class="h1 products-section-title">More item from this seller</h2> 
</div>

<div class="container">
<?php //dd($productList);?>


<!-- tm_categorylist-->
@include('prssystem.firezyshop.LocalSeller.AllProductList',['productList'=>$productList,'productDetails'=>$productDetailsList,'categoryList'=>$categoryList]) 
<!-- categorylist -->
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

function gotocartPage(){
  window.location="{{route('cart')}}";
}
//Add To Cart 
function addToCart(pid,title){
var qnty = $("#group_1").val();
@if(Auth::check()) 
var Auth ="<?php echo Auth::user()->id ?>";
@else
var Auth =0;
@endif
if(Auth>0){
    var csrf="{{csrf_token()}}";
    var postJson={_token:csrf,pid:pid,name:title,qnty:qnty};
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
   
  