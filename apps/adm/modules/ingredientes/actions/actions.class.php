<?php

require_once dirname(__FILE__).'/../lib/ingredientesGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/ingredientesGeneratorHelper.class.php';

/**
 * ingredientes actions.
 *
 * @package    anbeed
 * @subpackage ingredientes
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ingredientesActions extends autoIngredientesActions
{
    public function executeListIrPortal(sfWebRequest $request)
    {
        $this->redirect('/portal_dev.php/inicio/index');
    }
    
    public function executeBuscar(sfWebRequest $request)
    {
        $this->getResponse()->setContentType('application/json');
        $buscar = $request->getParameter('q');
        $query = Doctrine::getTable('Ingrediente')
                              ->createQuery('a')
                              ->orWhere('a.nombre LIKE ?', "%$buscar%")
                              ->execute();
        $ingredientes = array();
        foreach ($query as $ingrediente) {
            $ingredientes[$ingrediente->getId()] = $ingrediente->getNombre();
        }
 
        return $this->renderText(json_encode($ingredientes));
    }
}
