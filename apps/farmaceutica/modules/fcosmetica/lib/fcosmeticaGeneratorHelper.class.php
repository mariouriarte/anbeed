<?php

/**
 * fcosmetica module helper.
 *
 * @package    anbeed
 * @subpackage fcosmetica
 * @author     Your name here
 * @version    SVN: $Id: helper.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class fcosmeticaGeneratorHelper extends BaseFcosmeticaGeneratorHelper
{
    public function linkToCerrar($object, $params)
    {
     return '<li class="none"><input name="cerrar" type="submit" onclick="window.close();" value="Cerrar" /> </li>';
    }
}
