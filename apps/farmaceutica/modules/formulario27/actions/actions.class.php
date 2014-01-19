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
    public function executeListEtapa(sfWebRequest $request)
    {
        $form = $this->getRoute()->getObject();
        
        $this->redirect('etapaform27/new?idform='.$form->Formulario->getId());
    }
    
    public function executePrint(sfWebRequest $request)
    {
        $this->formulario27 = $this->getRoute()->getObject();
        
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
        $pdf->SetFont('courier', 'B', 9, '', true);

        // Add a page
        $pdf->AddPage();
        
        //definimos la variable para el eje y
        $y = 77;
        $x = 0;
        
        //Datos Generales
        $y_datos_generales = $y;
        $x_datos_generales = $x+98;
        if($this->formulario27->getDatosFormulario27Id() == 2)
            $x_datos_generales += 85;
        if($this->formulario27->getDatosFormulario27Id() == 3)
            $y_datos_generales += 5;
        if($this->formulario27->getDatosFormulario27Id() == 4)
            {
                $x_datos_generales += 85;
                $y_datos_generales += 5;
            }
            
            //Imprimimos X en el dato general
        $pdf->MultiCell(10, 0, 'X', 0, 'L', 0, 0, $x_datos_generales, $y_datos_generales, true);
        
        //Revisamos el tipo de tramite
            // inicializamos en el primero
        $y_tipo_tramite = $y + 10;
        $x_tipo_tramite = $x+98;
        if($this->formulario27->getTipoTramiteFormulario27Id() == 2)
            $x_tipo_tramite += 85;
            //Imprimimos X del tipo de tramite
        $pdf->MultiCell(10, 0, 'X', 0, 'L', 0, 0, $x_tipo_tramite, $y_tipo_tramite , true);
        
        //Revisamos el origen
        $y_origen = $y + 15;
        $x_origen = $x+98; // inicializamos en el primero
        if($this->formulario27->getOrigenFormularioId() == 2)
            $x_origen += 85;
        //Imprimimos X del origen
        $pdf->MultiCell(10, 0, 'X', 0, 'L', 0, 0, $x_origen, $y_origen, true);
        
        //Reduciendo tamaño de letra
        $pdf->SetFont('courier', '', 10, '', true);
        
        //Datos de la empresa
        $pdf->MultiCell(150, 0, $this->formulario27->DispositivoMedico->Empresa
            ->RepresentanteLegal, 
            0, 'L', 0, 0, $x+45, $y+=36, true);
        $pdf->MultiCell(160, 0, $this->formulario27->DispositivoMedico->Empresa, 
            0, 'L', 0, 0, $x+40, $y+=5, true);
        $pdf->MultiCell(90, 0, $this->formulario27->DispositivoMedico->Empresa
            ->getNumResolucion(),
            0, 'L', 0, 0, $x+30, $y+=5, true);
        $pdf->MultiCell(55, 0, funciones::FormatearFecha(
            $this->formulario27->DispositivoMedico->Empresa->getFechaResolucion()), 
            0, 'L', 0, 0, $x+140, $y, true);
        $pdf->MultiCell(110, 0, $this->formulario27->DispositivoMedico->Empresa
            ->RegenteFarmaceutico,
            0, 'L', 0, 0, $x+55, $y+=5, true);
        $pdf->MultiCell(70, 0, $this->formulario27->DispositivoMedico->Empresa
            ->RegenteFarmaceutico->getMatriculaProfesional(),
            0, 'L', 0, 0, $x+130, $y, true);
        $pdf->SetFont('courier', '', 9, '', true);
        $pdf->MultiCell(90, 0, $this->formulario27->DispositivoMedico->Empresa
            ->getDireccion(),
            0, 'L', 0, 0, $x+40, $y+=5, true);
        $pdf->SetFont('courier', '', 10, '', true);
        $pdf->Multicell(50, 0, $this->formulario27->DispositivoMedico->Empresa
            ->getTelefono1(),
            0, 'L', 0, 0, $x+145, $y, true);

        //Datos del laboratorio
        $pdf->MultiCell(145, 0, $this->formulario27->DispositivoMedico->LaboratorioFabricante,
            0, 'L', 0, 0, $x+55, $y+=20, true);
        $pdf->MultiCell(155, 0, $this->formulario27->DispositivoMedico->LaboratorioFabricante
            ->getBajoLicencia(),
            0, 'L', 0, 0, $x+35, $y+=11, true);
        $pdf->MultiCell(155, 0, strtoupper($this->formulario27->DispositivoMedico->LaboratorioFabricante
            ->Pais->getNombre()), 
            0, 'L', 0, 0, $x+40, $y+=5, true);
        $pdf->MultiCell(125, 0, $this->formulario27->DispositivoMedico->LaboratorioFabricante
            ->getDireccion(), 
            0, 'L', 0, 0, $x+35, $y+=5, true);
        
        //Datos del producto
        $pdf->MultiCell(150, 0, $this->formulario27->DispositivoMedico->getNombreComercial(),
            0, 'L', 0, 0, $x+50, $y+=21, true);
        $pdf->MultiCell(150, 0, $this->formulario27->DispositivoMedico->getNombreGenerico(),
            0, 'L', 0, 0, $x+50, $y+=5, true);
        $pdf->MultiCell(120, 0, $this->formulario27->DispositivoMedico->getClasificacionRiesgo(),
            0, 'L', 0, 0, $x+75, $y+=5, true);
        $pdf->MultiCell(140, 0, $this->formulario27->DispositivoMedico->getCodigoInternacional(),
            0, 'L', 0, 0, $x+55, $y+=5, true);
        
        // Manual
        $x_manual = $x+152;
        if($this->formulario27->DispositivoMedico->getManual()==NULL)
            $x_manual += 15;
        $pdf->MultiCell(10, 0, 'X', 0, 'L', 0, 0, $x_manual, $y+=5, true);
        
        $pdf->MultiCell(145, 0, $this->formulario27->DispositivoMedico->getIndicaciones(),
            0, 'L', 0, 0, $x+50, $y+=5, true);
        $pdf->MultiCell(145, 0, $this->formulario27->DispositivoMedico->getPresentacion(),
            0, 'L', 0, 0, $x+40, $y+=5, true);
        $pdf->MultiCell(35, 0, $this->formulario27->DispositivoMedico->getCondicionEmpaque(),
            0, 'L', 0, 0, $x+90, $y+=5, true);
        $pdf->MultiCell(50, 0, $this->formulario27->DispositivoMedico->getVidaUtil(),
            0, 'L', 0, 0, $x+145, $y, true);
        $pdf->MultiCell(90, 0, $this->formulario27->DispositivoMedico->getMetodoDesecho(),
            0, 'L', 0, 0, $x+105, $y+=5, true);
        $pdf->MultiCell(120, 0, $this->formulario27->DispositivoMedico->getRegistroSanitario(),
            0, 'L', 0, 0, $x+60, $y+=5, true);
        
        //Datos del Formulario
        
        $fecha_formulario = funciones::FechaEspanol2($this->formulario27->getFecha());
        
        $pdf->MultiCell(60, 0, $fecha_formulario[0],0, 'L', 0, 0, $x+135, $y+=45, true);
        $pdf->MultiCell(60, 0, $fecha_formulario[1],0, 'L', 0, 0, $x+158, $y, true);
        $pdf->MultiCell(60, 0, $fecha_formulario[2],0, 'L', 0, 0, $x+185, $y, true);
        
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
        $dispositivo = $this->getUser()->getAttribute('dispositivo_medico');
        $this->form->setDefault('dispositivo_medico_id', $dispositivo->getId());
        /*Recuperamos el registro sanitario is tiene el producto*/
        $this->form->setDefault('registro_sanitario', $dispositivo->getRegistroSanitario());
    }
    
    
    public function executeEdit(sfWebRequest $request)
    {
        $this->formulario27 = $this->getRoute()->getObject();
        $this->form = $this->configuration->getForm($this->formulario27);

        /*Recuperamos el registro sanitario is tiene el producto*/
        $this->form->setDefault('registro_sanitario', $this->formulario27->DispositivoMedico->getRegistroSanitario());
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
          $formulario27 = $form->save();
          
          /*guardamos en medicamento el registro sanitario*/
          $formulario27->DispositivoMedico->setRegistroSanitario($registro);
          $formulario27->DispositivoMedico->save();
          if($is_new)
          {
              $formulario = new Formulario();
              $formulario -> save();
              $formulario27 -> setFormulario($formulario);
              $formulario27 -> save();
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
