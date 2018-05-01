// All jQuery code should go inside $(document).ready(function() {    
$(document).ready(function () {

    // HIDE/SHOW functionality of the notification message
    $('#hide-btn').click(function () {
        $('#toggle-notification').slideToggle();
        $('.show-hide').toggleClass('fa-chevron-up fa-chevron-down');
    });
    // HIDE/SHOW functionality of the notification message

    // logo upload    

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('#user-logo').attr('src', e.target.result);
                $('#user-logo-preview').attr('src', e.target.result);
                $('#user-logo').css("display", "block");
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#logo-input").change(function(){
        readURL(this);
    });    
       
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



/*Business Details: Buttons Toggle*/

    
    $("#onexchange-code, #offexchange-code, #group-code").hide();
    
    
        $("#individual-onexchange").click(function () {
            $("#onexchange-code").toggle();
            $(this).toggleClass("colortoggle");
        });
        
        $("#individual-offexchange").click(function () {
            $("#offexchange-code").toggle();
            $(this).toggleClass("colortoggle");
           
        });

        $("#group").click(function () {
            $("#group-code").toggle();
            $(this).toggleClass("colortoggle");
        });

    
        
    
});


/*Business Details: Carrier Code*/

function GetValue()
{
    var myarray= new Array(":X7",":A1",":B2",":C4",":Y6",":Q9");
    var random = myarray[Math.floor(Math.random() * myarray.length)];
    document.getElementById("onexchange-code").innerHTML=random;
}
    
function GetValue1()
{
    var myarray= new Array(":X7",":A1",":B2",":C4",":Y6",":Q9");
    var random = myarray[Math.floor(Math.random() * myarray.length)];
    document.getElementById("offexchange-code").innerHTML=random;
}

function GetValue2()
{
    var myarray= new Array(":X7",":A1",":B2",":C4",":Y6",":Q9");
    var random = myarray[Math.floor(Math.random() * myarray.length)];
    document.getElementById("group-code").innerHTML=random;
}
    
/*Business Details: Clear Carrier Code*/

$("button[id*=clear-carriercode").click(function() {
    $("button[id*=individual-onexchange], button[id*=individual-offexchange], button[id*=group]").val([]);
});