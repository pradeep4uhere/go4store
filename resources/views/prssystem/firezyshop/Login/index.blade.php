@extends('prssystem/firezyshop/layouts/cart')
@section('content')

<!--Header Section Start-->
@include('prssystem.firezyshop.Elements.header')
<!--Header Section Ends-->


<aside id="notifications">
  <div class="container">&nbsp;&nbsp;</div>
</aside>

 <!--Main Container Start Here-->   
<div class="container">
@include('prssystem.firezyshop.Login.LoginForm')
</div>
@stop
@section('footer_scripts')
@include('prssystem.firezyshop.Elements.footer')
@stop

