
$(function() {
       // init slider
        var slider = document.getElementById('slider-formatdd');

        noUiSlider.create(slider, {
            start: [ 0 ],
            step: 2,
            range: {
                'min': [ 0 ],
                'max': [ 10 ]
            },
            format: wNumb({
                decimals: 0 
            })
        });

        // init slider input
        var sliderInput = document.getElementById('input-formatd');

        slider.noUiSlider.on('update', function( values, handle ) {
            sliderInput.value = values[handle];
        });

        sliderInput.addEventListener('change', function(){
            slider.noUiSlider.set(this.value);
        });
    
});



$(function() {
           // init slider
        var slider = document.getElementById('slider-format');

        noUiSlider.create(slider, {
            start: [ 20000 ],
            connect: [true, false],
            step: 1000,
            range: {
                'min': [ 20000 ],
                'max': [ 80000 ]
            },
            format: wNumb({
                decimals: 3,
                thousand: '.',
                postfix: ' (US $)',
            })
        });

        // init slider input
        var sliderInput = document.getElementById('input-format');

        slider.noUiSlider.on('update', function( values, handle ) {
            sliderInput.value = values[handle];
        });

        sliderInput.addEventListener('change', function(){
            slider.noUiSlider.set(this.value);
        });
    
});


$(function() {


    // init slider
        var slider = document.getElementById('slider-format1');        

        noUiSlider.create(slider, {
            start: [20, 80],
            connect: true,
            direction: 'rtl',
            tooltips: [true, wNumb({ decimals: 1 })],
            range: {
                'min': [0],
                '10%': [10, 10],
                '50%': [80, 50],
                '80%': 150,
                'max': 200
            }
        });
       

        // init slider input
        var sliderInput0 = document.getElementById('input-format1');
        var sliderInput1 = document.getElementById('input-format1.1');
        var sliderInputs = [sliderInput1, sliderInput0];        

        slider.noUiSlider.on('update', function( values, handle ) {
            sliderInputs[handle].value = values[handle];
        });
    
});

$(function() {

// init slider
        var slider = document.getElementById('slider-format2');        

        noUiSlider.create(slider, {
            start: 20,
            range: {
                min: 0,
                max: 100
            },
            pips: {
                mode: 'values',
                values: [20, 80],
                density: 4
            }
        });

        var sliderInput = document.getElementById('input-format2');

        slider.noUiSlider.on('update', function( values, handle ) {
            sliderInput.value = values[handle];
        });

        sliderInput.addEventListener('change', function(){
            slider.noUiSlider.set(this.value);
        });

        slider.noUiSlider.on('change', function ( values, handle ) {
            if ( values[handle] < 20 ) {
                slider.noUiSlider.set(20);
            } else if ( values[handle] > 80 ) {
                slider.noUiSlider.set(80);
            }
        });

});