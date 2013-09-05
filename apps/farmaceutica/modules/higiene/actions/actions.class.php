<?php

require_once dirname(__FILE__) . '/../lib/higieneGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/higieneGeneratorHelper.class.php';

/**
 * higiene actions.
 *
 * @package    anbeed
 * @subpackage higiene
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class higieneActions extends autoHigieneActions 
{

    public function executeListAdmEmpresa(sfWebRequest $request) 
    {
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id=' . $empresa->getId());
    }

    public function executeListIrForm706(sfWebRequest $request) 
    {
        $user = $this->getUser();

        $higiene = $this->getRoute()->getObject();
        $user->setAttribute('higiene', $higiene);
        $this->redirect('formulario706/index');
    }

    public function executeListIrForm7(sfWebRequest $request) 
    {
        $user = $this->getUser();

        $higiene = $this->getRoute()->getObject();
        $user->setAttribute('higiene', $higiene);
        $user->setAttribute('tabla', 'higiene');
        $user->setAttribute('producto', 'Higiene');
        $this->redirect('formulario7/index');
    }
    protected function processForm(sfWebRequest $request, sfForm $form) 
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        
        if ($form->isValid()) 
        {
            $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

            try 
            {
                // ---------------------
                $higiene = $form->save();
                
                $producto = new Producto();
                // agregamos el codigo del producto codigo: NSOH
                $producto->setCodigoProductoId(4); 
                $producto->save();
                
                $higiene->setProducto($producto);
                $higiene->save();
                // ---------------------
            }
            catch (Doctrine_Validator_Exception $e) 
            {
                $errorStack = $form->getObject()->getErrorStack();

                $message = get_class($form->getObject()) . ' has ' . count($errorStack) . " field" . (count($errorStack) > 1 ? 's' : null) . " with validation errors: ";
                foreach ($errorStack as $field => $errors) 
                {
                    $message .= "$field (" . implode(", ", $errors) . "), ";
                }
                $message = trim($message, ', ');

                $this->getUser()->setFlash('error', $message);
                return sfView::SUCCESS;
            }

            $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $higiene)));

            if ($request->hasParameter('_save_and_add')) 
            {
                $this->getUser()->setFlash('notice', $notice . ' You can add another one below.');

                $this->redirect('@higiene_new');
            }
            else 
            {
                $this->getUser()->setFlash('notice', $notice);

                $this->redirect(array('sf_route' => 'higiene_edit', 'sf_subject' => $higiene));
            }
        } 
        else 
        {
            $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
        }
    }

}
