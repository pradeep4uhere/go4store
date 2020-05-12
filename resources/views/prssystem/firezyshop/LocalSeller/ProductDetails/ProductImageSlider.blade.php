<link rel="stylesheet" href="{{config('global.THEME_FRONT_CSS').'/lightslider.css'}}" media="all">
<style>
.demo ul {
     list-style: none outside none;
     padding-left: 0;
     margin: 0;
}
 .demo ul li img {
     height: 458px;
     width: 400px;
}
 .demo .demo .itemSlider {
     margin-bottom: 60px;
}
 .demo .content-slider li {
     background-color: #ed3020;
     text-align: center;
     color: #fff;
}
 .demo .content-slider h3 {
     margin: 0;
     padding: 0px 0;
}
 .demo .itemSlider {
     border: solid 1px #eee;
     max-width: 474px;
}
</style>
<div class="demo">
        <div class="itemSlider">            
            <div class="clearfix" style="max-width:474px;">
                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                    @if(!empty($productDetails->ProductImage))
                    @foreach($productDetails->ProductImage as $img)
                    @if($img['status']==1)
                    <?php if($img['is_default']==1){ ?> 
                    <li data-thumb="{{config('global.PRODUCTS_NEW_STORAGE_DIR')}}/{{$productDetails['seller_id']}}/{{config('global.PRODUCT_IMG_WIDTH')}}X{{config('global.PRODUCT_IMG_HEIGHT')}}/{{$img['image_name']}}" class="active"> 
                    <img src="{{config('global.PRODUCTS_NEW_STORAGE_DIR')}}/{{$productDetails['seller_id']}}/{{config('global.PRODUCT_IMG_WIDTH')}}X{{config('global.PRODUCT_IMG_HEIGHT')}}/{{$img['image_name']}}" onerror="this.onerror=null;this.src='{{ Config('global.THEME_URL_FRONT_IMAGE') }}/default250x250.jpg';" height="450px" />
                    </li>
                    <?php }else{ ?>

                    <li data-thumb="{{config('global.PRODUCTS_NEW_STORAGE_DIR')}}/{{$productDetails['seller_id']}}/{{config('global.PRODUCT_IMG_WIDTH')}}X{{config('global.PRODUCT_IMG_HEIGHT')}}/{{$img['image_name']}}" > 
                    <img src="{{config('global.PRODUCTS_NEW_STORAGE_DIR')}}/{{$productDetails['seller_id']}}/{{config('global.PRODUCT_IMG_WIDTH')}}X{{config('global.PRODUCT_IMG_HEIGHT')}}/{{$img['image_name']}}" onerror="this.onerror=null;this.src='{{ Config('global.THEME_URL_FRONT_IMAGE') }}/default250x250.jpg';" height="450px" />
                     </li>

                    <?php } ?>
                    
                    
                    @endif
                    @endforeach
                    @endif
                    
                </ul>
            </div>
        </div>
       

    </div>	