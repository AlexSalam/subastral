$(document).ready(function () {

    // Campaign selector JS

    $('#campaign-select').on("change", function (event) {
        document.location.href = $('#campaign-select').find(':selected').val();
    });

});