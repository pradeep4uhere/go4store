@extends('prssystem/firezyshop/layouts/cart')
@section('content')
<!--Header Section Start-->
@include('prssystem.firezyshop.Elements.headerscript')
<!--Header Section Ends-->
 <!--Main Container Start Here-->   
<div class="container">
@include('prssystem.firezyshop.PaymentLink.LoginForm')
</div>
@stop
<!--Footer Section Start-->
@section('footer_scripts')
@include('prssystem.firezyshop.Elements.footerscript')
@stop
<!--Footer Section Ends-->

