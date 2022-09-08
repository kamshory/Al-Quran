window.console = window.console || function (t) {};
if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
}
$(document).ready(function (e) {

});
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    if(scroll != '')
    {
        var scrollPosition = $('[data-anchor="'+scroll+'"]').offset().top;
        $("html, body").animate({ scrollTop: scrollPosition });
    }

    $('audio').each(function(e2){
        $(this).attr('src', $(this).attr('data-src'));
    });

});
function endAudio(obj) {
    var parent = $(obj).closest('.ayat-item');
    var uncle = parent.next();
    if (uncle.length > 0) {
        uncle.find('audio').trigger('play');
    } else if (surat != '') {
        var suratInt = parseInt(surat);
        nextSurat(suratInt);
    }
}

function playAudio(obj)
{
    var parent = $(obj).closest('.ayat-item');
    var scrollPosition = parent.offset().top;
    $("html, body").animate({ scrollTop: scrollPosition });
}

function nextSurat(suratInt) {
    suratInt++;
    window.location = './?s=' + suratInt;
}