function pushButton(idBook) {
    $("#titleModalka").text('Зачекайте...');
    $("#authorModalka").text('Зачекайте...');
    $("#yearBeginModalka").text('Зачекайте...');
    $("#descriptionModalka").text('Зачекайте...');
    $("#urlBookModalka").attr('href', '#');

    $.ajax({
        type: "POST",
        url: "/library/ajaxGetById",
        data: {
            'idBook': idBook,
        },
        success: function (retData) {
            var book = JSON.parse(retData);
            $("#titleModalka").text(book['title']);
            $("#authorModalka").text('Автор: '+book['author']);
            $("#yearBeginModalka").text('Рік видання: '+book['yearBegin']);
            $("#descriptionModalka").text(book['description']);
            $("#urlBookModalka").attr('href', book['url']);
            $("#urlBookModalka").attr('onclick', 'pushDownload('+book['id']+');');
        }
    });
}

function pushSearch() {
    $("#booksArea").empty();
    var text = $("#searchText").val();
    var category = $("#category").val();
    $.ajax({
        type: "POST",
        url: "/library/ajaxGetBySearch",
        data: {
            'type': category,
            'text': text,
        },
        success: function (retData) {
            var books = JSON.parse(retData);
            if(books != '') {
                var htmlCode = '';
                for(var i = 0; i < books.length; i++) {
                    htmlCode = '<div class="col-lg-4">'+
                        '<div class="item box-size">'+
                                    '<div class="pic">'+
                                        '<img src="/template/images/book2.svg" class="img-responsive" alt="">'+
                                    '</div>'+
                                    '<div class="info-block">'+
                                        '<span >Назва: </span>'+
                                        '<h2>'+
                                            books[i]["title"]+
                                        '</h2>'+
                                        '<div >'+
                                            '<span>Автор: </span>'+
                                            '<h4>'+
                                                books[i]["author"]+
                                            '</h4>'+
                                        '</div>'+
                                        '<div class="btn-container text-center">'+
                                            '<a href="#" class="btn btn-default news-btn" data-toggle="modal"  data-target="#book1" onclick="pushButton('+books[i]["id"]+');" >Детальніше</a>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div>';
                    $("#booksArea").append(htmlCode);
                    $("#booksArea .document").masonry('reloadImages');
                }
            }
            else {
                $("#booksArea").append('<h3 style="text-align: center; margin-top: 40px">Нічого не знайдено</h3>');
            }
        }
    });
}

//работает нормально
function pushDownload(idBook) {
    $.ajax({
        type: "POST",
        url: "/library/ajaxAddDownload",
        data: {
            'idBook': idBook,
        },
    });
}