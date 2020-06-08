@extends('prssystem/firezyshop/layouts/HomePage/homepage')
@include('prssystem.partials.metatags',array('meta'=>$metaTags))
@section('content')
<!--Header Section Start-->
@include('prssystem.firezyshop.Elements.header')
<!--Header Section Ends-->
        
<aside id="notifications">
  <div class="container">
  		<marquee style="padding: 5px 1px 1px 0px;
    color: darkred;
    font-style: normal;
    font-weight: 500;">
  		<?php echo $menu = Helper::getNotificationMessage(); ?>
  		</marquee>
  </div>
</aside>
    
<section id="wrapper">     
<div class="topdiv">
            
<!-- Block links module -->
@include('prssystem.firezyshop.Elements.blockLinks',array('storeTypeArr'=>$storeTypeArr))
<!-- /Block links module -->


<!-- slider -->
@include('prssystem.firezyshop.Elements.homeSlider')
<!-- slider-->

<!-- tm_categorylist-->
@include('prssystem.firezyshop.Elements.department',array('storeTypeArr'=>$storeTypeArr))
<!-- categorylist -->

</div>
<!--Feature Slider Start Here-->
@include('prssystem.firezyshop.HomePage.FeatureSeller.featureSeller',array('sellerArr'=>$sellerArr))
<!--Feature Slider Start Here-->

<!--Feature Slider Start Here-->
@include('prssystem.firezyshop.HomePage.Ads.topAdsBanner')
<!--Feature Slider Ends Here-->
<?php //dd($productsNewList);?>

<!--Feature Product Slider Start Here-->
@include('prssystem.firezyshop.HomePage.FeatureProducts.featureProducts',array('productsNewList'=>$productsNewList))
<!--Feature Product Slider Ends Here-->

  
<?php //include('prssystem.firezyshop.HomePage.productTopTabs')?>

<!--Service Tabs Start Here-->
@include('prssystem.firezyshop.HomePage.Ads.serviceTabs')
<!--Service Tabs Start Here-->


<!--New Seller Start Here-->
@include('prssystem.firezyshop.HomePage.NewSeller.newSeller',array('sellerArr'=>$sellerArr))
<!--New Seller Start Here-->

<!--Service Block Start Here-->
@include('prssystem.firezyshop.HomePage.Ads.serviceBlock')
<!--Service Block Start Here-->

	
<!--Best Seller Start Here-->
@include('prssystem.firezyshop.HomePage.BestSeller.bestSeller')
<!--Best Seller Start Here-->

<!--Service Block Start Here-->
@include('prssystem.firezyshop.HomePage.Ads.serviceAdsBottom')
<!--Service Block Ends Here-->

<!--Discount Hot Deal Start Here-->
<?php //include('prssystem.firezyshop.HomePage.Discount.discountHotDeals') ?>
<!--Discount Hot Deal Ends Here-->

<!--Blog Section Start Here-->
<?php //@include('prssystem.firezyshop.HomePage.Blog.blogSection') ?>
<!--Blog Section Ends Here-->

<!--Client Section Start Here-->
@include('prssystem.firezyshop.HomePage.Client.clientSection')
<!--Client Section Start Here-->
      
</section>
@stop
<!--Footer Section Start-->
@section('footer_scripts')
@include('prssystem.firezyshop.Elements.footer')
@stop
<!--Footer Section Ends-->

