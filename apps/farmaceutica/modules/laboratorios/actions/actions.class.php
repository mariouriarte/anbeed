<?php

require_once dirname(__FILE__).'/../lib/laboratoriosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/laboratoriosGeneratorHelper.class.php';

/**
 * laboratorios actions.
 *
 * @package    anbeed
 * @subpackage laboratorios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class laboratoriosActions extends autoLaboratoriosActions
{
    public function executeBuscar(sfWebRequest $request)
    {
        $this->getResponse()->setContentType('application/json');
        $buscar = $request->getParameter('q');
        //construimos la consulta
        $query = "SELECT * FROM laboratorio_fabricante where nombre ILIKE '%$buscar%'";
        //obtenemos el singleton de la conexión
        $con = Doctrine_Manager::getInstance()->connection();
        //ejecutamos la consulta    
        $query = $con->execute($query);
        $labs = array();
        foreach ($query as $lab) {
            $labs[$lab['id']] = $lab['nombre'];
        }
        return $this->renderText(json_encode($labs));
    }
    
    public function executeListIrEmpresa(sfWebRequest $request)
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id='.$empresa->getId());
    }
}
