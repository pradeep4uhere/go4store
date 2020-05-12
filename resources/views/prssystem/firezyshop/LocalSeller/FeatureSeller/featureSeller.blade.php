<div class="container">
<section id="featureProduct" class="featured-products clearfix">
	<div class="side-banner">
			<h2 class="h1 products-section-title text-uppercase">Featured Sellers in 201301</h2>
			<div class="side-para">Best Seller Nearest at your door step, don't go out, just find your seller and order now.</div>
			<div class="side-button">
				<a class="all-product-link pull-xs-left pull-md-right h4" href="#">View All</a>
			</div>
	</div>
	 <!-- Define Number of product for SLIDER -->
	<div class="hb-animate-element left-to-right">
	<div id="spe_res">
	<div class="products">		
		<ul id="tmcategory3-carousel" class="tm-carousel product_list product_slider_grid owl-carousel owl-theme" data-catid="3" style="opacity: 1; display: block;">
			<div class="owl-carousel owl-theme" id="owl-demo-seller">
			<?php if(!empty($sellerArr)){  ?>
				<?php foreach($sellerArr as $sellerItem){?>
					@include('prssystem.firezyshop.LocalSeller.FeatureSeller.sellerItem',
					['sellerItem'=>$sellerItem])
				<?php } ?>
			<?php } ?>
		</div>
		</ul>
	</div>
	</div>
	</div>
</section>
</div>