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
        var pos = parseInt(scroll);
        var scrollPosition = $('[data-ayat="'+pos+'"]').offset().top;
        $("html, body").animate({ scrollTop: scrollPosition });
    }

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

function nextSurat(suratInt) {
    suratInt++;
    window.location = './?s=' + suratInt;
}