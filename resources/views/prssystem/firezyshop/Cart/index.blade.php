@extends('prssystem/firezyshop/layouts/cart')
@section('content')
<!--Header Section Start-->
@include('prssystem.firezyshop.Elements.header')
<!--Header Section Ends-->
<style type="text/css">
	.notificationError{
		padding: 0.5rem;
		margin-bottom: 0.5rem;
		margin-top: 0.5rem;
		border: 1px solid transparent;
		border-radius: 0;
		-webkit-border-radius: 0;
		background-color: #f2dede;
	    border-color: #ebcccc;
	    color: #a94442;

	}
</style>
<aside id="notifications">
  <div class="container">{!!Helper::getSingleSellerCheckoutNotificationMessage()!!}</div>
</aside>

 <!--Main Container Start Here-->   
<div class="container">
@include('prssystem.firezyshop.Cart.CartDetails')
</div>
@stop
<!--Footer Section Start-->
@section('footer_scripts')
 @include('prssystem.firezyshop.Elements.footer')
@stop
<!--Footer Section Ends-->