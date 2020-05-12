<section id="wrapper">
<div class="container">
<div class="row">
  <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Shipping Address</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Pickup Address</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Add New Address</button>
</div>

<div id="London" class="tabcontent">
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
                <div>{{$item->city_id}}, {{$item->state_id}}, {{$item->pincode}}, {{$item->country}}
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

<div id="Paris" class="tabcontent">
  <div class="row" id="pickAddress">
                                                  <div class="col-md-12">
          <div style="font-size:16px;"> Pickup Address For Seller :: Long Life Furniture Shop</div>
          <hr>
                    
          </div>
          
                                
                        </div>
</div>

<div id="Tokyo" class="tabcontent">
  <div class="container">
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
                              <input type="text" id="address_1" name="address_1" class="form-control validate" required="required" placeholder="Email Your Address">
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
                              <input type="text" id="mobile" name="mobile" class="form-control validate" required="required" placeholder="Enter Mobile Number" maxlength="10">
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
                              <input type="text" id="pincode" name="pincode" class="form-control validate" required="required" placeholder="Enter pincode">
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
<div class="checkout cart-detailed-actions card-block ">
    <div class="text-xs-center pull-right">
        <a href="{{route('home')}}" class="btn btn-primary">&nbsp;Continue Shopping</a>
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
<style type="text/css">
  

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  min-height: 100%;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 10px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  min-height: 300px;
} 
</style>


<form id="choosePay" action="{{route('choosepayment')}}" method="get">
    <input type="hidden" name="pickup" id="pickupAddress">
    <input type="hidden" name="shippingAddress" id="shippingAddress">
    <input type="hidden" name="sellerIDArr" value="{{$sellerIDArr}}">
    {{csrf_field()}}
  </form>


