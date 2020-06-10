<?php if(!empty($sellerItem)){ //dd($sellerItem); ?>

<article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">
<div class="thumbnail-container">
<a href="{{url('/seller/201301/'.$sellerItem['businessusername'])}}" class="thumbnail product-thumbnail">
	<img class="g4SproductImgClass" 
	src="{{config('global.SELLER_NEW_STORAGE_DIR').'/250X250/'.$sellerItem['image_thumb']}}" 
	alt="Curabitur Dolor Nunc..." 
	data-full-size-image-url="{{config('global.SELLER_NEW_STORAGE_DIR').'/250X250/'.$sellerItem['image_thumb']}}"
	onerror="this.onerror=null;this.src='{{ Config('global.THEME_URL_FRONT_IMAGE') }}/{{env('NO_IMAGE')}}';">
	
	<img style="width:'100%'" 
		class="replace-2x img_1 img-responsive g4SproductImgClass" 
		src="{{config('global.SELLER_NEW_STORAGE_DIR').'/250X250/'.$sellerItem['image_thumb']}}" 
		data-full-size-image-url="{{config('global.SELLER_NEW_STORAGE_DIR').'/250X250/'.$sellerItem['image_thumb']}}" 
		alt="" onerror="this.onerror=null;this.src='{{ Config('global.THEME_URL_FRONT_IMAGE') }}/{{env('NO_IMAGE')}}';"
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
<div class="product-description">
<span class="h3 product-title seller-title" itemprop="name">
<a href="#"><span  style="color: #000; font-size: 14px;">{{$sellerItem['business_name']}}</span>
<p><small style="color: chocolate;font-weight: bold;">{{$sellerItem['StoreType']['name']}}</small><br/>
<small>{{$sellerItem['address_1']}}</small><br/>
<small><i class="fa fa-map-marker"></i>  {{$sellerItem['district']}}</small></p>
</a>
</span>
</div>
</article>
<?php } ?>

