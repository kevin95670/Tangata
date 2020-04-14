$(document).ready(function(){
	$('.entreprise-section div').on('click', function(){
		var divToDisplay = '.' + $(this).attr('id');

		$('.entreprise-section div p').removeClass('active');
		$(this).find('p').addClass('active');

		$('div.display').addClass('hide');
		$('div.display').removeClass('display');
		$(divToDisplay).removeClass('hide');
		$(divToDisplay).addClass('display');

	});

	$('.entreprise-events .events-to-come-title').on('click', function(){
		$('.entreprise-event-to-come').toggle();
		$(this).find('i').toggleClass('d-none');
	});

	$('.entreprise-events .events-passed-title').on('click', function(){
		$('.entreprise-event-passed').toggle();
		$(this).find('i').toggleClass('d-none');
	});
});