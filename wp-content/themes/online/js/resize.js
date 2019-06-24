function sizeWindow(){
	var widthW =  $(window).width();
	var desktop = 1024;
	var tablet = 992;
	var movil = 991;
	var movil_min = 468;
	
	if(widthW > desktop){
		//divs
		$('#mobile').hide();
		$('#tablet').hide();
		$('#desktop').show();
		$('#div-social').show();

		//header
		$('#indentificador-header').removeClass();
		$('#indentificador-header').addClass('container-fluid');
		$("#indentificador-header").css("padding", "0px 5%");
		$(".navbar").css('height', '70px');

		//parallax
		$('#parallax-tab').removeAttr('style');

		//grados
		$(".flex").removeClass('flex-column-reverse');

		//footer
		$(".dates-footer").removeClass('flex-column-reverse');
		$("#img-footer-xl").show();
		$("#img-footer").hide();

	}
	else if(widthW >= tablet && widthW <= desktop){
		//divs
		$('#mobile').hide();
		$('#tablet').show();
		$('#desktop').hide();
		$('#div-social').hide();

		//header
		$('#indentificador-header').removeClass();
		$('#indentificador-header').addClass('container');
		$("#indentificador-header").removeAttr('style');
		$('#tablet').css('margin-top','0px');
		$(".navbar").css('height', '100px');

		//parallax
		$('#parallax-tab').css('padding-top', '15% 8%');

		//grados
		$(".flex").removeClass('flex-column-reverse');

		//footer
		$(".dates-footer").removeClass('flex-column-reverse');
		$("#img-footer-xl").show();
		$("#img-footer").hide();
	}
	else if(widthW <= movil){
		//divs
		$('#mobile').show();
		$('#tablet').hide();
		$('#desktop').hide();
		$('#div-social').hide();

		//header
		$('#indentificador-header').removeClass();
		$('#indentificador-header').addClass('container-fluid');
		$("#indentificador-header").removeAttr('style');

		//grados
		$(".flex").addClass('flex-column-reverse');

		//footer
		if (widthW < movil_min) {
			$(".dates-footer").addClass('flex-column-reverse');
			$("#img-footer-xl").hide();
			$("#img-footer").show();
		}
		else{
			$(".dates-footer").removeClass('flex-column-reverse');
			$("#img-footer").hide();
			$("#img-footer-xl").show();
		}	
	}
}

$(document).ready(function() {
	sizeWindow()
});	

$(window).resize(function() {
	sizeWindow()
});