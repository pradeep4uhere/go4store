<style type="text/css">
.invoice {
    background: #fff;
    padding: 20px
}

.invoice-company {
    font-size: 20px
}

.invoice-header {
    margin: 0 -20px;
    background: #f0f3f4;
    padding: 20px
}

.invoice-date,
.invoice-from,
.invoice-to {
    display: table-cell;
    width: 1%
}

.invoice-from,
.invoice-to {
    padding-right: 20px
}

.invoice-date .date,
.invoice-from strong,
.invoice-to strong {
    font-size: 16px;
    font-weight: 600
}

.invoice-date {
    text-align: right;
    padding-left: 20px
}

.invoice-price {
    background: #f0f3f4;
    display: table;
    width: 100%
}

.invoice-price .invoice-price-left,
.invoice-price .invoice-price-right {
    display: table-cell;
    padding: 20px;
    font-size: 20px;
    font-weight: 600;
    width: 75%;
    position: relative;
    vertical-align: middle
}

.invoice-price .invoice-price-left .sub-price {
    display: table-cell;
    vertical-align: middle;
    padding: 0 20px
}

.invoice-price small {
    font-size: 12px;
    font-weight: 400;
    display: block
}

.invoice-price .invoice-price-row {
    display: table;
    float: left
}

.invoice-price .invoice-price-right {
    width: 25%;
    background: #2d353c;
    color: #fff;
    font-size: 28px;
    text-align: right;
    vertical-align: bottom;
    font-weight: 300
}

.invoice-price .invoice-price-right small {
    display: block;
    opacity: .6;
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 12px
}

.invoice-footer {
    border-top: 1px solid #ddd;
    padding-top: 10px;
    font-size: 10px
}

.invoice-note {
    color: #999;
    margin-top: 20px;
    font-size: 85%
}

.invoice>div:not(.invoice-footer) {
    margin-bottom: 20px
}

.btn.btn-white, .btn.btn-white.disabled, .btn.btn-white.disabled:focus, .btn.btn-white.disabled:hover, .btn.btn-white[disabled], .btn.btn-white[disabled]:focus, .btn.btn-white[disabled]:hover {
    color: #2d353c;
    background: #fff;
    border-color: #d9dfe3;
}
</style>
<div class="row">
<div class="col-md-12">
<center>
    <img src="{{config('global.THEME_URL_FRONT_IMAGE')}}/order_placed.png" class="img-fluid" alt="#"></br>
</center>
</div>
</div>
<div class="jumbotron text-center">
  <h1 class="display-3">Thank you for your order !</h1>
  <p class="lead">Hi {{Auth::user()->first_name}}, Your Payment Status is <b>{!! $payment_status !!}</b> <strong>Please check your email</strong> for further details,</p>
  <p><strong>Your Reference No: </strong>{{$orderID}} & &nbsp;<strong>Order ID: </strong>{{$orderID}}</p>
  <hr>
  <p>
    Having trouble? <a href="{{route('contactus')}}">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="{{route('homePage')}}" role="button">Continue to homepage</a>
  </p>
</div>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
   <div class="col-md-12">
      <div class="invoice">
         <!-- begin invoice-company -->
         <div class="invoice-company text-inverse f-w-600">
            <span class="pull-right hidden-print">
            <a href="javascript:;" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-file t-plus-1 text-danger fa-fw fa-lg"></i> Export as PDF</a>
            <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
            </span>
            {{env('APP_NAME')}}
         </div>
         <!-- end invoice-company -->
         <!-- begin invoice-header -->
         <div class="invoice-header">
            <div class="invoice-from">
               <small>From</small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse">{{$seller->business_name}}</strong><br>
                  {{$seller->address_1}}<br>
                  {{$seller->location}}, {{$seller->district}}<br>
                  Pin: {{$seller->pincode}}, {{$seller->state}}<br>
                  Phone: {{$seller->contact_number}}<br>
                  
               </address>
            </div>
            <div class="invoice-to">
               <small>To</small>
               <address class="m-t-5 m-b-5">
                  <strong class="text-inverse">{{$address['full_name']}}</strong><br>
                  {{$address['address_1']}},<br/>
                  {{$address['address_2']}}, {{$address['landmarks']}}<br/>

                  Pin-{{$address['pincode']}}, {{$address['country']}}<br/>
                  Mobile No: +91-9015446567
               </address>
            </div>
            <div class="invoice-date">
               <small>Invoice / {{date("M",strtotime($orderDate))}} Period</small>
               <div class="date text-inverse m-t-5">{{$orderDate}}</div>

               <div class="invoice-detail">
                  #{{$orderID}}<br>
                  
               </div>
               <div class="date text-inverse m-t-5">Total Amount: ₹{{$totalAmount}}</div>
               <div class="date text-inverse m-t-5">Payment Status: {!! $payment_status !!}</div>
            </div>
         </div>
         <!-- end invoice-header -->
         <!-- begin invoice-content -->
         <div class="invoice-content">
            <!-- begin table-responsive -->
            <div class="table-responsive">
               <table class="table table-invoice">
                  <thead>
                     <tr>
                        <th class="text-center" width="1%">SN</th>
                        <th class="text-center" width="15%">IMAGE</th>
                        <th class="text-left" style="text-align:left">PRODUCT DESCRIPTION</th>
                        <th class="text-center" width="10%" style="text-align:center;">RATE</th>
                        <th class="text-center" width="10%" style="text-align:left">QUANTITY</th>
                        <th class="text-right" width="15%" style="text-align:right">TOTAL AMOUNT</th>
                     </tr>
                  </thead>
                  <tbody>
                    @if(!empty($orderDetails))
                    <?php $count=1;?>
                    @foreach($orderDetails['OrderDetail'] as $item)
                     <tr>
                     <td width="1%">{{$count}}</td>
                     <td width="15%" class="text-left">
                         <a href="{{route('details',['slug'=>str_slug($item['product_name']),'id'=>encrypt($item['user_product_id'])])}}">
                            <img style="width:100px;height: 100px; " src="{{ $item['default_thumbnail']}}" class="img-fluid" alt="#">
                        </a>
                     </td>
                        <td >
                           <span class="text-inverse">{{ucwords($item['product_name'])}}</span><br>
                           <small>Brand:&nbsp;<span style="color: orange; font-weight: bold">{{ucwords($item['brand_name'])}}</span></small><br/>
                            <small>Seller:&nbsp;<span style="color: orange; font-weight: bold">{{ucwords($item['seller_name'])}}</span></small>
                        </td>
                        <td class="text-center" width="10%" style="text-align:center;">₹{{$item['unit_price']}}</td>
                        <td class="text-center" width="10%" style="text-align:center;">{{$item['quantity']}}</td>
                        <td class="text-right" width="15%" style="text-align:right">₹{{$item['quantity']*$item['unit_price']}}</td>
                     </tr>
                     <?php $count++;?>
                     @endforeach

                     @endif
                    
                  </tbody>
               </table>
            </div>
            <!-- end table-responsive -->
            <!-- begin invoice-price -->
            <div class="invoice-price">
               <div class="invoice-price-left">
                  <div class="invoice-price-row">
                     <div class="sub-price">
                        <span class="text-inverse">TOTAL</span>
                     </div>
                     <div class="sub-price">
                        <small>&nbsp;</small>
                        <span class="text-inverse">&nbsp;</span>
                     </div>
                  </div>
               </div>
               <div class="invoice-price-right">
                  <small>Payable Amount</small><span class="f-w-600">₹{{$totalAmount}}</span>
               </div>
            </div>
            <!-- end invoice-price -->
         </div>
         <!-- end invoice-content -->
         <!-- begin invoice-note -->
         <div class="invoice-note">
            * Make all cheques payable to {{env('APP_NAME')}}<br>
            * Payment is due within {{env('PAYMENT_DAYS')}} days<br>
            * If you have any questions concerning this invoice, contact  [{{env('CONTACT_NAME')}}, {{env('PHONE_NO')}}, {{env('MAIL_FROM_ADDRESS')}}]
         </div>
         <!-- end invoice-note -->
         <!-- begin invoice-footer -->
         <div class="invoice-footer">
            <p class="text-center m-b-5 f-w-600">
               THANK YOU FOR YOUR BUSINESS
            </p>
            <p class="text-center">
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-globe"></i> {{env('FRONT_URL')}}</span>
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-phone-volume"></i> T:{{env('PHONE_NO')}}</span>
               <span class="m-r-10"><i class="fa fa-fw fa-lg fa-envelope"></i> {{env('MAIL_FROM_ADDRESS')}}</span>
            </p>
         </div>
         <!-- end invoice-footer -->
      </div>
   </div>
</div>