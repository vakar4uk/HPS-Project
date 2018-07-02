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
                $('#user-logo').addClass("animated fadeIn");
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#logo-input").change(function () {
        readURL(this);
    });

    // logo upload

    // Line of business option selection
    $('#on-exchange').click(function () {
        $(this).toggleClass('btn-info');
        $('#off-exchange').removeClass('btn-info');
        $('#group-exchange').removeClass('btn-info');
        $('.selected-business').removeClass('btn-info');
        $('.selected-states').removeClass('btn-info');
        // $('#Group1').fadeOut();
        // $('#OffExchange').fadeOut();
        // $('#OnExchange').fadeIn();
      

    });

    $('#off-exchange').click(function () {
        $(this).toggleClass('btn-info');
        $('#on-exchange').removeClass('btn-info');
        $('#group-exchange').removeClass('btn-info');
        $('.selected-business').removeClass('btn-info');
        $('.selected-states').removeClass('btn-info');
        // $('#OnExchange').fadeOut();
        // $('#Group1').fadeOut();
        // $('#OffExchange').fadeIn();
    });

    $('#group-exchange').click(function () {
        $(this).toggleClass('btn-info');
        $('#off-exchange').removeClass('btn-info');
        $('#on-exchange').removeClass('btn-info');
        $('.selected-business').removeClass('btn-info');
        $('.selected-states').removeClass('btn-info');
        // $('#OnExchange').fadeOut();
        // $('#OffExchange').fadeOut();
        // $('#Group1').fadeIn();

    });

    // clear business
    $('#clear-business-btn').click(function () {
        $('.selected-business').removeClass('btn-info');
    });
    // clear business

    // Line of business option selection
    // Clear on new selection
    $('.selected-business').click(function () {
        $('.selected-business').removeClass('btn-info');
        
        // $('#Group1').fadeOut();
        // $('#OffExchange').fadeOut();
        // $('#OnExchange').fadeIn();
      

    });
    // select states
    $('.selected-states').click(function () {
        $(this).toggleClass('btn-info');
    });
    // select states

    // clear states
    $('#clear-states-btn').click(function () {
        $('.selected-states').removeClass('btn-info');
    });
    // clear states

      // copy states
      $('#copy-states-btn').click(function () {
        $('.selected-states').removeClass('btn-info');
    });
    // copy states

    // select all states
    $('#select-allstates-btn').click(function () {
        $('.selected-states').addClass('btn-info');
    });
    // select all states

    // select business type
    $('.selected-business').click(function () {
        $(this).toggleClass('btn-info');
    });
    // select business type

    // clear business
    $('.clear-business-btn').click(function () {
        $('.selected-business').removeClass('btn-info');
      
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

    // Legal Entities Table jquery code
        // $("span").click(function(){
        $(".legal-entities-table").find("span").click(function(){
            //find the number of spans in the <tr>
            var count = $(this).siblings().length;
            // checks if there are enough states in the td. Also prevents a row with no states
            if(count > 0){
                var state = $(this).text().substring(0,2);
                //find the prev comma and get rid of it if the state is the last state
                if($(this).hasClass('last')){
                    $(this).prev("span").addClass("last");
                    // finds the previous span and stores the text
                    var prev = $(this).prev("span").text();
                    // then replace the text of the previous using js 
                    $(this).prev("span").text(prev.replace(',', ''));
                }
                // get index of the table row $(this).parent() -> <td> -> .parent() -> <tr>
                var index = ($(this).parent().parent().index())-1;
                // get the business type using index| .BT is an array of business types
                var business_type = $(".BT").eq(index).text();
                // same concept as BT but for line of business column
                var lob = $(".LOB").eq(index).text();
                $(this).remove();
                // Actually add the row. index+1 because we need to skip the <tr> containing the <th> tags
                $(".legal-entities-table tr:eq("+(index+1)+")").after("<tr><td class='BT'>"+business_type+"</td><td class='LOB'>"+lob+"</td><td><span>"+state+"</span></td><td><select><option value='Legal Entity 1'>Legal Entity 1</option><option value='Legal Entity 2'>Legal Entity 2</option><option value='Legal Entity 3'>Legal Entity 3</option></select></td></tr>");
            }
        });
        
    
});

/*Business Details: Clear Carrier Code*/

$("button[id*=clear-carriercode").click(function() {
    $("button[id*=individual-onexchange], button[id*=individual-offexchange], button[id*=group]").val([]);
});

// Legal Entity From Validation
// $('#legalentity-submit-btn').click(function () {
//     if ($('input[required]').val() == 0 || $('select[required]').val() == 0) {
//         $('input[required]').addClass('highlight');
//         $('select[required]').addClass('highlight');
//         // $('input[required]').focus();        
//     }
// });

$(function () {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='entity-address']").validate({
        // Specify validation rules
        rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            carriername: "required",
            "address-type": {
                required: true
            },
            addressLine1: "required",
            city: "required",
            state: "required",
            zipcode: {
                required: true,
                minlength: 5,
                maxlength: 5
            },
            "phone-type": {
                required: true
            },
            phone: {
                required: true,
                minlength: 10,
                maxlength: 10
            },
            email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                email: true
            },
            "account-number": "required",
            "bank-num-code": "required",
            "batch-code-number": "required",
            "site-code": "required",
            "batch-description": "required",
            "additional-batch-info": "required",
            "batch-group-code": "required",
            "bank-name": "required",
            "merchant-id": "required",
            "security-key": "required",
            "security-expiration-date": "required"



        },
        // Specify validation error messages
        messages: {
            carriername: "Please enter name and code of legal entity",
            "address-type": "Please select an address type",
            addressLine1: "Please enter your address",
            city: "Please enter a city",
            state: "Please select state",
            zipcode: {
                required: "Please enter zipcode",
                minlength: "Please provide valid zipcode",
                maxlength: "Please provide valid zipcode"
            },
            "phone-type": "Please select phone type",
            phone: "Please enter a 10-digit phone number",
            email: "Please enter a valid email address",
            "account-number": "Please enter account number",
            "bank-num-code": "Please enter bank num code",
            "batch-code-number": "Please enter batch code number",
            "site-code": "Please enter site code",
            "batch-description": "Please provide batch description",
            "additional-batch-info": "Please provide additional batch info",
            "batch-group-code": "Please enter batch group code",
            "bank-name": "Please enter bank name",
            "merchant-id": "Please enter Merchant ID",
            "security-key": "Please enter security key",
            "security-expiration-date": "Please provide security expiration date"
        },

        errorClass:'highlight'
    });
});




