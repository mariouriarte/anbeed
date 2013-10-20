<?php

require_once dirname(__FILE__).'/../lib/pri_etapa_productoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/pri_etapa_productoGeneratorHelper.class.php';

/**
 * pri_etapa_producto actions.
 *
 * @package    anbeed
 * @subpackage pri_etapa_producto
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pri_etapa_productoActions extends autoPri_etapa_productoActions
{
    public function executeListListadoMain(sfWebRequest $request)
    {  
        $this->redirect('pri_etapa/index');
    }
}
