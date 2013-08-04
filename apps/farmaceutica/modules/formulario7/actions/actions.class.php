<?php

require_once dirname(__FILE__).'/../lib/formulario7GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/formulario7GeneratorHelper.class.php';

/**
 * formulario7 actions.
 *
 * @package    anbeed
 * @subpackage formulario7
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario7Actions extends autoFormulario7Actions
{
   public function executeListIrProductos(sfWebRequest $request)
   {
        $this->redirect(sfContext::getInstance()->getRouting()->generate('medicamento'));
   }
   public function executeListIrEmpresa(sfWebRequest $request)
   {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id='.$empresa->getId());
   }
}
