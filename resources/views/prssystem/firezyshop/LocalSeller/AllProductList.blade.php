<section id="wrapper">     
<div class="container"> 
  <div id="columns_inner">
    <div id="content" class="col-xs-12 col-sm-8 col-md-12 col-xl-12">
      <section id="main">
        <section id="products">
            <div id="">
            <div id="js-product-list-top" class="row products-selection">
            <div class="col-md-6 hidden-md-down total-products">
              <p><i class="fa fa-list"></i>&nbsp;There are {{count($productList)}} Products.</p>
            </div>
          <div class="col-md-6">
            <div class="row">
            <span class="col-sm-6 col-md-6 hidden-sm-down sort-by">Category:</span>
            <div class="col-sm-9 col-xs-8 col-md-9 products-sort-order dropdown">
            <a class="select-title sortingDivOption" 
            rel="nofollow" 
            data-toggle="dropdown" 
            aria-haspopup="true" 
            aria-expanded="false">
            All<i class="fa fa-chevron-down pull-xs-right" style="padding-top: 5px; padding-right: 5px"></i>&nbsp;&nbsp;&nbsp;
            </a>
            <div class="dropdown-menu sortingDiv" style="display: none;">
              <?php if(!empty($categoryList)){ ?>
              <?php foreach($categoryList as $item){ ?>
                <a rel="nofollow" href="#" class="select-list current js-search-link">
                  {{$item['name']}}
                </a>
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
          Showing 1-16 of 30 item(s)
          </div>
          </div>
            
          </div>

              
          <div id="" class="hidden-sm-down">
          <section id="js-active-search-filters" class="hide">
          </section>
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



<?php $perPageItem = env('PER_PAGE_ITEM');
  if($productDetails->total()>0){ ?>
  <nav class="pagination row">
  <div class="col-md-3">
    Showing 1-{{$perPageItem}} of {{$productDetails->total()}} item(s)
  </div>
  <div class="col-md-9 pull-left">
    {{ $productDetails->links('prssystem.firezyshop.pagination') }}
  </div>
</nav>
<?php } ?>


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