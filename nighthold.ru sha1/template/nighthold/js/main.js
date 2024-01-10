/*
    Авторизация
 */

$('.login-btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let username = $('input[name="username"]').val(),
        password = $('input[name="password"]').val();

    $.ajax({
        url: 'vendor/signin.php',
        type: 'POST',
        dataType: 'json',
        data: {
            username: username,
            password: password
        },
        success (data) {

            if (data.status) {
                document.location.href = 'cabinet.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);
            }

        }
    });

});




/*
    Регистрация
 */

$('.register-btn').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let username = $('input[name="username"]').val(),
        password = $('input[name="password"]').val(),
        NightHoldTag = $('input[name="NightHoldTag"]').val(),
        email = $('input[name="email"]').val(),
        password_confirm = $('input[name="password_confirmation"]').val();

    let formData = new FormData();
    formData.append('username', username);
    formData.append('password', password);
    formData.append('password_confirmation', password_confirm);
    formData.append('NightHoldTag', NightHoldTag);
    formData.append('email', email);


    $.ajax({
        url: 'vendor/signup.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                document.location.href = 'index.php';
            } else {

                if (data.type === 1) {
                    data.fields.forEach(function (field) {
                        $(`input[name="${field}"]`).addClass('error');
                    });
                }

                $('.msg').removeClass('none').text(data.message);

            }

        }
    });

});