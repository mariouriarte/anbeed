<?php

require_once dirname(__FILE__).'/../lib/formulario706GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/formulario706GeneratorHelper.class.php';

/**
 * formulario706 actions.
 *
 * @package    anbeed
 * @subpackage formulario706
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario706Actions extends autoFormulario706Actions
{
    public function executeListEtapa(sfWebRequest $request)
    {
        $form = $this->getRoute()->getObject();
        
        $this->redirect('etapaform706/new?idform='.$form->Formulario->getId());
    }
    
    public function executeListIrProductos(sfWebRequest $request)
    {
        $this->redirect('higiene');
    }
    
    public function executeListIrEmpresa(sfWebRequest $request)
    {
        $user = sfContext::getInstance()->getUser();
        
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id='.$empresa->getId());
    }
    
    public function executeNuevo(sfWebRequest $request)
    {
        $this->redirect('form706/new');
    }
    
    public function executeEditar(sfWebRequest $request)
    {
        $id = $request->getParameter('id');
        $this->redirect("form706/edit?id=$id");
    }
    
    // pdf
    public function executeExportPdf(sfWebRequest $request)
    {
        //$user = $this->getUser();
        //echo $id = $user->getAttribute('id');
        $form = $this->getRoute()->getObject();
        
        // estilos para este tipo de documento
        $css = file_get_contents(sfConfig::get('sf_root_dir') . '/web/css/form_decision_pdf.css');
        $css = '<style>'.$css.'</style>';
        
        $html = $this->getPartial('formulario706/contenido_impresion', 
            array('form' => $form));
        
        // PDF
        // ------------------------------------
        $this->empresa = $this->getRoute()->getObject();
        $config = sfTCPDFPluginConfigHandler::loadConfig();
                  sfTCPDFPluginConfigHandler::includeLangFile($this->getUser()->getCulture());

        // pdf object, reescrito
        $pdf = new sfTCPDF("P", PDF_UNIT, 'Letter', true, 'UTF-8');
        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Capsule Systems');
        $pdf->SetTitle('Formulario');
        $pdf->SetSubject('ANBEED SRL');
        $pdf->SetKeywords('TCPDF, PDF, ANBEED SRL, Formulario706, impresion');
        
        // set default header data
//        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

       
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        // quitar la linea del header
        $pdf->setHeaderData('',0,'','',array(0,0,0), array(255,255,255) );
        
        
        // set default monospaced font
         $pdf->SetMargins(25, 25, 20);
        $pdf->SetFont('dejavusans', '', 8, '', true);
        $pdf->AddPage();
        $pdf->writeHTML($css.$html, true, false, true, false, '');
        
        // ---------------------------------------------------------
        // Close and output PDF document
        $pdf->Output('Formulario706.pdf', 'I');

        // Stop symfony process
        throw new sfStopException();
    }
}
