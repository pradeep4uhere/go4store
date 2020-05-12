@extends('prssystem/firezyshop/layouts/default')
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
<section id="wrapper">     
<div class="container"> 
<div id="columns_inner">
<div id="left-column" class="col-xs-12 col-sm-4 col-md-3 hb-animate-element top-to-bottom">
<div id="tmleftbanner" class="block" style="display: block;">
<ul class="hidden-md-down py-5">
    <li class="slide tmleftbanner-container">
<a href="#" title="LeftBanner 1">
  
  <img src="https://us.123rf.com/450wm/starlineart/starlineart2004/starlineart200400085/143875852-stay-home-and-stay-safe-concept-poster-design.jpg?ver=6" alt="LeftBanner 1" title="LeftBanner 1">
</a>        
</li>
</ul>
</div>  
</div>
<div id="left-column" class="col-xs-12 col-sm-4 col-md-3 hb-animate-element top-to-bottom">
  <div id="tmleftbanner" class="block">
  <div class="block hidden-lg-up">
  <h4 class="block_title hidden-lg-up" data-target="#block_banner1_toggle" data-toggle="collapse">Banner
    <span class="pull-xs-right">
      <span class="navbar-toggler collapse-icons">
      <i class="material-icons add"></i>
      <i class="material-icons remove"></i>
      </span>
    </span>
    </h4>
       <div class="col-md-12 col-xs-12 block_content collapse" id="block_banner1_toggle">
    <ul>
      <li class="slide tmleftbanner-container">
      <a href="#" title="LeftBanner 1">
        <img src="{{config('global.THEME_URL_FRONT_IMAGE')}}/order_placed.png" class="img-fluid" alt="#">
      </a>        
      </li>
    </ul>
  </div>      
  </div>    
  </div>  
  </div>
  <div id="content-wrapper" class="left-column col-xs-12 col-sm-12 col-md-12">
  <section id="main">
      <section id="content" class="page-content card card-block">
      <section class="login-form">
        <section class="testimonial py-5" id="testimonial">
    <div class="container" >
        <div class="row " >
            <div class="col-md-4">
                <img src="{{config('global.THEME_URL_FRONT_IMAGE')}}/order_placed.png" class="img-fluid" alt="#">
            </div>
            <div class="col-md-7 py-5 border bg-default ">
            <form>
                            <h4 class="text-center" style="font-weight: bold">Thank You !</h4>
                            <p class="text-center">Your submissions has been sent successfully!</p>
                            <p class="text-center"><b>Please check your email for further instructions on how to complete your account setup.</b></p>
                                        <p class="text-center" >By Clicking <a href="{{route('login')}}" class="main-title red-text" style="color: red !important; font-weight: bold"> Login </a> You can  login into your account.                         </p>
                
               </form> 
                                    </div>
        </div>
    </div>
</section>
  </section>
      </section>
      
  </section>
  </div>
        </div>
                </div>
      </section>



</div>
@stop
<!--Footer Section Start-->
@section('footer_scripts')
@include('prssystem.firezyshop.Elements.footer')
@stop
<!--Footer Section Ends-->



