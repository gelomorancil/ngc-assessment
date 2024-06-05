$(document).ready(function () {
});


$(document).on('click', '#btnSignUp', function () {
    $.ajax({
        url:a,
        data:{
            name:  $("#name").val(),
            email: $("#email").val(),
            password1: $("#password1").val(),
            password2: $("#password2").val()
        }
    })
    alert(data);
});