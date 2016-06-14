function pushSelectButton() {
    var idTeacher = $("#teacher").val();
    var typePoint = $("#type-schedule").val();

    if(idTeacher && typePoint) {
        switch (typePoint) {
            case "ClassPoint":
                createClassPoint(idTeacher);
                break;
            case "ConsultPoint":
                createConsultPoint(idTeacher);
                break;
        }
    }
}

function createClassPoint(idTeacher) {
    $("#teacherArea").html(
        '<div class="teacher-info box-size transition3s">'+
        '<div class="pic circular-portrait">'+
        '<img src="" class="img-responsive " alt="">'+
        '</div>'+
        '<div class="text">'+
        '<h2>зачекайте...</h2>'+
        '<h3>зачекайте...</h3>'+
        '<p></p>'+
        '</div>'+
        '</div>'
    );
    $("#blockArea").html('<h3>зачекайте...</h3>');
    $.ajax({
        type: "POST",
        url: "/schedule/ajaxGetClassPoint",
        data: {
            'idTeacher': idTeacher,
        },
        success: function (retData) {
            var arr = JSON.parse(retData);

            var data = arr['data'];
            var teacher = arr['teacher'];

            var codeTeacher = '<div class="teacher-info box-size transition3s">'+
                                '<div class="pic circular-portrait">'+
                                    '<img src="/template/images'+teacher['urlImage']+'" class="img-responsive " alt="">'+
                                '</div>'+
                                '<div class="text">'+
                                    '<h2>'+teacher['lastName']+teacher['firstName']+teacher['middleName']+'</h2>'+
                                    '<h3>'+teacher['post']+'</h3>'+
                                    '<p>'+teacher['description']+'</p>'+
                                '</div>'+
                            '</div>';

            $("#teacherArea").html(codeTeacher);

            if(data.length == 0) {
                $("#blockArea").html('<h3>Пусто</h3>');
            }
            else {
                data.forEach(function(item){
                    switch(item['dayStamp']) {
                        case '1':
                            item['dayStamp'] = 'Понеділок';
                            break;
                        case '2':
                            item['dayStamp'] = 'Вівторок';
                            break;
                        case '3':
                            item['dayStamp'] = 'Середа';
                            break;
                        case '4':
                            item['dayStamp'] = 'Четверг';
                            break;
                        case '5':
                            item['dayStamp'] = "П'ятниця";
                            break;
                    }
                });

                var codeHTML = '<div class="row schedule-box" data-columns>';

                data.forEach(function(item){
                    codeHTML += '<div class="col-lg-4"><div class="block item transition3s radius5px">'+
                        '<div class="pic radius5px">'+
                        '<h3>'+item['dayStamp']+'</h3>'+
                        '</div>'+
                        '<div class="info">'+
                        '<table class="table-responsive table table-bordered">'+
                        '<thead>'+
                        '<tr>'+
                        '<th>Номер заняття</th>'+
                        '<th>Чисельник</th>'+
                        '<th>Знаменник</th>'+
                        '</tr>'+
                        '</thead>'+
                        '<tbody>';

                    for(var i = 0; i < 5; i++) {
                        codeHTML += '<tr>'+
                            '<th>'+(i+1)+'</th>'+
                            '<td>'+
                            '<a href="#" data-toggle="modal" data-target="#teach1day1schedule1">'+
                            '<span class="room">';
                        if(item['numeratorGroup'] && item['numLesson'] == (i+1)) {
                            codeHTML += 'ауд. '+item['room'];
                        }
                        codeHTML +='</span>'+
                            '<span class="date ">';
                        if(item['numeratorGroup'] && item['numLesson'] == (i+1)) {
                            codeHTML += 'гр. '+item['numeratorGroup'];
                        }
                        codeHTML +='</span>'+
                            '</a>'+
                            '</td>'+

                            '<td>' +
                            '<a href="#" data-toggle="modal" data-target="#teach1day1schedule1">'+
                            '<span class="room">';

                        if(item['denominatorGroup'] && item['numLesson'] == (i+1)) {
                            codeHTML += 'ауд. '+item['room'];
                        }
                        codeHTML +='</span>'+
                            '<span class="date ">';
                        if(item['denominatorGroup'] && item['numLesson'] == (i+1)) {
                            codeHTML += 'гр. '+item['denominatorGroup'];
                        }
                        codeHTML +='</span>'+
                            '</a>'+

                            '</td>'+
                            '</tr>';
                    }
                    codeHTML += '</tbody>'+
                        '</table>'+
                        '</div>'+
                        '</div></div>';

                });

                codeHTML += '</div>';

                $("#blockArea").html(codeHTML);
            }
        }
    });
}

function createConsultPoint(idTeacher) {
    $("#teacherArea").html(
        '<div class="teacher-info box-size transition3s">'+
        '<div class="pic circular-portrait">'+
        '<img src="" class="img-responsive " alt="">'+
        '</div>'+
        '<div class="text">'+
        '<h2>зачекайте...</h2>'+
        '<h3>зачекайте...</h3>'+
        '<p></p>'+
        '</div>'+
        '</div>'
    );
    $("#blockArea").html('<h3>зачекайте...</h3>');
    $.ajax({
        type: "POST",
        url: "/schedule/ajaxGetConsultPoint",
        data: {
            'idTeacher': idTeacher,
        },
        success: function (retData) {
            var arr = JSON.parse(retData);

            var data = arr['data'];
            var teacher = arr['teacher'];

            var codeTeacher = '<div class="teacher-info box-size transition3s">'+
                '<div class="pic circular-portrait">'+
                '<img src="/template/images'+teacher['urlImage']+'" class="img-responsive " alt="">'+
                '</div>'+
                '<div class="text">'+
                '<h2>'+teacher['lastName']+teacher['firstName']+teacher['middleName']+'</h2>'+
                '<h3>'+teacher['post']+'</h3>'+
                '<p>'+teacher['description']+'</p>'+
                '</div>'+
                '</div>';

            $("#teacherArea").html(codeTeacher);


            if(data.length == 0) {
                $("#blockArea").html('<h3>Пусто</h3>');
            }
            else {
                data.forEach(function(item){
                    switch(item['dayStamp']) {
                        case '1':
                            item['dayStamp'] = 'Понеділок';
                            break;
                        case '2':
                            item['dayStamp'] = 'Вівторок';
                            break;
                        case '3':
                            item['dayStamp'] = 'Середа';
                            break;
                        case '4':
                            item['dayStamp'] = 'Четверг';
                            break;
                        case '5':
                            item['dayStamp'] = "П'ятниця";
                            break;
                    }
                });

                var codeHTML = '<div class="row schedule-box" data-columns>';

                data.forEach(function(item){
                    codeHTML += '<div class="col-lg-4"><div class="block">'+
                        '<div class="pic radius5px">'+
                        '<h3>'+item['dayStamp']+'</h3>'+
                        '</div>'+
                        '<div class="advice-block transition3s">'+
                        '<div class="advice">'+
                        '<h4>'+'ауд. '+item['room']+'</h4>'+
                        '<h5>'+item['beginTime'].substr(0,5)+' - '+item['endTime'].substr(0,5)+'</h5>'+
                        '<div class="small-post">'+
                        '<span>Замітка:</span>'+
                        '<p>'+item['description']+'</p>'+
                        '</div>'+
                        '</div>'+
                        '</div>'+
                        '</div>'+
                        '</div>';
                });

                codeHTML += '</div>';

                $("#blockArea").html(codeHTML);
            }
        }
    });
}