function doItInscribe() {
    var idFolder = parseInt($("#inscribeArea").attr("data-idFolder"));
    $.ajax({
        type: "POST",
        url: '/inscribe/ajaxGetDataByFolder',
        data: {
            idFolder: idFolder
        },
        success: function(tempData){
            var dataInscribe = jQuery.parseJSON(tempData);
            var value = checkInscribe(dataInscribe);
            setValueInResArea(value);
        }
    });
}

function checkInscribe(dataInscribe) {
    var countRightAnswer = 0;
    var result = 0;
    var dataLenght = dataInscribe.length;
    var errorFlag = false;

    for(var i = 0; i < dataLenght; i++) {
        var inputVal = $("#input"+i).val();
        var dataVal = dataInscribe[i]['skipWord'];
        if(inputVal != '' && inputVal != ' ') {
            if(inputVal == dataVal) {
                countRightAnswer++;
            }
        }
        else {
            errorFlag = true;
            result = 'Не всі завдання виконані.';
            return result;
        }
    }
    result = parseInt(countRightAnswer * 100 / dataLenght);
    return result +  '% правильних відповідей.';
}

function setValueInResArea(value) {
    $('#resArea').empty();
    var htmlCode = '<h2>'+value+'</h2>';
    $('#resArea').append(htmlCode);
}