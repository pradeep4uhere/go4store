<style>
    @media (max-width: 480px){
	.g4SproductImgClass {
        min-height: 164px;
        max-height:164px
	}
	.pagination_row{
	    font-size:12px;
	    font-weight:400;
	}

}
.g4SproductImgClass {
        min-height: 240px;
        max-height:240px
	}
</style>
<?php $noImage = env('NO_IMAGE'); 
if(!empty($prodObj)){ 
  $seller_id = $prodObj['UserProduct']['seller_id'];  
  $default_images = $prodObj['UserProduct']['default_images']; 
  $imgStr = config('global.PRODUCTS_NEW_STORAGE_DIR').'/'.$seller_id.'/'.config('global.PRODUCT_THUMB_IMG_WIDTH').'X'.config('global.PRODUCT_THUMB_IMG_HEIGHT').'/'.$default_images; 
?>
<li class="item col-xs-12 col-sm-6 col-md-6 col-lg-3">
<article class="product-miniature js-product-miniature"  itemtype="http://schema.org/Product">
<div class="thumbnail-container" >
<a href="{{url('detail/'.str_slug($prodObj['UserProduct']['product']['title']).'/'.encrypt($prodObj['UserProduct']['id']))}}" class="thumbnail product-thumbnail">
<img class="g4SproductImgClass" src="{{$imgStr}}" alt="Image" data-full-size-image-url="{{$imgStr}}" onerror="this.onerror=null;this.src='{{ Config('global.THEME_URL_FRONT_IMAGE')}}/{{$noImage}}'">
<img class="g4SproductImgClass replace-2x img_1 img-responsive" src="{{$imgStr}}" data-full-size-image-url="{{$imgStr}}" alt="Image" onerror="this.onerror=null;this.src='{{ Config('global.THEME_URL_FRONT_IMAGE')}}/{{$noImage}}'">
</a>
</div>
<div class="product-description">
<div class="comments_note">
{!!Helper::getStar()!!}
</div>
<span class="h2 product-title" itemprop="name">
<a href="{{route('details',['slug'=>str_slug($prodObj['UserProduct']['product']['title']),'id'=>encrypt($prodObj['UserProduct']['id'])])}}">            
<?php if($prodObj['UserProduct']['product']['title']!=''){ ?>{{ str_limit(ucwords($prodObj['UserProduct']['product']['title']), $limit = 25, $end = '...') }}<?php }else{ echo "Unknown Name"; } ?>
<p>Unit:{{$prodObj['UserProduct']['quantity_in_unit']}}&nbsp;{{$prodObj['UserProduct']['product']['unit']['name']}}</p>
</a>
</span>
<div class="product-price-and-shipping">
<span class="sr-only">Price</span>
<span itemprop="price" class="price"><i class="fa fa-inr"></i>{{$prodObj['UserProduct']['selling_price']}}</span>
<span class="sr-only">Regular price</span>
<span class="regular-price"><i class="fa fa-inr"></i>{{$prodObj['UserProduct']['price']}}</span>
</div>
<div class="product-actions-main">
<a href="javascript:void(0)" class="btn btn-danger" data-button-action="add-to-cart btn" onClick="addToCart('{{encrypt($prodObj['UserProduct']['id'])}}','{{str_slug($prodObj['UserProduct']['product']['title'])}}')" type="button">Add To Cart</a>
</div>
</div>
</article>
</li>
<?php }  ?>


