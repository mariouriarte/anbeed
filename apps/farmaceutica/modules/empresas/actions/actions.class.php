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
function FechaEspanol($fecha)
{
    $i = strtotime($fecha);
    $ano = date('Y', $i);
    $mes = date('n',$i);
    $dia = date('d',$i);
    $diasemana = date('w',$i);
    $dias = array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    return  $dias[$diasemana]." ".$dia." de ".$meses[$mes-1]. " de ".$ano ;
}

class empresasActions extends autoEmpresasActions
{
 
    public function executePrint(sfWebRequest $request)
    {
        $this->empresa = $this->getRoute()->getObject();
        $config = sfTCPDFPluginConfigHandler::loadConfig();
                  sfTCPDFPluginConfigHandler::includeLangFile($this->getUser()->getCulture());

        $pdf = new sfTCPDF();
        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Capsule Systems');
        $pdf->SetTitle('Formulario');
        $pdf->SetSubject('ANBEED SRL');
        $pdf->SetKeywords('TCPDF, PDF, ANBEED SRL, Formulario003, impresion');

        // set default header data
        //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING);

        // set header and footer fonts
        //$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        //$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        //
        //set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
       // $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        //$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        //set auto page breaks
        //$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        //set image scale factor
        //$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // ---------------------------------------------------------

        // set default font subsetting mode
        //$pdf->setFontSubsetting(true);

        // Set font
        // dejavusans is a UTF-8 Unicode font, if you only need to
        // print standard ASCII chars, you can use core fonts like
        // helvetica or times to reduce file size.
        $pdf->SetFont('dejavusans', '', 8, '', true);

        // Add a page
        // This method has several options, check the source code documentation for more information.
        $pdf->AddPage();
        $pdf->MultiCell(55, 0, $this->empresa, 1, 'C', 0, 0, '50', '20', true);
        $pdf->MultiCell(55, 0, $this->empresa->getNumResolucion(), 1, 'C', 0, 0, '50', '25', true);
        $pdf->MultiCell(55, 0, $this->empresa->getFechaResolucion(), 1, 'C', 0, 0, '50', '30', true);
        $pdf->MultiCell(75, 0, $this->empresa->getDireccion(), 1, 'C', 0, 0, '50', '35', true);
        $pdf->MultiCell(55, 0, $this->empresa->getCasilla(), 1, 'C', 0, 0, '50', '40', true);
        $pdf->MultiCell(55, 0, $this->empresa->getTelefono1().' '.$this->empresa->getTelefono2(), 1, 'C', 0, 0, '50', '45', true);
        $pdf->MultiCell(55, 0, $this->empresa->getEmail(), 1, 'C', 0, 0, '50', '50', true);
        
        
        $pdf->MultiCell(55, 0, $this->empresa, 1, 'C', 0, 0, '50', '20', true);
        $pdf->MultiCell(55, 0, $this->empresa, 1, 'C', 0, 0, '50', '20', true);
        $pdf->MultiCell(55, 0, $this->empresa, 1, 'C', 0, 0, '50', '20', true);
        $pdf->MultiCell(55, 0, $this->empresa, 1, 'C', 0, 0, '50', '20', true);
        $pdf->MultiCell(55, 0, $this->empresa, 1, 'C', 0, 0, '50', '20', true);
        $pdf->MultiCell(55, 0, $this->empresa, 1, 'C', 0, 0, '50', '20', true);
        $pdf->MultiCell(55, 0, $this->empresa, 1, 'C', 0, 0, '50', '20', true);
        
        
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
