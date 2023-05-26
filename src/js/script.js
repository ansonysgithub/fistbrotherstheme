jQuery(document).ready(function ($) {
    // Form submission
    $('.newsletter-form').on('submit', function (event) {
        event.preventDefault();
        var form = $(this);
        var formData = form.serialize();

        $.ajax({
            type: 'POST',
            url: ajax_register.ajax_url,
            data: formData,
            success: function (response) {
                if (response.success) {
                    // Display success message
                    $('.validations').append('<div class="alert alert-success" role="alert">' + response.data.message + '</div>');
                } else {
                    // Display error message
                    $('.validations').append('<div class="alert alert-danger" role="alert">' + response.data.message + '</div>');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                // Display error message
                $('.validations').append('<div class="alert alert-danger" role="alert">' + jqXHR.responseJSON.data.message + '</div>');

                // Error callback
                console.log('Response:', jqXHR);
                console.log('Response:', jqXHR.responseText);
                console.log('Status:', textStatus);
                console.log('Error:', errorThrown);
            }
        });
    });
});