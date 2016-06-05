function pushBlockWord(_this) {
    var tempBlock = $(_this);
    var idDiv = $(_this).attr("data-idDivTo");
    $(tempBlock).addClass('clicked');
    $("#"+idDiv).append(tempBlock);
}

function pushNextButton(_this) {
    var index = $(_this).attr("data-indexDivTo");
    index = parseInt(index);
    var element = $("#strArea"+index);
    var countEl = $(_this).attr("data-countElement");

    if(element[0]['childElementCount'] == countEl) {
        var rightText = $(_this).attr("data-rightText");
        $("#ansArea"+index).text(rightText);

        var tempIndex = index+1;
        var tempNextEl = $("#puzzleBlock"+tempIndex);
        if( tempNextEl ) {
            $(tempNextEl).show();
        }
    }
    else {
        $("#ansArea"+index).text("Не всі блоки вибрані");
    }
}

function pushCheckButton(idFolder) {
    var allBlock = $(".phrase-block");
    var arrUserAnser = [];
    for(var i = 0; i < allBlock.length; i++) {
        var tempStr = '';
        //console.log(allBlock[i]['children'][0]['innerText']);
        for(var j = 0; j < allBlock[i]['children'].length; j++) {
            tempStr += allBlock[i]['children'][j]['innerText'];
            tempStr += ' ';
        }
        tempStr = $.trim(tempStr);
        arrUserAnser.push(tempStr);
    }

    var allAnswer = $(".answerForJS");

    var countQuestion = allAnswer.length;
    var right = 0;

    for(var k = 0; k < countQuestion; k++) {
        var rightAns = $(allAnswer[k]).text();
        if(rightAns == arrUserAnser[k]){
            right++;
        }
    }

    var mark = right*100/countQuestion;
    mark = mark.toFixed(2);

    $("#markRes").html(mark);
    $("#allRes").html(countQuestion);
    $("#rightRes").html(right);

    $("#tempResTable").html(mark+'%');

    $.ajax({
        type: "POST",
        url: "/exercise/ajaxSaveRes",
        data: {
            'mark': mark,
            'countQuestion': countQuestion,
            'countRight': right,
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