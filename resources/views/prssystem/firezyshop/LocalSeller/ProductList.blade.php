@extends('prssystem/firezyshop/layouts/sellerlist')
@include('prssystem.partials.metatags',array('meta'=>$metaTags))
@section('content')
<!--Header Section Start-->
@include('prssystem.firezyshop.Elements.header')
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5eba1f237525e90012616dfb&product=inline-share-buttons" async="async"></script>
<!--Header Section Ends-->
        <?php //dd($seller);?>
<aside id="notifications">
  <div class="container">&nbsp;&nbsp;</div>
</aside>

<!-- slider -->
<!-- include('prssystem.firezyshop.Elements.homeSlider') -->
<!-- slider-->
<?php $image = config('global.SELLER_NEW_STORAGE_DIR').'/250X250/'.$seller->image_thumb;?>
<style type="text/css">

.well {
    margin-top:-20px;
    background-color:#007FBD;
    border:2px solid #0077B2;
    color: #FFF;
    text-align:center;
    cursor:pointer;
    font-size: 14px;
    padding: 15px;
    border-radius: 0px !important;
}

.well:hover {
    margin-top:-20px;
    background-color:#0077B2;
    border:2px solid #0077B2;
    text-align:center;
    cursor:pointer;
    font-size: 14px;
    padding: 15px;
    border-radius: 0px !important;
    border-bottom : 2px solid rgba(97, 203, 255, 0.65);
}




.bg_blur
{
    background-image:url({{env('STORE_BG_IMAGE')}});
    height: 300px;
    background-size: cover;
}

.follow_btn {
    text-decoration: none;
    position: absolute;
    left: 12%;
    top: 42.5%;
    width: 65%;
    height: 15%;
    background-color: #007FBE;
    padding: 10px;
    padding-top: 6px;
    color: #fff;
    text-align: center;
    font-size: 20px;
    border: 4px solid #007FBE;
}

/*.follow_btn:hover {
    text-decoration: none;
    position: absolute;
    left: 35%;
    top: 42.5%;
    width: 35%;
    height: 15%;
    background-color: #007FBE;
    padding: 10px;
    padding-top: 6px;
    color: #fff;
    text-align: center;
    font-size: 20px;
    border: 4px solid rgba(255, 255, 255, 0.8);
}*/

.header{
    color : #808080;
    margin-left:10%;
    margin-top:15px;
}

.picture{
    height:150px;
    width:150px;
    position:absolute;
    top: 75px;
    left:-75px;
}

.picture_mob{
    position: absolute;
    width: 35%;
    left: 35%;
    bottom: 70%;
}

.btn-style{
    color: #fff;
    background-color: #007FBE;
    border-color: #adadad;
    width: 33.3%;
}

.btn-style:hover {
    color: #333;
    background-color: #3D5DE0;
    border-color: #adadad;
    width: 33.3%;
   
}


@media (max-width: 767px) {
    .header{
        text-align : center;
    }
    
    
    
    .nav{
        margin-top : 3px;
    }
}

</style>
<div class="container" style="margin-top: 0px; margin-bottom: 0px;">
	<div class="row panel">
		<div class="col-md-4 bg_blur ">
    	    <a href="#" class="follow_btn hidden-xs">{{$seller->StoreType->name}}</a>
		</div>
        <div class="col-md-8  col-xs-12">
           <img src="{{$image}}" class="img-thumbnail picture hidden-xs" />
          
           <div class="header" style="min-height: 195px;">
                <h1>{{$seller->business_name}} ({{$seller->StoreType->name}})</h1>
                <h6 style="font-size: 14px;"><i class="fa fa-map-marker fa-sm"> </i> {{$seller->address_1}}, {{$seller->location}}, {{$seller->district}}, {{$seller->pincode}}</h6>
                <span>{!!$seller->about_me!!}</span>
           </div>
            <div style="margin-bottom: 0px; vertical-align: baseline;">
                 <div class="sharethis-inline-share-buttons"></div>
            </div>
        </div>

    </div>   
    
	<div class="row nav">    
        <div class="col-md-4"></div>
        <div class="col-md-12 col-xs-12" style="margin: 0px;padding: 0px;">
            <div class="col-md-4 col-xs-12 well"><i class="fa fa-map fa-sm"></i> {{$seller->address_1}}</div>
            <div class="col-md-2 col-xs-12 well"><i class="fa fa-phone fa-sm"></i> +91-{{$seller->contact_number}}</div>
            <div class="col-md-2 col-xs-12 well"><i class="fa fa-thumbs-o-up fa-sm"></i> 26</div>
            <div class="col-md-4 col-xs-12 well"><i class="fa fa-envelope fa-sm"></i> {{$seller->email_address}}</div>
        </div>
    </div>
</div>

<!--Main Container Start Here-->   
<div class="container">
<?php //dd($productList);?>


<!-- tm_categorylist-->
@include('prssystem.firezyshop.LocalSeller.AllProductList',['productList'=>$productList,'categoryList'=>$categoryList]) 
<!-- categorylist -->
</div>
@stop
<!--Footer Section Start-->
@section('footer_scripts')
@include('prssystem.firezyshop.Elements.footer')
@stop
<!--Footer Section Ends-->

