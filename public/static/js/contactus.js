/**
 * Created by yuhaoliu on 12/11/2016.
 */
$(document).ready(function () {

    $('.quick-enquiry-btn').click(function () {
        if ($('#enquiry_window').is(":visible")){
        }else{
            showEnquiryWindow($(this).val());
        }
    });

    $("#enquiry_form .selectpicker").change(function () {
        $("#enquiry_form").valid();
    });

    $("#enquiry_form").validate({
        rules: {
            name: {
                required: true,
            },
            phone: {
                required: true,
                number:true
            },
            email: {
                required: true,
                email:true
            },
            "types[]":{
                required: true,
                needsSelection:true,
            },
            comment:{
                required:true,
            }
        },
        messages: {
            name: {
                required: "Please enter name",
            },
            phone: {
                required: "Please enter phone",
                number: "Please enter correct phone"
            },
            email: {
                required: "Please enter email",
                email:"Your email address must be in the format of name@domain.com"
            },
            "types[]":{
                required: "Please at least select one type",
            },
            comment:{
                required: "Please leave some message",
            }
        },
        submitHandler: function(form) {
//                console.log($(form).serialize());
            $.ajax({
                url:"/enquiry-form",
                type:"post",
                data:$(form).serialize(),
                success: function(data,status){
                       alert("Success!");
                    $('#enquiry_window').slideUp(100);
                },
                error: function () {
//                    OnError(cartObject.productID)
                },
                complete: function () {
                    // Handle the complete event
//                    alert("ajax completed " + cartObject.productID);
                }
            });
            return false;
        }
    });

    $.validator.addMethod("needsSelection", function (value, element) {
        var count = $(element).find('option:selected').length;
        return count > 0;
    })
});

function showEnquiryWindow(entry) {
    $('#enquiry_window').find("#entry_from").val(entry==null?"common":entry);

    if (!$('#enquiry_window').is(":visible")){
        $('#enquiry_window').fadeIn();
    }
}

function hideEnquiryWindow(){
    $('#enquiry_window').slideUp(200);
}
