(function ($) {
  Drupal.behaviors.title_images = {
    attach: function (context, settings) {
      var $title_wrap = $('[data-image]'),
      	  image = $title_wrap.data('image');

      $title_wrap.css({
      	'background-image': 'url("'+image+'")',
      	'background-size': 'cover',
      	'background-position': 'center center',
      	'height': '200px',
      	'position': 'relative',
      	'margin-bottom': '.5em'
      });

      $title_wrap.find('h1').css({
      	'position': 'absolute',
      	'bottom': '0',
      	'left': '0',
      	'margin': '0',
      	'padding': '.25em',
      	'color': '#fdfdfd',
      	'width': 'auto',
      	'background-color': 'rgba(2,128,175,.5)',
      	'font-size': '3em'
      });
  }

  };
})(jQuery);