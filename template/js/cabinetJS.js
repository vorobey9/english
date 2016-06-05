function changeInfo() {
    var firstName = $("#name").val();
    var lastName = $("#surname").val();
    var middleName = $("#fullname").val();
    var oldPas = $("#old-pass").val();
    var newPas = $("#new-pass").val();
    var repPas = $("#repeat-pass").val();
    var idUser = $("#changeButton").attr("data-id");

    $("#errBlock").html('<label>зачекайте...</label>');

    if(newPas != repPas) {
        var tempError = '<label for="repeat-pass">Паролі не співпадають</label>';
        $("#errBlock").append(tempError);
    }

    $.ajax({
        type: "POST",
        url: "/cabinet/ajaxChangeInfo",
        data: {
            'idUser': idUser,
            'firstName': firstName,
            'middleName': middleName,
            'lastName': lastName,
            'oldPassword': oldPas,
            'newPassword': newPas,
        },
        success: function (retData) {
            var data = JSON.parse(retData);
            console.log(data);
            if(data['check']) {
                var tempError = '<label>Успішно редаговано</label>';
                $("#errBlock").html(tempError);
            }
            else {
                //var tempError1 = '<label>Помилка при редагуванні</label>';
                var arr = [];
                arr.push(data['arrEr']['firstName']);
                arr.push(data['arrEr']['middleName']);
                arr.push(data['arrEr']['lastName']);
                arr.push(data['arrEr']['password']);
                arr.forEach(function(item) {
                    $("#errBlock").append('<label>'+item+'</label>');
                });
            }
        }
    });
}