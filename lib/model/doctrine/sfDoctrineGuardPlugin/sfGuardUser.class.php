<?php

/**
 * sfGuardUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class sfGuardUser extends PluginsfGuardUser
{
    public function getCedulaExpedido()
    {
        return $this->Persona->getCi() .' '. $this->Persona->getExpedido();
    }
        
    public function getNombreOrdenado()
    {
        return $this->Persona->getApPaterno().' '.$this->Persona->getApMaterno().' '.$this->Persona->getNombre();
    }
    
}
