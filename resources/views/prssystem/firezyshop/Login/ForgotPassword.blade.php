@extends('prssystem/firezyshop/layouts/cart')
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="news_keywords" content=""/>

<meta itemprop="name" content="">
<meta itemprop="description" content="">

<meta itemprop="image" content=""> 
<link rel="amphtml" href=""/>

<meta name="author" content="Go4Shop">
<meta property="article:published_time" content=""/>
<meta property="article:modified_time" content=""/>
<meta property="article:section" content="">
<meta property="article:category" content="">
<meta property="article:tag" content=""/>

<meta property="og:type" content="article"/>
<meta name="twitter:creator" content=""/>
<meta name="twitter:card" content="">
<meta name="twitter:site" content="">
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="">

<meta property="og:title" content=""/>
<meta property="og:url" content=""/>
<meta property="og:image" content=""/>
<meta property="og:image:width" content="200"/>
<meta property="og:image:height" content="250"/>
<meta property="og:description" content=""/>
<meta property="og:site_name" content="Go4Shop"/>
<meta name="atdlayout" content="article">
@section('content')
<!--Header Section Start-->
@include('prssystem.firezyshop.Elements.header')
<!--Header Section Ends-->
        
<aside id="notifications">
  <div class="container">&nbsp;&nbsp;</div>
</aside>

 <!--Main Container Start Here-->   
<div class="container">
@include('prssystem.firezyshop.Login.ForgotPasswordForm')
</div>
@stop
<!--Footer Section Start-->
@section('footer_scripts')
@include('prssystem.firezyshop.Elements.footer')
@stop
<!--Footer Section Ends-->

