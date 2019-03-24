"use strict"
$(document).ready(function() { 
$('.phoneButton').click(function() {
    $('#overlay').show();
})
$('.popup__close').click(function() {
    $('#overlay').hide();
});
$(window).scroll(function() {
if($(this).scrollTop() != 0) {
$('.topButton').fadeIn();
} else {
$('.topButton').fadeOut();
}
});
$('.topButton').click(function() {
$('body,html').animate({scrollTop:0},700);
});
$('a[href*="#contact"]').click(function() {
	var h = $('#contact').offset();
	$('body,html').animate({scrollTop:h.top},700);
});	
$('a[href*="#about"]').click(function() {
	var h = $('#about').offset();
	$('body,html').animate({scrollTop:h.top},700);
});	
$('#logBut').click(function(e) {
	e.preventDefault();
	sendTelephone();	
});
$('#button1').click(function(e) {
	e.preventDefault();
	sendCupcakes();	
});
$('#button2').click(function(e) {
	e.preventDefault();
	sendCake();	
});
$('#button3').click(function(e) {
	e.preventDefault();
	sendMacaroon();	
});
$('#button4').click(function(e) {
	e.preventDefault();
	sendBlueberry();
});
function sendTelephone() {
	var data = $("#formMain").serialize();
	jQuery.ajax({
                    url: "send_email.php",
                    type: "POST",
                    dataType: "json",
                    data: data, 
                    success: function(data) {
					$('#messegeResult').html('<p>' + data.text + '</p>');
                },
                error: function(data) {
                $('#messegeResult').html('<p>Возникла ошибка. Попробуйте еще раз</p>');
                }
             });
}
function sendCupcakes() {
	var data = $("#cupcakes").serialize();
	jQuery.ajax({
                    url: "send_email.php",
                    type: "POST",
                    dataType: "json",
                    data: data, 
                    success: function(data) {
						$('#result1').html('<p>' + data.text1 + '</p>');
                },
                error: function(data) {
				$('#result1').html('<p>Возникла ошибка. Попробуйте еще раз</p>');
                }
             });
}
function sendCake() {
	var data = $("#cake").serialize();
	jQuery.ajax({
                    url: "send_email.php",
                    type: "POST",
                    dataType: "json",
                    data: data, 
                    success: function(data) {
						$('#result2').html('<p>' + data.text2 + '</p>');
                },
                error: function(data) {
				$('#result2').html('<p>Возникла ошибка. Попробуйте еще раз</p>');
                }
             });
}
function sendMacaroon() {
	var data = $("#macaroon").serialize();
	jQuery.ajax({
                    url: "send_email.php",
                    type: "POST",
                    dataType: "json",
                    data: data, 
                    success: function(data) {
                        $('#result3').html('<p>' + data.text3 + '</p>');
                },
                error: function(data) {
				$('#result3').html('<p>Возникла ошибка. Попробуйте еще раз</p>');
                }
             });
}
function sendBlueberry() {
	var data = $("#blueberry").serialize();
	jQuery.ajax({
                    url: "send_email.php",
                    type: "POST",
                    dataType: "json",
                    data: data, 
                    success: function(data) {
						$('#result4').html('<p>' + data.text4 + '</p>');
                },
                error: function(data) {
				$('#result4').html('<p>Возникла ошибка. Попробуйте еще раз</p>');
                }
             });
}
});