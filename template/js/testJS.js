function pushCheck(idFolder) {
    var ansUser = [];
    var allInputs = $(".ansClass");

    for(var i = 0; i < allInputs.length; i++) {
        if(allInputs[i].checked) {
            ansUser.push(allInputs[i].dataset['answer']);
        }
    }
    ansUser = ansUser.toJSON();
    $.ajax({
        type: "POST",
        url: "/exersice/ajaxCheckRes",
        data: {
            'arrRes': ansUser,
            'idFolder': idFolder,
        },
        success: function (retData) {
            var img = JSON.parse(retData);
            if(img && img.length > 0) {
                var htmlCode = '<div  class="row second" data-columns>';
                img.forEach(function(item) {

                    htmlCode += '<div class="item box-size ">'+
                        '<a href="/template/images'+item['url']+'" title="The Cleaner">'+
                        '<img class="img-responsive" src="/template/images'+item['url']+'"></a>'+
                        '</div>';

                });
                htmlCode += '</div>';
                $("#imgGallery").html(htmlCode);
            }
        }
    });
}