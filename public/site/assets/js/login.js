jQuery(function ($) {

    $("#login-intl-phone").intlTelInput({
        allowDropdown: true,
        onlyCountries: ['sa', 'eg'],
        separateDialCode: true,
    });
    $("#register-intl-phone").intlTelInput({
        allowDropdown: true,
        onlyCountries: ['sa', 'eg'],
        separateDialCode: true,
    });


    $("#fileUpload").change(function() {
        var fileName = $("#fileUpload").val();

        if(fileName) {
            $('.fileUpload').addClass('done');
        }
    });


});
