
<style type="text/css">
#owl-demo .item{
  display: block;
  margin: 5px;
  color: #FFF;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  text-align: center;
}

.owl-prev{
    position: absolute;
    top: 140px;
    left: -10px;
    font-size: 28px;
}

.owl-next{
	position: absolute;
    right: -25px;
    top: 140px;
    font-size: 28px;
}
.product-actions-main :hover{
	display: block;
}

@media (max-width: 479px){
.customNavigation a.next {
    right: 19px;
}
a.btn.btn-danger{
  padding: 5px 10px;
}
}

</style>
<section id="content" class="page-home">
<div id="tmcategorytabs" class="tabs products_block container clearfix"> 
<div class="tab-main-title">
<h2 class="h1 products-section-title">new arrival item</h2> 
</div>

<!-- Set up your HTML -->
<div class="hb-animate-element left-to-right">
<div id="spe_res">
<div class="tab-content">
<div id="tab_3" class="tab-pane active">

<div class="products">
<ul id="tmcategory3-carousel" class="tm-carousel product_list product_slider_grid owl-carousel owl-theme" data-catid="3" style="opacity: 1; display: block;">

<div class="owl-carousel owl-theme" id="owl-demo">
	<?php if(!empty($productsNewList)){; ?> 
		<?php foreach($productsNewList['data'] as $prodObj){ //dd($prodObj);  ?>
	    <?php if($prodObj['selling_price']>=0){ ?>
			@include('prssystem.firezyshop.HomePage.FeatureProducts.productItemTemplate',
			['prodObj'=>$prodObj])
		<?php } ?>
		<?php } ?>
	<?php } ?>
</div>
</ul>
</div>
</div>



</div>
</div>
</div>
</div>
</section>

