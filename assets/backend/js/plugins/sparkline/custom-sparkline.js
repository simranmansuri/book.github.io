



// /*  ===============================================================================
// =============================  Sparkline  Graph ===================================
// */
$(function (){
    "use strict"

    $(".sparkline").each(function () {
        var $this = $(this);
        $this.sparkline('html', $this.data());
    });

}(jQuery));

// /* ===============================================================================
// =================================  Sparkline html Start hover ====================
// */
$(window).scroll(function() {
    $('.card .sparkline').each(function(){
    var imagePos = $(this).offset().top;

    var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow+400) {
            $(this).addClass("pullUp");
        }
    });
});