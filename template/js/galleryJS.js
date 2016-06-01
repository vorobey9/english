function pushVideo() {
    $("#but1").removeClass("active");
    $("#but2").addClass("active");

    $("#imgGallery").empty();
    $("#videoGallery").html('Зачекайте...');

    $.ajax({
        type: "POST",
        url: "/gallery/ajaxGetVideo",
        data: {
            'idNews': 1,
        },
        success: function (retData) {
            var video = JSON.parse(retData);
            if(video && video.length > 0) {
                var htmlCode = '<div class="row photo" data-columns>';
                video.forEach(function(item) {

                    htmlCode += '<div class="item box-size">'+
                                    '<video src="/template/video/'+item['url']+'" controls></video>'+
                                    //'<h3>The bumer damage</h3>'+
                                '</div>';

                });
                htmlCode += '</div>';
                $("#videoGallery").html(htmlCode);
            }
        }
    });
}

function pushImg() {
    $("#but2").removeClass("active");
    $("#but1").addClass("active");

    $("#videoGallery").empty();
    $("#imgGallery").html('Зачекайте...');

    $.ajax({
        type: "POST",
        url: "/gallery/ajaxGetImage",
        data: {
            'idNews': 1,
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