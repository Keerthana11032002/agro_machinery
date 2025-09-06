$(document).on('keyup', '#contact_number', function() {
    $('button[type="submit"]').prop('disabled', false);
    $('.contact-number-error').text('');
    var number = $("#contact_number").val();
    var numberRegex = /^[0-9]{10}$/;
    if (number.trim() == "") {
        $('.contact-number-error').text('* Number field shouldn\'t be empty.');
    }
    if (!numberRegex.test(number)) {
        $('.contact-number-error').text('* Enter a Valid Number!');
    }
});
$(document).on('keyup', '#contact_message', function() {
    $('button[type="submit"]').prop('disabled', false);
    $('.contact-message-error').text('');
    var message = $("#contact_message").val();
    if (message.trim() == "") {
        $('.contact-message-error').text('* Message field shouldn\'t be empty.');
    }
});
$(document).on('keyup', '#contact_name', function () {
    $('button[type="submit"]').prop('disabled', false); 
    $('.contact-name-error').text('');

    var name = $("#contact_name").val();

    // Trim leading and trailing spaces
    var trimmed = name.trim();

    // Regex: only letters and dots, single space between words allowed
    var nameRegex = /^[A-Za-z.]+( [A-Za-z.]+)*$/;

    if (name === "" || trimmed === "") {
        $('.contact-name-error').text('* Name field shouldn\'t be empty.');
    } else if (name !== trimmed) {
        $('.contact-name-error').text('* Name should not have leading or trailing spaces.');
    } else if (!nameRegex.test(name)) {
        $('.contact-name-error').text('* Enter a valid name using only letters and single spaces.');
    }
});

$(document).on('keyup', '#contact_email', function() {
    $('button[type="submit"]').prop('disabled', false);
    $('.contact-mail-error').text('');
    var email = $("#contact_email").val();
    var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!emailRegex.test(email)) {
        $('.contact-mail-error').text('* Enter a Valid Email ID!');
    }
    if (email.trim() == "") {
        $('.contact-mail-error').text('* Email ID field shouldn\'t be empty.');
    }
});
$('.contact-form').on("submit",function (e) {
    e.preventDefault();
    var name = $('#contact_name').val();
    var nameRegex = /^[A-Za-z.]+( [A-Za-z.]+)*$/;
    if (!nameRegex.test(name)) {
        $('.contact-name-error').text('* Enter a Valid Name!');
    }
    if (name.trim() === "") {
        $('.contact-name-error').text('* Name field shouldn\'t be empty.');
    }
    var email = $('#contact_email').val();
    var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!emailRegex.test(email)) {
        $('.contact-mail-error').text('* Enter a Valid Email ID!');
    }
    if (email.trim() == "") {
        $('.contact-mail-error').text('* Email ID field shouldn\'t be empty.');
    }
    var number = $('#contact_number').val();
    var numberRegex = /^[0-9]{10}$/;
    if(number.trim() != "") {
        if (!numberRegex.test(number)) {
            $('.contact-number-error').text('* Enter a Valid Number!');
        }
    }
    var message = $('#contact_message').val();
    if (message.trim() == "") {
        $('.contact-message-error').text('* Message field shouldn\'t be empty.');
    }
    $.ajax({
        type: "POST",
        url:'/contact-detail',
        data: {'name': name, 'email': email, 'number': number, 'message': message},
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        beforeSend: function() {
            var nameRegex = /^[A-Za-z.]+( [A-Za-z.]+)*$/;
            var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var numberRegex = /^[0-9]{10}$/;
            var name = $('#contact_name').val();
            var email = $('#contact_email').val();
            var number = $('#contact_number').val();
            var message = $('#contact_message').val();
            if (!nameRegex.test(name) || !emailRegex.test(email) || !numberRegex.test(number) || message.trim() == "") {
                if (!nameRegex.test(name)) {
                    $('.contact-name-error').text('* Enter a Valid Name!');
                }
                if (name.trim() === "") {
                    $('.contact-name-error').text('* Name field shouldn\'t be empty.');
                }
                if (!emailRegex.test(email)) {
                    $('.contact-mail-error').text('* Enter a Valid Email ID!');
                }
                if (email.trim() == "") {
                    $('.contact-mail-error').text('* Email ID field shouldn\'t be empty.');
                }
                if(number.trim() != "") {
                    if (!numberRegex.test(number)) {
                        $('.contact-number-error').text('* Enter a Valid Number!');
                    }
                }
                if (number.trim() == "") {
                    $('.contact-number-error').text('* Number ID field shouldn\'t be empty.');
                }
                if (message.trim() == "") {
                    $('.contact-message-error').text('* Message field shouldn\'t be empty.');
                }
                return false;
            }
            $("#type-sbt").hide();
            $("#type-btn").show();
            $('#type-btn').html('<i class="fa fa-spinner fa-spin"></i> Please wait');
            return true;
        },
        success: function(response)
        {
            $("#type-btn").hide();
            $("#type-sbt").show();
            $("#type-sbt").attr('disabled', true);
            Swal.fire({
                title: response.message,
                showClass: {
                  popup: `
                    animate__animated
                    animate__fadeInUp
                    animate__faster
                  `
                },
                hideClass: {
                  popup: `
                    animate__animated
                    animate__fadeOutDown
                    animate__faster
                  `
                }
              });
              $('.contact-form')[0].reset();
                $('.contact-name-error, .contact-mail-error, .contact-number-error, .contact-message-error').text('');
        }
    });
});