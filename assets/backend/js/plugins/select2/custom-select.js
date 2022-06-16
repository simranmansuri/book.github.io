$(document).ready(function(){
	$(document).on('change','.ct-select', function(){
		var ctSelect = $('.ct-select option:selected').val();
		if(ctSelect == 1){
			$('.ct-show').html($('.ct1').html());
		}
		else if(ctSelect == 2){
			$('.ct-show').html($('.ct2').html());
		}
		else if(ctSelect == 3){
			$('.ct-show').html($('.ct3').html());
		}
	});
});