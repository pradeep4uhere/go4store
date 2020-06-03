    <li class="cart-item">
<?php //dd($item);?>
    <div class="product-line-grid">
    <!--  product left content: image-->
    <div class="product-line-grid-left col-md-3 col-xs-4">
    <span class="product-image media-middle">
     <a href="{{route('details',['slug'=>str_slug($item['name']),'id'=>encrypt($item['id'])])}}">
      <img style="width:200px;height: 100px; " src="{{ $item['attributes']['default_thumbnail']}}" class="img-fluid" alt="#">
      </a>
    </span>
    </div>

    <!--  product left body: description -->
    <div class="product-line-grid-body col-md-4 col-xs-8">
    <div class="product-line-info">
    <a class="label" href="#" data-id_customization="0">{{ucwords($item['name'])}}</a>
    </div>
    <div class="product-line-info">
    <span class="label">Seller:</span>
    <span class="value">{{$item['attributes']['seller']}}</span>
    </div>
    <div class="product-line-info">
    <span class="label">Brand:</span>
    <span class="value">{{$item['attributes']['brandName']}}</span>
    </div>
    <div class="product-line-info">
    <span class="label">Unit:</span>
    <?php if(array_key_exists('quantity', $item['attributes'])){ ?>
    <span class="value">{{$item['attributes']['quantity']}} {{$item['attributes']['unitType']}}</span>
    <?php } ?>
    </div>

    </div>


    <!--  product left body: description -->
    <div class="product-line-grid-right product-line-actions col-md-5 col-xs-12">
    <div class="row">
    <div class="col-xs-4 hidden-md-up"></div>
    <div class="col-md-10 col-xs-6">
    <div class="row">
    <div class="col-md-6 col-xs-6 qty">
    <div class="input-group bootstrap-touchspin">
        <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
       
        <select class="custom-select"  style="font-size: 11px;" onchange="updateCart(this.value,'{{encrypt($item["id"])}}')" id="quantity_{{$item['id']}}">
         @for($i=1;$i<100;$i++)
         <option value="{{$i}}" @if($item['quantity']==$i) selected="selected" @endif>{{$i}}</option>
         @endfor
         </select>
    </div>
    </div>
    <div class="col-md-6 col-xs-2 price">
    <span class="product-price">
    <strong>
        ₹<?php echo $item['quantity'] * $item['price'] ; ?>
    </strong>
    </span>
    </div>
    </div>
    </div>
    <div class="col-md-2 col-xs-2 text-xs-right">
    <div class="cart-line-product-actions">
     <a style="font-size: 11px; padding:2px; font-weight: bold" href="{{route('removeCartItem',['id'=>encrypt($item['id'])])}}" class="remove-from-cart">
                                        
                                        <i class="fa fa-trash"></i>
                                    </a>
    </div>
    </div>
    </div>
    </div>
    <div class="clearfix"></div>
    </div>
    </li>
