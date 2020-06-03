<section id="wrapper">     
    <div class="container"> 
          <div id="columns_inner">
            <div id="left-column" class="col-xs-12 col-sm-4 col-md-3 hb-animate-element top-to-bottom">
                @include('prssystem.firezyshop.Cart.CartLeftBlock')
            </div>
<nav data-depth="1" class="breadcrumb hidden-sm-down">
   <div class="container"><h1 class="h1"><i class="fa fa-shopping-cart"></i>&nbsp;Shopping Cart</h1>
  <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
      <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="{{route('homePage')}}">
          <span itemprop="name"><i class="fa fa-home"></i>&nbsp;Home</span>
        </a>
        <meta itemprop="position" content="1">
      </li>
  </ol>
  </div>
</nav>
<div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">
  <section id="main">
    <div class="cart-grid row">
      <!-- Left Block: cart product informations & shpping -->
      <div class="cart-grid-body col-xs-12 col-lg-8">
          <!-- cart products detailed -->
        <div class="card cart-container">
          <div class="card-block">
          </div>
          <hr>
          <div class="cart-overview js-cart" data-refresh-url="#">
                <ul class="cart-items">
                  <?php $totalAmount=array(); $quantity = array();?>
                  @if(!empty($cartItem))
                  @foreach($cartItem as $item)
                    @include('prssystem.firezyshop.Cart.CartListItem',array('item'=>$item))
                    <?php 
                    $totalAmount[]=$item['quantity']*$item['price'];
                    $quantity[] = $item['quantity']?>
                  @endforeach
                  @else
                     <center><a href="{{route('homePage')}}" class="btn btn-danger">No Item In your cart, Add Now</a></center>
                  @endif
                </ul>
        </div>

          
        </div>

        
          <a class="label" href="#">
            <i class="fa fa-arrow-left"></i>&nbsp;Continue shopping
          </a>
        <!-- shipping informations -->
      </div>
      <!-- Right Block: cart subtotal & cart total -->
      <div class="cart-grid-right col-xs-12 col-lg-4">
        <div class="card cart-summary">
        <div class="cart-detailed-totals">
        <div class="card-block">
        <div class="cart-summary-line" id="cart-subtotal-products">
        <span class="label js-subtotal">
          <?php echo array_sum($quantity);?> items
        </span>
        <span class="value">₹<?php echo  array_sum($totalAmount)?></span>
        </div>
                  <div class="cart-summary-line" id="cart-subtotal-shipping">
        <span class="label">
          Shipping
        </span>
        <span class="value">₹0.00</span>
        <div><small class="value"></small></div>
        </div>
        </div>

  
      

  <hr>

  <div class="card-block">
    <div class="cart-summary-line cart-total">
      <span class="label">Tax</span>
      <span class="value">₹0.00</span>
    </div>

    <div class="cart-summary-line">
      <small class="label">Total</small>
      <small class="value" style="font-size: 20px">₹<?php echo  number_format(array_sum($totalAmount),2)?></small>
    </div>
  </div>

  <hr>
</div>
<div class="checkout cart-detailed-actions card-block">
    @if(Auth::check()) 
    <div class="text-xs-center">
        <a href="javascript:$('#cartCheckout').submit()" class="btn btn-primary">Proceed to checkout</a>
    </div>
     @else
      <div class="text-xs-center">
     <a href="{{route('login')}}" class="btn btn-danger">Login To Order</a>
     </div>
     @endif
</div>
</div>
 <div id="block-reassurance">
    <ul>
              <li>
          <div class="block-reassurance-item">
            <img src="https://prestashop.templatemela.com/PRS08/PRS080193/PRS01/modules/blockreassurance/img/ic_verified_user_black_36dp_1x.png" alt="Security policy (edit with Customer reassurance module)">
            <span class="h6">Security policy</span>
          </div>
        </li>
              <li>
          <div class="block-reassurance-item">
            <img src="https://prestashop.templatemela.com/PRS08/PRS080193/PRS01/modules/blockreassurance/img/ic_local_shipping_black_36dp_1x.png" alt="Delivery policy (edit with Customer reassurance module)">
            <span class="h6">Delivery policy </span>
          </div>
        </li>
              <li>
          <div class="block-reassurance-item">
            <img src="https://prestashop.templatemela.com/PRS08/PRS080193/PRS01/modules/blockreassurance/img/ic_swap_horiz_black_36dp_1x.png" alt="Return policy (edit with Customer reassurance module)">
            <span class="h6">Return policy</span>
          </div>
        </li>
          </ul>
  </div>
      </div>

    </div>
  </section>

    
  </div>


         
        </div>
                </div>
</section>
<form id="cart" action="{{route('updatecart')}}" method="post">
   {{ csrf_field() }}
   <input type="hidden" name="item_id" id="item_id">
   <input type="hidden" name="qnty" id="qnty">
   <input type="hidden" name="cart_id" id="cart_id">
</form>
<form id="cartCheckout" action="{{route('checkoutinit')}}" method="post">
   {{ csrf_field() }}
   <input type="hidden" name="qnty" id="qnty" value={{$count}}>
   <input type="hidden" name="gtotal" value="{{encrypt($total)}}">
</form>
<script>
   function getAlert(a,b,c){
       swal({
         title:a,
         text: b,
         icon: c,
       });
   }
   @if(Session::has('message'))
    getAlert('Great',"{{ Session::get('message') }}",'success');
   @endif

   function updateCart(v,i){
       $('#item_id').val(i);
       $('#qnty').val(v);
       $('#cart').submit();
   }
   
</script>

   
  