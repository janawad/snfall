jQuery(document).ready(function () {
(function($) {
/*jshint
 debug: true,
 devel: true,
 browser: true,
 asi: true,
 unused: false
 */



/*
 * Initialize all the others
 */

$( '.js__datepicker' ).pickadate({

    // Work-around for some mobile browsers clipping off the picker.
    onOpen: function() { $('pre').css('overflow', 'hidden') },
    onClose: function() { $('pre').css('overflow', '') },
    monthsShort: [ 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec' ],
    showMonthsShort: true,
    format: 'yyyy-mm-dd',
    formatSubmit: 'yyyy/mm/dd',
    min: true
});
$( '.js__timepicker' ).pickatime()


})(jQuery);
});