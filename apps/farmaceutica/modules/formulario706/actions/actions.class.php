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
    public function executePdf(sfWebRequest $request)
    {
//        $user = $this->getUser();
//        $regional_id = $user->getAttribute('regional_id');
        
        // estilos para este tipo de documento
        $css = file_get_contents(sfConfig::get('sf_root_dir') . '/web/css/listado_general_pdf.css');
        $css = '<style>'.$css.'</style>';
        
        // Cabecera
        $tbl_header = $this->getPartial('listado_general_rubro/cabecera_listado',
                                        array('fecha_inicio' => $fecha_inicio,
                                              'fecha_fin'    => $fecha_fin,
                                              'resumen'      => 0,
                                              'letras'       => 0));
        
        // PDF
        // ------------------------------------
        $config = sfTCPDFPluginConfigHandler::loadConfig();
        sfTCPDFPluginConfigHandler::includeLangFile($this->getUser()->getCulture());

        // pdf object, reescrito
        $pdf = new ReportePDF("L", PDF_UNIT, 'A4', true, 'UTF-8');
        $pdf->setHtmlHeader($css . $tbl_header);
        $pdf->setFechaInicio($fecha_inicio);
        $pdf->setFechaFin($fecha_fin);
        
        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Sistema SACFI');
        $pdf->SetTitle('Sistema de Activos Fijos');
        $pdf->SetSubject('ACTIVOS FIJOS');
        $pdf->SetKeywords('CPS, SACFI, ACTIVOS');

        // set default header data
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        //set margins
        $pdf->SetMargins(15, 40, 15);
        
        // set margen del header hacia arriba
        $pdf->SetHeaderMargin(10);
        
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        //set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        //set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // ---------------------------------------------------------
        // set default font subsetting mode
        $pdf->setFontSubsetting(true);

        //$pdf->SetPrintHeader(true);
        
        // Add a page
        $resolution= array(377, 279);
        // This method has several options, check the source code documentation for more information.
        $pdf->AddPage('L', $resolution, false, false);
        //$pdf->Write(0, 'Titulo 1', '', 0, 'L', true, 0, false, false, 0);
        
        // -------------------------------------------------------------
        //echo $css;
        foreach($html as $table)
        {
            //echo '<table ' .$table;
            $pdf->writeHTML($css . '<table ' . $table, true, false, false, false, '');
        }
        
        // ---------------------------------------------------------
        // Close and output PDF document
        $pdf->Output('example_001.pdf', 'I');

        // Stop symfony process
        throw new sfStopException();
    }
}
