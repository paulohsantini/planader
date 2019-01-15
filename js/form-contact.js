// JavaScript Document

// contact form
$(document).ready(function() {
	$('form#contact-form').submit(function() {
	$('form#contact-form .error').remove();
	var hasError = false;
	$('.requiredField').each(function() {
	if(jQuery.trim($(this).val()) == '') {
    var labelText = $(this).prev('label').text();
    $(this).parent().append('<span class="error contact_msg_error">Preencha o campo '+labelText+'.</span>');
    $(this).addClass('inputError');
    hasError = true;
    } else if($(this).hasClass('email')) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if(!emailReg.test(jQuery.trim($(this).val()))) {
    var labelText = $(this).prev('label').text();
    $(this).parent().append('<span class="error contact_msg_error">Preencha o campo '+labelText+' corretamente.</span>');
    $(this).addClass('inputError');
    hasError = true;
    }
    } else if($(this).hasClass('captcha')) {
    var recCaptcha1 = $("#recebeCaptcha").val();
    var recCaptcha2 = $("#resultCaptcha").val();
    if(recCaptcha1 != recCaptcha2) {
    var labelText = $(this).prev('label').text();
    $(this).parent().append('<span class="error contact_msg_error">Resultado do Captcha incorreto.</span>');
    $(this).addClass('inputError');
    hasError = true;
    }
    }
    });
    if(!hasError) {
    $('form#contact-form input.submit').fadeOut('normal', function() {
    $(this).parent().append('');
    });
    var formInput = $(this).serialize();
    $.post($(this).attr('action'),formInput, function(data){
    $('form#contact-form').slideUp("fast", function() {
    $(this).before('<div class="success msg_success">O e-mail foi enviado.</div>');
    });
    });
    }
    return false;
    });
});