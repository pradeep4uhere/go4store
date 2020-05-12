<section id="wrapper">     
        
        
         
    <div class="container"> 
        
<div id="columns_inner">
<div id="left-column" class="col-xs-12 col-sm-4 col-md-3 hb-animate-element top-to-bottom">
<div class="block-categories block" style="display: block;">
   <h4 class="block_title hidden-md-down">
      <i class="fa fa-filter"></i>&nbsp;Seller by category
   </h4>
   <h4 class="block_title hidden-lg-up" data-target="#block_categories_toggle" data-toggle="collapse">
    <a href="#">Home</a>
    <span class="pull-xs-right">
      <span class="navbar-toggler collapse-icons">
      <i class="material-icons add"></i>
      <i class="material-icons remove"></i>
      </span>
    </span>
  </h4>
   <div id="block_categories_toggle" class="block_content collapse">
  <ul class="category-sub-menu" >
      <?php if(!empty($storeTypeArr)){ ?>
      <?php foreach($storeTypeArr as $item){ ?>
      <li data-depth="0">
        <a href="{{route('shoptype',
          ['pincode'=>$pincode['pincode'],
           'name'=>str_slug($item['name']),
           'id'=>$item['id']])}}">{{$item['name']}}</a>
      </li>
      <?php }} ?>
    </ul>
  </div>
</div>
</div>
<div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">
  <section id="main">
    <section id="products">
        <div id="">
            <div id="js-product-list-top" class="row products-selection">
            <div class="col-md-6 hidden-md-down total-products">
            <p><i class="fa fa-list"></i>&nbsp;There are {{$seller->total()}} Sellers.</p>
            </div>
            <div class="col-md-6">
    <div class="row">
<span class="col-sm-3 col-md-3 hidden-sm-down sort-by">Sort by:</span>
<div class="col-sm-9 col-xs-8 col-md-9 products-sort-order dropdown">
  <a class="select-title sortingDivOption" 
     rel="nofollow" 
     data-toggle="dropdown" 
     aria-haspopup="true" 
     aria-expanded="false">
    Relevance<i class="fa fa-chevron-down pull-xs-right" style="padding-top: 5px; padding-right: 5px"></i>&nbsp;&nbsp;&nbsp;
  </a>
  <div class="dropdown-menu sortingDiv" style="display: none;">
          <a rel="nofollow" href="2&amp;order=product.position.asc" class="select-list current js-search-link">
        Relevance
      </a>
          <a rel="nofollow" href="2&amp;order=product.name.asc" class="select-list js-search-link">
        Name, A to Z
      </a>
          <a rel="nofollow" href="2&amp;order=product.name.desc" class="select-list js-search-link">
        Name, Z to A
      </a>
          <a rel="nofollow" href="2&amp;order=product.price.asc" class="select-list js-search-link">
        Price, low to high
      </a>
          <a rel="nofollow" href="2&amp;order=product.price.desc" class="select-list js-search-link">
        Price, high to low
      </a>
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
    Showing 1-16 of 30 item(s)
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
    <ul class="product_list gridcount grid"> <!-- removed product_grid-->
          <!--Seller Item Here-->
          <?php //dd($sellerArr->count());
                if($sellerArr->count()>0){ ?>    
          <?php foreach($sellerArr as $sellerItem){?>
          <li class="product_item col-xs-12 col-sm-6 col-md-6 col-lg-3">
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
  <div class="col-md-9">
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