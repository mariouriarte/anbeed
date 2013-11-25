<?php

/**
 * Aval form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AvalForm extends BaseAvalForm {

    public function configure() 
    {
        unset($this['created_at'], $this['updated_at']);
        $this->widgetSchema['nombre_generico']->setAttribute('size' , 50);
        $this->widgetSchema['acta_comunicacion']->setAttribute('size' , 50);
        $this->widgetSchema['comision']->setAttribute('size' , 50);
        $this->widgetSchema['calificacion']->setAttribute('size' , 50);
        $this->widgetSchema['accion_terapeutica']->setAttribute('cols' , 80);
        $this->widgetSchema['dosis']->setAttribute('cols' , 80);
        $this->widgetSchema['indicaciones']->setAttribute('cols' , 80);
        $this->widgetSchema['contraindicaciones']->setAttribute('cols' , 80);
        $this->widgetSchema['precauciones']->setAttribute('cols' , 80);
        $this->widgetSchema['efectos_secundarios']->setAttribute('cols' , 80);
        $this->widgetSchema['observaciones']->setAttribute('cols' , 80);
    }

}
