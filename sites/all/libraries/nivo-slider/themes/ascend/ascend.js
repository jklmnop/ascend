jQuery(function(){
    $clone = jQuery('.nivo-directionNav').clone(true);
    
    $clone
        .removeClass('nivo-directionNav')
        .addClass('nivo-directionNav-alt')
        .insertAfter('.nivoSlider');

});