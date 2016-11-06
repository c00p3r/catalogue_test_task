/*!
 * App script
 */
$(function () {
    var $row = $('.row-offcanvas');
    var $form = $('#filter-form');
    var url = $form.attr('action');

    $('.alert').on('closed.bs.alert', function () {
        if (!$.trim($('.container', '#flash-messages').html())) {
            $('#flash-messages').remove();
        }
    });

    // Toggle the sidebar with filters
    $('.toggle-sidebar').click(function () {
        $row.toggleClass('active');
    });

    // Filtering view with ajax
    $form.on('submit', function () {
        getFiltered(url, $form.serialize());
        $row.toggleClass('active');
        return false;
    });

    // Resetting view with ajax after form reset
    $('#reset-filter', $form).click(function () {
        var data = {_token: $form.find('[name=_token]').val()};
        getFiltered(url, data);
        $row.toggleClass('active');
    });

    // Pagination with ajax
    var processing = false;
    $(document).on('click', '.pagination a', function () {
        if (!processing) {
            var page = $(this).attr('href').split('page=')[1];

            processing = true;

            $.ajax({
                url: '?page=' + page
            }).success(function (response) {
                $('#content').html(response);
                location.hash = page;
                processing = false;
            }).fail(function () {
                flashError();
            });
        }
        return false;
    })
});

function getFiltered(url, request) {
    $.ajax({
        'method': 'post',
        'url': url,
        'data': request,
        beforeSend: function () {
            $('#content').empty();
            // Animation while waiting for server response
            $('#ajax-loader').removeClass('hidden');
        },
        complete: function () {
            $('#ajax-loader').addClass('hidden');
        }
    }).success(function (response) {
        $('#content').html(response);
    }).fail(function () {
        // Pretty alert in case of error
        flashError();
    })
}

function initSelect2($elem, data) {
    if ($.fn.select2) {
        $elem.select2({
            placeholder: '',
            width: '100%',
            data: data,
            theme: 'bootstrap',
            allowClear: true,
            minimumInputLength: 1
        });
    }
}

function flashError() {
    var notification =
        '<div id="flash-messages" class="bg-danger">' +
        '<div class="container">' +
        '<div class="alert alert-dismissible alert-danger">' +
        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
        '<span aria-hidden="true">&times;</span>' +
        '</button>' +
        'Request error' +
        '</div>' +
        '</div>' +
        '</div>';

    $('#navbar').after(notification);
}