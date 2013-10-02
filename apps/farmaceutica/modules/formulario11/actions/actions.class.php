<?php

require_once dirname(__FILE__).'/../lib/formulario11GeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/formulario11GeneratorHelper.class.php';

/**
 * formulario11 actions.
 *
 * @package    anbeed
 * @subpackage formulario11
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formulario11Actions extends autoFormulario11Actions
{
    public function executePrint(sfWebRequest $request)
    {
        $user = sfContext::getInstance()->getUser();
        $this->formulario11 = $this->getRoute()->getObject();
        $user->setAttribute('form11', $this->formulario11);
        
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
        $pdf->SetKeywords('TCPDF, PDF, ANBEED SRL, Formulario011, impresion');

        //set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $pdf->SetPrintHeader(false);
        $pdf->SetPrintFooter(false);
        
        //set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, 0);
        
        
        // Add a page
        $pdf->AddPage();

        //definimos la variable para el eje y
        $y = 84;
        $x = 5;
        //Tamaño de letra para datos
        $pdf->SetFont('courier', '', 13, '', true);
        
        //Datos de la Empresa
        $pdf->MultiCell(70, 0, $this->formulario11->Empresa->RepresentanteLegal, 
            0, 'L', 0, 0, $x+93, $y, true);
        $pdf->MultiCell(30, 0, $this->formulario11->Empresa->RepresentanteLegal
            ->Persona->getCI(), 
            0, 'L', 0, 0, $x+26, $y+=5, true);
        $pdf->MultiCell(95, 0, $this->formulario11->Empresa->RegenteFarmaceutico, 
            0, 'L', 0, 0, $x+76, $y, true);
        $pdf->MultiCell(40, 0, $this->formulario11->Empresa
            ->RegenteFarmaceutico->getMatriculaProfesional(),
            0, 'L', 0, 0, $x+34, $y+=5, true);
        $pdf->MultiCell(130, 0, $this->formulario11->Empresa,
            0, 'L', 0, 0, $x+25, $y+=5, true);
        $pdf->MultiCell(40, 0, $this->formulario11->Empresa->getNumResolucion(),
            0, 'L', 0, 0, $x+102, $y+=5, true);

        $fecha_resolucion = funciones::FechaEspanol2($this->formulario11->Empresa->getFechaResolucion());
        
        $pdf->MultiCell(60, 0, $fecha_resolucion[0],0, 'L', 0, 0, $x+170, $y, true);
        $pdf->MultiCell(60, 0, $fecha_resolucion[1],0, 'L', 0, 0, $x+25, $y+=5, true);
        $pdf->MultiCell(60, 0, $fecha_resolucion[2],0, 'L', 0, 0, $x+69, $y, true);

        //Despacho aduanero de
        $y_datos_generales = $y+7;
        $x_datos_generales = $x+30;
        if($this->formulario11->getTipoDespachoId() == 2)
            $y_datos_generales += 5;
        if($this->formulario11->getTipoDespachoId() == 3)
            $x_datos_generales += 58;
        if($this->formulario11->getTipoDespachoId() == 4)
            {
                $x_datos_generales += 58;
                $y_datos_generales += 5;
            }

        if($this->formulario11->getOtro()== '')
        {
            //Imprimimos X en el dato general
        $pdf->MultiCell(10, 0, 'X', 0, 'L', 0, 0, 
            $x_datos_generales, $y_datos_generales, true);
        }
        else
        {        
        //En caso de otro
        $pdf->MultiCell(100, 0, $this->formulario11->getOtro(), 0, 'L', 0, 0, 
            $x+25, $y_datos_generales+11, true);
        }
        //datos del formulario
        $pdf->MultiCell(105, 0, $this->formulario11->Empresa,
            0, 'L', 0, 0, $x+43, $y+=57, true);
        
        if($this->formulario11->getSustanciasQuimicas()==1)
        {
            $pdf->MultiCell(10, 0, 'SI',
                0, 'L', 0, 0, $x+51, $y+=24, true);
        }
        else
        {
            $pdf->MultiCell(10, 0, 'NO',
                0, 'L', 0, 0, $x+51, $y+=24, true);
        }
        
        if($this->formulario11->getLicenciaPrevia()==1)
        {
            $pdf->MultiCell(15, 0, 'SI',
                0, 'L', 0, 0, $x+79, $y+=5, true);
            
            $pdf->SetFont('courier', '', 10, '', true);
            $pdf->MultiCell(25, 0, $this->formulario11->getLicenciaResolucion(),
                0, 'L', 0, 0, $x+80, $y+=5, true);
            
            $pdf->SetFont('courier', '', 13, '', true);
            $fecha_licencia = funciones::FechaEspanol2($this->formulario11->getLicenciaFecha());
            
            $pdf->MultiCell(8, 0, $fecha_licencia[0],0, 'L', 0, 0, $x+115, $y, true);
            $pdf->MultiCell(31, 0, $fecha_licencia[1],0, 'L', 0, 0, $x+132, $y, true);
            $pdf->MultiCell(25, 0, $fecha_licencia[2],0, 'L', 0, 0, $x+170, $y, true);
        }
        else 
        {
            $pdf->MultiCell(15, 0, 'NO',
                0, 'L', 0, 0, $x+84, $y+=5, true);
            $pdf->MultiCell(10, 0, ' - ',
                0, 'L', 0, 0, $x+85, $y+=5, true);
            $pdf->MultiCell(75, 0, ' - ',
                0, 'L', 0, 0, $x+116, $y, true);
            $pdf->MultiCell(75, 0, ' - ',
                0, 'L', 0, 0, $x+140, $y, true);
            $pdf->MultiCell(75, 0, ' - ',
                0, 'L', 0, 0, $x+175, $y, true);
        }
        
        $pdf->MultiCell(10, 0, $this->formulario11->getNumeroItem(),
            0, 'L', 0, 0, $x+40, $y+=11, true);
        $pdf->MultiCell(10, 0, $this->formulario11->getFoja(),
            0, 'L', 0, 0, $x+98, $y, true);
        $pdf->MultiCell(55, 0, $this->formulario11->Pais,
            0, 'L', 0, 0, $x+140, $y, true);
        $pdf->MultiCell(25, 0, $this->formulario11->getFactura(),
            0, 'L', 0, 0, $x+72, $y+=5, true);
        $fecha_factura = funciones::FechaEspanol2($this->formulario11->getFacturaFecha());
        $pdf->MultiCell(8, 0, $fecha_factura[0],0, 'L', 0, 0, $x+115, $y, true);
        $pdf->MultiCell(31, 0, $fecha_factura[1],0, 'L', 0, 0, $x+138, $y, true);
        $pdf->MultiCell(25, 0, $fecha_factura[3],0, 'L', 0, 0, $x+177, $y, true);
        
        $pdf->SetFont('courier', '', 10, '', true);
        $pdf->MultiCell(70, 0, $this->formulario11->getPorTratarse(),
            0, 'L', 0, 0, $x+125, $y+=32, true);
        $pdf->SetFont('courier', '', 13, '', true);
        $pdf->MultiCell(75, 0, $this->formulario11->getPara(),
            0, 'L', 0, 0, $x+115, $y+=5, true);
        
        
        $pdf->SetFont('courier', '', 8, '', true);
        // Obtieniendo items del formulario11
                $q=  Doctrine_Core::getTable('Item')->selectItemDeForm11();
        $items=$q->execute();
        $y+=28;
        $y_fila_items = $y;
        
        $num_items = $this->formulario11->getNumeroItem();
        
        $fojas = $this->formulario11->getFoja();
        $contador_fojas=1;
        $contador_item=$num_items;
        $num_items-=6;
        $num=1;
        foreach ($items as $item)
        {
            if($contador_item == ($num_items))
            {
                /*add page*/
                $pdf->AddPage();
                $y_fila_items = 42;
                $num_items-=42;
                $contador_fojas++;
                $pdf->SetFont('courier', '', 12, '', true);
                /*Numero de foja*/
                $pdf->MultiCell(10, 0, $contador_fojas,
                0, 'L', 0, 0, $x+40, $y_fila_items, true);
                $y_fila_items+=15;
                
                $pdf->SetFont('courier', '', 10, '', true);
                /*Continuacion de foja:*/
                $pdf->MultiCell(10, 0, $contador_fojas-1,
                0, 'L', 0, 0, $x+55, $y_fila_items, true);
                $y_fila_items+=16;
                
            }     
            
            $pdf->SetFont('courier', '', 8, '', true);
            /*ITEM*/
            $pdf->MultiCell(10, 0, $num,
                0, 'L', 0, 0, $x+20, $y_fila_items, true);
            /*CANT*/
            $pdf->MultiCell(20, 0, $item->getCantidad(),
                0, 'L', 0, 0, $x+35, $y_fila_items, true);
            /*PROD*/
            $pdf->MultiCell(64, 0, $item->getNombre(),
                0, 'L', 0, 0, $x+54, $y_fila_items, true);
            /*N.RS*/
            $pdf->MultiCell(25, 0, ItemTable::getNumRegSanitario($item),
                0, 'L', 0, 0, $x+120, $y_fila_items, true);
            /*F,Vto.*/
            $pdf->MultiCell(25, 0, $item->getFechaVencimiento(),
                0, 'L', 0, 0, $x+145, $y_fila_items, true);
            /*N,Lote.*/
            $pdf->MultiCell(25, 0, $item->getNumLote(),
                0, 'L', 0, 0, $x+178, $y_fila_items, true);
            
            $y_fila_items+=5;
            $contador_item--;
            $num++;
        }

        $pdf->Output('Formulario011.pdf', 'I');
        throw new sfStopException();
    }
    
    
    public function executeItem(sfWebRequest $request)
    {
        $user = $this->getUser();
        
        $this->formulario11 = $this->getRoute()->getObject();
        
        $user->setAttribute('form11', $this->formulario11);
        
        if(sfConfig::get('sf_environment') == 'dev')
        {
            $env = '_dev';
        } 
        $this->redirect('/farmaceutica'.$env.'.php/items');
    }
    public function executeListIrEmpresa(sfWebRequest $request)
    {
        $user = sfContext::getInstance()->getUser();
        
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id='.$empresa->getId());
    }
    
    public function executeNuevo(sfWebRequest $request)
    {
        $this->redirect('form11/new');
    }
    
    public function executeEditar(sfWebRequest $request)
    {
        $id = $request->getParameter('id');
        $this->redirect("form11/edit?id=$id");
    }
}
