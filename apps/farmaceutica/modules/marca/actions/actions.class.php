<?php

require_once dirname(__FILE__).'/../lib/marcaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/marcaGeneratorHelper.class.php';

/**
 * marca actions.
 *
 * @package    anbeed
 * @subpackage marca
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class marcaActions extends autoMarcaActions
{
    public function executeBuscar(sfWebRequest $request)
    {
        $this->getResponse()->setContentType('application/json');
        $buscar = $request->getParameter('q');
        //construimos la consulta
        $query = "SELECT * FROM marca where nombre ILIKE '%$buscar%'";
        //obtenemos el singleton de la conexión
        $con = Doctrine_Manager::getInstance()->connection();
        //ejecutamos la consulta    
        $query = $con->execute($query);
        $marcas = array();
        foreach ($query as $marca) {
            $marcas[$marca['id']] = $marca['nombre'];
        }
 
        return $this->renderText(json_encode($marcas));
     }
}
