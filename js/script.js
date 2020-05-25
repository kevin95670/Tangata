
$(document).ready(function()
{

  var win = $(window);
  var winWidth = win.width();
  var winHeight = win.height();
  var $lazy = $('.lazy');

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

	if( $lazy.length )
	{
    var showOnScroll = function()
    {
      $lazy.each(function(index, value)
      {
        var $value = $(value);
        if( win.scrollTop() + winHeight > $value.offset().top )
        {
          $value.removeClass('lazy');
          $lazy = $('.lazy');
          // charger aussi les img, qui auront un attribute data-src au lieux de src
          $value.find('[data-src]').each(function(i, v){
            var $v = $(v);
            $v.attr('src', $v.attr('data-src'));
          });

        }
        else
        {
          return false;
        }
      });

    }
    if(win.scrollTop() > 0)
    {
      showOnScroll();
    }

    win.on('scroll', function()
    {
      showOnScroll();
    });

    showOnScroll();

  }

});