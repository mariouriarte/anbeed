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
        // Obtenemos los representante legal registrados en el sistema, coincidiendo las busqueda con el nombre apellido paterno o materno
        $query = Doctrine::getTable('LaboratorioFabricante')
                               ->createQuery('a')
                               ->Where('a.nombre LIKE ?', "%$buscar%")
                               ->execute();
        $labs = array();
        foreach ($query as $lab) {
            $labs[$lab->getId()] = $lab->getNombre();
        }
        return $this->renderText(json_encode($labs));
    }
}
