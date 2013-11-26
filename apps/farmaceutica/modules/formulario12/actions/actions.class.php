<?php

require_once dirname(__FILE__).'/../lib/formulario12GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/formulario12GeneratorHelper.class.php';

/**
 * formulario12 actions.
 *
 * @package    anbeed
 * @subpackage formulario12
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario12Actions extends autoFormulario12Actions
{
    public function executeListEtapa(sfWebRequest $request)
    {
        $form = $this->getRoute()->getObject();
        
        $this->redirect('etapaform12/new?idform='.$form->Formulario->getId());
    }
    
    public function executePrint(sfWebRequest $request)
    {
        $this->formulario12 = $this->getRoute()->getObject();
        $config = sfTCPDFPluginConfigHandler::loadConfig();
                  sfTCPDFPluginConfigHandler::includeLangFile(
                          $this->getUser()->getCulture());
        $page_size = array(210,320);
        $pdf = new sfTCPDF('P', PDF_UNIT, $page_size, true, 'UTF-8', false);
        
        // Informacion el documento
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Capsule Systems');
        $pdf->SetTitle('Formulario');
        $pdf->SetSubject('ANBEED SRL');
        $pdf->SetKeywords('TCPDF, PDF, ANBEED SRL, Formulario012, impresion');
        
        //set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $pdf->SetPrintHeader(false);
        $pdf->SetPrintFooter(false);
        
        //set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        
        // Set font
        $pdf->SetFont('courier', 'B', 11, '', true);
        
        // Add a page
        $pdf->AddPage();
        
        //definimos la variable para el eje y
        $y = 83;
        $x = -3;
        
        //Revisamos el tipo de tramite
            // inicializamos en el primero
        $y_tipo_tramite = $y;
        if($this->formulario12->getTipoTramiteFormulario12Id() == 2)
            $y_tipo_tramite += 6;
        if($this->formulario12->getTipoTramiteFormulario12Id() == 3)
            $y_tipo_tramite += 6;
            //Imprimimos X del tipo de tramite
        $pdf->MultiCell(10, 0, 'X', 0, 'L', 0, 0, $x+76, $y_tipo_tramite, true);
        
        //Revisamos el origen
        $y_origen = $y; // inicializamos en el primero
        if($this->formulario12->getOrigenFormularioId() == 2)
            $y_origen += 6;
        //Imprimimos X del origen
        $pdf->MultiCell(10, 0, 'X', 0, 'L', 0, 0, $x+135, $y_origen, true);
        
        //Reduciendo tamaño de letra
        $pdf->SetFont('courier', '', 11, '', true);
        
        //Datos de la empresa
        $pdf->MultiCell(160, 0, $this->formulario12->Reactivo->Empresa, 
                0, 'L', 0, 0, $x+45, $y+=25, true);
        $pdf->MultiCell(170, 0, $this->formulario12->Reactivo->Empresa->getNumResolucion(),
                0, 'L', 0, 0, $x+60, $y+=6, true);
        $pdf->MultiCell(50, 0, funciones::FormatearFecha(
                $this->formulario12->Reactivo->Empresa->getFechaResolucion()), 
                0, 'L', 0, 0, $x+125, $y, true);
        $pdf->MultiCell(150, 0, $this->formulario12->Reactivo->Empresa->RepresentanteLegal, 
                0, 'L', 0, 0, $x+55, $y+=6, true);
        $pdf->MultiCell(160, 0, $this->formulario12->Reactivo->Empresa->getDireccion(),
                0, 'L', 0, 0, $x+40, $y+=6, true);
        $pdf->Multicell(100, 0, $this->formulario12->Reactivo->Empresa->getEmail(),
                0, 'L', 0, 0, $x+35, $y+=5, true);
        $pdf->Multicell(25, 0, $this->formulario12->Reactivo->Empresa->getTelefono1(),
                0, 'L', 0, 0, $x+122, $y, true);
        $pdf->Multicell(25, 0, $this->formulario12->Reactivo->Empresa->getFax(),
                0, 'L', 0, 0, $x+157, $y, true);
        $pdf->MultiCell(70, 0, $this->formulario12->Reactivo->Empresa->RegenteFarmaceutico,
                0, 'L', 0, 0, $x+35, $y+=6, true);
        $pdf->MultiCell(30, 0, $this->formulario12->Reactivo->Empresa->RegenteFarmaceutico->
                getMatriculaProfesional(), 0, 'L', 0, 0, $x+122, $y, true);
        $pdf->MultiCell(30, 0, $this->formulario12->Reactivo->Empresa->RegenteFarmaceutico->
                Persona->getCI(), 0, 'L', 0, 0, $x+160, $y, true);
        
        //Datos del laboratorio
        $pdf->MultiCell(145, 0, $this->formulario12->Reactivo->LaboratorioFabricante,
                0, 'L', 0, 0, $x+45, $y+=16, true);
        $pdf->MultiCell(155, 0, $this->formulario12->Reactivo->LaboratorioFabricante->
                getBajoLicencia(), 0, 'L', 0, 0, $x+45, $y+=6, true);
        $pdf->MultiCell(170, 0, $this->formulario12->Reactivo->LaboratorioFabricante->
                getPara(), 0, 'L', 0, 0, $x+30, $y+=6, true);
        $pdf->MultiCell(155, 0, strtoupper($this->formulario12->Reactivo->LaboratorioFabricante->
                Pais->getNombre()), 0, 'L', 0, 0, $x+50, $y+=5, true);
        $pdf->SetFont('courier', '', 9, '', true);
        $pdf->MultiCell(80, 10, $this->formulario12->Reactivo->LaboratorioFabricante->
                getDireccion(), 0, 'L', 0, 0, $x+40, $y+=6, true);
        $pdf->SetFont('courier', '', 11, '', true);
        $pdf->MultiCell(125, 0, $this->formulario12->Reactivo->LaboratorioFabricante->
                getTelefono(), 0, 'L', 0, 0, $x+140, $y, true);
        
        //Datos del producto
        $pdf->MultiCell(150, 0, $this->formulario12->Reactivo->getNombreComercial(),
                0, 'L', 0, 0, $x+60, $y+=14, true);
        $pdf->MultiCell(150, 0, $this->formulario12->Reactivo->getCatalogo(),
                0, 'L', 0, 0, $x+60, $y+=6, true);
        $pdf->MultiCell(145, 10, $this->formulario12->Reactivo->getUso(),
                0, 'L', 0, 0, $x+60, $y+=6, true);
        $pdf->MultiCell(145, 0, $this->formulario12->Reactivo->getPresentacion(),
                0, 'L', 0, 0, $x+50, $y+=11, true);
        $pdf->MultiCell(145, 0, $this->formulario12->Reactivo->getConservacion(),
                0, 'L', 0, 0, $x+50, $y+=6, true);
        $pdf->MultiCell(80, 0, $this->formulario12->Reactivo->getPeriodoValidez(),
                0, 'L', 0, 0, $x+145, $y, true);
        $pdf->MultiCell(40, 0, $this->formulario12->Reactivo->getComponente(),
                0, 'L', 0, 0, $x+55, $y+=10, true);
        
        //Datos del Formulario
        $pdf->MultiCell(120, 0, $this->formulario12->getModificacion(),
                0, 'L', 0, 0, $x+60, $y+=30, true);
//        $pdf->MultiCell(35, 0, $this->formulario12->getFecha(),
//                0, 'L', 0, 0, $x+110, $y+=10, true);
        
        $fecha_registro = funciones::FechaEspanol2($this->formulario12->getFecha());
        
        $pdf->MultiCell(60, 0, $fecha_registro[0],0, 'L', 0, 0, $x+107, $y+=30, true);
        $pdf->MultiCell(60, 0, $fecha_registro[1],0, 'L', 0, 0, $x+127, $y, true);
        $pdf->MultiCell(60, 0, $fecha_registro[3],0, 'L', 0, 0, $x+175, $y, true);
        
        $pdf->Output('Formulario012.pdf', 'I');
        throw new sfStopException();
    }
    
    public function executeListIrProductos(sfWebRequest $request)
    {
        $this->redirect(sfContext::getInstance()->getRouting()->generate('reactivo'));
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
        $this->formulario12 = $this->form->getObject();
        $reactivo = $this->getUser()->getAttribute('reactivo');
        $this->form->setDefault('reactivo_id', $reactivo->getId());
        
        /*Recuperamos el registro sanitario is tiene el producto*/
        $this->form->setDefault('registro_sanitario', $reactivo->getRegistroSanitario());
    }
    
    
    public function executeEdit(sfWebRequest $request)
    {
        $this->formulario12 = $this->getRoute()->getObject();
        $this->form = $this->configuration->getForm($this->formulario12);

        /*Recuperamos el registro sanitario is tiene el producto*/
        $this->form->setDefault('registro_sanitario', $this->formulario12->Reactivo->getRegistroSanitario());
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
          $formulario12 = $form->save();
          /*guardamos en medicamento el registro sanitario*/
          $formulario12->Reactivo->setRegistroSanitario($registro);
          $formulario12->Reactivo->save();
          
          if($is_new)
          {
            $formulario = new Formulario();
            $formulario -> save();
            $formulario12 -> setFormulario($formulario);
            $formulario12 -> save();
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

        $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $formulario12)));

        if ($request->hasParameter('_save_and_add'))
        {
          $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

          $this->redirect('@formulario12_new');
        }
        else
        {
          $this->getUser()->setFlash('notice', $notice);

          $this->redirect(array('sf_route' => 'formulario12_edit', 'sf_subject' => $formulario12));
        }
      }
      else
      {
        $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
      }
    }
}
