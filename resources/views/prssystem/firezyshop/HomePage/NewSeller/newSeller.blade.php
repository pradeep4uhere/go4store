<div class="container">
<section class="newproducts clearfix">
	<div class="side-banner">
		
			<h2 class="h1 products-section-title text-uppercase">
					Our new sellers
			</h2>

			<div class="side-para">Find out more new sellers here at nearest doorstep, Don't Go Out, Just Find Your Seller And Order Now.</div>

			<div class="side-button">
			<a class="all-product-link pull-xs-left pull-md-right h4" href="?controller=new-products">
			view more
			</a>
			</div>

	</div>
	 <!-- Define Number of product for SLIDER -->
	
	 <!-- Define Number of product for SLIDER -->
	<div class="hb-animate-element left-to-right">
	<div id="spe_res">
	<div class="products">		
		<ul id="tmcategory3-carousel" class="tm-carousel product_list product_slider_grid owl-carousel owl-theme" data-catid="3" style="opacity: 1; display: block;">
			<div class="owl-carousel owl-theme" id="owl-demo-new-seller">
			<?php if(!empty($sellerArr)){ ?>
			<?php foreach($sellerArr as $sellerItem){ ?>
				@include('prssystem.firezyshop.HomePage.NewSeller.sellerItem',array('sellerItem'=>$sellerItem))
			<?php } ?>
			<?php } ?>
		</div>
		</ul>
	</div>
	</div>
	</div>
					
					

</section>
</div>