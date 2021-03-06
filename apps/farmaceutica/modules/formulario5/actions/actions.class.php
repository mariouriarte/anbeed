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
   public function executePrintfcc(sfWebRequest $request)
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
        $pdf->SetFont('courier', '', 13, '', true);

        // Add a page
        // This method has several options, check the source code documentation for more information.
        $pdf->AddPage();

        /*Imprimimos titulo*/
        $pdf->MultiCell(78, 0, 'FÓRMULA CUALI-CUANTITATIVA', 'B', 'L', 0, 0, 65, 30, true);
        
        $pdf->SetFont('courier', '', 13, '', true);
        /*Imprimimos el producto*/
        $pdf->MultiCell(78, 0, 'Producto:', 0, 'L', 0, 0, 15, 45, true);
        $pdf->MultiCell(78, 0, $this->formulario5->Medicamento, 0, 'L', 0, 0, 45, 45, true);
        
        /*Imprimimos la formula del medicamento*/                                                           
        $q = Doctrine_Core::getTable('DetalleFormulaCc')->getIngredientes($this->formulario5->Medicamento->getFormulaCcId());
        $ingredientes = $q->execute();
        $pdf->SetFont('courier', '', 13, '', true);
        $html = '<br><br><br><table border="1" width="100%" cellpadding="2" cellspacing="0">
                    <tr bgcolor="#EEE">
                        <th width="70%"><b>INGREDIENTE</b></th>
                        <th width="15%"><b>CANTIDAD</b></th>
                        <th width="15%"><b>UNIDAD</b></th>
                    </tr>
                    <tr>
                        <td colspan="3">'.$this->formulario5->Medicamento->FormulaCc->getContenido().':</td>
                    </tr>
                    <tr bgcolor="#EEE">
                        <td colspan="3"><b>PRINCIPIO ACTIVO:</b></td>
                    </tr>
                    <tr>
                        <td>'.$this->formulario5->Medicamento->FormulaCc->Ingrediente.'</td>
                        <td align="center">'.$this->formulario5->Medicamento->FormulaCc->getCantidad().'</td>
                        <td align="center">'.$this->formulario5->Medicamento->FormulaCc->getUnidad().'</td>
                    </tr>
                    <tr bgcolor="#EEE">
                        <td colspan="3"><b>EXCIPIENTES:</b></td>
                    </tr>
                    ';
        
        foreach ($ingredientes as $ingrediente)
        {
            $html.='
                <tr>
                    <td>'.$ingrediente->Ingrediente[0].'</td>
                    <td align="center">'.$ingrediente->getCantidad().'</td>
                    <td align="center">'.$ingrediente->getUnidad().'</td>
                </tr>
                ';
        }
        $html.="</table>";
        //echo $html;
        $pdf->writeHTML($html, true, FALSE, true, FALSE, 'L');
        $pdf->Output('FormulaCc.pdf', 'I');
        throw new sfStopException();
   }
   public function executePrint(sfWebRequest $request)
   {
        $this->formulario5 = $this->getRoute()->getObject();
        
        $config = sfTCPDFPluginConfigHandler::loadConfig();
                  sfTCPDFPluginConfigHandler::includeLangFile($this->getUser()->getCulture());
        
        $page_size = array(210,320);
        $pdf = new sfTCPDF('P', PDF_UNIT, $page_size, true, 'UTF-8', false);
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
        $pdf->SetFont('courier', '', 13, '', true);

        // Add a page
        // This method has several options, check the source code documentation for more information.
        $pdf->AddPage();

        //definimos la variable para el eje y
        $y = 94;
        $x = 0;
        
        /*Revisamos el tipo de tramite*/
        $y_tipo_tramite = $y; // inicializamos en el primero
        if($this->formulario5->getTipoTramiteFormulario5Id() == 2)
            $y_tipo_tramite += 5;
        if($this->formulario5->getTipoTramiteFormulario5Id() == 3)
            $y_tipo_tramite += 11;
        if($this->formulario5->getTipoTramiteFormulario5Id() == 4)
            $y_tipo_tramite += 16;
        /*Imprimimos X del tipo de tramite*/
        $pdf->MultiCell(10, 0, 'X', 0, 'L', 0, 0, $x+73, $y_tipo_tramite, true);
        
        /*Revisamos el tipo de producto*/
        $y_tipo_producto = $y; // inicializamos en el primero
        if($this->formulario5->getTipoProductoFormulario5Id() == 2)
            $y_tipo_producto += 5;
        if($this->formulario5->getTipoProductoFormulario5Id() == 3)
            $y_tipo_producto += 11;
        if($this->formulario5->getTipoProductoFormulario5Id() == 4)
            $y_tipo_producto += 16;
        if($this->formulario5->getTipoProductoFormulario5Id() == 5)
            $y_tipo_producto += 21;
        if($this->formulario5->getTipoProductoFormulario5Id() == 6)
            $y_tipo_producto += 26;
        /*Imprimimos X del tipo de tramite*/
        $pdf->MultiCell(10, 0, 'X', 0, 'L', 0, 0, $x+164, $y_tipo_producto, true);
        
        /*Revisamos el origen*/
        $y+=22;
        $y_origen = $y; // inicializamos en el primero
        if($this->formulario5->getOrigenFormularioId() == 2)
            $y_origen += 5;
        
        
        /*Imprimimos X del Origen*/
        $pdf->MultiCell(10, 0, 'X', 0, 'L', 0, 0, $x+73, $y_origen, true);
        
        /*tamaño y tipo de letra*/
        $pdf->SetFont('courier', '', 13, '', true);
        
        /*Datos de la empresa*/
        $pdf->MultiCell(160, 0, $this->formulario5->Medicamento->Empresa,
            0, 'L', 0, 0, $x+45, $y+=17, true);
        $pdf->MultiCell(170, 0, $this->formulario5->Medicamento->Empresa->getNumResolucion(),
            0, 'L', 0, 0, $x+35, $y+=7, true);
        $pdf->MultiCell(50, 0, funciones::FormatearFecha($this->formulario5
            ->Medicamento->Empresa->getFechaResolucion()), 
            0, 'L', 0, 0, $x+150, $y, true);
        $pdf->MultiCell(150, 0, $this->formulario5->Medicamento->Empresa
            ->RepresentanteLegal, 
            0, 'L', 0, 0, $x+50, $y+=6, true);
        $pdf->SetFont('courier', '', 10, '', true);
        $pdf->MultiCell(120, 0, $this->formulario5->Medicamento->Empresa->getDireccion(),
            0, 'L', 0, 0, $x+35, $y+=6, true);
        $pdf->SetFont('courier', '', 13, '', true);
        $pdf->MultiCell(35, 0, $this->formulario5->Medicamento->Empresa->getTelefono1(),
            0, 'L', 0, 0, $x+150, $y, true);
        $pdf->MultiCell(110, 0, $this->formulario5->Medicamento->Empresa->RegenteFarmaceutico,
            0, 'L', 0, 0, $x+55, $y+=6, true);
        $pdf->MultiCell(30, 0, $this->formulario5->Medicamento->Empresa
            ->RegenteFarmaceutico->getMatriculaProfesional(),
            0, 'L', 0, 0, $x+150, $y, true);
       
        /*Datos del laboratorio*/
        $pdf->MultiCell(145, 0, $this->formulario5->Medicamento->LaboratorioFabricante, 
            0, 'L', 0, 0, $x+55, $y+=11, true);
        $pdf->MultiCell(155, 0, $this->formulario5->Medicamento->LaboratorioFabricante
            ->getBajoLicencia(), 
            0, 'L', 0, 0, $x+45, $y+=6, true);
        $pdf->MultiCell(170, 0, $this->formulario5->Medicamento->LaboratorioFabricante
            ->getPara(),
            0, 'L', 0, 0, $x+30, $y+=6, true);
        $pdf->MultiCell(155, 0, strtoupper($this->formulario5->Medicamento->LaboratorioFabricante
            ->Pais->getNombre()), 
            0, 'L', 0, 0, $x+45, $y+=6, true);
        $pdf->MultiCell(150, 0, $this->formulario5->Medicamento->LaboratorioFabricante
            ->getDireccion(), 
            0, 'L', 0, 0, $x+35, $y+=6, true);
        
        /*Datos del producto*/
        $pdf->MultiCell(150, 0, $this->formulario5->Medicamento->getNombreComercial(),
            0, 'L', 0, 0, $x+50, $y+=10, true);
        $pdf->MultiCell(150, 0, $this->formulario5->Medicamento->getNombreGenerico(), 
            0, 'L', 0, 0, $x+50, $y+=6, true);
        $pdf->MultiCell(145, 0, $this->formulario5->Medicamento->FormaFarmaceutica, 
            0, 'L', 0, 0, $x+55, $y+=6, true);
        $pdf->MultiCell(145, 0, $this->formulario5->Medicamento->getConcentracion(), 
            0, 'L', 0, 0, $x+55, $y+=6, true);
        $pdf->MultiCell(145, 0, $this->formulario5->Medicamento->ViaAdministracion, 
            0, 'L', 0, 0, $x+55, $y+=6, true);
        $pdf->MultiCell(80, 0, $this->formulario5->Medicamento->getAccionTerapeutica(),
            0, 'L', 0, 0, $x+50, $y+=6, true);
        $pdf->MultiCell(60, 0, $this->formulario5->Medicamento->TipoVenta, 
            0, 'L', 0, 0, $x+160, $y, true);
        $pdf->MultiCell(85, 0, $this->formulario5->Medicamento->getConservacion(), 
            0, 'L', 0, 0, $x+45, $y+=6, true);
        $pdf->MultiCell(35, 0, $this->formulario5->Medicamento->getPeriodoValidez(), 
            0, 'L', 0, 0, $x+165, $y, true);
        $pdf->MultiCell(140, 0, $this->formulario5->Medicamento->getEspecificacionEnvase(),
            0, 'L', 0, 0, $x+60, $y+=6, true);
        $pdf->MultiCell(155, 0, $this->formulario5->Medicamento->getEnvaseClinico(), 
            0, 'L', 0, 0, $x+45, $y+=6, true);
        $pdf->MultiCell(155, 0, $this->formulario5->Medicamento->getAval(),
            0, 'L', 0, 0, $x+45, $y+=6, true);
        $pdf->MultiCell(140, 0, $this->formulario5->Medicamento->getRegistroSanitario(),
            0, 'L', 0, 0, $x+60, $y+=6, true);
        $pdf->MultiCell(80, 0, $this->formulario5->Medicamento->getCertificadoControl(), 
            0, 'L', 0, 0, $x+120, $y+=6, true);

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
    /*Recuperamos el registro sanitario is tiene el medicamento*/
    $this->form->setDefault('registro_sanitario', $medicamento->getRegistroSanitario());
  }
  
  public function executeEdit(sfWebRequest $request)
  {
    $this->formulario5 = $this->getRoute()->getObject();
    $this->form = $this->configuration->getForm($this->formulario5);
    
    /*Recuperamos el registro sanitario is tiene el medicamento*/
    $this->form->setDefault('registro_sanitario', $this->formulario5->Medicamento->getRegistroSanitario());
  }
  
  
  
    protected function processForm(sfWebRequest $request, sfForm $form)
    {
      $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
      if ($form->isValid())
      {
        $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';
        $is_new = $form->getObject()->isNew();
        try {
            $registro =  $form['registro_sanitario']->getValue();
            $formulario5 = $form->save();
            
            /*guardamos en medicamento el registro sanitario*/
            $formulario5->Medicamento->setRegistroSanitario($registro);
            $formulario5->Medicamento->save();
            
          if($is_new)
          {
                $formulario = new Formulario();
                $formulario -> save();
                $formulario5 -> setFormulario($formulario);
                $formulario5 -> save();
          }
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
