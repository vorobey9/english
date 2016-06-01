function pushVideo(idNews) {
    $("#imgBut").removeClass("active");
    $("#docBut").removeClass("active");
    $("#videoBut").addClass("active");

    $("#forMediaJS").empty();

    $.ajax({
        type: "POST",
        url: "/gallery/ajaxGetVideo",
        data: {
            'idNews': idNews,
        },
        success: function (retData) {
            var video = JSON.parse(retData);
            var htmlCODE = '';
            if(video && video.length > 0) {
                htmlCODE += '<div class="row video" data-columns>';
                video.forEach(function(item){
                    htmlCODE += '<div class="item box-size">'+
                                    '<video src="/template/video'+item['url']+'" controls></video>'+
                                    '<h3>The bumer damage</h3>'+
                                '</div>';
                });
                htmlCODE += '</div>';
                $("#forMediaJS").html(htmlCODE);
            }
        }
    });
}

function pushImage(idNews) {
    $("#docBut").removeClass("active");
    $("#videoBut").removeClass("active");
    $("#imgBut").addClass("active");

    $("#forMediaJS").empty();

    $.ajax({
        type: "POST",
        url: "/gallery/ajaxGetImage",
        data: {
            'idNews': idNews,
        },
        success: function (retData) {
            var images = JSON.parse(retData);
            var htmlCODE = '';
            if(images && images.length > 0) {
                htmlCODE += '<div class="popup-gallery">'+
                                '<div class="row photo" data-columns>';
                images.forEach(function(item){
                    htmlCODE += '<div class="item box-size">'+
                                    '<a href="/template/images'+item['url']+'" title="The Cleaner">'+
                                    '<img class="img-responsive" src="/template/images'+item['url']+'">'+
                                    '</a>'+
                                '</div>';
                });
                htmlCODE += '</div>'+
                        '</div>';
                $("#forMediaJS").html(htmlCODE);
            }
        }
    });
}

function pushDoc(idNews) {
    $("#videoBut").removeClass("active");
    $("#imgBut").removeClass("active");
    $("#docBut").addClass("active");

    $("#forMediaJS").empty();

    $.ajax({
        type: "POST",
        url: "/gallery/ajaxGetDoc",
        data: {
            'idNews': idNews,
        },
        success: function (retData) {
            var doc = JSON.parse(retData);
            var htmlCODE = '';
            if(doc && doc.length > 0) {
                htmlCODE += '<div class="row document" data-columns>';
                doc.forEach(function(item){
                    htmlCODE += '<div class="item box-size">'+
                                    '<div class="header ">'+
                                        '<div class="info-block">'+
                                            '<span>Название: </span>'+
                                            '<h2>'+item['title']+'</h2>'+
                                        '</div>'+
                                        '<div class="btn-container text-center">'+
                                            '<a href="'+item['url']+'" class="btn btn-default news-btn">Скачати</a>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>';
                });
                htmlCODE += '</div>';
                $("#forMediaJS").html(htmlCODE);
            }
        }
    });
}