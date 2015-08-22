$(document).ready(function () {
    $('.slider-img div:gt(0)').hide();
    $("#project .right a").click(function ()
    {
        var div = $('#project .right').parent().parent().children('.slider-img').attr('id');
        $('#project .left a').show();
        $('#' + div + ' div:visible').fadeOut(0)
                .next('div').fadeIn(1000)
                .end();
        if ($('#' + div + ' div.img:visible').find('img').attr('alt') == $('#' + div + ' div.img:last').find('img').attr('alt')) {
            $(this).hide();
        }
    });

    $("#project .left a").click(function ()
    {
        var div = $('#project .left').parent().parent().children('.slider-img').attr('id');
        $('#project .right a').show();
        $('#' + div + ' div:visible').fadeOut(0)
                .prev('div').fadeIn(1000)
                .end();
        if ($('#' + div + ' div.img:visible').find('img').attr('alt') == $('#' + div + ' div.img:first').find('img').attr('alt')) {
            $(this).hide();
        }
    });
//    setInterval(function () {
//        $('#slider-img div:first-child').fadeOut(0)
//                .next('div').fadeIn(1000)
//                .end().appendTo('#slider-img');
//    }, 4000);
});