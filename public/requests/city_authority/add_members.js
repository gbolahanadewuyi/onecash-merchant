let addMemeberUrl = "https://us-central1-onecash.cloudfunctions.net/app/merchant/add_member";
let token = $('#token').val();
let merchantID = $('#id').val();
let field = $('#field').val();


function add_member() {
    $("#btnSave").attr('disabled', true)
    $("#btnSave").html('<i class="fa fa-spinner fa-spin"></i> Processing please wait')


    var memberData = {
        "name": $("#fname").val() + " " + $("#lname").val(),
        "occupation": $("#occupation").val(),
        "date_of_birth": $("#dob").val(),
        "address": $("#address").val(),
        "phone": $("#phone").val(),
        // "phone": $("#photo").val(),
        "field": field,
        "merchant_id": merchantID //todo: get merchant id
    }

    console.log(memberData);

    $.ajax({
        url: addMemeberUrl,
        headers: {
            "Authorization": "Bearer" + " " + token, 
            "Content-Type": "application/json"
        },
        // contentType: "application/json",
        type: "POST",
        data: JSON.stringify(memberData),
        dataType: "JSON",
        success: function (data) {
            console.log(data)
            $("#btnSave").attr('disabled', false)
            $('#btnSave').html('Register')
            $.notify({
                message: 'Member registration successful'
            }, {
                type: 'success'
            });

            $("#form")[0].reset();
            // setTimeout(function () {
            //     location.reload();
            // }, 5000)

        },


        error: function (jqXHR, textStatus, errorThrown) {
            console.log("Error communicating with endpoint");
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
            $.notify({
                message: 'Oops error registering member'
            }, {
                type: 'error'
            });
        }


    });
}