<?php

/**
 * IniciacionFormulario form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class IniciacionFormularioForm extends BaseIniciacionFormularioForm
{
    public function configure()
    {
        unset($this['created_at'], $this['updated_at'], 
              $this['created_by'], $this['updated_by']);
        
        // Empresa
        $this->widgetSchema['empresa_id'] = new sfWidgetFormInputHidden();
        
        // etapa
        $this->widgetSchema['etapa_id'] = new sfWidgetFormDoctrineChoice(
            array('model'     => $this->getRelatedModelName('Etapa'), 
                  'add_empty' => 'Seleccione un producto',
                  'table_method' => 'selectEtapaVerificacion',));
        
        // Fecha fin
        $years = range(date('Y') - 10, date('Y'));   
        $this->widgetSchema['fecha_fin'] = new sfWidgetFormJQueryDate(
            array('culture' => 'es','date_widget' => new sfWidgetFormDate(array(
                  'format' => '%day%%month%%year%',  
                  'years' => array_combine($years, $years))), ));
    }
}
