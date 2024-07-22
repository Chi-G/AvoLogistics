(function ($) {
    "use strict"; // Start of use strict
    $("#contactForm").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError();
            submitMSG(false, "Did you fill in the form properly?");
        } else {
            // everything looks good!
            event.preventDefault();
            submitForm();
        }
    });

    function submitForm(){
        // Initiate Variables With Form Content
        var token = $("#contactForm[name=_token]").val();
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var subject = $("#subject").val();
        var message = $("#message").val();

        $.ajaxSetup({
                    headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                 });

        $.ajax({
            type: "POST",
            url: $("#contactForm").attr("action"),
            data: {
                name: name,
                email: email,
                phone: phone,
                subject: subject,
                message: message,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success : function(response){
                if (response.message){
                    formSuccess();
                } else {
                    formError();
                    submitMSG(false, response.errors);
                }
            }
        });
    }

    // function submitForm(){
    //     // Initiate Variables With Form Content
    //     var name = $("#name").val();
    //     // var token = $("#contactForm[name=_token]").val();
    //     var email = $("#email").val();
    //     var msg_subject = $("#subject").val();
    //     var phone_number = $("#phone").val();
    //     var message = $("#message").val();

    //     $.ajaxSetup({
    //         headers: {
    //            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //      });

    //     $.ajax({
    //         type: "POST",
    //         url: $("#contactForm").attr("action"),
    //         data: "name=" + name + "&email=" + email + "&msg_subject=" + msg_subject + "&phone_number=" + phone_number + "&message=" + message,
    //         success : function(statustxt){
    //             if (statustxt == "success"){
    //                 formSuccess();
    //             } else {
    //                 formError();
    //                 submitMSG(false,statustxt);
    //             }
    //         }
    //     });
    // }

    function formSuccess(){
        $("#contactForm")[0].reset();
        submitMSG(true, "Message Submitted!")
    }

    function formError(){
        $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass();
        });
    }

    function submitMSG(valid, msg){
        if(valid){
            var msgClasses = "h4 tada animated text-success";
        } else {
            var msgClasses = "h4 text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
}(jQuery)); // End of use strict