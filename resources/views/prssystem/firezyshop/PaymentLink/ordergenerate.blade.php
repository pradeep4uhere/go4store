@extends('prssystem/layouts/blank')
@section('title')
    Please Wait...
@stop
@section('content')
<?php 
function getCallbackUrl()
{
	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	return $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . 'response';
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<center>
    <div style="margin-top: 10%">
    <p><img style="width:200px;height: 100px; " src="{{config('global.THEME_URL_IMAGE')}}/loading.gif" class="img-fluid" alt=""></p>
    <h4>Please Wait...</h4>
    <p>Do not refresh this page, your order is creating, you will auto redirect.<br/><small>Your Ip Address: {{$_SERVER['REMOTE_ADDR']}}</small></p>

    <div>
</center>

<form action="{{$BASE_URL}}" method="post" name="payuForm">
	  {{ csrf_field() }}
      <input type="hidden"  name="AgentId"  required="required"   value="{{$AgentId}}">
      <input type="hidden"  name="UserInfo" required="required"   value="{{$UserInfo}}">
      <input type="hidden"  name="Amount"   required="required"   value="{{$Amount}}">
      <input type="hidden"  name="Mode"     required="required"   value="{{$Mode}}">
      <input type="hidden"  name="EmailId"  required="required"   value="{{$EmailId}}">
      <input type="hidden"  name="Mobile"   required="required"   value="{{$mobile}}">
      <input type="hidden"  name="Callback" required="required"   value="{{$callback}}">
      <input type="hidden"  name="OrderId"  required="required"   value="{{$OrderId}}">
      <input type="hidden"  name="SecureHash"  value="{{$hashKey}}">
    </form>
<script type="text/javascript">
submitPayuForm();
var hash = '{{$hashKey}}';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
var payuForm = document.forms.payuForm;
payuForm.submit();
}
</script>	
@stop
