$(function () {

    $("#orderForm input,#orderForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function ($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function ($form, event) {
            // Prevent spam click and default submit behaviour
            $("#btnSubmit").attr("disabled", true);
            event.preventDefault();

            console.log( $("input#order_cms").is(':checked') );
            // get values from FORM
            var name = $("input#order_name").val();
            var www = $("input#order_www").val();
            var email = $("input#order_email").val();
            var template = $("input#order_template").val();
            var message = $("textarea#order_message").val();
            var domain = $("input#order_domain").is(':checked');
            var cms = $("input#order_cms").is(':checked');
            var hosting = $("input#order_hosting").is(':checked');

            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "/mail/order.php",
                type: "POST",
                data: {
                    name: name,
                    www: www,
                    email: email,
                    message: message,
                    template: template,
                    domain: domain,
                    cms: cms,
                    hosting: hosting
                },
                cache: false,
                success: function () {
                    // Enable button & show success message

                    _this = $("#orderForm");


                    $("#btnSubmit").attr("disabled", false);
                    $('.success', _this).html("<div class='alert alert-success'>");
                    $('.success > .alert-success', _this).html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                    $('.success > .alert-success', _this)
                            .append("<strong>Wiadomość została wysłana. </strong>");
                    $('.success > .alert-success', _this)
                            .append('</div>');

                    //clear all fields
                    $('#orderForm').trigger("reset");
                },
                error: function () {
                    // Fail message
                    $('.success').html("<div class='alert alert-danger'>");
                    $('.success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                    $('.success > .alert-danger').append("<strong>Wystąpił błąd! Proszę spróbować poźniej.");
                    $('.success > .alert-danger').append('</div>');
                    //clear all fields
                    $('.orderForm').trigger("reset");
                },
            })
        },
        filter: function () {
            return $(this).is(":visible");
        },
    });

});