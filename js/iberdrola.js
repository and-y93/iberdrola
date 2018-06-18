$(document).ready(function(){
    $("#img2").click(function(){
        $("#img2").transition('pulse');
    });

    $('#main-carousel').flickity({
		  // options
		  cellAlign: 'left',
		  contain: true,
		  wrapAround: true,
		  autoPlay: 3100,
		  // prevNextButtons: false,
		  pageDots: false
		});
});

		$('.ui.dropdown').dropdown();



	