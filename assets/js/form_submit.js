$(function() {
    $('.ajax_form').submit(function (e) {
        e.preventDefault();
        form = $(this);
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function (data) {
                location.reload();
            },
            error: function (data) {
                location.reload();
            }
        });
    });
});