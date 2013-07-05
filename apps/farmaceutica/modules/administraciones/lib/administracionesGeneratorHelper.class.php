<?php

/**
 * administraciones module helper.
 *
 * @package    anbeed
 * @subpackage administraciones
 * @author     Your name here
 * @version    SVN: $Id: helper.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class administracionesGeneratorHelper extends BaseAdministracionesGeneratorHelper
{
    public function linkToCerrar($object, $params)
    {
     return '<li class="none"><input name="cerrar" type="submit" onclick="window.close();" value="Cerrar" /> </li>';
    }
}
