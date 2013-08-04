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
//    public function executePDF(sfWebRequest $request)
//    {
//        //$html = $this->getPartial('formulario706/para_impresion');
        
    public function executeTest()
{
  $config = sfTCPDFPluginConfigHandler::loadConfig();
  sfTCPDFPluginConfigHandler::includeLangFile($this->getUser()->getCulture());
 
  // pdf object
  $pdf = new sfTCPDF();
 
  // set document information
  $pdf->SetCreator(PDF_CREATOR);
  $pdf->SetAuthor('Nicola Asuni');
  $pdf->SetTitle('TCPDF Example 001');
  $pdf->SetSubject('TCPDF Tutorial');
  $pdf->SetKeywords('TCPDF, PDF, example, test, guide');
 
  // set default header data
  $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING);
 
  // set header and footer fonts
  $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
  $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
 
  // set default monospaced font
  $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
 
  //set margins
  $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
  $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
  $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
 
  //set auto page breaks
  $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
 
  //set image scale factor
  $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
 
  // ---------------------------------------------------------
 
  // set default font subsetting mode
  $pdf->setFontSubsetting(true);
 
  // Set font
  // dejavusans is a UTF-8 Unicode font, if you only need to
  // print standard ASCII chars, you can use core fonts like
  // helvetica or times to reduce file size.
  $pdf->SetFont('dejavusans', '', 14, '', true);
 
  // Add a page
  // This method has several options, check the source code documentation for more information.
  $pdf->AddPage();
 
  // Set some content to print
  $html = <<<EOD
  <h1>Welcome to <a href="http://www.tcpdf.org" style="text-decoration:none;background-color:#CC0000;color:black;">&nbsp;<span style="color:black;">TC</span><span style="color:white;">PDF</span>&nbsp;</a> and the <a href="http://www.symfony-project.org/plugins/sfTCPDFPlugin" style="text-decoration:none;background-color:#CC0000;color:black;">sfTC<span style="color:white;">PDF</span></span> symfony1 plugin</a>!</h1>
  <i>This is the first example of TCPDF library.</i>
  <p>I can handle UTF8:  â‚¬Ã Ã¨Ã©Ã¬Ã²Ã¹</p>
  <p>This text is printed using the <i>writeHTMLCell()</i> method but you can also use: <i>Multicell(), writeHTML(), Write(), Cell() and Text()</i>.</p>
  <p>Please check the source code documentation and other examples for further information.</p>
  <p style="color:#CC0000;">TO IMPROVE AND EXPAND TCPDF I NEED YOUR SUPPORT, PLEASE <a href="http://sourceforge.net/donate/index.php?group_id=128076">MAKE A DONATION!</a></p>
EOD;
 
  // Print text using writeHTMLCell()
  $pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);
 
  // ---------------------------------------------------------
 
  // Close and output PDF document
  // This method has several options, check the source code documentation for more information.
  $pdf->Output('example_001.pdf', 'I');
 
  // Stop symfony process
  throw new sfStopException();
}
 
}
