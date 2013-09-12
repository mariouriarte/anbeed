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
        $user = sfContext::getInstance()->getUser();
        $producto = $user->getAttribute('producto');
        $this->formulario7 = $this->getRoute()->getObject();
        
        $config = sfTCPDFPluginConfigHandler::loadConfig();
                  sfTCPDFPluginConfigHandler::includeLangFile(
                          $this->getUser()->getCulture());
        
        $page_size = array(210,326);
        $pdf = new sfTCPDF('P', PDF_UNIT, $page_size, true, 'UTF-8', false);
        
        // Informacion el documento
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Capsule Systems');
        $pdf->SetTitle('Formulario');
        $pdf->SetSubject('ANBEED SRL');
        $pdf->SetKeywords('TCPDF, PDF, ANBEED SRL, Formulario007, impresion');

        //set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, 0, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(0);
        $pdf->SetFooterMargin(0);
        $pdf->SetPrintHeader(false);
        $pdf->SetPrintFooter(false);
        
        //set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, 0);
        
        // Add a page
        $pdf->AddPage();

        //Tamaño de letra para datos
        $pdf->SetFont('dejavusans', '', 9, '', true);
        
        //Datos de la Empresa
        $pdf->MultiCell(77, 0, $this->formulario7->Producto->$producto->Empresa
            ->RegenteFarmaceutico, 
            1, 'L', 0, 0, '35', '56', true);
        $pdf->MultiCell(18, 0, $this->formulario7->Producto->$producto->Empresa
            ->RegenteFarmaceutico->getMatriculaProfesional(),
            0, 'L', 0, 0, '143', '56', true);
        $pdf->MultiCell(60, 0, $this->formulario7->Producto->$producto->Empresa,
            0, 'L', 0, 0, '26', '60', true);        
        
        //Tamaño letra para X's
        $pdf->SetFont('dejavusans', 'B', 11, '', true);
        
        //Revisamos el tipo de tramite
            // inicializamos en el primero
        $x_tipo_calificacion = 57; 
        if($this->formulario7->getTipoCalificacionId() == 2)
            $x_tipo_calificacion += 46;
        if($this->formulario7->getTipoCalificacionId() == 3)
            $x_tipo_calificacion += 53;
        if($this->formulario7->getTipoCalificacionId() == 4)
            $x_tipo_calificacion += 34;
            //Imprimimos X del tipo de tramite
        $pdf->MultiCell(10, 0, 'X', 0, 'L', 0, 0, $x_tipo_calificacion, '69', true);
        
        //Tamaño de letra para datos
        $pdf->SetFont('dejavusans', '', 9, '', true);
        
        //Datos del Producto
        
        if($producto=='Reactivo')
            $pdf->MultiCell(145, 0, $this->formulario7->Producto
                ->$producto->getNombreComercial(),
                0, 'L', 0, 0, '57', '73', true);
        
        if($producto=='Medicamento' || $producto ='DispositivoMedico')
        {
            $pdf->MultiCell(145, 0, $this->formulario7->Producto
                ->$producto->getNombreComercial(),
                0, 'L', 0, 0, '57', '73', true);
            $pdf->MultiCell(135, 0, $this->formulario7->Producto
                ->$producto->getNombreGenerico(),
                0, 'L', 0, 0, '68', '79', true);
        }
        
        if ($producto=='Cosmetico' || $producto =='Higiene')
        {
            $pdf->MultiCell(145, 0, $this->formulario7->Producto->$producto->getMarca(),
                0, 'L', 0, 0, '57', '73', true);
            $pdf->MultiCell(135, 0, $this->formulario7->Producto->$producto->getNombre(),
                0, 'L', 0, 0, '68', '79', true);
        }
        
        //Datos del laboratorio
        $pdf->MultiCell(140, 0, $this->formulario7->Producto->$producto
            ->LaboratorioFabricante->getNombre(),
            0, 'L', 0, 0, '63', '83', true);
        
        if($producto=='Medicamento')
        {
            $pdf->MultiCell(65, 0, $this->formulario7->Producto->$producto
                ->FormaFarmaceutica->getNombre(),
                0, 'L', 0, 0, '59', '88', true);
        }
        else 
        {
            $pdf->MultiCell(65, 0, $this->formulario7->FormaFarmaceutica->getNombre(),
                0, 'L', 0, 0, '59', '88', true);
        }
        $pdf->MultiCell(50, 0, $this->formulario7->getConcentracion(),
            0, 'L', 0, 0, '149', '88', true);
        
        //Formula Cuali-Cauntitaviva
        if($producto == 'Medicamento')
            $pdf->MultiCell(175, 25, $this->formulario7->Producto->$producto->FormulaCc,
                0, 'L', 0, 0, '25', '95', true);    
        
        //Datos del Formulario
        $pdf->MultiCell(145, 0, $this->formulario7->ViaAdministracion->getNombre(),
            0, 'L', 0, 0, '60', '126', true);
        $pdf->MultiCell(145, 10, $this->formulario7->getAccionTerapeutica(),
            0, 'L', 0, 0, '56', '130', true);
        $pdf->MultiCell(165, 15, $this->formulario7->getDosis(),
            0, 'L', 0, 0, '36', '139', true);
        $pdf->MultiCell(155, 30, $this->formulario7->getIndicaciones(),
            0, 'L', 0, 0, '47', '151', true);
        $pdf->MultiCell(145, 25, $this->formulario7->getContraindicaciones(),
            0, 'L', 0, 0, '57', '174', true);     
        $pdf->MultiCell(155, 25, $this->formulario7->getPrecauciones(),
            0, 'L', 0, 0, '48', '193', true);  
        $pdf->MultiCell(120, 30, $this->formulario7->getEfectosSecundarios(),
            0, 'L', 0, 0, '80', '212', true);  
        $pdf->MultiCell(150, 15, $this->formulario7->getObservaciones(),
            0, 'L', 0, 0, '51', '255', true);
        $pdf->MultiCell(10, 0, $this->formulario7->getComision(),
            0, 'L', 0, 0, '82', '273', true);        
        $pdf->MultiCell(35, 0, $this->formulario7->getCalificacion(),
            0, 'L', 0, 0, '87', '278', true);   
        
        $pdf->Output('Formulario007.pdf', 'I');
        throw new sfStopException();
    }
    public function executeIndex(sfWebRequest $request)
    {
        parent::executeIndex($request);
        $this->pager->setQuery(Formulario7Table::selectForms7DeEmpresaProducto());
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();
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
