function getPage() {
    $(document).on('click', '.get-page', (e) => {
        e.preventDefault();
        e.stopPropagation();
        var element = $(e.target);
        console.log(element)
        if (element.attr('href').length) {
            axios.get(`${element.attr('href')}`).then((response) => {
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
    getPage: getPage,
    browserNavigation: browserNavigation
}
