<?php

require_once dirname(__FILE__).'/../lib/catalogoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/catalogoGeneratorHelper.class.php';

/**
 * catalogo actions.
 *
 * @package    anbeed
 * @subpackage catalogo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class catalogoActions extends autoCatalogoActions
{
    public function executeVer(sfWebRequest $request)
    {
        $this->producto_web = Doctrine::getTable('ProductoWeb')
                         ->find($request->getParameter('id'));
        return sfView::SUCCESS;
    }
}
