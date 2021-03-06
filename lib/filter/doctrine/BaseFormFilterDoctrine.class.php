<?php

/**
 * Project filter form base class.
 *
 * @package    anbeed
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterBaseTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class BaseFormFilterDoctrine extends sfFormFilterDoctrine
{
    public function setup()
    {
    }
    protected function addTextQuery(Doctrine_Query $query, $field, $values)
    {
        /**Esta funcio permite buscar en mayuscula o minusculas lo ingresado*/
        $fieldName = $this->getFieldName($field);

        if (is_array($values) && isset($values['is_empty']) && $values['is_empty'])
        {
          $query->addWhere('r.' . $fieldName . ' IS NULL');
        }
        else if (is_array($values) && isset($values['text']) &&  $values['text'])
        {
          // Here is the change, with "ILIKE" instead of "LIKE"
          $query->addWhere('r.' . $fieldName . ' ILIKE ?', '%' . $values['text'] . '%');
        }
    }
}
