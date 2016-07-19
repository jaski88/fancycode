
var stepsWidth = 0;
var widths = new Array();
var current = 0;
var total = 12;
var animation = false;
//$('#paginationContainer .page').each(function (i) {
//    var $step = $(this);
//    widths[i] = stepsWidth;
//    stepsWidth += $step.width();
//});
//$('#paginationContainer').width(stepsWidth);

$.goToPage = function (page) {

    if (current == page)
        return;
    if (animation == true)
        return;
    animation = true;

    loadImages(page);

    $('.pagination a.active').removeClass('active');
    $('.pagination a').eq(page).addClass('active');


    $('.page').hide();
    var el = $('#page' + page)
    el.show();
    animation = false;
    current = page;


//    if (page < current) {
//        margin = '0';
//        $('#paginationContainer').css('margin-left', '-960px');
//    } else {
//        margin = '-960';
//    }
//
//    $('#paginationContainer').stop().animate({
//        marginLeft: margin + 'px'
//    }, 500, function () {
//        current = page;
//        $('#paginationContainer .page').not(el).hide();
//        $('#paginationContainer').css('margin-left', '0px');
//        animation = false;
//    });
}

$('.pagination .goto').click(function () {
    var id = $(this).attr('href');
    //$(this).addClass('active');
    id = id.replace(/^#page/, '');
    console.log(id);
    //current = parseInt(id);
    $.goToPage(parseInt(id));
    return false;
});

$('.pagination .next').click(function () {
    if (current == total)
        return false;
    //current = current + 1;
    $.goToPage(current + 1);
    return false;
});

$('.pagination .prev').click(function () {
    if (current == 1)
        return false;
    //current = current - 1;
    $.goToPage(current - 1);
    return false;
});

function loadImages(page) {
    $('img:not(.loaded)', '#page' + page).addClass('.loaded').each(function () {
        var img = $(this).data('src');
        $(this).attr('src', img);
    });
}


$('.select').click(function () {
//    $('.thumbnails .label-warning').removeClass('label-warning').addClass('label-info');
//    $(this).removeClass('label-info');
//    $(this).addClass('label-warning');
    var pos = $('#templateRow').position();
    var template = $(this).attr('template');
    console.log(pos.top);
    $('html, body').animate({scrollTop: pos.top - 100}, 'slow');
    $('#orderform-template').val(template);
    return false;
});

//$.goToPage(1);
//$('.pagination a:eq(0)').addClass('active');

$(function ( ) {
    $.goToPage(1);
});

