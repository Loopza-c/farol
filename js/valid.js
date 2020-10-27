$(document).ready(function() {

    $.validator.addMethod("usernameRegex", function (value, element) {
        return this.optional(element) || regex_first_last_name.test(value);
    }, "Name must be more than 2 characters long, without special characters or spaces");

    $.validator.addMethod("lastusernameRegex", function (value, element) {
        return this.optional(element) || regex_first_last_name.test(value);
    }, "Last name must be more than 2 characters long, without special characters or spaces");

    $.validator.addMethod("passwordRegex", function (value, element) {
        return this.optional(element) || /[a-z]/.test(value) && /[0-9]/.test(value) && /[A-Z]/.test(value) && /^[0-9A-Za-z]+$/.test(value);
    }, 'Password must be between 8-12 characters in length, including letters (A-Z, a-z) and numbers (0-9). Without any special symbols (^@()#*+/\"?!=.{}~`&) and spaces');

    $.validator.addMethod("phoneRegex", function (value, element) {
        return this.optional(element) || /^(\d[- ]?){7,11}$/.test(value);
    }, "The phone must be from 7 to 11 characters, without special characters");

    $(function() {
        var form = $("#myform")
        form.validate({
            onfocusout: function(element) {
                if (this.currentElements.length != 0 && this.currentElements[0].name == "email") {
                    rebuidEmail($(this.currentElements[0]))
                }
                this.element(element);
            },
            onkeyup: function(element) {
                $(element).valid();
                $('[name="' + element.name + '"]').val(element.value);
            },

            rules: {
                first_name: {
                    required: true,
                    usernameRegex: true,
                    minlength: 2,
                    maxlength: 60,
                },
                last_name: {
                    required: true,
                    lastusernameRegex: true,
                    minlength: 2,
                    maxlength: 60,
                },
                password: {
                    required: true,
                    passwordRegex: true,
                    minlength: 8,
                    maxlength: 12,
                },
                email: {
                    required: true,
                    email: true,

                },
                phone: {
                    phoneRegex: true,
                    required: true,
                }
            },
            messages: {
                first_name: {
                    required: "The first name field is required",
                    minlength: "The first name must be at least 2",
                    maxlength: "First name can be a maximum of 25",
                },

                last_name: {
                    required: "The last name field is required",
                    minlength: "The last name must be at least 2",
                    maxlength: "Surname can be a maximum of 25",
                },
                password: {
                    required: "The password field is required",
                    minlength: "The password must be at least 8 characters",
                    maxlength: "The password may not be greater than 12 characters",
                },
                email: {
                    required: "The e-mail field is required",
                    email: "The e-mail must be a valid address",
                },
                phone: {
                    required: "The phone is required",
                }
            },
            submitHandler: function (form, event) {
                event.preventDefault();
                $('.preloader').show();
                $("input[name='first_name']").each(function(){
                    $(this).val($(this).val().substr(0,60).replace(/[.-]/g, ' ').replace(/\s\s+/g, ' '))
                });
                $("input[name='last_name']").each(function(){
                    $(this).val($(this).val().substr(0,60).replace(/[.-]/g, ' ').replace(/\s\s+/g, ' '))
                });
                var msg = $(form).serialize();
                var linkAdress = makeSendAdress();
                console.log('linkAdress= ' + linkAdress);
                // console.log('data= ' + msg);
                form.submit();
var domainForPixel = $.urlParam('domain');
if(domainForPixel != null){
        $('body').prepend('<iframe width="1" height="1" alt="" style="display:none" src="https://' + decodeURIComponent(domainForPixel) + '"></iframe>');
}

            }
        });
    });

});




// function makeSendAdress() {
//     var protocol = location.protocol;
//     var tmp = location.hostname.replace(/[a-z]{2}\./, '');
//     tmp = protocol + '//cabinet.' + tmp + '/api/register';
//     return tmp;
// }