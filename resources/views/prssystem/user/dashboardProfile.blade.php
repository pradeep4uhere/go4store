@extends('prssystem/layouts/default')
@section('title')
    Profile Page
@stop
@section('content')


    
			
			<div id="page-wrapper" >
				<div class="graphs" >
					<div class="col_3">
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="fa fa-shopping-cart" style="color: green"></i>
								<div class="stats">
								  <h5>0</h5>
								  <div class="grow">
									<p><b>My Orders</b></p>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="fa fa-users"></i>
								<div class="stats">
								  <h5>0</h5>
								  <div class="grow grow1">
									<p><b>Reference</b></p>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box">
								<i class="fa fa-eye"></i>
								<div class="stats">
								  <h5>0</h5>
								  <div class="grow grow3">
									<p><b>Profile</b></p>
								  </div>
								</div>
							</div>
						 </div>
						 <div class="col-md-3 widget">
							<div class="r3_counter_box">
								<i class="fa fa-inr" style="color: green"></i>
								<div class="stats">
								  <h5>0</h5>
								  <div class="grow grow2"  style="color: green">
									<p><b>Earn</b></p>
								  </div>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>

			<!-- switches -->
		
		
			
				</div>

			<div class="progress" style="margin-top:30px ">
			  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%;">
			    40%
			  </div>
			</div>
			<!--body wrapper start-->
			<div id="page-wrapper" style="background-color:#06756a;color:#FFF; margin-top:30px ">

<div class="graphs">
<h5 style="text-transform: capitalize;">Complete Your Profile For getting Better and More features.</h5>
						<div class="col_3">
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box" style="color:#666;border-radius: 5px;">
							<i class="fa fa-user"  style="color: green"></i><br>
								<b style="font-size:16px;margin-top:10px;color:#999">Personal Details</b><br>
								<p style="font-size:12px;margin-top:10px;color:#666">You need to provide your KYC information with us for verified customer</p>
								<hr style="margin-bottom:10px;">
								<div style="font-size:14px;text-align:center;padding-bottom:10px;">
								<a href="#">Update Details </a>
								</div>
							</div>
						</div>
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box" style="color:#666;border-radius: 5px;">
							<i class="fa fa-bank" style="color: red"></i><br>
								<b style="font-size:16px;margin-top:10px;color:#999">Bank Details</b><br>
								<p style="font-size:12px;margin-top:10px;color:#666">We need your bank account details and KYC documents to verify your bank account
</p>
								<hr style="margin-bottom:10px;">
								<div style="font-size:14px;text-align:center;padding-bottom:10px;">
								<a href="#">Update Details</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box" style="color:#666;border-radius: 5px;">
							<i class="fa fa-users"></i><br>	
								<b style="font-size:16px;margin-top:10px;color:#999">Refer & Earn</b><br>
								<p style="font-size:12px;margin-top:10px;color:#666">If You refer more, you will get more rewards, You become as distributor as well.
</p>
								<hr style="margin-bottom:10px;">
								<div style="font-size:14px;text-align:center;padding-bottom:10px;">
								<a href="#">More Details</a>
								</div>
							</div>
						</div>
					
						
						<div class="col-md-3 widget widget1">
							<div class="r3_counter_box" style="color:#666;border-radius: 5px;">
							<i class="fa fa-gears"></i><br>
								<b style="font-size:16px;margin-top:10px;color:#999">Profile Setting</b><br>
								<p style="font-size:12px;margin-top:10px;color:#666">You can update more about into your profile here. Approval  required if its related to KYC.<br>
</p>
								<hr style="margin-bottom:10px;">
								<div style="font-size:14px;text-align:center;padding-bottom:10px;">
								<a href="http://local.go4store/public/index.php/seller/addproduct">Update</a>
								</div>
							</div>
						</div>
						
						
						<div class="clearfix"> </div>
					</div>



        
        
    </div>
</div>

			</div>
			 <!--body wrapper end-->
		
        <!--footer section start-->
		<footer>
		   <p>&copy 2020 {{env('SITE_URL')}} All Rights Reserved</p>
		</footer>
        <!--footer section end-->

      <!-- main content end-->
    

@stop

@section('footer_scripts')
    
@stop
