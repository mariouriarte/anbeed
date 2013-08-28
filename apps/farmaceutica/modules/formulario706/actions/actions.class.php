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
//        $regional_id = $user->getAttribute('regional_id');
        
        // estilos para este tipo de documento
//        $css = file_get_contents(sfConfig::get('sf_root_dir') . '/web/css/listado_general_pdf.css');
//        $css = '<style>'.$css.'</style>';
//        
        $html = $this->getPartial('formulario706/contenido_impresion');
        
        // PDF
        // ------------------------------------
        $this->empresa = $this->getRoute()->getObject();
        $config = sfTCPDFPluginConfigHandler::loadConfig();
                  sfTCPDFPluginConfigHandler::includeLangFile($this->getUser()->getCulture());

        // pdf object, reescrito
        $pdf = new sfTCPDF();
        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Capsule Systems');
        $pdf->SetTitle('Formulario');
        $pdf->SetSubject('ANBEED SRL');
        $pdf->SetKeywords('TCPDF, PDF, ANBEED SRL, Formulario706, impresion');
        
        //$pdf->setHtmlHeader($css . $tbl_header);
        
        // set default header data
//        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

        // set header and footer fonts
//        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
//         $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetFont('dejavusans', '', 8, '', true);
        $pdf->AddPage();
        //echo '<table ' .$table;
        //$pdf->writeHTML($html, true, false, false, false, '');
        $pdf->writeHTML($html, true, false, true, false, '');
        
        // ---------------------------------------------------------
        // Close and output PDF document
        $pdf->Output('Formulario706.pdf', 'I');

        // Stop symfony process
        throw new sfStopException();
    }
    
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
        
        
        
        //$html = "Imprimiremos la empresa $this->empresa";
        //$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);
        //$pdf->writeHTML($html, true, false, false, 0);
        $pdf->Output('Formulario003.pdf', 'I');
        throw new sfStopException();
    }
}
