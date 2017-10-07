$('.switch.toggle-slider').click(function(){

    let checkbox = $(this).siblings('input[type="checkbox"]');
    let slider = $(this).parent().siblings('.form-group').eq(0).children('input[type="range"]');

    if(checkbox.is(':checked')) {
        slider.removeAttr('disabled');
    } else {
        slider.attr('disabled', 'disabled');
    }
});