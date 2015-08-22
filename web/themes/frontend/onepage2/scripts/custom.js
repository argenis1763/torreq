function _sliderSimple(section){
    $('#'+section+' .right a').click(function()
    {
        var div = $('#'+section+' .right').parent().parent().children('.slider-img').attr('id');
        $('#'+section+' .left a').show();
        $('#' + div + ' div:visible').fadeOut(0)
                .next('div').fadeIn(1000)
                .end();
        if ($('#' + div + ' div.img:visible').find('img').attr('alt') == $('#' + div + ' div.img:last').find('img').attr('alt')) {
            $(this).hide();
        }
    });

    $('#'+section+' .left a').click(function()
    {
        var div = $('#'+section+' .left').parent().parent().children('.slider-img').attr('id');
        $('#'+section+' .right a').show();
        $('#' + div + ' div:visible').fadeOut(0)
                .prev('div').fadeIn(1000)
                .end();
        if ($('#' + div + ' div.img:visible').find('img').attr('alt') == $('#' + div + ' div.img:first').find('img').attr('alt')) {
            $(this).hide();
        }
    });    
}

function _sliderAvance(section){
    $('#'+section+' .btn-gallery a').click(function() {
        $('#'+section+' .btn-gallery a').removeClass('active');
        $(this).addClass('active');

        var alt = $(this).parent().attr('alt');
        var div = $('#'+section+' .btn-gallery').parent().parent().parent().children('.slider-img').attr('id');
        $('#' + div + ' div:visible').fadeOut(0);
        $('#' + div + ' div').eq(alt).fadeIn(1000);
    });

    $('.slider-view').hover(function() {
        $('.btn-view').fadeIn(1000);
    }, function() {
        $('.btn-view').fadeOut(0);
    });

    $('.slider-view.plus').click(function() {
        var div = $('.slider-view').parent().children('.slider-img').attr('id');
        var alt = $('#' + div + ' div:visible').find('img').attr('alt');
        $.ajax({
            type: 'GET',
            url: 'site/offices',
            data: 'floor=' + alt,
            before: function(){
                $('#'+section+' .slider').empty();
            },
            success: function(data) {
                $('#'+section+' .slider').html(data).fadeIn(1000);
                _sliderAvance(section);
            }
        });
    });  
    
    $('.slider-view.minus').click(function() {
        var alt = '-1';
        $.ajax({
            type: 'GET',
            url: 'site/offices',
            data: 'floor=' + alt,
            before: function(){
                $('#'+section+' .slider').empty();
            },
            success: function(data) {
                $('#'+section+' .slider').html(data).fadeIn(1000);
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