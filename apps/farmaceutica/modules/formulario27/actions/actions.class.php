<?php

require_once dirname(__FILE__).'/../lib/formulario27GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/formulario27GeneratorHelper.class.php';

/**
 * formulario27 actions.
 *
 * @package    anbeed
 * @subpackage formulario27
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario27Actions extends autoFormulario27Actions
{
    public function executePrint(sfWebRequest $request)
    {
        $this->formulario27 = $this->getRoute()->getObject();
        
        $config = sfTCPDFPluginConfigHandler::loadConfig();
                  sfTCPDFPluginConfigHandler::includeLangFile($this->getUser()->getCulture());

        $pdf = new sfTCPDF('P', PDF_UNIT, 'A4', true, 'UTF-8', false);
        
        // Informacion el documento
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Capsule Systems');
        $pdf->SetTitle('Formulario');
        $pdf->SetSubject('ANBEED SRL');
        $pdf->SetKeywords('TCPDF, PDF, ANBEED SRL, Formulario027, impresion');

        //set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $pdf->SetPrintHeader(false);
        $pdf->SetPrintFooter(false);
        
        //set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        
        // Set font
        $pdf->SetFont('dejavusans', 'B', 13, '', true);

        // Add a page
        $pdf->AddPage();
        
        //Datos Generales
        $y_datos_generales = 88;
        if($this->formulario27->getDatosFormulario27Id() == 2)
            $y_datos_generales += 5;
        if($this->formulario27->getDatosFormulario27Id() == 3)
            $y_datos_generales += 10;
        if($this->formulario27->getDatosFormulario27Id() == 4)
            $y_datos_generales += 15;
            //Imprimimos X en el dato general
        $pdf->MultiCell(10, 0, 'X', 0, 'L', 0, 0, '72', $y_datos_generales, true);
        
        //Revisamos el tipo de tramite
            // inicializamos en el primero
        $y_tipo_tramite = 88;
        if($this->formulario27->getTipoTramiteFormulario27Id() == 2)
            $y_tipo_tramite += 5;
            //Imprimimos X del tipo de tramite
        $pdf->MultiCell(10, 0, 'X', 0, 'L', 0, 0, '72', $y_tipo_tramite, true);
        
        //Revisamos el origen
        $y_origen = 109; // inicializamos en el primero
        if($this->formulario27->getOrigenFormularioId() == 2)
            $y_origen += 5;
        //Imprimimos X del origen
        $pdf->MultiCell(10, 0, 'X', 0, 'L', 0, 0, '72', $y_origen, true);
        
        //Reduciendo tamaño de letra
        $pdf->SetFont('dejavusans', '', 9, '', true);
        
        //Datos de la empresa
        $pdf->MultiCell(150, 0, $this->formulario27->DispositivoMedico->Empresa->RepresentanteLegal, 
                0, 'L', 0, 0, '50', '140', true);
        $pdf->MultiCell(160, 0, $this->formulario27->DispositivoMedico->Empresa, 
                0, 'L', 0, 0, '40', '128', true);
        $pdf->MultiCell(170, 0, $this->formulario27->DispositivoMedico->Empresa->getNumResolucion(),
                0, 'L', 0, 0, '30', '133', true);
        $pdf->MultiCell(50, 0, funciones::FormatearFecha(
                $this->formulario27->DispositivoMedico->Empresa->getFechaResolucion()), 
                0, 'L', 0, 0, '130', '133', true);
        $pdf->MultiCell(110, 0, $this->formulario27->DispositivoMedico->Empresa->RegenteFarmaceutico,
                0, 'L', 0, 0, '30', '151', true);
        $pdf->MultiCell(30, 0, $this->formulario27->DispositivoMedico->Empresa->RegenteFarmaceutico->
                getMatriculaProfesional(), 0, 'L', 0, 0, '130', '151', true);
        $pdf->MultiCell(160, 0, $this->formulario27->DispositivoMedico->Empresa->getDireccion(),
                0, 'L', 0, 0, '40', '146', true);
        $pdf->Multicell(100, 0, $this->formulario27->DispositivoMedico->Empresa->getTelefono1(),
                0, 'L', 0, 0, '170', '146', true);

        //Datos del laboratorio
        $pdf->MultiCell(145, 0, $this->formulario27->DispositivoMedico->LaboratorioFabricante,
                0, 'L', 0, 0, '55', '163', true);
        $pdf->MultiCell(155, 0, $this->formulario27->DispositivoMedico->LaboratorioFabricante->
                getBajoLicencia(), 0, 'L', 0, 0, '45', '168', true);
        $pdf->MultiCell(155, 0, $this->formulario27->DispositivoMedico->LaboratorioFabricante->
                Pais, 0, 'L', 0, 0, '45', '180', true);
        $pdf->MultiCell(125, 0, $this->formulario27->DispositivoMedico->LaboratorioFabricante->
                getDireccion(), 0, 'L', 0, 0, '35', '186', true);
        
        //Datos del producto
        $pdf->MultiCell(150, 0, $this->formulario27->DispositivoMedico->getNombreComercial(),
                0, 'L', 0, 0, '50', '190', true);
        $pdf->MultiCell(150, 0, $this->formulario27->DispositivoMedico->getNombreGenerico(),
                0, 'L', 0, 0, '50', '195', true);
        $pdf->MultiCell(150, 0, $this->formulario27->DispositivoMedico->getClasificacionRiesgo(),
                0, 'L', 0, 0, '50', '203', true);
        $pdf->MultiCell(145, 0, $this->formulario27->DispositivoMedico->getCodigoInternacional(),
                0, 'L', 0, 0, '55', '208', true);
        $pdf->MultiCell(145, 0, $this->formulario27->DispositivoMedico->getManual(),
                0, 'L', 0, 0, '55', '214', true);
        $pdf->MultiCell(145, 0, $this->formulario27->DispositivoMedico->getIndicaciones(),
                0, 'L', 0, 0, '55', '220', true);
        $pdf->MultiCell(80, 0, $this->formulario27->DispositivoMedico->getPresentacion(),
                0, 'L', 0, 0, '50', '226', true);
        $pdf->MultiCell(40, 0, $this->formulario27->DispositivoMedico->getCondicionEmpaque(),
                0, 'L', 0, 0, '100', '231', true);
        $pdf->MultiCell(40, 0, $this->formulario27->DispositivoMedico->getVidaUtil(),
                0, 'L', 0, 0, '180', '231', true);
        $pdf->MultiCell(40, 0, $this->formulario27->DispositivoMedico->getMetodoDesecho(),
                0, 'L', 0, 0, '100', '236', true);
        $pdf->MultiCell(40, 0, $this->formulario27->DispositivoMedico->getRegistroSanitario(),
                0, 'L', 0, 0, '60', '241', true);
        
        //Datos del Formulario
        $pdf->MultiCell(35, 0, $this->formulario27->getFecha(),
                0, 'L', 0, 0, '165', '250', true);
        
        $pdf->Output('Formulario027.pdf', 'I');
        throw new sfStopException();
    }
    
    public function executeListIrProductos(sfWebRequest $request)
    {
        $this->redirect(sfContext::getInstance()->getRouting()->generate('dispositivo_medico'));
    }
    
    public function executeListIrEmpresa(sfWebRequest $request)
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id='.$empresa->getId());
    }
    
    public function executeNew(sfWebRequest $request)
    {
    $this->form = $this->configuration->getForm();
    $this->formulario27 = $this->form->getObject();
    $reactivo = $this->getUser()->getAttribute('dispositivo_medico');
    $this->form->setDefault('dispositivo_medico_id', $reactivo->getId());
    }
    
    protected function processForm(sfWebRequest $request, sfForm $form)
    {
      $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
      if ($form->isValid())
      {
        $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

        try {
          $formulario27 = $form->save();
          $formulario = new Formulario();
          $formulario -> save();
          $formulario27 -> setFormulario($formulario);
          $formulario27 -> save();
        } catch (Doctrine_Validator_Exception $e) {

          $errorStack = $form->getObject()->getErrorStack();

          $message = get_class($form->getObject()) . ' has ' . count($errorStack) . " field" . (count($errorStack) > 1 ?  's' : null) . " with validation errors: ";
          foreach ($errorStack as $field => $errors) {
              $message .= "$field (" . implode(", ", $errors) . "), ";
          }
          $message = trim($message, ', ');

          $this->getUser()->setFlash('error', $message);
          return sfView::SUCCESS;
        }

        $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $formulario27)));

        if ($request->hasParameter('_save_and_add'))
        {
          $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

          $this->redirect('@formulario27_new');
        }
        else
        {
          $this->getUser()->setFlash('notice', $notice);

          $this->redirect(array('sf_route' => 'formulario27_edit', 'sf_subject' => $formulario27));
        }
      }
      else
      {
        $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
      }
    }
}
