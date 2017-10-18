$(function () {

    //Switches
    for (let b of $('.switch')) {
        let button = $(b);

        button.on('mousedown', function(){
            $('body').css('user-select', 'none');
        });

        button.on('mouseUp', function(){
            $('body').css('user-select', 'initial');
        });
    }

    //Sliders
    for(let s of $('.slider')) {
        let slider = $(s);

        //Handle touch devices
        slider.on('touchstart', '.slider-handle', function(e){
            let isDisabled = slider.siblings('input[type="range"]').is(':disabled');
            if(isDisabled) {
                return false;
            }

            $('body').css('user-select', 'none');

            let handlers = {
                touchMove: function(e) {
                    let sliderOffset = slider.offset().left;
                    let sliderNewWidth = e.originalEvent.touches[0].pageX - sliderOffset;

                    let newValue = sliderNewWidth * 100 / slider.width();

                    moveSlider(slider, newValue);

                },
                touchEnd: function(e) {
                    $('body').css('user-select', 'initial');
                    $(document).off(handlers);
                },
                touchCancel: function(e) {
                    $('body').css('user-select', 'initial');
                    $(document).off(handlers);
                }
            };

            $(document).on(handlers);
        });

        //Handle mouse
        slider.on('mousedown', '.slider-handle', function(e){
            if(e.button === 2) {
                return false;
            }

            let isDisabled = slider.siblings('input[type="range"]').is(':disabled');
            if(isDisabled) {
                return false;
            }

            $('body').css('user-select', 'none');

            let handlers = {
                mouseMove: function(e) {

                    let sliderOffset = slider.offset().left;
                    let sliderNewWidth = e.pageX - sliderOffset;

                    let newValue = sliderNewWidth * 100 / slider.width();

                    moveSlider(slider, newValue);

                },
                mouseUp: function(e) {
                    $('body').css('user-select', 'initial');
                    $(document).off(handlers);
                }
            };

            $(document).on(handlers);
        });
        slider.on('mousedown', function(e){

            if(e.button === 2) {
                return false;
            }

            let isDisabled = slider.siblings('input[type="range"]').is(':disabled');
            if(isDisabled) {
                return false;
            }

            let sliderOffset = slider.offset().left;
            let sliderNewWidth = e.pageX - sliderOffset;

            let newValue = 100 * sliderNewWidth / slider.width();
            moveSlider(slider, newValue);

        });

    }

});

function moveSlider(slider, value) {

    value = value < 0 ? 0 : value;
    value = value > 100 ? 100 : value;

    let handle = slider.children('.slider-handle');
    let fill = slider.children('.slider-fill');

    let handleOffset = value - handle.width() / 2;

    handle.css('left', handleOffset + '%');
    fill.css('width', value + '%');
}