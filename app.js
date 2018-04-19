// All jQuery code should go inside $(document).ready(function() {    
$(document).ready(function() {

    $.each( $('*'), function() { 
        if( $(this).width() > $('body').width()) {
            console.log("Wide Element: ", $(this), "Width: ", $(this).width()); 
        } 
    });
    
    // HIDE/SHOW functionality of the notification message
    $('#hide-btn').click(function() {
        $('#toggle-notification').slideToggle();
        $('.show-hide').toggleClass('fa-chevron-up fa-chevron-down');
    });
    // HIDE/SHOW functionality of the notification message



});