/*!
 * App script
 */
$(function () {
    var $row = $('.row-offcanvas');
    var $form = $('#filter-form');

    // Removing flash messages wrappers if all messages are closed
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
        getFiltered($form.serialize());
        $row.toggleClass('active');
        return false;
    });

    // Resetting view with ajax after form reset
    $('#reset-filter', $form).click(function () {
        var data = {_token: $form.find('[name=_token]').val()};
        getFiltered(data);
        $row.toggleClass('active');
    });

    // Pagination with ajax
    var processing = false;
    $(document).on('click', '.pagination a', function () {
        if (!processing) {
            var page = $(this).attr('href').split('page=')[1];

            // variable needed to restrict multiple requests
            processing = true;

            $.ajax({
                data: $form.serialize() + '&page=' + page
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

function getFiltered(request) {
    $.ajax({
        'method': 'post',
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
/*!
 * IE10 viewport hack for Surface/desktop Windows 8 bug
 * Copyright 2014-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */

// See the Getting Started docs for more information:
// http://getbootstrap.com/getting-started/#support-ie10-width

(function () {
    'use strict';

    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var msViewportStyle = document.createElement('style');
        msViewportStyle.appendChild(
            document.createTextNode(
                '@-ms-viewport{width:auto!important}'
            )
        );
        document.querySelector('head').appendChild(msViewportStyle)
    }
})();
//# sourceMappingURL=all.js.map
