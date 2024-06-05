$(document).ready(function () {
});


$(document).on('click', '#btnLogin', function () {
    $.ajax({
        url: base_url + "login_action.php",
        type: "POST",
        data:{
            username:  $("#username").val(),
            password:  $("#password").val(),
        },
        dataType: "json",
        success: function(response) {
            if (response.status === "success") {
                alert(response.message);
                window.location = base_url + "user_lists.php";
            } else {
                alert(response.message);
            }
        }
    })
});