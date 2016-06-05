function pushCheckButton(idFolder) {
    var allInputs = $(".userAnswer");
    var countQuestion = allInputs.length;
    var rightAnswer = 0;
    for(var i = 0; i < countQuestion; i++) {
        var val = allInputs[i]['value'];
        /*удаляем пробелы вначале и вконце строки*/
        val = $.trim(val);
        if(allInputs[i]['dataset']['right'] == val) {
            rightAnswer++;
        }
    }
    var mark = rightAnswer*100/countQuestion;
    mark = mark.toFixed(2);

    $("#markRes").html(mark);
    $("#allRes").html(countQuestion);
    $("#rightRes").html(rightAnswer);

    $("#tempResTable").html(mark+'%');

    $.ajax({
        type: "POST",
        url: "/exercise/ajaxSaveRes",
        data: {
            'mark': mark,
            'countQuestion': countQuestion,
            'countRight': rightAnswer,
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