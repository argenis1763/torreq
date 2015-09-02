function _sliderSimple(section) {
    $('#' + section + ' .right a').click(function()
    {
        var div = $('#' + section + ' .right').parent().parent().children('.slider-img').attr('id');
        $('#' + section + ' .left a').show();
        $('#' + div + ' div:visible').fadeOut(0)
                .next('div').fadeIn(0)
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
                .prev('div').fadeIn(0)
                .end();
        if ($('#' + div + ' div.img:visible').find('img').attr('alt') == $('#' + div + ' div.img:first').find('img').attr('alt')) {
            $(this).hide();
        }
    });
}

function _sliderAvance(section) {
    $('#' + section + ' .btn-gallery a').hover(function() {
        $('#' + section + ' .btn-gallery a').removeClass('active');
        $(this).addClass('active');

        var rel = $(this).attr('rel');
        var div = $('#' + section + ' .btn-gallery').parent().parent().parent().children('.slider-img').attr('id');
        $('#' + div + ' div:visible').fadeOut(0);
        $('#' + div + ' div').eq(rel).fadeIn(0);
    });

//    $('.slider-view').hover(function() {
//        $('.btn-view').fadeIn(0);
//    }, function() {
//        $('.btn-view').fadeOut(0);
//    });

    $('.slider-view.plus, .btn-gallery a').click(function() {
        var div = $('.slider-view').parent().children('.slider-img').attr('id');
        var alt = $('#' + div + ' div:visible').find('img').attr('alt');
        $.ajax({
            type: 'GET',
            url: 'site/offices',
            data: 'floor=' + alt,
            before: function() {
//                $('#' + section + ' .slider').empty();
            },
            success: function(data) {
                $('#' + section + ' .slider').html(data);
                $('#' + section + ' .slider-img div:visible').fadeOut(0);
                $('#' + section + ' .slider-img div').eq(0).fadeIn(0);
                _sliderAvance(section);
            }
        });
    });

    $('.slider-view.minus').click(function() {
        var rel = $(this).find('a').attr('rel');
        $.ajax({
            type: 'GET',
            url: 'site/offices',
            before: function() {
//                $('#' + section + ' .slider').empty();
            },
            success: function(data) {
                $('#' + section + ' .slider').html(data).fadeIn(0);
                $('#' + section + ' .img').hide();
                $('#' + section + ' .slider-img div').eq(rel).show();
                $('#' + section + ' .btn-gallery a').removeClass('active');
                $('#' + section + ' .btn-list div').eq(rel).find('a').addClass('active');
                _sliderAvance(section);
            }
        });
    });
}

function _validateMail(email) {
    //Utilizamos una expresion regular
    var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

    //Se utiliza la funcion test() nativa de JavaScript
    if (regex.test(email.trim())) {
        return true;
    }
    else {
        return false;
    }
}

function _sendMail() {
    $('#btn-mail').click(function() {
        var name = $('#form-name').val();
        var mail = $('#form-mail').val();
        var phone = $('#form-phone').val();
        var subject = $('#form-subject').val();
        var message = $('#form-message').val();
        var text = 'Campos requeridos:\n\n';
        var send = true;

        if (name == "") {
            text = text.concat(" -- Nombre\n");
            send = false;
        }
        if (mail == "") {
            text = text.concat(" -- Correo\n");
            send = false;
        } else if(!_validateMail(mail)){
            text = text.concat(" -- Correo: La direccion de correo no es valida\n");
            send = false;            
        }
        if (message == "") {
            text = text.concat(" -- Mensaje");
            send = false;
        }

        if (send) {
            var parameters = {
                "name": name,
                "mail": mail,
                "phone": phone,
                "subject": subject,
                "message": '<h3><b>INFORMACION DE LA SOLICITUD</b></h3>'
                        + '<ul>'
                        + '<li><b>NOMBRE:</b> ' + name + '</li>'
                        + '<li><b>EMAIL:</b> ' + mail + '</li>'
                        + '<li><b>TELEFONO:</b> ' + phone + '</li>'
                        + '<li><b>ASUNTO:</b> ' + subject + '</li>'
                        + '<li><b>MENSAJE:</b> ' + message + '</li>'
                        + '</ul>'
                        + '<br><br>'
                        + '--------------------------------------------'
                        + '<p>Avenida Francisco de Miranda, Centro Lido,</p><p>Oficina 84-A1. Municipio Chacao</p><p>Caracas, Venezuela.</p><p>+58 212 954 0731</p><p>ahaconstructora@gmail.com</p>'

            };
            $.ajax({
                type: 'POST',
                url: 'site/email',
                data: parameters,
                success: function(data) {
                    $('#form-name').val("");
                    $('#form-mail').val("");
                    $('#form-phone').val("");
                    $('#form-subject').val("");
                    $('#form-message').val("");
                    if (data) {
                        alert("El correo fue enviado exitosamente.");
                    } else {
                        alert("Ocurrio un error inesperado.");
                    }
//                    console.log(data);
                },
                error: function() {
                    alert("Ocurrio un error inesperado.");
                }
            });
        } else {
            alert(text);
        }
    });
}

$(document).ready(function() {
    $('#slider1.slider-img div:gt(0)').hide();
    $('#sliderA.slider-img div:gt(0)').hide();
    _sliderSimple('project');
    _sliderAvance('offices');
    _sendMail();
//    setInterval(function () {
//        $('#slider-img div:first-child').fadeOut(0)
//                .next('div').fadeIn(1000)
//                .end().appendTo('#slider-img');
//    }, 4000);
});