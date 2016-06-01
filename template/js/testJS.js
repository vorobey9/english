function pushCheck(_this) {
    var strAnswer = $(_this).attr("data-answerDB");
    var idFolder = $(_this).attr("data-idFolder");

    var arrAnswer = strAnswer.split('/');
    var countQuestion = arrAnswer.length;
    var countRight = 0;
    var answerUser = [];

    var allInputs = $(".ansClass");

    for(var i = 0; i < allInputs.length; i++) {
        if(allInputs[i].checked) {
            answerUser.push(allInputs[i].dataset['answer']);
        }
    }

    for(var j = 0; j < countQuestion; j++) {
        if(answerUser[j] == arrAnswer[j]) {
            countRight++;
        }
    }

    var mark = countRight*100/countQuestion;
    mark = mark.toFixed(2);

    $("#markRes").html(mark);
    $("#allRes").html(countQuestion);
    $("#rightRes").html(countRight);

    $("#tempResTable").html(mark+'%');

    $.ajax({
        type: "POST",
        url: "/exercise/ajaxSaveRes",
        data: {
            'mark': mark,
            'countQuestion': countQuestion,
            'countRight': countRight,
            'idFolder': idFolder,
        }
    });
}

function showInfo() {
    $(".userNameTable").html('зачекайте...');
    $("#bestResTable").html('зачекайте...');

    var idUser = $("#check").attr("data-idUser");
    var idFolder = $("#check").attr("data-idFolder");

    $.ajax({
        type: "POST",
        url: "/exercise/ajaxShowInfoModal",
        data: {
            'idUser': idUser,
            'idFolder': idFolder,
        },
        success: function (retData) {
            var data = JSON.parse(retData);
            $(".userNameTable").html(data['user']['firstName']+' '+data['user']['lastName']);
            $("#bestResTable").html(data['best']['mark']+'%');
        }
    });
}