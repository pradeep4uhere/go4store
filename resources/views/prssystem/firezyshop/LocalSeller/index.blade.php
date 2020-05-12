@extends('prssystem/firezyshop/layouts/sellerlist')
@include('prssystem.partials.metatags',array('meta'=>$metaTags))
@section('content')
<!--Header Section Start-->
@include('prssystem.firezyshop.Elements.header')
<!--Header Section Ends-->
        
<aside id="notifications">
  <div class="container">&nbsp;&nbsp;</div>
</aside>

 <!--Main Container Start Here-->   
<div class="container">


@include('prssystem.firezyshop.LocalSeller.FeatureSeller.featureSeller',array(
	'sellerArr'=>$featureSeller,
	'storeTypeArr'=>$storeTypeArr,
))

<!-- tm_categorylist-->
@include('prssystem.firezyshop.LocalSeller.sellerList',array(
'sellerArr'=>$seller,
'perPageItem'=>$perPageItem))
<!-- categorylist -->
</div>
@stop
<!--Footer Section Start-->
@section('footer_scripts')
@include('prssystem.firezyshop.Elements.footer')
@stop
<!--Footer Section Ends-->

