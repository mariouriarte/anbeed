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
      
      $this->widgetSchema['captcha'] = new sfWidgetFormReCaptcha(array(
        'public_key' => '6Ldki-kSAAAAAEsSbasC9Am6w-IN680ydRw2BKMe',
        #'theme' => 'red',
      ));

      $this->validatorSchema['captcha'] = new sfValidatorReCaptcha(array(
        'private_key' => '6Ldki-kSAAAAAFvzC1MDUXHJZ2Lvv0ULyThKaiIx'
      ));
      //$this->widgetSchema->setNameFormat('register[%s]');

//        $this->widgetSchema['captcha'] = new sfWidgetFormReCaptcha(array(
//          'public_key' => '6Lcri-kSAAAAAFAYsUpID6T-GOAw37n7BxoA4HOg'
//        ));
//        //$this->setValidators(array('captcha' => new sfValidatorReCaptcha()));
//        $this->validatorSchema['captcha'] = new sfValidatorReCaptcha(array(
//  'private_key' => sfConfig::get('app_recaptcha_private_key')
//));
//         
      //$this->setWidgets(array('captcha' => new sfWidgetCaptchaGD(),));
      
//
//      $this->setValidators(array('captcha' => new sfCaptchaGDValidator(array('length' => 4)),));
  }

}
