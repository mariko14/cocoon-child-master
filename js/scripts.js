//フォーム

jQuery('form').submit(function() {
 
   document.getElementById('formWrapper').style.display = 'none';
   document.getElementById('success').style.display = 'block';
   $("html,body").animate({scrollTop:$('#success').offset().top});
 
});



//送信確認ボタン
jQuery("#submit-check").click(function(){
	if (this.checked) {
		jQuery("#submitBtn").addClass('on');
		jQuery("#submitBtn").removeClass('off');
		jQuery("#submitBtn").prop('disabled', false);
		
	} else {
		jQuery("#submitBtn").addClass('off');
		jQuery("#submitBtn").removeClass('on');
		jQuery("#submitBtn").prop('disabled', true);
	}
});

