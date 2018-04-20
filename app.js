// All jQuery code should go inside $(document).ready(function() {    
$(document).ready(function () {

    // HIDE/SHOW functionality of the notification message
    $('#hide-btn').click(function () {
        $('#toggle-notification').slideToggle();
        $('.show-hide').toggleClass('fa-chevron-up fa-chevron-down');
    });
    // HIDE/SHOW functionality of the notification message

    // logo upload
    var fileName = $('input[type=file]').val().split('\\').pop();
    
       
    // logo upload

    // Line of business option selection
    $('#on').click(function () {
        $('#Group1').fadeOut();
        $('#OffExchange').fadeOut();
        $('#OnExchange').fadeIn();
    });

    $('#off').click(function () {
        $('#OnExchange').fadeOut();
        $('#Group1').fadeOut();
        $('#OffExchange').fadeIn();
    });

    $('#group').click(function () {
        $('#OnExchange').fadeOut();
        $('#OffExchange').fadeOut();
        $('#Group1').fadeIn();
        
    });
    // Line of business option selection

    // select states
    $('.selected-states').click(function() {
        $(this).toggleClass('btn-info');
    });
    // select states

    // clear states
    $('#clear-states-btn').click(function() {       
        $('.selected-states').addClass('btn-info');
    });
    // clear states

    // select business type
    $('.selected-business').click(function() {
        $('.selected-business').last().addClass('btn-info');
        $(this).toggleClass('btn-info');
    });
    // select business type

    // clear business
    $('.clear-business-btn').click(function() {        
        $('.selected-business').addClass('btn-info');
    });
    // clear business
    


    //Line of business toggle

    //Business Details Button Toggle//


    $("button[id*=onexchange], button[id*=offexchange], input[id*=input-code-individual-onexchange], input[id*=input-code-individual-offexchange], input[id*=input-code-group]").hide();




    $("button[id*=business-individual]").click(function () {

        $("button[id*=onexchange], button[id*=offexchange]").toggle();

    });



    $("button[id*=business-individual]").click(function () {

        $("input[id*=input-code-individual-onexchange], input[id*=input-code-individual-offexchange]").hide();

    });



    $("button[id*=onexchange]").click(function () {

        $("input[id*=input-code-individual-onexchange]").toggle();

    });



    $("button[id*=offexchange]").click(function () {

        $("input[id*=input-code-individual-offexchange]").toggle();

    });


    $("button[id*=business-group]").click(function () {

        $("input[id*=input-code-group]").toggle();

    });

});



    