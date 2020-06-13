<style type="text/css">
	.headingTitle{
		    margin-top: 0px;
		    padding: 10px;
		    border: solid 1px #1f4c94;
		    font-size: 13px;
		    background-color: #1f4c94;
		    color: #FFF;
		    margin-bottom: 1px;
	}
</style>
<div id="left-column" class="col-xs-12 col-sm-4 col-md-3 hb-animate-element top-to-bottom">
   <h4 class="headingTitle">
      Hi, {{ucfirst(Auth::user()->first_name)}} {{Auth::user()->last_name}}
   </h4>
 
    <div class="list-group active" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="{{route('myprofile')}}" role="tab" aria-controls="home">
        <i class="fa fa-user" style="font-size: 14px;"></i>&nbsp;Profile
      </a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="{{route('myorder')}}" role="tab" aria-controls="profile"><i class="fa fa-shopping-cart" style="font-size: 14px;"></i>&nbsp;My Orders</a>
       <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="{{route('referearn')}}" role="tab" aria-controls="settings"><i class="fa fa-share"></i>&nbsp;Refer & Earn</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages"><i class="fa fa-map-marker"></i>&nbsp;Shipping Address</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="{{route('userprofile')}}" role="tab" aria-controls="settings"><i class="fa fa-gear"></i>&nbsp;Settings</a>
       <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="{{route('logout')}}" role="tab" aria-controls="settings"><i class="fa fa-sign-out"></i>&nbsp;Sign Out</a>
    </div>
</div>


