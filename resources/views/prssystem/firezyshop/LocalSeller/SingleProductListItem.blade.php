

 <li class="product_item col-xs-12 col-sm-6 col-md-6 col-lg-3">
             
<div class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="1" itemscope="" itemtype="http://schema.org/Product">
    <div class="row">
  <div class="thumbnail-container">
      <a href="{{url('detail/'.str_slug($prodObj['Product']['title']).'/'.encrypt($prodObj['UserProduct']['id']))}}" class="thumbnail product-thumbnail">
 <img src="{{config('global.PRODUCTS_NEW_STORAGE_DIR')}}/{{$prodObj['UserProduct']['seller_id']}}/{{config('global.PRODUCT_THUMB_IMG_WIDTH')}}X{{config('global.PRODUCT_THUMB_IMG_HEIGHT')}}/{{$prodObj['UserProduct']['default_images']}}" onerror="this.onerror=null;this.src='{{ Config('global.THEME_URL_FRONT_IMAGE') }}/default250x250.jpg';" 
  alt="Image" data-full-size-image-url="{{config('global.PRODUCTS_NEW_STORAGE_DIR')}}/{{$prodObj['UserProduct']['seller_id']}}/{{config('global.PRODUCT_THUMB_IMG_WIDTH')}}X{{config('global.PRODUCT_THUMB_IMG_HEIGHT')}}/{{$prodObj['UserProduct']['default_images']}}" style="height: 272px;">


  <img class="replace-2x img_1 img-responsive" src="{{config('global.PRODUCTS_NEW_STORAGE_DIR')}}/{{$prodObj['UserProduct']['seller_id']}}/{{config('global.PRODUCT_THUMB_IMG_WIDTH')}}X{{config('global.PRODUCT_THUMB_IMG_HEIGHT')}}/{{$prodObj['UserProduct']['default_images']}}" data-full-size-image-url="{{config('global.PRODUCTS_NEW_STORAGE_DIR')}}/{{$prodObj['UserProduct']['seller_id']}}/{{config('global.PRODUCT_THUMB_IMG_WIDTH')}}X{{config('global.PRODUCT_THUMB_IMG_HEIGHT')}}/{{$prodObj['UserProduct']['default_images']}}" alt="Image" style="height: 272px;">
  </a>
      <ul class="product-flags">
        <li class="on-sale">On sale!</li>
        <li class="new">New</li>
        <li class="discount_type_flag">
        <span class="discount-percentage">{{$prodObj['UserProduct']['discount_value']}}%</span>
      </li>
      </ul>
  </div>
  <div class="product-description">
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
<div class="product-title" itemprop="name">
<a href="#">
  <?php if($prodObj['Product']['title']!=''){ ?>{{ str_limit(ucwords($prodObj['Product']['title']), $limit = 25, $end = '...') }}<?php }else{ echo "Unknown Name"; } ?>
</a>
</div>
<div class="product-title">Unit: {{$prodObj['UserProduct']['quantity_in_unit']}}&nbsp;{{$prodObj['Product']['Unit']['name']}}<br/>
<span itemprop="price" class="price">₹{{$prodObj['UserProduct']['selling_price']}}</span>
<span class="regular-price">₹{{$prodObj['UserProduct']['price']}}</span>

</div>
<div class="product-detail" itemprop="description"><p>{{$prodObj['UserProduct']['description']}}</p></div>
<div class="product-actions-main">
  <a href="javascript:void(0)" class="btn btn-danger" data-button-action="add-to-cart btn" onClick="addToCart('{{encrypt($prodObj['UserProduct']['id'])}}','{{str_slug($prodObj['Product']['title'])}}')" type="button">
    Add to cart 
  </a>
 </a>
</div>  
</div>
</div>
</div>
</li>