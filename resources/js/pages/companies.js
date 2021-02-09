function clearModul () {
    var modal = $('#company-modal');
    var form = modal.find('form');
    var inputs = form.find('input');
    form.attr('action', window.location.pathname.replace('/app', ''));
    inputs.val('');
    modal.modal('hide');
}

function modalSubmit () {
    $(document).on('submit', '#companies-form', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var form = $(this);
        var url = window.location.origin + form.attr('action');
        var data = {};
        var inputs = form.find('input, select');
        inputs.each(function () {
            data[$(this).attr('name')] = $(this).val();
        });
        console.log(url)
        axios.post(url, data)
        .then((response) => {
            $('#companies-table tbody').append(response.data);
            clearModul();
        })
        .catch((error) => {
            // handle error

        })
        .then(() => {
            /* spinner.stop(); */
        });
    });
}

function populateModal () {
    $(document).on('click', '.edit-company', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var modal = $('#company-modal');
        var data = $(this).parents('tr').data('company');
        var form = modal.find('form');
        Object.keys(data).forEach(function(key) {
            var input = modal.find(`[name="${key}"]`);
            if (input.length) {
                input.val(data[key]);
            }
            if(key === 'id') {
                form.attr('action', form.attr('action') + '/' + data[key]);
            }
        });
        modal.modal('show');
    });
}

function handleCloseModal () {
    $(document).on('click', '#company-modal .close, #company-modal .button-close', function () {
        clearModul();
    })
}

function deleteCompany () {
    $(document).on('click', '#companies-table .delete-company', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var element = $(this);
        axios.delete(element.attr('href'))
            .then((response) => {
                element.parents('tr').remove()
            })
            .catch((error) => {
                // handle error

            })
            .then(() => {
                /* spinner.stop(); */
            });
    });
}


module.exports = {
    modalSubmit: modalSubmit,
    populateModal: populateModal,
    handleCloseModal: handleCloseModal,
    deleteCompany: deleteCompany
}
