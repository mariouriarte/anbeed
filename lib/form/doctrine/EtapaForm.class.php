<?php

/**
 * Etapa form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EtapaForm extends BaseEtapaForm
{
    public function configure()
    {
        parent::setup();
        unset($this['created_at'], $this['updated_at'], 
              $this['created_by'], $this['updated_by']);
        
        $this->widgetSchema['formulario_id'] = new sfWidgetFormInputHidden();
        
        $years = range(date('Y') - 10, date('Y'));   
        $this->widgetSchema['fecha_fin'] = new sfWidgetFormJQueryDate(
            array('culture' => 'es','date_widget' => new sfWidgetFormDate(array(
                  'format' => '%day%%month%%year%',  
                  'years' => array_combine($years, $years))), ));
        
        $this->widgetSchema['tipo_etapa_id'] = new sfWidgetFormDoctrineChoice(
            array('model'     => $this->getRelatedModelName('TipoEtapa'), 
                  'add_empty' => '- Seleccione un tipo',
                  'table_method' => 'selectTipoEtapaBackend',));
    }
}
