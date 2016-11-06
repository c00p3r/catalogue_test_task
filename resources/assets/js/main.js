/*!
 * App script
 */
function getFiltered(url, request) {
    $.ajax({
        'method': 'post',
        'url': url,
        'data': request,
        beforeSend: function () {
            $('#content').empty();
            $('#ajax-loader').removeClass('hidden');
        },
        complete: function () {
            $('#ajax-loader').addClass('hidden');
        }
    }).success(function (response) {
        $('#content').html(response);
    }).fail(function () {
        var notification =
            '<div class="bg-danger">' +
            '<div class="container">' +
            '<div class="alert alert-dismissible">' +
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
            'Request error' +
            '</div>' +
            '</div>' +
            '</div>';

        $('#navbar').after(notification);
    })
}
$(function () {
    var $row = $('.row-offcanvas');
    var $form = $('#filter-form');
    var url = $form.attr('action');

    $('.toggle-sidebar').click(function () {
        $row.toggleClass('active');
    });

    $form.on('submit', function () {
        getFiltered(url, $form.serialize());
        $row.toggleClass('active');
        return false;
    });

    $('#reset-filter', $form).click(function () {
        var data = {_token: $form.find('[name=_token]').val()};
        getFiltered(url, data);
        $row.toggleClass('active');
    });
});