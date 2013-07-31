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
    public function executeBuscar(sfWebRequest $request)
    {
        $this->getResponse()->setContentType('application/json');
        $buscar = $request->getParameter('q');
        //construimos la consulta
        $query = "SELECT * FROM ingrediente where nombre ILIKE '%$buscar%'";
        //obtenemos el singleton de la conexión
        $con = Doctrine_Manager::getInstance()->connection();
        //ejecutamos la consulta    
        $query = $con->execute($query);
        $ingredientes = array();
        foreach ($query as $ingrediente) {
            $ingredientes[$ingrediente['id']] = $ingrediente['nombre'];
        }
 
        return $this->renderText(json_encode($ingredientes));
    }
}

