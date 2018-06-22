$(document).ready(function () {

    // Campaign selector JS

    $('#selector').select(function (event) {
        document.location.href = $('#campaign-selector').find(':selected').val();
    });

});