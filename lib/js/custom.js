$(document).ready(function(){
    $("#register-form").validate({
        errorClass: "bg-danger",
        errorElement: "p",
        rules: {
            name: "required",
            login: "required",
            password: "required"
        },
        messages:{
            name: "required name",
            login: "required login",
            password: "required password"
        }
    });
});
