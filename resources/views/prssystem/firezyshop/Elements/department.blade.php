<style type="text/css">
.Bannercombo1 .owl-prev{
    top: 120px;
    left:55px;
    font-size: 18px;
}

.Bannercombo1 .owl-next{
	position: absolute;
    right:-20px;
    top: 120px;
    font-size: 18px;
}	
</style>

<div class="container">
<div class="Bannercombo1">

<div class="tmcategorylist">
<div class="tmcategory-container container hb-animate-element left-to-right">

<div class="row">
<h2 class="h1 products-section-title ">Shop by department</h2>
<div class="menu-title">choose what you looking for</div>

<!-- <div class="customNavigation">
<a class="btn prev cat_prev">&nbsp;</a>
<a class="btn next cat_next">&nbsp;</a>
</div> -->


<div class="owl-carousel owl-theme" id="owl-demo2">
	<?php $count=1;?>
	@foreach($storeTypeArr as $item) 
	<?php //dd($item);?>
	<div class="item first" style="width: 203px;">
		<li>
			<div class="categoryblock1 categoryblock item">
			<div class="block_content">
			<a href="{{route('shoptype',['pincode'=>$pincode['pincode'], 'name'=>str_slug($item['name']),
           					'id'=>$item['id']])}}">
			<div class="categoryimage_bg">
				<div class="categoryimage">
					<img src="{{config('global.THEME_FRONT_IMAGE')}}/category/{{$item['image']}}" alt="" class="img-responsive">
				</div>
			</div>
			</a>
			<div class="categorylist">
			<div class="cate-heading">
				<a href="{{route('shoptype',['pincode'=>$pincode['pincode'], 'name'=>str_slug($item['name']),
           					'id'=>$item['id']])}}">{{$item['name']}}</a>
			</div>
			</div>
			</div>

			</div>
		</li>
	</div>
    <?php $count++; ?>
    @endforeach
	<div class="item" style="width: 203px;">
		<li>
			<div class="categoryblock1 categoryblock item">
			<div class="block_content">
			<a href="#">
			<div class="categoryimage_bg">
				<div class="categoryimage">
					<img src="{{config('global.THEME_FRONT_IMAGE')}}/category/grocery.jpg" alt="" class="img-responsive">
				</div>
			</div>
			</a>
			<div class="categorylist">
			<div class="cate-heading">
				<a href="#">Grocery</a>
			</div>
			</div>
			</div>

			</div>
		</li>
	</div>
	<div class="item" style="width: 203px;">
		<li>
			<div class="categoryblock1 categoryblock item">
			<div class="block_content">
			<a href="#">
			<div class="categoryimage_bg">
				<div class="categoryimage">
					<img src="{{config('global.THEME_FRONT_IMAGE')}}/category/furniture.jpg" alt="" class="img-responsive">
				</div>
			</div>
			</a>
			<div class="categorylist">
			<div class="cate-heading">
				<a href="#">Furniture</a>
			</div>
			</div>
			</div>

			</div>
		</li>
	</div>
	<div class="item" style="width: 203px;">
		<li>
			<div class="categoryblock1 categoryblock item">
			<div class="block_content">
			<a href="#">
			<div class="categoryimage_bg">
				<div class="categoryimage">
					<img src="{{config('global.THEME_FRONT_IMAGE')}}/category/chicken.jpg" alt="" class="img-responsive">
				</div>
			</div>
			</a>
			<div class="categorylist">
			<div class="cate-heading">
				<a href="#">Chicken</a>
			</div>
			</div>
			</div>

			</div>
		</li>
	</div>
	<div class="item" style="width: 203px;">
		<li>
			<div class="categoryblock1 categoryblock item">
			<div class="block_content">
			<a href="#">
			<div class="categoryimage_bg">
				<div class="categoryimage">
					<img src="{{config('global.THEME_FRONT_IMAGE')}}/category/vegitable.jpg" alt="" class="img-responsive">
				</div>
			</div>
			</a>
			<div class="categorylist">
			<div class="cate-heading">
				<a href="#">Vegitables</a>
			</div>
			</div>
			</div>

			</div>
		</li>
	</div>
	<div class="item" style="width: 203px;">
		<li>
			<div class="categoryblock1 categoryblock item">
			<div class="block_content">
			<a href="#">
			<div class="categoryimage_bg">
				<div class="categoryimage">
					<img src="{{config('global.THEME_FRONT_IMAGE')}}/category/breakfast.jpg" alt="" class="img-responsive">
				</div>
			</div>
			</a>
			<div class="categorylist">
			<div class="cate-heading">
				<a href="#">Breakfast</a>
			</div>
			</div>
			</div>

			</div>
		</li>
	</div>
	<div class="item" style="width: 203px;">
		<li>
			<div class="categoryblock1 categoryblock item">
			<div class="block_content">
			<a href="#">
			<div class="categoryimage_bg">
				<div class="categoryimage">
					<img src="{{config('global.THEME_FRONT_IMAGE')}}/category/resturant.jpg" alt="" class="img-responsive">
				</div>
			</div>
			</a>
			<div class="categorylist">
			<div class="cate-heading">
				<a href="#">Resturant</a>
			</div>
			</div>
			</div>

			</div>
		</li>
	</div>
	<div class="item">
		<li>
			<div class="categoryblock1 categoryblock item">
			<div class="block_content">
			<a href="#">
			<div class="categoryimage_bg">
				<div class="categoryimage">
					<img src="{{config('global.THEME_FRONT_IMAGE')}}/category/tiffinservice.jpg" alt="" class="img-responsive">
				</div>
			</div>
			</a>
			<div class="categorylist">
			<div class="cate-heading">
				<a href="#">Tiffin</a>
			</div>
			</div>
			</div>

			</div>
		</li>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>