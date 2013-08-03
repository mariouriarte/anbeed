<?php

/**
 * Formulario516 filter form.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class Formulario516FormFilter extends BaseFormulario516FormFilter
{
  public function configure()
  {
      parent::setup();
      $this->setWidget('empresa_id',  new sfWidgetFormDoctrineChoice(
              array('model' => 'Empresa', 
                    'add_empty' => 'Seleccionar')));

      $this->setValidator('empresa_id', new sfValidatorDoctrineChoice(array(
          'required' => false,'model' => 'Empresa')));
  }
  public function addEmpresaIdColumnQuery(Doctrine_Query $query, $field, $value)
  {
      Doctrine::getTable('Empresa');
      $this['empresa_id'];
      $query ->from('Formulario516 f')
        ->leftJoin('f.Cosmetico p')
        ->leftJoin('p.Empresa e') 
        ->where('p.empresa_id = ?', $this['empresa_id']->getValue())
        ->orderBy('f.id ASC');
      return $query;
  }
  public function getFields()
  {
    $fields = parent::getFields();
    $fields['empresa_id'] = 'custom';
    
    return $fields;
  }
}
