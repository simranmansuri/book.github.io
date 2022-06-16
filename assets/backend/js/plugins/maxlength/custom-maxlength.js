//== Class definition

var BootstrapMaxlength = function () {
    
    //== Private functions
    var demos = function () {
        // minimum setup
        $('#maxlength_1').maxlength({
            threshold: 5,
            warningClass: "badge badge-success badge-rounded badge-wide",
            limitReachedClass: "badge badge-warning badge-rounded badge-wide"
        });


        // custom text
        $('#maxlength_4').maxlength({
            threshold: 3,
            warningClass: "badge badge-danger badge-rounded badge-wide",
            limitReachedClass: "badge badge-success badge-rounded badge-wide",
            separator: ' of ',
            preText: 'You have ',
            postText: ' chars remaining.',
            validate: true
        });
        // custom text
        $('#maxlength_5').maxlength({
            alwaysShow: true,
            threshold: 3,
            warningClass: "badge badge-danger badge-rounded badge-wide",
            limitReachedClass: "badge badge-success badge-rounded badge-wide",
            separator: ' of ',
            preText: 'You have ',
            postText: ' chars remaining.',
            validate: true
        });

    }

    return {
        // public functions
        init: function() {
            demos();  
        }
    };
}();

jQuery(document).ready(function() {    
    BootstrapMaxlength.init();
});