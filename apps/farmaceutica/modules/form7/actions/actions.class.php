<?php

/**
 * form7 actions.
 *
 * @package    anbeed
 * @subpackage form7
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class form7Actions extends sfActions
{
    public function executeAjaxGetCamposAvalJSON(sfWebRequest $request)
    {   
        if($request->hasParameter('aval_id'))
        {
            $aval_id = $request->getParameter('aval_id');
            
            $q = Doctrine_Query::create()
                    ->from('Aval a')
                    ->where('a.id = ?', $aval_id);
            
            $aval = $q->fetchOne();
            
            $formula = array(
                'formula' => $aval['forma_farmaceutica'],
                'concentracion' => $aval['concentracion'], 
                'via' => $aval['via_administracion'],
                'accion' => $aval['accion_terapeutica'],
                'dosis' => $aval['dosis'],
                'indi' => $aval['indicaciones'],
                'contraindi' => $aval['contraindicaciones'],
                'precau' => $aval['precauciones'],
                'efectos' => $aval['efectos_secundarios'],
                'obs' => $aval['observaciones']
            );
        
            echo json_encode($formula, JSON_FORCE_OBJECT);
            
            throw new sfStopException();
        }
    }
    
    
    
  public function executeIndex(sfWebRequest $request) {
        $this->formulario7s = Doctrine_Core::getTable('Formulario7')
                ->createQuery('a')
                ->execute();
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new Formulario7Form();
        $user = $this->getUser();
        $tabla = $user->getAttribute('tabla');
        if ($tabla == "medicamento") {
            $medicamento = $this->getUser()->getAttribute('medicamento');
            $this->form->setDefault('producto_id', $medicamento->Producto->getId());
            $this->form->setDefault('via_administracion_id', $medicamento->ViaAdministracion->getId());
            $this->form->setDefault('concentracion', $medicamento->getConcentracion());
        }
        if ($tabla == "reactivo") {
            $reactivo = $this->getUser()->getAttribute('reactivo');
            $this->form->setDefault('producto_id', $reactivo->Producto->getId());
        }

        if ($tabla == "dispositivo_medico") {
            $dispositivo = $this->getUser()->getAttribute('dispositivo_medico');
            $this->form->setDefault('producto_id', $dispositivo->Producto->getId());
        }
        if ($tabla == "cosmetico") {
            $cosmetico = $this->getUser()->getAttribute('cosmetico');
            $this->form->setDefault('producto_id', $cosmetico->Producto->getId());
        }
        if ($tabla == "higiene") {
            $higiene = $this->getUser()->getAttribute('higiene');
            $this->form->setDefault('producto_id', $higiene->Producto->getId());
        }
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new Formulario7Form();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($formulario7 = Doctrine_Core::getTable('Formulario7')->find(array($request->getParameter('id'))), sprintf('Object formulario7 does not exist (%s).', $request->getParameter('id')));
        $this->form = new Formulario7Form($formulario7);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($formulario7 = Doctrine_Core::getTable('Formulario7')->find(array($request->getParameter('id'))), sprintf('Object formulario7 does not exist (%s).', $request->getParameter('id')));
        $this->form = new Formulario7Form($formulario7);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($formulario7 = Doctrine_Core::getTable('Formulario7')->find(array($request->getParameter('id'))), sprintf('Object formulario7 does not exist (%s).', $request->getParameter('id')));
        $formulario7->delete();

        $this->redirect('form7/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $notice = $form->getObject()->isNew() ? 'El elemento fue creado correctamente.' : 'El elemento fue actualizado correctamente.';
            $is_new = $form->getObject()->isNew();

            $formulario7 = $form->save();
            if ($is_new) {
                $formulario = new Formulario();
                $formulario->save();
                $formulario7->setFormulario($formulario);
                $formulario7->save();
            }
            $this->getUser()->setFlash('notice', $notice);
            $this->redirect('form7/edit?id=' . $formulario7->getId());
        } else {
            $this->getUser()->setFlash('error', 'El elemento no ha sido guardado debido a que contiene algunos errores.');
        }
    }

}
