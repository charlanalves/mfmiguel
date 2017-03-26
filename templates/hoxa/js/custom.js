(function($) {
 "use strict";
 	/* Redireciona para pagina de atuação quando clicar nos topicos na home page */
	 jQuery('.parallax_sec1_left .azp_iconbox a,.parallax_sec1_right .azp_iconbox a').click(function(){
	   window.location.assign('./index.php/areas-de-atuacao');
	});
	
 	/* Laptop Featured Works Slider */
 	$('.master_featured_works').each(function(){
 		var slide = $(this);

 		var feature_works = new MasterSlider();
		feature_works.setup(slide.attr('id') , {
			width:530,
			height:335,
			speed:20,
			preload:0,
			space:2,
			view:'mask'
		});
		feature_works.control('arrows');	
		feature_works.control('bullets',{autohide:false});

 	});

 	$('.master_team_slider').each(function(){
 		var slide = $(this);
 		var team_slider = new MasterSlider();
		team_slider.setup(slide.attr('id') , {
			loop:true,
			width:240,
			height:240,
			speed:20,
			view:'focus',
			preload:0,
			space:35,
			viewOptions:{centerSpace:1.6}
		});
		team_slider.control('arrows');
		team_slider.control('slideinfo',{insertTo:'#'+slide.attr('id')+'staff-info'});

 	});

 	$('.azp_cir_skill .loader').each(function(){
 		var cir_skill = $(this);
 		cir_skill.ClassyLoader({
			percentage: parseInt(cir_skill.data('val')),
			speed: 30,
			fontSize: '50px',
			diameter: 90,
			lineColor: cir_skill.data('cl'),
			remainingLineColor: 'rgba(200,200,200,0.4)',
			lineWidth: 9,
			width: 227,
            height: 227,
		});
 	});

	jQuery(document).ready(function() {
		jQuery('.jcarousel').jcarousel();
	});

	
})(jQuery);
jQuery(document).ready(function($){
    $(".close-but").click(function(){
      $(this).closest(".style-box").fadeOut("slow");
    });

});