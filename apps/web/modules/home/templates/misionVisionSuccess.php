<script type="text/javascript">
    $( "#nosotros" ).addClass( "dropdown active" );
</script>
<script type="text/javascript">
    $(document).ready(function() {
        if ($.fn.cssOriginal != undefined)
            $.fn.css = $.fn.cssOriginal;

        $('.fullwidthbanner').revolution(
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
<div class="mision_vision">
    
    <div  class="moduletable_ol_light">
    <h3>Misión</h3>
    
    <p id="shadow-ligth">
        Lograr convertirnos en una empresa de servicios integrados Líder en el mercado nacional e internacional con capacidad idónea, técnica, profesional, orientada y comprometida con sus clientes para el cumplimiento de sus objetivos.
        <img src="/images/web/mision.jpg">
    </p>
    </div>
</div> 

<div class="mision_vision">
    
    <div class="moduletable_ol_light">
    <h3>Visión</h3>
    
    <p id="shadow-ligth">
        Constituirnos en una empresa reconocida en el ámbito laboral por su capacidad de ofrecer servicios integrados hasta cualquier parte del mundo y en consecuencia plantear  las soluciones y/o alternativas oportunas y efectivas para lograr satisfacer plenamente las necesidades de sus clientes.
        <img src="/images/web/vision.jpg">
    </p>
    </div>
</div>

<div class="clear"></div>