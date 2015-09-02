<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="heading-left-light">
                    <div id="map2" class="gmaps" style="height:394px;"></div>             
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row"><h4><b>Todos los campos con * son requeridos</b></h4></div>
                <div id="form-contact" class="row">
                    <div class="form">
                        <div class="form-wrap">
                            <div class="form-wrap-group">
                                <input id="form-name" type="text" placeholder="Nombre *" class="form-control" required>
                                <input id="form-subject" type="text" placeholder="Asunto" class="border-top-transparent form-control">
                            </div>                
                            <div class="form-wrap-group border-left-transparent">
                                <input id="form-mail" type="email" placeholder="Correo *" class="form-control" required>
                                <input id="form-phone" type="text" placeholder="Teléfono de contacto" class="border-top-transparent form-control">
                            </div>                
                        </div>
                    </div>
                    <textarea id="form-message" rows="8" name="message" placeholder="Escriba un mensaje ... *" class="border-top-transparent form-control" required></textarea>
                    <button id="btn-mail" type="button" class="btn-danger btn-md btn-block" style="background: #001D3B; border-color: #001D3B !important;">Enviar</button>      
                </div>
            </div>
        </div><!-- //end row -->
    </div>
</div>
<!-- End Footer -->

<!-- Footer Coypright -->
<div class="footer-copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-4" style="color: #FFF; font-weight: bold; font-size: medium;text-align: left;"><p>Avenida Francisco de Miranda, Centro Lido,</p><p>Oficina 84-A1. Municipio Chacao</p><p>Caracas, Venezuela.</p><br><p>+58 212 954 0731</p><br><p style="text-decoration: underline;">info@ahaconstructora.com</p></div>
            <div class="col-sm-4"><a href=" http://www.ahaconstructora.com" target="_blank" style="text-decoration: none;"><img style="width: 45%;" src="<?= Yii::getAlias('@web') ?>/themes/frontend/onepage2/img/bg/pag_06/bg_footer1.png" alt=""><p style="color: #FFF;font-size: medium;">A.H.A. CONSTRUCTORA</p></a></div>
            <div class="col-sm-4"><div class="footer-logo" style="max-height: 135px; height: 135px;"><a href=" http://www.modoarq.com.ve" target="_blank"><p style="position: absolute;top: 45%;right: 18%;color: #FFF;font-size: small;">Diseño Gráfico</p><img style="width: 45%; position: absolute; bottom: 0;" src="<?= Yii::getAlias('@web') ?>/themes/frontend/onepage2/img/bg/pag_06/bg_footer2.png" alt=""></a></div></div>         
        </div>
        <div class="row">
            <div class="col-sm-12"><P>Copyrigth © 2015 - Torre Q</P> </div>
        </div>
    </div>
</div>
<!-- End Footer Coypright -->