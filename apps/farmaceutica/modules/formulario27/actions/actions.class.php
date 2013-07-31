<?php

require_once dirname(__FILE__).'/../lib/formulario27GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/formulario27GeneratorHelper.class.php';

/**
 * formulario27 actions.
 *
 * @package    anbeed
 * @subpackage formulario27
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario27Actions extends autoFormulario27Actions
{
   public function executeListIrProductos(sfWebRequest $request)
   {
        $this->redirect(sfContext::getInstance()->getRouting()->generate('dispositivo_medico'));
   }
       public function executeListIrEmpresa(sfWebRequest $request)
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id='.$empresa->getId());
    }
}
