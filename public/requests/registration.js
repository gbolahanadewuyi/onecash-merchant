let registerUrl = "https://us-central1-onecash.cloudfunctions.net/app/merchant/register"
let baseUrl = $("#baseUrl").val();



$(document).ready(function () {
    console.log('ready');
    let field = localStorage.getItem('field');
    console.log(field)
    if (field == "Business") {
        $("#institution").attr("style", "display:block")
        $("#label").html("Name of Business")
        $("#institution").attr("data-msg", "Enter name of business")
        $("#sub-heading").html("Business sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.")
    }

    if (field == "City Authority") {
        $("#institution").attr("style", "display:block")
        $("#label").html("Name of district/municipal")
        $("#institution").attr("data-msg", "Enter name of district/municipal")
        $("#sub-heading").html("City Authority sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.")
    }
    if (field == "School") {
        $("#institution").attr("style", "display:block")
        $("#label").html("Name of School")
        $("#institution").attr("data-msg", "Enter name of school")
        $("#sub-heading").html("School sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.")

    }
    if (field == "Organization") {
        $("#institution").attr("style", "display:block")
        $("#label").html("Name of organiztion/group")
        $("#institution").attr("data-msg", "Enter name of Organization or group")
        $("#sub-heading").html("Organization or group sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.")
    }

    if (field == null) {

        $("#field-container").attr("style", "display:block")
        // $("#institution").attr("style", "display:block")
        $("#sub-heading").html("OneCash offers several financial technology tools which can be used in various fields. Select what field or sector you want to use OneCash services for")

    }



});







function showInput(that) {
    console.log(that.value)
    if (that.value == "City Authority") {
        console.log(that.value);
        $("#institution").attr("style", "display:block")
        $("#label").html("Name of district/municipal")
        $("#sub-heading").html("City Authority sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.")
    }

    if (that.value == "Business") {
        console.log(that.value);
        $("#institution").attr("style", "display:block")
        $("#label").html("Name of business")
        $("#sub-heading").html("Business sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.")
    }
    if (that.value == "School") {
        console.log(that.value);
        $("#institution").attr("style", "display:block")
        $("#label").html("Name of school")
        $("#sub-heading").html("School sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.")
    }

    if (that.value == "Organization/Group") {
        console.log(that.value);
        $("#institution").attr("style", "display:block")
        $("#label").html("Name of organization/group")
        $("#sub-heading").html("Organization or Group sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.")
    }

    if (that.value == "No field selected") {
        console.log(that.value);
        $("#institution").attr("style", "display:none")
        $("#sub-heading").html("OneCash provides several financial technology tools which can be used in various fields. Select what field or sector you want to use OneCash services for")

    }

}




function register() {
    window.swal({
        title: "Registering ..",
        text: "Please wait",
        imageUrl: $("#baseUrl").val() + "public/img/91.gif",
        showConfirmButton: false,
        allowOutsideClick: false
    });

    var field = ""

    var phoneInput = $("#phone").val();
    var new_phoneInput = phoneInput.substring(1, phoneInput.length);
    var countryCode = "+233"
    var phonenumber = countryCode + new_phoneInput

    console.log("phonenumber :" + phonenumber);

    if (localStorage.getItem('field') == null) {
        field = $("#field").val()
    } else {
        field = localStorage.getItem('field');
    }
    console.log(field);

    var registerData = {
        "name": $("#fullname").val(),
        "field": field,
        "name_of_institution": $("#institution_name").val(),
        "phone": phonenumber,
        "email": $("#register-email").val(),
        "password": $("#register-password").val()
    };

    console.log(registerData);

    $.ajax({
        url: registerUrl,
        contentType: "application/json",
        type: "POST",
        data: JSON.stringify(registerData),
        dataType: "JSON",
        success: function (data) {
            console.log(data);
            swal("Nice!", "Registration successful, you can now login", "success");
            setTimeout(function () {
                window.location.assign(baseUrl + "user");
            }, 3000);
        },


        error: function (jqXHR, textStatus, errorThrown) {
            swal("Oops", "Error creating user", "error");
            console.log('Error communicating with the server');
            console.error(jqXHR);
            console.error(textStatus);
            console.error(errorThrown);
        }
    })

}