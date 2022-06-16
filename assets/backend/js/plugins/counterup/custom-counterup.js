 (function ($) {
	"use strict";
      jQuery(document).on('ready', function() {

              /*================================
              ============ Counterup =============
              =================================*/
                var counter = $('.counter');
                counter.counterUp({
                    delay: 30,
                    time: 10000
                }); 

      });

})(jQuery);      	