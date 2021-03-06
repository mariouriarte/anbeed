<?php

/**
 * Persona
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    anbeed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Persona extends BasePersona
{
    public function getCedulaExpedido()
    {
        return $this->getCi() .' '. $this->getExpedido();
    }
    public function __toString()
    {
       return $this->getNombre().' '.$this->getApPaterno().' '.$this->getApMaterno();
    }
    
    public function getNombreOrdenado()
    {
        return $this->getApPaterno().' '.$this->getApMaterno().' '.$this->getNombre();
    }
    
    public function getUsername()
    {
        return $this->sfGuardUser->getUsername();
    }
}
