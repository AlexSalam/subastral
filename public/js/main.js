$(document).ready(function () {

    // Campaign selector JS

    $('#campaign-select').children('option').on("click", function (event) {
        document.location.href = $('#campaign-select').find(':selected').val();
    });

});