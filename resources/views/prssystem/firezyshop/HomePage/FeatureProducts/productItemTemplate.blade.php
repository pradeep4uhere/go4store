<?php  $noImage = env('NO_IMAGE'); 
if(!empty($prodObj)){ 
	$seller_id = $prodObj['seller_id'];  
	$default_images = $prodObj['default_images']; 
	$imgStr = config('global.PRODUCTS_NEW_STORAGE_DIR').'/'.$seller_id.'/'.config('global.PRODUCT_THUMB_IMG_WIDTH').'X'.config('global.PRODUCT_THUMB_IMG_HEIGHT').'/'.$default_images; 
?>
<div class="owl-item" style="width:284px;">
<li class="item">
<article class="product-miniature js-product-miniature"  itemtype="http://schema.org/Product">
<div class="thumbnail-container" style="min-height: 220px">
<a href="{{url('detail/'.str_slug($prodObj['product']['title']).'/'.encrypt($prodObj['id']))}}" class="thumbnail product-thumbnail">
<img src="{{$imgStr}}" alt="Image" data-full-size-image-url="{{$imgStr}}" onerror="this.onerror=null;this.src='{{ Config('global.THEME_URL_FRONT_IMAGE')}}/{{$noImage}}'">
<img class="replace-2x img_1 img-responsive" src="{{$imgStr}}" data-full-size-image-url="{{$imgStr}}" alt="Image" onerror="this.onerror=null;this.src='{{ Config('global.THEME_URL_FRONT_IMAGE')}}/{{$noImage}}'">
</a>
</div>
<div class="product-description">
<div class="comments_note">
<div class="star_content clearfix">
	<i class="fa fa-star"></i>
	<i class="fa fa-star"></i>
	<i class="fa fa-star"></i>
	<i class="fa fa-star"></i>
	<i class="fa fa-star"></i>
</div>
</div>
<span class="h2 product-title" itemprop="name">
<a href="{{route('details',['slug'=>str_slug($prodObj['product']['title']),'id'=>encrypt($prodObj['id'])])}}">            
<?php if($prodObj['product']['title']!=''){ ?>{{ str_limit(ucwords($prodObj['product']['title']), $limit = 25, $end = '...') }}<?php }else{ echo "Unknown Name"; } ?>
<p>Unit:{{$prodObj['quantity_in_unit']}}&nbsp;{{$prodObj['product']['unit']['name']}}</p>
</a>
</span>
<div class="product-price-and-shipping">
<span class="sr-only">Price</span>
<span itemprop="price" class="price"><i class="fa fa-inr"></i>{{$prodObj['selling_price']}}</span>
<span class="sr-only">Regular price</span>
<span class="regular-price"><i class="fa fa-inr"></i>{{$prodObj['price']}}</span>
</div>
<div class="product-actions-main">
<a href="javascript:void(0)" class="btn btn-danger" data-button-action="add-to-cart btn" onClick="addToCart('{{encrypt($prodObj['id'])}}','{{str_slug($prodObj['product']['title'])}}')" type="button">Add To Cart</a>
</div>
</div>
</article>
</li>
</div>
<?php } ?>


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