function loadHome () {
    $(window).on('load', function () {
        if (!$('main *').length) {
            if(window.location.pathname.indexOf('/app') !== -1) {
                var href = window.location.pathname.replace('/app', '');
                if ($(`a[href="${href}"]`).length) {
                    return $(`a[href="${href}"]`).trigger('click');
                }
                axios.get(href)
                .then((response) => {
                    $('main').empty().html(response.data);
                })
                .catch((error) => {
                    // handle error
                    $($('nav a')[0]).trigger('click');
                })
                .then(() => {
                    /* spinner.stop(); */
                });
            }
        }
    });
}

function getPage() {
    $(document).on('click', '.get-page', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var element = $(this);
        if (element.attr('href').length) {
            axios.get(`${element.attr('href')}`)
            .then((response) => {
                $('.get-page').removeClass('active');
                element.addClass('active');
                $('main').empty().html(response.data);
                window.history.pushState( {} , '', `/app${element.attr('href')}` );
            })
            .catch((error) => {
                // handle error

            })
            .then(() => {
                /* spinner.stop(); */
            });
        }
    })
}

function browserNavigation () {
    window.onpopstate = () => {
        $(`[href="${window.location.pathname.replace('/app', '')}"]`).trigger('click');
    }
}

module.exports = {
    loadHome: loadHome,
    getPage: getPage,
    browserNavigation: browserNavigation
}
