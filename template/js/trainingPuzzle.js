function addWordToAnsBlock(_this) {
    if($(_this).attr('data-active') == 'off') {
        var word = $(_this).html();
        var tempSentences = $('#ansBlock').html();
        var newSentences = tempSentences + ' ' + word;
        $(_this).attr("data-active", 'on');
        $('#ansBlock').html(newSentences);
    }
}

function clearAnsBlock() {
    $.each($('.wordBlock'), function(index, value) {
        $(value).attr('data-active', 'off');
    });
}

function checkPuzzle() {

}