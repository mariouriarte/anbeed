<?php

require_once dirname(__FILE__).'/../lib/empresasGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/empresasGeneratorHelper.class.php';

/**
 * empresas actions.
 *
 * @package    anbeed
 * @subpackage empresas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */

class empresasActions extends autoEmpresasActions
{
 
    public function executePrint(sfWebRequest $request)
    {
        $this->empresa = $this->getRoute()->getObject();
        $config = sfTCPDFPluginConfigHandler::loadConfig();
                  sfTCPDFPluginConfigHandler::includeLangFile($this->getUser()->getCulture());

        $pdf = new sfTCPDF('P', PDF_UNIT, 'A4', true, 'UTF-8', false);
        // Informacion el documento
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Capsule Systems');
        $pdf->SetTitle('Formulario');
        $pdf->SetSubject('ANBEED SRL');
        $pdf->SetKeywords('TCPDF, PDF, ANBEED SRL, Formulario003, impresion');

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
        $pdf->SetFont('dejavusans', '', 10, '', true);

        // Add a page
        // This method has several options, check the source code documentation for more information.
        $pdf->AddPage();
        
        $pdf->MultiCell(55, 0, funciones::FormatearFecha($this->empresa->getFechaRegistro()), 0, 'L', 0, 0, '135', '72', true);
        $pdf->MultiCell(135, 0, $this->empresa, 0, 'L', 0, 0, '70', '84', true);
        $pdf->MultiCell(100, 0, $this->empresa->getNumResolucion(), 0, 'L', 0, 0, '75', '91', true);
        $pdf->MultiCell(100, 0, funciones::FormatearFecha($this->empresa->getFechaResolucion()), 0, 'L', 0, 0, '75', '98', true);
        $pdf->MultiCell(160, 0, $this->empresa->getDireccion(), 0, 'L', 0, 0, '40', '106', true);
        $pdf->MultiCell(165, 0, $this->empresa->getCasilla(), 0, 'L', 0, 0, '35', '113', true);
        $pdf->MultiCell(160, 0, $this->empresa->getTelefono1().' '.$this->empresa->getTelefono2(), 0, 'L', 0, 0, '40', '120', true);
        $pdf->MultiCell(165, 0, $this->empresa->getEmail(), 0, 'L', 0, 0, '35', '128', true);
        $pdf->MultiCell(135, 0, $this->empresa->getActividad(), 0, 'L', 0, 0, '65', '135', true);
        $pdf->MultiCell(75, 0, $this->empresa->getRegistroCamara(), 0, 'L', 0, 0, '125', '142', true);
        $pdf->MultiCell(145, 0, $this->empresa->getFundempresa(), 0, 'L', 0, 0, '55', '150', true);
        $pdf->MultiCell(105, 0, $this->empresa->getNit(), 0, 'L', 0, 0, '95', '157', true);
        $pdf->MultiCell(60, 0, $this->empresa->getLicenciaFuncionamiento(), 0, 'L', 0, 0, '140', '164', true);
        $pdf->MultiCell(125, 0, $this->empresa->RepresentanteLegal, 0, 'L', 0, 0, '75', '179', true);
        $pdf->MultiCell(145, 0, $this->empresa->RepresentanteLegal->Persona->getCi(), 0, 'L', 0, 0, '55', '186', true);
        $pdf->MultiCell(125, 0, $this->empresa->RegenteFarmaceutico, 0, 'L', 0, 0, '75', '200', true);
        $pdf->MultiCell(145, 0, $this->empresa->RegenteFarmaceutico->Persona->getCi(), 0, 'L', 0, 0, '55', '208', true);
        $pdf->MultiCell(140, 0, $this->empresa->RegenteFarmaceutico->getMatriculaProfesional(), 0, 'L', 0, 0, '60', '215', true);
        $pdf->MultiCell(140, 0, $this->empresa->RegenteFarmaceutico->getCarnetColegiado(), 0, 'L', 0, 0, '60', '222', true);
        $pdf->MultiCell(150, 40, $this->empresa->getObservacion(), 0, 'L', 0, 0, '50', '230', true);
//                
        
        
        //$html = "Imprimiremos la empresa $this->empresa";
        //$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);
        //$pdf->writeHTML($html, true, false, false, 0);
        $pdf->Output('Formulario003.pdf', 'I');
        throw new sfStopException();
    }
    
    public function executeIndex(sfWebRequest $request)
    {
        parent::executeIndex($request);
        
        $user = $this->getUser();
        $user->getAttributeHolder()->remove('empresa');
        $user->getAttributeHolder()->remove('medicamento');
        $user->getAttributeHolder()->remove('cosmetico');
        $user->getAttributeHolder()->remove('dispositivo_medico');
        $user->getAttributeHolder()->remove('higiene');
    }
    
    public function executeAdministrarEmpresa(sfWebRequest $request)
    {
        $user = $this->getUser();
        
        $this->empresa = $this->getRoute()->getObject();
        
        $user->setAttribute('empresa', $this->empresa);
        
        $environment = sfConfig::get('sf_environment');
        if($environment == 'dev')
        {
            $this->env = '_dev';
        } else if($environment == 'prod')
        {
            $this->env = '';
        }
    }
    
    public function executeNew(sfWebRequest $request)
    {
        parent::executeNew($request);
        
        $user = $this->getUser();
    } 
    
    public function executeFilter(sfWebRequest $request)
    {
        parent::executeFilter($request);
    }    
    
    public function executeListIrPortal(sfWebRequest $request)
    {
        //$this->getUser()->setAttribute('empresa', NULL);
        $this->redirect('/portal_dev.php/inicio/index');
    }
    
    // Cambiado para que sf_user tenga a la empresay se pueda crear
    // empresas sin conflictos
    protected function processForm(sfWebRequest $request, sfForm $form)
    {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      try {
        $empresa = $form->save();
        
        // -----------
        $user = $this->getUser();
        $user->setAttribute('empresa', $empresa);
        // -----------
        
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

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $empresa)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@empresa_new');
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);

        $this->redirect(array('sf_route' => 'empresa_edit', 'sf_subject' => $empresa));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
    }
}
