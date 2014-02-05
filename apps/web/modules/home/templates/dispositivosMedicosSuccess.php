<script type="text/javascript">
    $("#servicios").addClass("dropdown active");
</script>
<script type="text/javascript">
    $(document).ready(function() {
        if ($.fn.cssOriginal != undefined)
            $.fn.css = $.fn.cssOriginal;

        $('.fullwidthbanner2').revolution(
                {
                    delay: 8000,
                    startwidth: 890,
                    startheight: 151,
                    onHoverStop: "on", // Stop Banner Timet at Hover on Slide on/off

                    thumbWidth: 100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                    thumbHeight: 50,
                    thumbAmount: 4,
                    hideThumbs: 200,
                    navigationType: "none", //bullet, thumb, none, both	 (No Shadow in Fullwidth Version !)
                    navigationArrows: "none", //nexttobullets, verticalcentered, none
                    navigationStyle: "round", //round,square,navbar

                    touchenabled: "on", // Enable Swipe Function : on/off

                    navOffsetHorizontal: 0,
                    navOffsetVertical: 20,
                    fullWidth: "on",
                    shadow: 0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

                });

    });


</script>
<div class="wide_content_services">
    <img id="etiqueta-registro" src="/images/web/registro.jpg"/>
    <h2>Requisitos para Registro de Dispositivos Médicos</h2>
    <div class="requisitos">
        <h3>Formulario 027</h3>
        <img id="mini-formulario" src="/images/web/formulario_27.png"/>
    </div>
    <div class="requisitos">
        <h3>Documentacion Legal</h3>
        <div class="lista_requisitos">
            <ol>
                <li><p><b>Resolucion Ministerial</b></p></li>
                <li><p><b>Certificado empresa vigente</b></p></li>
                <li><p>Informacion general  de <b>licenciantes y fabricantes</b></p></li>
            </ol>
        </div>
    </div>
    <div class="requisitos">
        <h3>Documentacion General</h3>
        <div class="lista_requisitos">
            <ol>
                <li><p> Certificado de <b>sistema de calidad utilizado</b></p></li>
                <li><p> Certificado de <b>libre venta</b></p></li>
                <li><p> <b>Representacion Legal</b></p></li>
            </ol>
        </div>
    </div>
    <div class="requisitos">
        <h3>Informacion técnica del Dispositivo Médico</h3>
        <div class="lista_requisitos">
            <ol>
                <li><p> Descripción de <b>partes y componentes</b></p></li>
                <li><p> Fotocopia <b>certificado de análisis</b></p></li>
                <li><p> <b>Vida útil</b> del Dispositivo Médico</p></li>
                <li><p> Condiciones de <b>almacenamiento</b></p></li>
                <li><p> <b>Codificación</b> de acuerdo al riesgo</p></li>
                <li><p> <b>Eficacia y seguridad</b></p></li>
                <li><p> Información de <b>uso</b></p></li>
                <li><p> <b>Esterilización</b></p></li>
                <li><p> <b>Disposicion final</b></p></li>
            </ol>
        </div>
    </div>
    <div class="requisitos">
        <h3>Etiquetas rotulos y manuales</h3>
        <img src="/images/web/etiquetas.jpg" width="260"/>
    </div>
    <div class="requisitos">
        <h3>Muestra</h3>
        <img src="/images/web/dispositivo.jpg" width="240"/>
    </div>
</div>
<div class="clear"></div>
