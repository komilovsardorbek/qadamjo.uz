$('#contact-form').on('afterValidate', function (event, messages, errorAttributes) {
    let data = $('#contact-form').data('yiiActiveForm');
    if (data.submitting && errorAttributes.length == 0) {
        form = $("#contact-form");
        console.log(form.serializeArray());
        event.preventDefault();
        var url = form.attr('action');
        $.ajax({
            url: url,
            type: 'post',
            dataType: 'json',
            data: form.serializeArray(),
        })
            .done(function(response) {
                if (response.data.success == true) {
                    alert("Wow you commented");
                }
            })
            .fail(function() {
            });
    }
});