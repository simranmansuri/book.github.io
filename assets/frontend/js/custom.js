 $('.carousel').carousel({
            interval: '6000'
}); 




// nav design
 $(document).ready(function(){
     $(window).scroll(function () {
         if ($(this).scrollTop() > 50) {
             $('#back-to-top').fadeIn();
         } else {
             $('#back-to-top').fadeOut();
         }
     });
     // scroll body to 0px on click
     $('#back-to-top').click(function () {
         $('#back-to-top').tooltip('hide');
         $('body,html').animate({
             scrollTop: 0
         }, 900);
         return false;
     });

     $('#back-to-top').tooltip('show');

 });









    var swiper = new Swiper('.swiper-container', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
      /*  autoplay: 9500,*/
        autoplayDisableOnInteraction: false,
          slidesPerView: 2,
           breakpoints: {
    // when window width is <= 640px
    990: {
      slidesPerView: 1
    }
  }
});

//menu top fixed

$(window).scroll(function() { 
   $(".header-bottom").removeClass("menutop");
    var scroll = $(window).scrollTop();
    if (scroll > 151) {
    $(".header-bottom").addClass("menutop");
  }
});


//lightcase plugin
    jQuery(document).ready(function($) {
        $('a[data-rel^=lightcase]').lightcase();
    });







 //calender style

 $(function() {
     $('.calendar').pignoseCalendar();
 });







 //plugin bootstrap minus and plus
 //http://jsfiddle.net/laelitenetwork/puJ6G/
 $('.btn-number').click(function(e){
     e.preventDefault();

     fieldName = $(this).attr('data-field');
     type      = $(this).attr('data-type');
     var input = $("input[name='"+fieldName+"']");
     var currentVal = parseInt(input.val());
     if (!isNaN(currentVal)) {
         if(type == 'minus') {

             if(currentVal > input.attr('min')) {
                 input.val(currentVal - 1).change();
             }
             if(parseInt(input.val()) == input.attr('min')) {
                 $(this).attr('disabled', true);
             }

         } else if(type == 'plus') {

             if(currentVal < input.attr('max')) {
                 input.val(currentVal + 1).change();
             }
             if(parseInt(input.val()) == input.attr('max')) {
                 $(this).attr('disabled', true);
             }

         }
     } else {
         input.val(0);
     }
 });
 $('.input-number').focusin(function(){
     $(this).data('oldValue', $(this).val());
 });
 $('.input-number').change(function() {

     minValue =  parseInt($(this).attr('min'));
     maxValue =  parseInt($(this).attr('max'));
     valueCurrent = parseInt($(this).val());

     name = $(this).attr('name');
     if(valueCurrent >= minValue) {
         $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
     } else {
         alert('Sorry, the minimum value was reached');
         $(this).val($(this).data('oldValue'));
     }
     if(valueCurrent <= maxValue) {
         $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
     } else {
         alert('Sorry, the maximum value was reached');
         $(this).val($(this).data('oldValue'));
     }


 });
 $(".input-number").keydown(function (e) {
     // Allow: backspace, delete, tab, escape, enter and .
     if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
         // Allow: Ctrl+A
         (e.keyCode == 65 && e.ctrlKey === true) ||
         // Allow: home, end, left, right
         (e.keyCode >= 35 && e.keyCode <= 39)) {
         // let it happen, don't do anything
         return;
     }
     // Ensure that it is a number and stop the keypress
     if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
         e.preventDefault();
     }
 });


