// All jQuery code should go inside $(document).ready(function() {    
$(document).ready(function() {

    // HIDE/SHOW functionality of the notification message
    $('#hide-btn').click(function() {
        $('#toggle-notification').slideToggle();
        $('.show-hide').toggleClass('fa-chevron-up fa-chevron-down');
    });
    // HIDE/SHOW functionality of the notification message
       // HIDE/SHOW functionality of the notification message
       $('#slide-btn').click(function() {
        $('#lineofbusiness').slideToggle();
        $('.show-hide').toggleClass('fa-chevron-up fa-chevron-down');
    });
    // HIDE/SHOW functionality of the notification message
});