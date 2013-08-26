<?php

require_once dirname(__FILE__).'/../lib/formulario5GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/formulario5GeneratorHelper.class.php';

/**
 * formulario5 actions.
 *
 * @package    anbeed
 * @subpackage formulario5
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario5Actions extends autoFormulario5Actions
{
    public function executePrint(sfWebRequest $request)
    {
        $this->formulario5 = $this->getRoute()->getObject();
        
        $config = sfTCPDFPluginConfigHandler::loadConfig();
                  sfTCPDFPluginConfigHandler::includeLangFile($this->getUser()->getCulture());

        $pdf = new sfTCPDF('P', PDF_UNIT, 'A4', true, 'UTF-8', false);
        // Informacion el documento
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Capsule Systems');
        $pdf->SetTitle('Formulario');
        $pdf->SetSubject('ANBEED SRL');
        $pdf->SetKeywords('TCPDF, PDF, ANBEED SRL, Formulario005, impresion');

        //set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        $pdf->SetPrintHeader(false);
        $pdf->SetPrintFooter(false);
        //set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        // Set font
        // dejavusans is a UTF-8 Unicode font, if you only need to
        // print standard ASCII chars, you can use core fonts like
        // helvetica or times to reduce file size.
        $pdf->SetFont('dejavusans', 'B', 13, '', true);

        // Add a page
        // This method has several options, check the source code documentation for more information.
        $pdf->AddPage();
        
        /*Revisamos el tipo de tramite*/
        $y_tipo_tramite = 88; // inicializamos en el primero
        if($this->formulario5->getTipoTramiteFormulario5Id() == 2)
            $y_tipo_tramite += 5;
        if($this->formulario5->getTipoTramiteFormulario5Id() == 3)
            $y_tipo_tramite += 10;
        if($this->formulario5->getTipoTramiteFormulario5Id() == 4)
            $y_tipo_tramite += 15;
        /*Imprimimos X del tipo de tramite*/
        $pdf->MultiCell(10, 0, 'X', 0, 'L', 0, 0, '72', $y_tipo_tramite, true);
        
        /*Revisamos el tipo de producto*/
        $y_tipo_producto = 88; // inicializamos en el primero
        if($this->formulario5->getTipoProductoFormulario5Id() == 2)
            $y_tipo_producto += 5;
        if($this->formulario5->getTipoProductoFormulario5Id() == 3)
            $y_tipo_producto += 10;
        if($this->formulario5->getTipoProductoFormulario5Id() == 4)
            $y_tipo_producto += 15;
        if($this->formulario5->getTipoProductoFormulario5Id() == 5)
            $y_tipo_producto += 20;
        if($this->formulario5->getTipoProductoFormulario5Id() == 6)
            $y_tipo_producto += 25;
        /*Imprimimos X del tipo de tramite*/
        $pdf->MultiCell(10, 0, 'X', 0, 'L', 0, 0, '161', $y_tipo_producto, true);
        
        /*Revisamos el origen*/
        $y_origen = 109; // inicializamos en el primero
        if($this->formulario5->getTipoTramiteFormulario5Id() == 2)
            $y_origen += 5;
        
        
        /*Imprimimos X del tipo de tramite*/
        $pdf->MultiCell(10, 0, 'X', 0, 'L', 0, 0, '72', $y_origen, true);
        
        /*tamaño y tipo de letra*/
        $pdf->SetFont('dejavusans', '', 9, '', true);
        
        /*Datos de la empresa*/
        $pdf->MultiCell(160, 0, $this->formulario5->Medicamento->Empresa, 0, 'L', 0, 0, '40', '128', true);
        $pdf->MultiCell(170, 0, $this->formulario5->Medicamento->Empresa->getNumResolucion(), 0, 'L', 0, 0, '30', '133', true);
        $pdf->MultiCell(50, 0, funciones::FormatearFecha($this->formulario5->Medicamento->Empresa->getFechaResolucion()), 0, 'L', 0, 0, '130', '133', true);
        $pdf->MultiCell(150, 0, $this->formulario5->Medicamento->Empresa->RepresentanteLegal, 0, 'L', 0, 0, '50', '140', true);
        $pdf->MultiCell(160, 0, $this->formulario5->Medicamento->Empresa->getDireccion(), 0, 'L', 0, 0, '40', '146', true);
        $pdf->MultiCell(110, 0, $this->formulario5->Medicamento->Empresa->RegenteFarmaceutico, 0, 'L', 0, 0, '60', '151', true);
        $pdf->MultiCell(30, 0, $this->formulario5->Medicamento->Empresa->RegenteFarmaceutico->getMatriculaProfesional(), 0, 'L', 0, 0, '170', '151', true);
       
        /*Datos del laboratorio*/
        $pdf->MultiCell(145, 0, $this->formulario5->Medicamento->LaboratorioFabricante, 0, 'L', 0, 0, '55', '163', true);
        $pdf->MultiCell(155, 0, $this->formulario5->Medicamento->LaboratorioFabricante->getBajoLicencia(), 0, 'L', 0, 0, '45', '168', true);
        $pdf->MultiCell(170, 0, $this->formulario5->Medicamento->LaboratorioFabricante->getPara(), 0, 'L', 0, 0, '30', '174', true);
        $pdf->MultiCell(155, 0, $this->formulario5->Medicamento->LaboratorioFabricante->Pais, 0, 'L', 0, 0, '45', '180', true);
        $pdf->MultiCell(125, 0, $this->formulario5->Medicamento->LaboratorioFabricante->getDireccion(), 0, 'L', 0, 0, '35', '186', true);
        
        /*Datos del producto*/
        $pdf->MultiCell(150, 0, $this->formulario5->Medicamento->getNombreComercial(), 0, 'L', 0, 0, '50', '196', true);
        $pdf->MultiCell(150, 0, $this->formulario5->Medicamento->getNombreGenerico(), 0, 'L', 0, 0, '50', '203', true);
        $pdf->MultiCell(145, 0, $this->formulario5->Medicamento->FormaFarmaceutica, 0, 'L', 0, 0, '55', '208', true);
        $pdf->MultiCell(145, 0, $this->formulario5->Medicamento->getConcentracion(), 0, 'L', 0, 0, '55', '214', true);
        $pdf->MultiCell(145, 0, $this->formulario5->Medicamento->ViaAdministracion, 0, 'L', 0, 0, '55', '220', true);
        $pdf->MultiCell(80, 0, $this->formulario5->Medicamento->getAccionTerapeutica(), 0, 'L', 0, 0, '50', '226', true);
        $pdf->MultiCell(40, 0, $this->formulario5->Medicamento->TipoVenta, 0, 'L', 0, 0, '160', '226', true);
        $pdf->MultiCell(85, 0, $this->formulario5->Medicamento->getConservacion(), 0, 'L', 0, 0, '45', '232', true);
        $pdf->MultiCell(35, 0, $this->formulario5->Medicamento->getPeriodoValidez(), 0, 'L', 0, 0, '165', '232', true);
        $pdf->MultiCell(140, 0, $this->formulario5->Medicamento->getEspecificacionEnvase(), 0, 'L', 0, 0, '60', '238', true);
        $pdf->MultiCell(155, 0, $this->formulario5->Medicamento->getEnvaseClinico(), 0, 'L', 0, 0, '45', '244', true);
        $pdf->MultiCell(155, 0, $this->formulario5->Medicamento->getAval(), 0, 'L', 0, 0, '45', '250', true);
        $pdf->MultiCell(140, 0, $this->formulario5->Medicamento->getRegistroSanitario(), 0, 'L', 0, 0, '60', '256', true);
        $pdf->MultiCell(80, 0, $this->formulario5->Medicamento->getCertificadoControl(), 0, 'L', 0, 0, '120', '262', true);

        $pdf->Output('Formulario005.pdf', 'I');
        throw new sfStopException();
   }
   public function executeListIrProductos(sfWebRequest $request)
   {
        $this->redirect(sfContext::getInstance()->getRouting()->generate('medicamento'));
   }
   public function executeListIrEmpresa(sfWebRequest $request)
   {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id='.$empresa->getId());
   }
//   
//  public function executeEdit(sfWebRequest $request)
//  {
//    $this->formulario5 = $this->getRoute()->getObject();
//    $this->form = $this->configuration->getForm($this->formulario5);
//  }
   public function executeNew(sfWebRequest $request)
  {
    $this->form = $this->configuration->getForm();
    $this->formulario5 = $this->form->getObject();
    $medicamento = $this->getUser()->getAttribute('medicamento');
    $this->form->setDefault('medicamento_id', $medicamento->getId());
  }
  
    protected function processForm(sfWebRequest $request, sfForm $form)
    {
      $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
      if ($form->isValid())
      {
        $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

        try {
          $formulario5 = $form->save();
          $formulario = new Formulario();
          $formulario -> save();
          $formulario5 -> setFormulario($formulario);
          $formulario5 -> save();
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

        $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $formulario5)));

        if ($request->hasParameter('_save_and_add'))
        {
          $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

          $this->redirect('@formulario5_new');
        }
        else
        {
          $this->getUser()->setFlash('notice', $notice);

          $this->redirect(array('sf_route' => 'formulario5_edit', 'sf_subject' => $formulario5));
        }
      }
      else
      {
        $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
      }
    }
}
