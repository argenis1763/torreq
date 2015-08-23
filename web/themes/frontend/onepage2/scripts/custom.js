function _sliderSimple(section) {
    $('#' + section + ' .right a').click(function()
    {
        var div = $('#' + section + ' .right').parent().parent().children('.slider-img').attr('id');
        $('#' + section + ' .left a').show();
        $('#' + div + ' div:visible').fadeOut(0)
                .next('div').fadeIn(1000)
                .end();
        if ($('#' + div + ' div.img:visible').find('img').attr('alt') == $('#' + div + ' div.img:last').find('img').attr('alt')) {
            $(this).hide();
        }
    });

    $('#' + section + ' .left a').click(function()
    {
        var div = $('#' + section + ' .left').parent().parent().children('.slider-img').attr('id');
        $('#' + section + ' .right a').show();
        $('#' + div + ' div:visible').fadeOut(0)
                .prev('div').fadeIn(1000)
                .end();
        if ($('#' + div + ' div.img:visible').find('img').attr('alt') == $('#' + div + ' div.img:first').find('img').attr('alt')) {
            $(this).hide();
        }
    });
}

function _sliderAvance(section) {
    $('#' + section + ' .btn-gallery a').click(function() {
        $('#' + section + ' .btn-gallery a').removeClass('active');
        $(this).addClass('active');

        var rel = $(this).attr('rel');
        var div = $('#' + section + ' .btn-gallery').parent().parent().parent().children('.slider-img').attr('id');
        $('#' + div + ' div:visible').fadeOut(0);
        $('#' + div + ' div').eq(rel).fadeIn(1000);
    });

    $('.slider-view').hover(function() {
        $('.btn-view').fadeIn(1000);
    }, function() {
        $('.btn-view').fadeOut(0);
    });

    $('.slider-view.plus').click(function() {
        console.log(section);
        var div = $('.slider-view').parent().children('.slider-img').attr('id');
        var alt = $('#' + div + ' div:visible').find('img').attr('alt');
        $.ajax({
            type: 'GET',
            url: 'site/offices',
            data: 'floor=' + alt,
            before: function() {
                $('#' + section + ' .slider').empty();
            },
            success: function(data) {
                $('#' + section + ' .slider').html(data);
                _sliderAvance(section);
            }
        });
    });

    $('.slider-view.minus').click(function() {
        console.log(section);
        var rel = $(this).find('a').attr('rel');
        $.ajax({
            type: 'GET',
            url: 'site/offices',
            before: function() {
                $('#' + section + ' .slider').empty();
            },
            success: function(data) {
                $('#' + section + ' .slider').html(data).fadeIn(1000);
                $('#' + section + ' .img').hide();
                $('#' + section + ' .slider-img div').eq(rel).show();
                $('#' + section + ' .btn-gallery a').removeClass('active');
                $('#' + section + ' .btn-list div').eq(rel).find('a').addClass('active');
                _sliderAvance(section);
            }
        });
    });
}

$(document).ready(function() {
    $('#slider1.slider-img div:gt(0)').hide();
    $('#sliderA.slider-img div:gt(0)').hide();
    _sliderSimple('project');
    _sliderAvance('offices');
//    setInterval(function () {
//        $('#slider-img div:first-child').fadeOut(0)
//                .next('div').fadeIn(1000)
//                .end().appendTo('#slider-img');
//    }, 4000);
});