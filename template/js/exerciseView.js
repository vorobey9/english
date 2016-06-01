function pushButtonEx(typeEx) {
    if(typeEx == 'test' || typeEx == 'puzzle' || typeEx == 'inscribe') {
        switch (typeEx) {
            case 'test':
                $("#puzzleButton").removeClass("active");
                $("#inscribeButton").removeClass("active");
                $("#testButton").addClass("active");
                break;
            case 'puzzle':
                $("#testButton").removeClass("active");
                $("#inscribeButton").removeClass("active");
                $("#puzzleButton").addClass("active");
                break;
            case 'inscribe':
                $("#testButton").removeClass("active");
                $("#puzzleButton").removeClass("active");
                $("#inscribeButton").addClass("active");
                break;
        }

        $("#titleArea").text('Зачекайте...');
        $("#descArea").text('Зачекайте...');

        $.ajax({
            type: "POST",
            url: "/exercise/ajaxGetFolder",
            data: {
                'typeExercise': typeEx,
            },
            success: function (retData) {
                var data = JSON.parse(retData);
                if(data && data.length > 0) {
                    $("#titleArea").text(data[0]['title']);
                    $("#descArea").text(data[0]['description']);

                    var htmlCode = '';
                    data.forEach(function(item) {
                        htmlCode += '<a onclick="pushOnFolder(this);" data-typeEx="'+typeEx+'" data-description="'+item['description']+'" data-id="'+item['id']+'" data-title="'+item['title']+'"><h4>'+item['title']+'</h4></a>';
                    });

                    $("#foldersArea").html(htmlCode);
                }
                else {
                    $("#titleArea").text('Нічого не знайдено');
                    $("#descArea").text('Нічого не знайдено');
                    $("#foldersArea").empty();
                }
            }
        });
    }
}

function pushOnFolder(_this) {
    var title = $(_this).attr("data-title");
    var description = $(_this).attr("data-description");
    var id = $(_this).attr("data-id");
    var typeEx = $(_this).attr("data-typeEx");
    $("#titleArea").text(title);
    $("#descArea").text(description);
    ///ССЫЛКУ СДЕЛАЙ!!!
    $("#startBut").attr("href", "/"+typeEx+"/"+id);
}