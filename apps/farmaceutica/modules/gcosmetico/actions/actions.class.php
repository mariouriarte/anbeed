<?php

require_once dirname(__FILE__).'/../lib/gcosmeticoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/gcosmeticoGeneratorHelper.class.php';

/**
 * gcosmetico actions.
 *
 * @package    anbeed
 * @subpackage gcosmetico
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class gcosmeticoActions extends autoGcosmeticoActions
{
    public function executeBuscar(sfWebRequest $request)
    {
        $this->getResponse()->setContentType('application/json');
        $buscar = $request->getParameter('q');
        //construimos la consulta
        $query = "SELECT * FROM grupo_cosmetico where nombre ILIKE '%$buscar%'";
        //obtenemos el singleton de la conexión
        $con = Doctrine_Manager::getInstance()->connection();
        //ejecutamos la consulta    
        $query = $con->execute($query);
        $gcosmeticos = array();
        foreach ($query as $gcosmetico) {
            $gcosmeticos[$gcosmetico['id']] = $gcosmetico['nombre'];
        }
 
        return $this->renderText(json_encode($gcosmeticos));
     }
}
