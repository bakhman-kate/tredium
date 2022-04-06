(function($) {
    $(document).on('submit', '#add-comment', function (event) {
        event.preventDefault();
        let article_id = $('#article_id').val(),
            subject = $('#comment-subject').val(),
            body = $('#comment-body').val();
        $(this).css('pointer-events', 'none');

        $.ajax({
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            },
            url: '/api/comments/',
            data: {"article_id": article_id, "subject": subject, "body": body}
        })
        .done(function(result) {
            console.log(result);
        })
        .fail(function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus);
            $('#add-comment').css('pointer-events', 'auto');
        });

        return false;
    });
}) (jQuery);
