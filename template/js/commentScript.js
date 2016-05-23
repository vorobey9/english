function pushButton() {
    var text = $("#comment").val();
    var idNews = $("#comment").attr("data-idNews");
    $("#reloadText").text('Зачекайте...');
    //alert(text);
    //alert(idNews);
    if(text) {
        $.ajax({
            type: "POST",
            url: "/elective/ajaxAddComment",
            data: {
                'text': text,
                'idNews': idNews,
            },
            success: function (retData) {
                if(retData) {
                    location.reload();
                }
                else {
                    $("#reloadText").text('Помилка відправки');
                }
            }
        });
    }
    else {
        $("#reloadText").text('Введіть текст');
    }
}