<?php

/**
 * DetalleFormulaCc form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DetallesFormulaCcForm extends sfForm
{
  public function configure()
  {
      if (!$detalle = $this->getOption('formulaCc'))
      {
        throw new InvalidArgumentException('You must provide a product detalle formulaCc.');
      }
      for ($i = 1; $i <= $this->getOption('size'); $i++)
      {
          $detalles = new DetalleFormulaCc($detalle);
          $detalles->FormulaCc = $detalle;
          $Form = new DetalleFormulaCcForm($detalles);
          $this->embedForm(null, $Form);
      }
  }
}
