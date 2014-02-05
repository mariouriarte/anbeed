<?php use_helper('I18N', 'Date') ?>
<?php //include_partial('catalogo/assets') ?>
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
<script type="text/javascript">
    $( "#catalogo" ).addClass( "dropdown active" );
</script>
<div class="center_content">
  <div id="filtros_web">
    <?php include_partial('catalogo/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
  </div>
  <div id="productos_web">
      <h1>Catálogo de Productos</h1>
    <form action="<?php echo url_for('producto_web_collection', array('action' => 'batch')) ?>" method="post">
    <?php include_partial('catalogo/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    </form>
  </div>
</div>

    