<section id="wrapper">     
    <div class="container"> 
          <div id="columns_inner"><div id="left-column" class="col-xs-12 col-sm-4 col-md-3 hb-animate-element top-to-bottom">
<div class="block-categories block">
   <h4 class="block_title hidden-md-down">
      <!--  <a href="2&controller=category&id_lang=1">Home</a>-->
      shop by category
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
     <ul class="category-top-menu">
    <li>
  <ul class="category-sub-menu">
    <?php if(!empty($categoryList)){ ?>
      <?php foreach($categoryList as $item){ ?>
         <li data-depth="0"><a href="3">{{$item['name']}}</a></li>
       <?php } ?>
      <?php } ?>
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
            <p><i class="fa fa-list"></i>&nbsp;There are {{count($productList)}} Sellers.</p>
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
            <?php if(!empty($productList)){ ?>
              <?php foreach($productList as $item){ ?>
              @include('prssystem.firezyshop.LocalSeller.SingleProductListItem',['prodObj'=>$item])
            <?php } ?>
            <?php } ?>
          <!--Seller Item Ends-->
          </ul>
  </div>
  </div>
  
  <nav class="pagination row">
  <div class="col-md-4">
    Showing 1-16 of 30 item(s)
  </div>
  <div class="col-md-8">
  
     <ul class="page-list clearfix text-xs-right">
                
        <li class="current">
                      <a rel="nofollow" href="2" class="disabled js-search-link">
                              1
                          </a>
                  </li>
                
        <li>
                      <a rel="nofollow" href="2&amp;page=2" class="js-search-link">
                              2
                          </a>
                  </li>
                
        <li>
                      <a rel="next" href="2&amp;page=2" class="next js-search-link">
                              <i class="material-icons"></i>Next
                          </a>
                  </li>
          </ul>
          
  </div>

</nav>
  

  <!--<div class="hidden-md-up text-xs-right up">
    <a href="#header" class="btn btn-secondary">
      Back to top
      <i class="material-icons">&#xE316;</i>
    </a>
  </div>-->
</div>
          
        </div>

        <div id="js-product-list-bottom">
          
            <div id="js-product-list-bottom"></div>
          
        </div>

          </section>

  </section>

    
  </div>


         
        </div>
                </div>
      </section>


<script type="text/javascript">
function getAlert(a,b,c){
  swal({
    title:a,
    text: b,
    icon: c,
  });
}
//Add To Cart 
function addToCart(pid,title){
@if(Auth::check()) 
var Auth ="<?php echo Auth::user()->id ?>";
@else
var Auth =0;
@endif
if(Auth>0){
    var csrf="{{csrf_token()}}";
    var postJson={_token:csrf,pid:pid,name:title};
    $.ajax({
      type:'POST',
      url:"{{route('addtocart')}}",
      data:postJson,        
      dataType:'json',        
      success:function(res){
        //var result = JSON.parse(res);
        console.log(res);
        if(res.status=='success'){
          getAlert('Great',res.message,res.status);
          $('#itemCount').text(res.cart.count);
        }

            if(res.status=='error'){
                getAlert('Great',res.message,res.status);
            }
      }
    });
}else{
    getAlert('Opps Login Required!!','You have to login first!!','error');
}
}
</script>