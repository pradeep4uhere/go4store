@extends('prssystem/firezyshop/layouts/productdetails')
@include('prssystem.partials.metatags',array('meta'=>$metaTags))
@section('content')
<!--Header Section Start-->
@include('prssystem.firezyshop.Elements.header')
<!--Header Section Ends-->
        
<aside id="notifications">
  <div class="container"></div>
</aside>

<div class="container">
<!--Feature Product Slider Start Here-->
<?php //dd($productDetails);?>
@include('prssystem.firezyshop.LocalSeller.ProductDetails.Details',['productDetails'=>$productDetails])
<!--Feature Product Slider Ends Here-->
</div>

@stop

<!--Footer Section Start-->
@section('footer_scripts')
@include('prssystem.firezyshop.Elements.footer')
@stop
<!--Footer Section Ends-->