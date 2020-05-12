/**
 * 2010-2019 Templatemelathemes
 *
 * NOTICE OF LICENSE
 *
 * DISCLAIMER
 *
 *  @Module Name: TM CouponPop Module
 *  @author    templatemela <support@templatemela.com>
 *  @copyright 2010-2019 templatemela
 *  @license   http://www.templatemela.com - prestashop template provider
 */

$(document).ready(function()
{
	$(document).on('click', '.open .tm-coupon-small, .open .share-coupon-small-wrapper', function()
	{
		showDialog();
	});
	$(document).on('click', '.close .tm-coupon-small, .close .share-coupon-small-wrapper', function()
	{
		closeDialog(cookies_time);
	});
});

function showDialog()
{  
	var data={'task':'showPopup'};
		$.ajax({
		type: "POST",
		cache: false,
		url: tm_coupon_url + '/front-end-ajax.php',
		dataType : "json",
		data: data,
		complete: function(){},
		success: function (response) {
			console.log(response);
		}
	});   
	$("#overlay").show();
	$(".newsletter-main").show();
	$('.tm-show-newsletter-popup').removeClass('open').addClass('close');
}

function closeDialog(cookies_time)
{  
	var data={'task':'cancelRegisNewsletter', 'cookies_time':cookies_time};        
	if ($('#notshow').is(':checked')){
        data.notshow = '1';
    }else{
        data.notshow = '0';
    }
		$.ajax({
		type: "POST",
		cache: false,
		url: tm_coupon_url + '/front-end-ajax.php',
		dataType : "json",
		data: data,
		complete: function(){},
		success: function (response) {
			console.log(response);
		}
	});   
	$("#overlay").hide();
	$(".newsletter-main").hide();
	$('.tm-show-newsletter-popup').removeClass('close').addClass('open');	
}
function check_email(email){
	emailRegExp = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.([a-z]){2,4})$/;	
	if(emailRegExp.test(email)){
		return true;
	}else{
		return false;
	}
}
function regisNewsletter(){
    var data={'task':'regisNewsletter', 'action':0};
    var email = $("#newsletter_input_email").val();
    if(check_email(email) == true){
        data.email = email;
        $("#regisNewsletterMessage").html("");
    }else{
        $("#regisNewsletterMessage").html(enterEmail);
        return false;
    }
    
    if ($('#notshow').is(':checked')){
        data.notshow = '1';
    }else{
        data.notshow = '0';
    }
    $.ajax({
		type: "POST",
		cache: false,
		url: tm_coupon_url + '/front-end-ajax.php',
		dataType : "json",
		data: data,
        complete: function(){},
		success: function (response)
		{
			
			if(response.indexOf("@")>0)
			{
				var new_response = response.substring(response.indexOf("@")+1, response.length);
				$("#regisNewsletterMessage").html('<p class="alert alert-success">'+new_response+'</p>');
			}
			else
			$("#regisNewsletterMessage").html('<p class="alert alert-warning">'+response+'</p>');
		
			$("#coupon-text-before").hide();
			$("#coupon-text-after").show();
		},
		 error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); 
					
        }  
	});
}