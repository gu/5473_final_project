$('#input_button').click(function(event) {
    event.preventDefault();
    var username = $('#username_input').val();
    var password = $('#password_input').val();
    $.ajax({
        type:"POST",
        url: 'try_login.php',
        data: {username: username, password: password},
        success: function(data) {
            if (data == "invalid") {
                alert("Invalid password.");
                $('#username_input').val('');
                $('#password_input').val('');
	    } else {
		document.location = 'index.html';
            }
        }
    })
});
