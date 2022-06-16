/*
	Date and Time
 */
$(document).ready(function(){
	$('#datetimepicker1').datetimepicker({
		
	});
});
/*
	Time
 */
$(document).ready(function(){
	$('#datetimepicker2').datetimepicker({
		format: 'LT'
	});
});

/*
	Date
 */
$(document).ready(function(){
	$('#datetimepicker3').datetimepicker({
		format: 'L'
	});
});

/*
	Enable/Disable Date
 */
$(document).ready(function(){
	 $('#datetimepicker6').datetimepicker({
                    defaultDate: "11/1/2013",
                    disabledDates: [
                        moment("12/25/2013" , "MM-DD-YYYY"),
                        new Date(2013, 11 - 1, 21),
                        "11/22/2013 00:53"
                    ]
                //      icons: {
                //     time: "fa fa-clock-o",
                //     date: "fa fa-calendar",
                //     up: "fa fa-arrow-up",
                //     down: "fa fa-arrow-down"
                // }
      });
});

/*
	Inline Date
 */
$(document).ready(function(){
	  $('#datetimepicker13').datetimepicker({
                inline: true,
                sideBySide: true
            });
});

/*
	MOdal Date and Time
 */
$(document).ready(function(){
	$('#datetimepicker8').datetimepicker({
		
	});
});
/*
	Modal Time
 */
$(document).ready(function(){
	$('#datetimepicker9').datetimepicker({
		format: 'LT'
	});
});

/*
	Date
 */
$(document).ready(function(){
	$('#datetimepicker10').datetimepicker({
		format: 'L'
	});
});

/*
	Enable/Disable Date
 */
$(document).ready(function(){
	 $('#datetimepicker11').datetimepicker({
                    defaultDate: "11/1/2013",
                    disabledDates: [
                        moment("12/25/2013" , "MM-DD-YYYY"),
                        new Date(2013, 11 - 1, 21),
                        "11/22/2013 00:53"
                    ]
                //      icons: {
                //     time: "fa fa-clock-o",
                //     date: "fa fa-calendar",
                //     up: "fa fa-arrow-up",
                //     down: "fa fa-arrow-down"
                // }
      });
});

/*
	Inline Date
 */
$(document).ready(function(){
	  $('#datetimepicker12').datetimepicker({
                inline: true,
                sideBySide: true
            });
});
