$('.register-btn-lich').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let 
		id = $('input[name="id"]').val(),
		username = $('input[name="username"]').val(),
        password = $('input[name="password"]').val(),
        password_confirm = $('input[name="password_confirmation"]').val();

    let formData = new FormData();
	formData.append('id', id);
	formData.append('username', username);
    formData.append('password', password);
    formData.append('password_confirmation', password_confirm);
    


    $.ajax({
        url: 'vendor/signuplich.php',
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
