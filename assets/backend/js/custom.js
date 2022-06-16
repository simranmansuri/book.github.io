 (function ($) {
  "use strict";
      $(document).on('ready', function() {

        $('[data-toggle="tooltip"]').tooltip();

       

      });

      $(window).on('scroll', function() {
            
              
      });

      $(window).on('load',function(){
        $('body .dropdown-toggle').dropdown(); 
      });

      // Slide nav toggle
      $(document).on('click', '.menu-toggle',function(){
            $('body').toggleClass("ls-toggle-menu");
      });

        // Dropdown show
        $('.leftsidebar-menu ul li .open').find('ul').show();
        // Dropdown Menu
      
        $(document).on('click','.leftsidebar-menu ul li a', function() {

          $(this).siblings('ul').slideToggle(500, "swing").parent('li').toggleClass('open');
        
        });






})(jQuery);

/*
====================
  Copy to Clipboard
====================
 */
function myFunction() {

  var copyText = document.getElementById("myInput");
  copyText.select();
  document.execCommand("Copy");
  
  var tooltip = document.getElementById("myTooltip");
  document.getElementById("myTooltip").innerHTML = "Copied: " + copyText.value;
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copy to clipboard";
}

//Textarea
function myFunction() {

  var copyText = document.getElementById("myInput1");
  copyText.select();
  document.execCommand("Copy");
  
  var tooltip = document.getElementById("myTooltip1");
  document.getElementById("myTooltip1").innerHTML = "Copied: " + copyText.value;
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip1");
  tooltip.innerHTML = "Copy to clipboard";
}


