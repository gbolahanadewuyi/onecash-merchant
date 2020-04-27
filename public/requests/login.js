let loginUrl = "https://us-central1-onecash.cloudfunctions.net/app/merchant/login";
let baseUrl = $("#baseUrl").val();




function login() {

    window.swal({
        title: "Login in..",
        text: "Please wait",
        imageUrl: $("#baseUrl").val() + "public/img/91.gif",
        showConfirmButton: false,
        allowOutsideClick: false
    });


    var LoginData = {
        "email": $("#login-email").val(),
        "password": $("#login-password").val()
    }


    console.log(LoginData);


    $.ajax({
        url: loginUrl,
        contentType: "application/json",
        type: "POST",
        data: JSON.stringify(LoginData),
        dataType: "JSON",
        success: function (data) {
            console.log(data)
            console.log(data.field)

            swal("Nice!", "You have logged in successfully", "success");
            start_session(data.uid, data.accessToken,data.field, data.name_of_institution);
            // setTimeout(function () {
            //     window.location.assign("city_authority/dashboard");
            // }, 3000);

            // swal("Nice!", "You have logged in successfully", "success");
            // setTimeout(function () {
            //     window.location.assign("agriculture/dashboard");
            // }, 3000);


        },

        error: function (jqXHR, textStatus, errorThrown) {
            swal("oops", "incorrect email or password", "error");
            console.log("Error communicating with endpoint");
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        }


    });
}


function start_session(id, token, field, name_of_institution){

    var sessionData = {
        'id': id,
        'token': token,
        'field': field,
        'name_of_institution': name_of_institution,
        'login_status': true
    }

    console.log(sessionData);

    $.ajax({
        url: baseUrl + "check_session/start_session",
        contentType: 'application/json',
        type: "POST",
        data: JSON.stringify(sessionData),
        dataType: "JSON",
        success: function (data) {
            console.log(data);
            if(data.login_status == true && data.field == 'Agriculture'){
                window.location.assign(baseUrl + 'agriculture/dashboard');
            }else if(data.login_status == true && data.field == 'City Authority'){
                window.location.assign(baseUrl + 'city_authority/dashboard');
            }

        },

        error: function (jqXHR, textStatus, errorThrown) {
            swal("oops", "incorrect email or password", "error");
            console.log("Error starting session");
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        }
    })


}

