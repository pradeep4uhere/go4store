@extends('prssystem/firezyshop/layouts/cart')
@section('content')
<!--Header Section Start-->
@include('prssystem.firezyshop.Elements.headerscript')
<!--Header Section Ends-->
 <!--Main Container Start Here-->   
<div class="container">

  <section id="wrapper">     
    <div class="container"> 
          <div id="columns_inner">
<div id="left-column" class="col-xs-12 col-sm-4 col-md-3 hb-animate-element top-to-bottom">
  </div>
<div id="content-wrapper" class="left-column col-xs-12 col-sm-12 col-md-4">

<section id="main" >
  <h1>Payment Status</h1>
    <section id="content" class="page-content card card-block">
    <h1>Your Payment is Confirm.</h1>
    <p>Payment Amount - <font style="color: green;font-size: 14px; font-weight: bold;">{{$Status}}</font></p>
    <p>Payment Amount - <font style="color: green;font-size: 14px; font-weight: bold;"><i class="fa fa-inr"></i> {{$Amount}}</font></p>
    <p>Order ID - {{$OrderId}}</p>
    <p>Txn ID - {{$TxnId}}</p>
    <p><strong>Save your TXN Number- {{$TxnId}} for your future refernce</strong></p>
    <a href="{{route('bharattrader')}}" class="btn btn-danger">Make Another Payment</a>
  </section>
  </div>
        </div>
                </div>
      </section>
      </div>
@stop
<!--Footer Section Start-->
@section('footer_scripts')
@include('prssystem.firezyshop.Elements.footerscript')
@stop
<!--Footer Section Ends-->

