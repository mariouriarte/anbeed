<?php

/**
 * grupo_higiene module helper.
 *
 * @package    anbeed
 * @subpackage grupo_higiene
 * @author     Your name here
 * @version    SVN: $Id: helper.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class grupo_higieneGeneratorHelper extends BaseGrupo_higieneGeneratorHelper
{
    public function linkToCerrar($object, $params)
    {
     return '<li class="none"><input name="cerrar" type="submit" onclick="window.close();" value="Cerrar" /> </li>';
    }
}
