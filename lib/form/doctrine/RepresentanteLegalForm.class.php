<?php

/**
 * RepresentanteLegal form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RepresentanteLegalForm extends BaseRepresentanteLegalForm
{
    public function configure()
    {
        unset($this['created_at'], $this['updated_at'],
              $this['persona_id'], $this['is_active'], $this['created_by'], $this['updated_by']);
    }
}
