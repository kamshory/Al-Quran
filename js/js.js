window.console = window.console || function (t) {};
if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
}
var lastPlayed = '';
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    if (scroll != '') {
        var scrollPosition = $('[data-anchor="' + scroll + '"]').offset().top;
        $("html, body").animate({
            scrollTop: scrollPosition
        });
    }

    $('audio').each(function (e2) {
        $(this).attr('src', $(this).attr('data-src'));
    });

    let mybutton = document.getElementById("btn-back-to-top");

    function scrollFunction() {
        if (
            document.body.scrollTop > 10 ||
            document.documentElement.scrollTop > 10
        ) {
            $('#btn-back-to-top').fadeIn();
        } else {
            $('#btn-back-to-top').fadeOut();
        }
    }

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction();
    };


    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        $("html, body").animate({
            scrollTop: 0
        });
    }
});



function endAudio(obj) {
    $(obj).attr('data-playing', 'false');
    var parent = $(obj).closest('.ayat-item');
    var uncle = parent.next();
    if (uncle.length > 0) {
        uncle.find('audio').trigger('play');
    } else if (surat != '') {
        var suratInt = parseInt(surat);
        nextSurat(suratInt);
    }
}

function playAudio(obj) {
    $(obj).attr('data-playing', 'false');
    var played = $('audio[data-playing="true"]');
    if (played.length) {
        played.each(function (e) {
            $(this).attr('data-playing', 'false');
            $(this).trigger('pause');
            $(this).get(0).currentTime = 0;
        });

    }
    $(obj).attr('data-playing', 'true');
    lastPlayed = $(obj).attr('data-ayat-key');
    var parent = $(obj).closest('.ayat-item');
    var scrollPosition = parent.offset().top;
    $("html, body").animate({
        scrollTop: scrollPosition
    });
}

function nextSurat(suratInt) {
    suratInt++;
    window.location = './?s=' + suratInt;
}