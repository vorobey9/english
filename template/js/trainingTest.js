function doItTest() {
    var idFolder = parseInt($("#testArea").attr("data-idFolder"));
    var inputData = checkAllChoose();
    if(inputData == false) {
        setValueInResArea('Не всі поля заповнені.');
    }
    else {
        inputData = JSON.stringify(inputData);
        $.ajax({
            type: "POST",
            url: '/test/ajaxCheckTest',
            data: {
                idFolder: idFolder,
                inputData: inputData
            },
            success: function(tempData) {
                var value = parseInt($.parseJSON(tempData));
                setValueInResArea(value+'% правильних відповідей');
            }
        });
    }
}

function checkAllChoose() {
    var num = 0;
    var answers = {};
    var countTestInPage = $('.itemTest').length;
    for(var i = 0; i < countTestInPage; i++) {
        var arr = $('.input'+i);
        var errFlag = true;
        for(var j = 0; j < arr.length; j++) {
            var check = arr[j].checked;
            if(check) {
                var id = arr[j].name;
                var value = arr[j].id;
                errFlag = false;
                answers[num] = {
                    id: id,
                    value: value
                };
                num++;
            }
        }
        if(errFlag == true) {
            return false;
        }
    }
    return answers;
}

function setValueInResArea(value) {
    $('#resArea').empty();
    var htmlCode = '<h2>'+value+'</h2>';
    $('#resArea').append(htmlCode);
}