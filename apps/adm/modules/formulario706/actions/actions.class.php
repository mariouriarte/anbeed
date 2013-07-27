<?php

require_once dirname(__FILE__).'/../lib/formulario706GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/formulario706GeneratorHelper.class.php';

/**
 * formulario706 actions.
 *
 * @package    anbeed
 * @subpackage formulario706
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario706Actions extends autoFormulario706Actions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $this->redirect('/portal_dev.php/inicio/index');
    }
    public function executeEditar(sfWebRequest $request)
    {
        $id = $request->getParameter('id');
        $this->redirect("/farmaceutica_dev.php/form706/edit?id=$id");
    }
}