$(document).ready(function() {
   $("input[name='demo2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                maxboostedstep: 10000000,
                prefix: '$'
   }); 

   //input default demo
   $("input[name='demo3_21']").TouchSpin({
                initval: 40
    });

   $("input[name='demo3']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%'
  }); 
   // input vertical button
   $("input[name='demo4']").TouchSpin({
      verticalbuttons: true,
      verticalupclass: 'fas fa-plus',
      verticaldownclass: 'fas fa-minus'
    });
});