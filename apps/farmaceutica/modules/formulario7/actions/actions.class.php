<?php

//require_once dirname(__FILE__).'/../lib/formulario7GeneratorConfiguration.class.php';
//require_once dirname(__FILE__).'/../lib/formulario7GeneratorHelper.class.php';

/**
 * formulario7 actions.
 *
 * @package    anbeed
 * @subpackage formulario7
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario7Actions extends autoFormulario7Actions
{
    
    public function executePrint(sfWebRequest $request)
    {
        $this->formulario7 = $this->getRoute()->getObject();
        
        $config = sfTCPDFPluginConfigHandler::loadConfig();
                  sfTCPDFPluginConfigHandler::includeLangFile($this->getUser()->getCulture());

        $pdf = new sfTCPDF('P', PDF_UNIT, 'A4', true, 'UTF-8', false);
        
        // Informacion el documento
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Capsule Systems');
        $pdf->SetTitle('Formulario');
        $pdf->SetSubject('ANBEED SRL');
        $pdf->SetKeywords('TCPDF, PDF, ANBEED SRL, Formulario007, impresion');

        //set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $pdf->SetPrintHeader(false);
        $pdf->SetPrintFooter(false);
        
        //set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        
        // Add a page
        $pdf->AddPage();

        //Tamaño de letra para datos
        $pdf->SetFont('dejavusans', '', 9, '', true);
        
        //Datos de la Empresa
        $pdf->MultiCell(110, 0, $this->formulario7->Producto->Medicamento->Empresa
            ->RegenteFarmaceutico, 
            0, 'L', 0, 0, '25', '41', true);
        $pdf->MultiCell(30, 0, $this->formulario7->Producto->Medicamento->Empresa
            ->RegenteFarmaceutico->getMatriculaProfesional(),
            0, 'L', 0, 0, '130', '41', true);
        $pdf->MultiCell(30, 0, $this->formulario7->Producto->Medicamento->Empresa,
            0, 'L', 0, 0, '25', '46', true);        
        
        //Tamaño letra para X's
        $pdf->SetFont('dejavusans', 'B', 13, '', true);
        
        //Revisamos el tipo de tramite
            // inicializamos en el primero
        $x_tipo_calificacion = 50; 
        if($this->formulario7->getTipoCalificacionId() == 2)
            $x_tipo_calificacion += 25;
        if($this->formulario7->getTipoCalificacionId() == 3)
            $x_tipo_calificacion += 25;
        if($this->formulario7->getTipoCalificacionId() == 4)
            $x_tipo_calificacion += 25;
            //Imprimimos X del tipo de tramite
        $pdf->MultiCell(10, 0, 'X', 0, 'L', 0, 0, $x_tipo_calificacion, '56', true);
        
        //Tamaño de letra para datos
        $pdf->SetFont('dejavusans', '', 9, '', true);
        
        //Datos del Producto
        $pdf->MultiCell(150, 0, $this->formulario7->Producto->Medicamento->getNombreComercial(),
            0, 'L', 0, 0, '50', '65', true);
        $pdf->MultiCell(150, 0, $this->formulario7->Producto->Medicamento->getNombreGenerico(),
            0, 'L', 0, 0, '50', '70', true);
        
        //Datos del laboratorio
        $pdf->MultiCell(145, 0, $this->formulario7->Producto->Medicamento->LaboratorioFabricante,
            0, 'L', 0, 0, '55', '75', true);
        $pdf->MultiCell(145, 0, $this->formulario7->Producto->Medicamento->FormaFarmaceutica,
            0, 'L', 0, 0, '55', '80', true);
        $pdf->MultiCell(145, 0, $this->formulario7->getConcentracion(),
            0, 'L', 0, 0, '130', '80', true);
        
        //Formula Cuali-Cauntitaviva
        $pdf->MultiCell(170, 30, $this->formulario7->Producto->Medicamento->FormulaCc,
            0, 'L', 0, 0, '25', '95', true);    
        
        //Datos del Formulario
        $pdf->MultiCell(145, 0, $this->formulario7->Producto->Medicamento->ViaAdministracion,
            0, 'L', 0, 0, '50', '125', true);
        $pdf->MultiCell(145, 0, $this->formulario7->getAccionTerapeutica(),
            0, 'L', 0, 0, '50', '130', true);
        $pdf->MultiCell(145, 15, $this->formulario7->getDosis(),
            0, 'L', 0, 0, '50', '140', true);
        $pdf->MultiCell(145, 25, $this->formulario7->getIndicaciones(),
            0, 'L', 0, 0, '50', '155', true);
        $pdf->MultiCell(145, 20, $this->formulario7->getContraindicaciones(),
            0, 'L', 0, 0, '50', '175', true);
        $pdf->MultiCell(145, 20, $this->formulario7->getContraindicaciones(),
            0, 'L', 0, 0, '50', '195', true);        
        $pdf->MultiCell(145, 20, $this->formulario7->getPrecauciones(),
            0, 'L', 0, 0, '50', '215', true);  
        $pdf->MultiCell(145, 25, $this->formulario7->getEfectosSecundarios(),
            0, 'L', 0, 0, '50', '225', true);  
        $pdf->MultiCell(145, 10, $this->formulario7->getObservaciones(),
            0, 'L', 0, 0, '50', '240', true);
        $pdf->MultiCell(20, 0, $this->formulario7->getComision(),
            0, 'L', 0, 0, '50', '250', true);        
        $pdf->MultiCell(20, 0, $this->formulario7->getCalificacion(),
            0, 'L', 0, 0, '50', '255', true);   
        
        $pdf->Output('Formulario007.pdf', 'I');
        throw new sfStopException();
    }
    public function executeIndex(sfWebRequest $request)
    {
        parent::executeIndex($request);
        $empresa = $this->getRequestParameter('table');
        if(!$empresa){
            $this->pager->setQuery(Formulario7Table::selectForms7DeEmpresaProducto());
        }
        else {
            $this->pager->setQuery(Formulario7Table::selectForms7DeEmpresa());
        }
    }
    public function executeListIrProductos(sfWebRequest $request)
    {
        $user = sfContext::getInstance()->getUser();
        $producto = $user->getAttribute('tabla');
        $this->redirect($producto);
    }
    
    public function executeListIrEmpresa(sfWebRequest $request)
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id='.$empresa->getId());
    }
    public function executeNuevo(sfWebRequest $request)
    {
        $this->redirect('form7/new');
    }
    
    public function executeEditar(sfWebRequest $request)
    {
        $id = $request->getParameter('id');
        $this->redirect("form7/edit?id=$id");
    }
}
