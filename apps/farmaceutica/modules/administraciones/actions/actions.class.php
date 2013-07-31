<?php

require_once dirname(__FILE__).'/../lib/administracionesGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/administracionesGeneratorHelper.class.php';

/**
 * administraciones actions.
 *
 * @package    anbeed
 * @subpackage administraciones
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class administracionesActions extends autoAdministracionesActions
{
    public function executeBuscar(sfWebRequest $request)
    {
        $this->getResponse()->setContentType('application/json');
        $buscar = $request->getParameter('q');
        //construimos la consulta
        $query = "SELECT * FROM via_administracion where nombre ILIKE '%$buscar%'";
        //obtenemos el singleton de la conexión
        $con = Doctrine_Manager::getInstance()->connection();
        //ejecutamos la consulta    
        $query = $con->execute($query);
        $administracions = array();
        foreach ($query as $administracion) {
            $administracions[$administracion['id']] = $administracion['nombre'];
        }
 
        return $this->renderText(json_encode($administracions));
    }
}
