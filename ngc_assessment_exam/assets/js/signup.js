$(document).ready(function () {
});


$(document).on('click', '#btnSignUp', function () {
    if($("#password1").val() != $("#password2").val()){
        alert("Entered password did not match. Please try again");
        return;
    }
    $.ajax({
        url: base_url + "signup_action.php",
        type: "POST",
        data:{
            fname:  $("#fname").val(),
            lname:  $("#lname").val(),
            mname:  $("#mname").val(),
            gender:  $("#gender").val(),
            username: $("#username").val(),
            password1: $("#password1").val(),
            password2: $("#password2").val()
        },
        dataType: "json",
        success: function(response) {
            if(response.status === "error"){
                alert(response.message);
            }else{
                alert(response.message);
            window.location = "login.php";

            }
        }
    })

});