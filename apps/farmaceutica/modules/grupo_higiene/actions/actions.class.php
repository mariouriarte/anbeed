<?php

require_once dirname(__FILE__).'/../lib/grupo_higieneGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/grupo_higieneGeneratorHelper.class.php';

/**
 * grupo_higiene actions.
 *
 * @package    anbeed
 * @subpackage grupo_higiene
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class grupo_higieneActions extends autoGrupo_higieneActions
{
    public function executeBuscar(sfWebRequest $request)
    {
        //$this->getResponse()->setContentType('application/json');
        
        $buscar = $request->getParameter('q');
        
        $query = "SELECT * FROM grupo_higiene where nombre ILIKE '%$buscar%'";
        
        $con = Doctrine_Manager::getInstance()->connection();
        
        $query = $con->execute($query);
        
        $paises = array();
        
        foreach ($query as $pais) {
            $paises[$pais['id']] = $pais['nombre'];
        }
 
        return $this->renderText(json_encode($paises));
     }
}
