<style type="text/css">
.link-item{
    min-height: 125px;
    max-width: 100%; 
    border: solid 1px #CCC;
    border-radius: 5px;
    text-align: center;
    padding-top: 25px;
    font-size: 15px;
    margin: 1px 1px 15px 1px; 
    display: block;;
    box-shadow: 0 5px 5px -5px;
}
.material-icons{
  font-size: 32px;
}

</style>
<section id="wrapper">     
    <div class="container"> 
          <div id="columns_inner">
                @include('prssystem.firezyshop.User.ProfileLeftBlock')
            <nav data-depth="1" class="breadcrumb hidden-sm-down">
               <div class="container"><h1 class="h1"><i class="fa fa-user"></i>&nbsp;My Order History</h1>
              <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                  <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a itemprop="item" href="{{route('home')}}">
                      <span itemprop="name"><i class="fa fa-home"></i>&nbsp;Home</span>
                    </a>
                    <meta itemprop="position" content="1">
                  </li>
              </ol>
              </div>
            </nav>
<div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">
    
    

  <section id="main">

    
      
        <header class="page-header">
          
        </header>
      
    

    
  <section id="content">
    
      
        
  <div class="row">
   <div class="container">
    <table class="table table-condensed"  id="myTable">
    <thead>
        <tr>
            <th>#</th>
            <th>Order ID</th>
            <th>Order Date</th>
            <th>Seller</th>
            <th>Items</th>
            <th>Amount</th>
            <th>Payment</th>
            <th>Order</th>
            <th >Action</th>
        </tr>
    </thead>
    <tbody class="panel">
        <?php if($orderDetails->count()>0){ $count=1; ?>
          <?php foreach($orderDetails as $order){ //dd($order);?>
        <tr data-toggle="collapse" data-target="#demo{{$count}}" data-parent="#myTable">
            <td>{{$count}}</td>
            <td><a href="#">{{$order['orderID']}}</a></td>
            <td>{{Helper::getDateFormate($order['created_at'])}}</td>
            <td><a href="{{url('seller/'.$order['Seller']['pincode'].'/'.$order['Seller']['businessusername'])}}" target="_blank">{{$order['Seller']['business_name']}}</a></td>
            <td>{{count($order['OrderDetail'])}}</td>
            <td class="text-success">₹{{number_format($order['totalAmount'],2)}}</td>
            <td class="text-error">{{$order['payment_status']}}</td>
            <td class="text-success">{{$order['order_status']}}</td>
            <td align="center">
                <?php if($order['order_status']!='Confirm'){ ?>
                  <a href="#" class="text-danger"><strong>Cancel</strong></a>
                <?php }else{ ?>
                <a href="#">Invoice</a>
                <?php } ?>
            </td>
        </tr>
        <tr id="demo{{$count}}" class="collapse">
            <td colspan="8" class="hiddenRow"><div>Demo1</div> </td>
        </tr>
      <?php $count++;} ?>
      <?php } ?>

    </tbody>
</table>
</div>

<?php $perPageItem = env('PER_PAGE_ITEM');
  if($orderDetails->total()>0){ ?>
  <nav class="pagination row">
  <div class="col-md-3">
    Showing 1-{{$perPageItem}} of {{$orderDetails->total()}} item(s)
  </div>
  <div class="col-md-9 pull-left">
    {{ $orderDetails->links('prssystem.firezyshop.pagination') }}
  </div>
</nav>
<?php } ?>
  </div>
  </section>


  </section>


    
  </div>


  </div>
</div>
</section>
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

</script>

   
  