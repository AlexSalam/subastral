$(document).ready(function () {

    // Campaign selector JS

    $('#campaign-select').children('option').on("click", function (event) {
        document.location.href = $('#campaign-select').find(':selected').val();
    });

    // Confirm delete requests

    function deleteAlert() {

        if (confirm('Are you sure you wish to delete this?')) {
            $('#delete').submit();
        }

    }

    // Set datepicker form values on edit forms

    $('#beginning').datepicker("setDate", new Date($('#beginning').val()));

});