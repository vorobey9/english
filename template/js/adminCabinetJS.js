function step1() {
    var typeName = $("#test-type").val();
    $("#folder-type").html('<option value="0">Зачекайте...</option>');
    $.ajax({
        type: "POST",
        url: "/exercise/ajaxGetFolder",
        data: {
            'typeExercise': typeName,
        },
        success: function (retData) {
            var data = JSON.parse(retData);
            //console.log(data);
            var codeHTML = '';
            data.forEach(function (item) {
                codeHTML += '<option value="'+item['id']+'">'+item['title']+'</option>';
            });
            $("#folder-type").html(codeHTML);
            $("#selectFolder").css("display", 'block');
        }
    });
}

function show1() {
    var idFolder = $("#folder-type").val();
    var typeBest = $("#radio-type").val();
    var temp = '<div class="task">'+
                    '<h3 class="title">Зачекайте...</h3>'+
                    '<span class="count ok">Зачекайте...</span>'+
                '</div>';
    $("#showRes1").html(temp);

    $.ajax({
        type: "POST",
        url: "/exercise/ajaxGetFolderByType",
        data: {
            'typeBest': typeBest,
            'idFolder': idFolder,
        },
        success: function (retData) {
            var data = JSON.parse(retData);
            //console.log(data);
            var htmlCode = '';
            data.forEach(function (item) {
                htmlCode += '<div class="task">'+
                                '<h3 class="title">'+item['lastName']+' '+item['firstName']+'</h3>'+
                                '<span class="count ok">'+item['mark']+'</span>'+
                            '</div>';
            });

            htmlCode += '<div class="btn-container">'+
                            '<div class="btn news-btn" id="back">Назад до списку</div>'+
                        '</div>';

            $("#showRes1").html(htmlCode);
        }
    });
}

function show2() {
    var firstName = $("#name-student").val();
    var middleName = $("#fullname-student").val();
    var lastName = $("#surname-student").val();
    var typeEx = $("#test-type2").val();

    $.ajax({
        type: "POST",
        url: "/exercise/ajaxGetByNameUser",
        data: {
            'typeEx': typeEx,
            'firstName': firstName,
            'middleName': middleName,
            'lastName': lastName,
        },
        success: function (retData) {
            var data = JSON.parse(retData);
            console.log(data);
            //var htmlCode = '';
            //data.forEach(function (item) {
            //    htmlCode += '<div class="task">'+
            //        '<h3 class="title">'+item['lastName']+' '+item['firstName']+'</h3>'+
            //        '<span class="count ok">'+item['mark']+'</span>'+
            //        '</div>';
            //});
            //
            //htmlCode += '<div class="btn-container">'+
            //    '<div class="btn news-btn" id="back">Назад до списку</div>'+
            //    '</div>';
            //
            //$("#showRes1").html(htmlCode);
        }
    });
}