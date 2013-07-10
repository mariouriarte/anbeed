<?php

require_once dirname(__FILE__).'/../lib/formulario5GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/formulario5GeneratorHelper.class.php';

/**
 * formulario5 actions.
 *
 * @package    anbeed
 * @subpackage formulario5
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario5Actions extends autoFormulario5Actions
{
   public function executeListIrProductos(sfWebRequest $request)
   {
        $this->redirect(sfContext::getInstance()->getRouting()->generate('producto_prodmed'));
   }
       public function executeListIrEmpresa(sfWebRequest $request)
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id='.$empresa->getId());
    }
}
