<?php 

//agentID|amount|mode|email|mobile|orderId|callback
// headers('Content-Type:application/x-www-form-urlencoded');
$AgentId 	= "2190";
$UserInfo 	= "Pradeep Kumar";
$Amount 	= "100";
$Mode 		= "CC";
$EmailId	= "kumar031984@gmail.com";
$mobile 	= "9015446567";
$callback 	= "http://localhost/BANKIT/thankyou.php";
$OrderId 	= 'ORD'.date('YMD').time();
$hasStr = $AgentId.'|'.$Amount.'|'.$Mode.'|'.$EmailId.'|'.$mobile.'|'.$OrderId.'|'.$callback;
$SecureHash	= $hasStr;
$secureKey = '6270ee2ccf2c354472ab7bb2fa295e990ac94102';
$hashKey  = hash_hmac("sha1", $hasStr, $secureKey);
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<form id ="paymentForm" action="http://uat.bankit.in:9012/RTOPG/SecureBankitPG" method="POST" >
<input type="text" id="AgentId" name="AgentId" 	required="required" 	value="<?php echo $AgentId; ?>">
<input type="text" id="UserInfo" name="UserInfo"required="required" 	value="<?php echo $UserInfo; ?>">
<input type="text" id="Amount" name="Amount"   	required="required" 	value="<?php echo $Amount; ?>">
<input type="text" id="Mode"  name="Mode" 		required="required"		value="<?php echo $Mode; ?>">
<input type="text" id="EmailId" name="EmailId" 	required="required"		value="<?php echo $EmailId; ?>">
<input type="text" id="Mobile" name="Mobile"  	required="required"		value="<?php echo $mobile; ?>">
<input type="text" id="Callback" name="Callback"required="required"		value="<?php echo $callback; ?>">
<input type="text" id="OrderId" name="OrderId"  required="required"		value="<?php echo $OrderId; ?>">
<input type="text" id="SecureHash" name="SecureHash"  				value="<?php echo $hashKey; ?>">
<input type="submit" name="submit" value="Paynow">
</form>
<script type="text/javascript">
	$(document).ready(function(){
		setTimeOut(function(){
			$("#paymentForm").submit();
		},3000);
		
	});
</script>