<section id="wrapper">     
<div class="container"> 
<div id="columns_inner">
<!--Service Tabs Start Here-->
@include('prssystem.firezyshop.HomePage.Ads.serviceOnly')
<!--Service Tabs Start Here-->
<div id="content" class=" col-xs-12 col-sm-12 col-md-12">
  <section id="main">
    <section id="products">
        <div id="">
            <div id="js-product-list-top" class="row products-selection">
            <div class="col-md-6 hidden-md-down total-products">
            <p><i class="fa fa-list"></i>&nbsp;There are {{$seller->total()}} Sellers.</p>
            </div>
            <div class="col-md-6">
    <div class="row">
<span class="col-sm-3 col-md-3 hidden-sm-down sort-by">Category:</span>
<div class="col-sm-9 col-xs-8 col-md-9 products-sort-order dropdown">
  <a class="select-title sortingDivOption" 
     rel="nofollow" 
     data-toggle="dropdown" 
     aria-haspopup="true" 
     aria-expanded="false">
    All Store Type<i class="fa fa-chevron-down pull-xs-right" style="padding-top: 5px; padding-right: 5px"></i>&nbsp;&nbsp;&nbsp;
  </a>
  <div class="dropdown-menu sortingDiv" style="display: none;">
           <?php if(!empty($storeTypeArr)){ ?>
      <?php foreach($storeTypeArr as $item){ ?>
      
        <a class="select-list js-search-link" rel="nofollow" href="{{route('shoptype',
          ['pincode'=>$pincode['pincode'],
           'name'=>str_slug($item['name']),
           'id'=>$item['id']])}}">{{$item['name']}}</a>
      <?php }} ?>

          
      </div>
</div>
      

              <div class="col-sm-3 col-xs-4 hidden-lg-up filter-button">
          <button id="search_filter_toggler" class="btn btn-secondary btn-primary">
            Filter
          </button>
        </div>
          </div>
  </div>
  <div class="col-sm-12 hidden-lg-up showing">
    Showing 1-{{$perPageItem}} of {{$seller->total()}} item(s)
  </div>
</div>
          
        </div>

        
<div id="" class="hidden-sm-down">
            
<!-- begin catalog/_partials/active_filters.tpl -->
<section id="js-active-search-filters" class="hide">
  </section>

<!-- end catalog/_partials/active_filters.tpl -->

          </div>
        

        <div id="">
          
<div id="js-product-list">
<div id="spe_res">
  <div class="products">
    <ul class=" gridcount grid"> <!-- removed product_grid-->
          <!--Seller Item Here-->
          <?php //dd($sellerArr->count());
                if($sellerArr->count()>0){ ?>    
          <?php foreach($sellerArr as $sellerItem){?>
          <li class="product_item col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xs-12">
            @include('prssystem.firezyshop.LocalSeller.sellerlistItem',['sellerItem'=>$sellerItem])
          </li>
          <?php } ?>
          <?php }else{ ?>
          <!--Seller Item Ends-->
          <li>
            <div class="alert alert-danger"><b>No {{studly_case($storeType)}} Seller found in this {{$pincode['pincode']}} location</b></div>
          </li>
          <?php } ?>
          </ul>
  </div>
  </div>

  <?php if($seller->total()>0){ ?>
  <nav class="pagination row">
  <div class="col-md-3">
    Showing 1-{{$perPageItem}} of {{$seller->total()}} item(s)
  </div>
  <div class="col-md-9 col-sm-12">
    {{ $seller->links('prssystem.firezyshop.pagination') }}
  </div>
</nav>
<?php } ?>
</div>
</div>
</section>
</section>
</div>
</div>
</div>
</section>