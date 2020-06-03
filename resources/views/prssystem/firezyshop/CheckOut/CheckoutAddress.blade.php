<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style type="text/css">

  a:hover, a:focus{
    text-decoration: none;
    outline: none;
}
#accordion .panel{
    border: none;
    box-shadow: none;
    border-radius: 0;
    margin-bottom: 15px;
}
#accordion .panel-heading{
    padding: 0;
    border-radius:0;
    border: none;
}
#accordion .panel-title a{
    display: block;
    padding: 14px 30px 14px 70px;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
    background: #ef6145;
    position: relative;
    overflow: hidden;
    transition: all 0.5s ease 0s;
}
#accordion .panel-title a.collapsed{
    background: #f8f8f8;
    color: #1e4276;
}
#accordion .panel-title a.collapsed:hover{
    color: #ef6145;
}
#accordion .panel-title a:before{
    content: "";
    width: 55px;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.1);
    position: absolute;
    top: 0;
    left: -13px;
    transform: skewX(-25deg);
    transition: all 0.5s ease 0s;
}
#accordion .panel-title a.collapsed:hover:before{
    background: #d7573e;
}
#accordion .panel-title a:after{
    content: "\f047";
    font-family: FontAwesome;
    position: absolute;
    left: 10px;
    top: 50%;
    color: #fff;
    transform: translateY(-50%);
}
#accordion .panel-title a.collapsed:after{
    color: #9f9f9f;
}
#accordion .panel-title a.collapsed:hover:after{
    color: #fff;
}
#accordion .panel-body{
    font-size: 14px;
    color: #5a3245;
    line-height: 25px;
    padding: 20px 15px 20px 40px;
    position: relative;
    border: none;
    transition: all 0.5s ease 0s;
}
#accordion .panel-body:before{
    content: "";
    width: 5px;
    height: 40px;
    background: #ef6145;
    position: absolute;
    top: 30px;
    left: 0;
}
#accordion .panel-body p{
    margin-bottom: 0;
}
</style>
<section id="wrapper">
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Delivery Address 
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <div class="row">
                              @if(count($address)>0)
                              @foreach($address as $item)

                                  <div class="col-md-6 mb-5">
                                          <div class="card cardClass" id="card_{{$item->id}}">
                                          <div class="card-header" style="font-size: 16px;">{{ucwords($item->full_name)}}</div>
                                          <div class="card-body" style="font-size: 13px !important; padding: 15px;">
                                          <div class="" >
                                          <div>{{$item->address_1}}</div> 
                                          <div>{{$item->address_2}}</div> 
                                          <div>{{$item->landmarks}}</div> 
                                          <div>{{$item['City']['city_name']}}<br/> {{$item['State']['state_name']}}, 
                                           Pin: {{$item->pincode}} ({{$item->country}})
                                            <input type="hidden" id="shipphide_{{$item->id}}" value="{{encrypt($item->id)}}"></div> 
                                          </div>
                                          <div>Mobile: {{$item->mobile}}</div>  
                                          <div>
                                          <button class="btn btn-info del" style="padding:8px; font-size:12px;margin-top:5px;" id="del_{{$item->id}}" onclick="setDefault({{$item->id}})" >Delivery Here</button>
                                          <!-- <button class="btn btn-warning edit" style="padding:8px; font-size:12px;margin-top:5px;" id="edit_{{encrypt($item->id)}}" >&nbsp;&nbsp;Edit&nbsp;&nbsp;</button> -->
                                          <button class="btn btn-danger remove" style="padding:8px; font-size:12px;margin-top:5px;" id="remove_{{encrypt($item->id)}}">Remove</button>
                                          </div>
                                          </div>
                                          </div>
                                        </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Pickup Address
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div style="font-size:16px;"> Pickup Address For Seller :: Long Life Furniture Shop</div>
          <hr>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Add New Address
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <div class="row ">
            <div class="col-md-12">
                <form class="form-horizontal" method="POST" action="{{route('addaddress')}}">
                @csrf
                <div class="row ">
                    <div class="col-md-4">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                            <label>Full Name</label>
                              <input type="text" id="full_name" name="full_name" class="form-control validate" required="required" placeholder="Enter Your Full Name" value="">
                            </div>
                            
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                            <label>Flat No/Office Address</label>
                              <input type="text" id="address_1" name="address_1" class="form-control validate" required="required" placeholder="Enter flat or plot number">
                            </div>
                            
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                            <label>Full Address</label>
                              <input type="text" id="address_2" name="address_2" class="form-control validate" required="required" placeholder="Enter Full Address">
                            </div>
                            
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                            <label>Landmark</label>
                              <input type="text" id="landmarks" name="landmarks" class="form-control validate" required="required" placeholder="Enter Landmarks">
                            </div>
                            
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                            <label>Mobile No</label>
                              <input type="text" id="mobile" name="mobile" class="form-control validate" required="required" placeholder="Enter Mobile Number" maxlength="10" value="{{Auth::user()->mobile}}" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                            </div>
                            
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                            <label>State</label>
                              <select class="form-control" name="state_id" onchange="getCity(this.value)" required="required">
                                  <option>Select State</option>
                                                                    <option value="1">Andaman &amp; Nicobar Islands</option>
                                                                    <option value="2">Andhra Pradesh</option>
                                                                    <option value="3">Arunachal Pradesh</option>
                                                                    <option value="4">Assam</option>
                                                                    <option value="5">Bihar</option>
                                                                    <option value="6">Chandigarh</option>
                                                                    <option value="7">Chattisgarh</option>
                                                                    <option value="8">Dadra &amp; Nagar Haveli</option>
                                                                    <option value="9">Daman &amp; Diu</option>
                                                                    <option value="10">Delhi</option>
                                                                    <option value="11">Goa</option>
                                                                    <option value="12">Gujarat</option>
                                                                    <option value="13">Haryana</option>
                                                                    <option value="14">Himachal Pradesh</option>
                                                                    <option value="15">Jammu &amp; Kashmir</option>
                                                                    <option value="16">Jharkhand</option>
                                                                    <option value="17">Karnataka</option>
                                                                    <option value="18">Kerala</option>
                                                                    <option value="19">Lakshadweep</option>
                                                                    <option value="20">Madhya Pradesh</option>
                                                                    <option value="21">Maharashtra</option>
                                                                    <option value="22">Manipur</option>
                                                                    <option value="23">Meghalaya</option>
                                                                    <option value="24">Mizoram</option>
                                                                    <option value="25">Nagaland</option>
                                                                    <option value="26">Odisha</option>
                                                                    <option value="27">Poducherry</option>
                                                                    <option value="28">Punjab</option>
                                                                    <option value="29">Rajasthan</option>
                                                                    <option value="30">Sikkim</option>
                                                                    <option value="31">Tamil Nadu</option>
                                                                    <option value="32">Telangana</option>
                                                                    <option value="33">Tripura</option>
                                                                    <option value="34">Uttar Pradesh</option>
                                                                    <option value="35">Uttarakhand</option>
                                                                    <option value="36">West Bengal</option>
                                                                </select>
                            </div>
                            
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                            <label>City</label>
                              <select class="form-control" id="city" name="city_id" required="required">
                                  <option>Select City</option>
                                 
                              </select>
                            </div>
                            
                          </div>
                    </div>
                     <div class="col-md-4">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                            <label>Pincode</label>
                              <input type="text" id="pincode" name="pincode" class="form-control validate" required="required" placeholder="Enter pincode" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="6">
                            </div>
                            
                          </div>
                    </div>
                    
                </div>
                    <div class="form-row">
                        <input type="hidden" id="id" name="id">
                        <button type="submit" name="login" class="btn waves-effect waves-light blue right btn-danger">Save</button>
                    </div>
                </form>
            </div>
        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
<div class="row">
<div class="checkout cart-detailed-actions card-block ">
    <div class="text-xs-center pull-left">
        <a href="{{route('home')}}" class="btn btn-primary top-btn">&nbsp;Continue Shopping</a>
        <a href="javascript:void(0)" class="btn top-btn btn btn-primary"  id="payment"> Procced To Payment</a>
    </div>
</div>
</section>
<script>

 function setDefault(id){
   var id = id;
   $(".cardClass").css({'background-color':'#FFFFFF'});
   $("#card_"+id).css({'background-color':'gold'});
 }

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>



<form id="choosePay" action="{{route('choosepayment')}}" method="get">
    <input type="hidden" name="pickup" id="pickupAddress">
    <input type="hidden" name="shippingAddress" id="shippingAddress">
    <input type="hidden" name="sellerIDArr" value="{{$sellerIDArr}}">
    {{csrf_field()}}
  </form>


