<?php if(!empty($sellerItem)){ ?>

<article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">
<div class="thumbnail-container">
<a href="{{url('seller/'.$sellerItem['pincode'].'/'.$sellerItem['businessusername'])}}" class="thumbnail product-thumbnail">
	<img style="height: 250px; width: 250px" 
	src="{{config('global.SELLER_NEW_STORAGE_DIR').'/250X250/'.$sellerItem['image_thumb']}}" 
	alt="{{$sellerItem['business_name']}}" 
	data-full-size-image-url="{{config('global.SELLER_NEW_STORAGE_DIR').'/250X250/'.$sellerItem['image_thumb']}}"
	onerror="this.onerror=null;this.src='{{ Config('global.THEME_URL_FRONT_IMAGE') }}/{{env('NO_IMAGE')}}';">
	
	<img style="width:'100%'" 
		class="replace-2x img_1 img-responsive" 
		src="{{config('global.THEME_FRONT_IMAGE')}}/380-home_default.jpg" 
		data-full-size-image-url="{{config('global.THEME_FRONT_IMAGE')}}/380-home_default.jpg" 
		alt="{{$sellerItem['business_name']}}"
		onerror="this.onerror=null;this.src='{{ Config('global.THEME_URL_FRONT_IMAGE') }}/{{env('NO_IMAGE')}}';"
	>
</a>
<ul class="product-flags" style="display: block;">
  <li class="on-sale">On sale!</li>
  <li class="new">New</li>
  <li class="discount_type_flag">
  <span class="discount-percentage">New</span>
</li>
</ul>
 </div>
<div class="product-description" style="padding-left: 25PX;">
<span class="h3 product-title seller-title" itemprop="name">
<a href="#">
	<span  style="color: #000; font-size: 14px;">{{$sellerItem['business_name']}}</span>
<p><small style="color: chocolate;font-weight: bold;">{{$sellerItem['StoreType']['name']}}</small><br/>
	<small>{{$sellerItem['address_1']}}</small><br/>
<small><i class="fa fa-map-marker"></i>  {{$sellerItem['district']}} | {{$sellerItem['pincode']}} </small></p>
</a>
</span>
</div>
</article>
<?php } ?>

