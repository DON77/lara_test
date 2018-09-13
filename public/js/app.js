$(document).ready(function() {
    $('.select2').select2();
    $("#pill_form").validate({
        errorClass: 'is-invalid',
        rules: {
            name: "required",
            company: "required",
            description: "required",
            "category[]": "required",
        },
        messages: {
            name: "Please enter the pill name",
            "category[]": "Please select category",
            company: "Please select company",
            description: "Please type the description",
        }
    });
});