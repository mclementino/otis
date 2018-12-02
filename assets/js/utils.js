$(document).ready(function() {
	
	$("#toggle").click(function() {
		$(this).toggleClass("active");
		$(".sidebar").toggleClass("sidebar-active");
	});
	
	function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
	}
	$('.panel-group').on('hidden.bs.collapse', toggleIcon);
	$('.panel-group').on('shown.bs.collapse', toggleIcon);
	
	$('#carousel-hall').owlCarousel({
		margin: 0,
		autoplay: false,
		nav: true,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			1440: {
				items: 2
			}
			
		}
		
	});
	
	$('#carousel-terreo').owlCarousel({
		margin: 0,
		autoplay: false,
		nav: true,
		responsive: {
			0: {
				items: 1
			},
			1500: {
				items: 1
			},
			1600: {
				items: 2
			}
			
		}
		
	});
	
});