<?php

/**
 * Contacto form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ContactoForm extends BaseContactoForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      //$this->setWidgets(array('captcha' => new sfWidgetCaptchaGD(),));
      
//
//      $this->setValidators(array('captcha' => new sfCaptchaGDValidator(array('length' => 4)),));
  }
//  public function bind(array $taintedValues = null, array $taintedFiles = null) 
//  {
//      parent::bind($taintedValues, $taintedFiles);
//      $this->form->bind(array(
//        'captcha'   => $request->getParameter('captcha'),
//      ));
//  }
}
