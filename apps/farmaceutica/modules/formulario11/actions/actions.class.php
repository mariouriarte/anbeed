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
        $y = 75;
        
        //Tamaño de letra para datos
        $pdf->SetFont('courier', '', 13, '', true);
        
        //Datos de la Empresa
        $pdf->MultiCell(70, 0, $this->formulario11->Empresa->RepresentanteLegal, 
            0, 'L', 0, 0, '93', $y, true);
        $pdf->MultiCell(30, 0, $this->formulario11->Empresa->RepresentanteLegal
            ->Persona->getCI(), 
            0, 'L', 0, 0, '26', $y+=5, true);
        $pdf->MultiCell(95, 0, $this->formulario11->Empresa->RegenteFarmaceutico, 
            0, 'L', 0, 0, '76', $y, true);
        $pdf->MultiCell(40, 0, $this->formulario11->Empresa
            ->RegenteFarmaceutico->getMatriculaProfesional(),
            0, 'L', 0, 0, '34', $y+=5, true);
        $pdf->MultiCell(130, 0, $this->formulario11->Empresa,
            0, 'L', 0, 0, '25', $y+=5, true);
        $pdf->MultiCell(40, 0, $this->formulario11->Empresa->getNumResolucion(),
            0, 'L', 0, 0, '102', $y+=5, true);
        $pdf->MultiCell(60, 0, funciones::FormatearFecha($this->formulario11
            ->Empresa->getFechaResolucion()),
            0, 'L', 0, 0, '25', $y+=4, true);
        
               
        //Despacho aduanero de
        $y+=4;
        $y_datos_generales = $y;
        $x_datos_generales = 30;
        if($this->formulario11->getTipoDespachoId() == 2)
            $y_datos_generales += 5;
        if($this->formulario11->getTipoDespachoId() == 3)
            $x_datos_generales += 58;
        if($this->formulario11->getTipoDespachoId() == 4)
            {
                $x_datos_generales += 58;
                $y_datos_generales += 5;
            }
            
            //Imprimimos X en el dato general
        $pdf->MultiCell(10, 0, 'X', 0, 'L', 0, 0, 
            $x_datos_generales, $y_datos_generales, true);

       
        //datos del formulario
        $pdf->MultiCell(105, 0, $this->formulario11->Empresa,
            0, 'L', 0, 0, '43', $y+=53, true);
        
        if($this->formulario11->getSustanciasQuimicas()==1)
        {
            $pdf->MultiCell(10, 0, 'SI',
                0, 'L', 0, 0, '52', $y+=24, true);
        }
        else
        {
            $pdf->MultiCell(10, 0, 'NO',
                0, 'L', 0, 0, '52', $y+=24, true);
        }
        
        if($this->formulario11->getLicenciaPrevia()==1)
        {
            $pdf->MultiCell(15, 0, 'SI',
                0, 'L', 0, 0, '79', $y+=5, true);
            $pdf->MultiCell(10, 0, $this->formulario11->getLicenciaResolucion(),
                0, 'L', 0, 0, '80', $y+=5, true);
            $pdf->MultiCell(75, 0, $this->formulario11->getLicenciaFecha(),
                0, 'L', 0, 0, '113', $y, true);
        }
        else 
        {
            $pdf->MultiCell(15, 0, 'NO',
                0, 'L', 0, 0, '79', $y+=5, true);
            $pdf->MultiCell(10, 0, ' - ',
                0, 'L', 0, 0, '80', $y+=5, true);
            $pdf->MultiCell(75, 0, ' - ',
                0, 'L', 0, 0, '113', $y, true);
        }
        
        $pdf->MultiCell(10, 0, $this->formulario11->getNumeroItem(),
            0, 'L', 0, 0, '35', $y+=10, true);
        $pdf->MultiCell(10, 0, $this->formulario11->getFoja(),
            0, 'L', 0, 0, '93', $y, true);
        $pdf->MultiCell(55, 0, $this->formulario11->Pais,
            0, 'L', 0, 0, '135', $y, true);
        $pdf->MultiCell(25, 0, $this->formulario11->getFactura(),
            0, 'L', 0, 0, '68', $y+=5, true);
        $pdf->MultiCell(75, 0, $this->formulario11->getFacturaFecha(),
            0, 'L', 0, 0, '102', $y, true);
        
        
        $pdf->MultiCell(70, 0, $this->formulario11->getPorTratarse(),
            0, 'L', 0, 0, '117', $y+=27, true);
        $pdf->MultiCell(75, 0, $this->formulario11->getPara(),
            0, 'L', 0, 0, '110', $y+=9, true);
        
        
        $pdf->SetFont('courier', '', 10, '', true);
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
                $y_fila_items = 25;
                $num_items-=42;
                $contador_fojas++;
                /*Numero de foja*/
                $pdf->MultiCell(10, 0, $contador_fojas,
                1, 'L', 0, 0, 20, $y_fila_items, true);
                $y_fila_items+=10;
                
                /*Continuacion de foja:*/
                $pdf->MultiCell(10, 0, $contador_fojas-1,
                1, 'L', 0, 0, 30, $y_fila_items, true);
                $y_fila_items+=10;
                
            }     
            /*ITEM*/
            $pdf->MultiCell(10, 0, $num,
                1, 'L', 0, 0, 20, $y_fila_items, true);
            /*CANT*/
            $pdf->MultiCell(20, 0, $item->getCantidad(),
                1, 'L', 0, 0, 30, $y_fila_items, true);
            /*PROD*/
            $pdf->MultiCell(80, 0, $item->getNombre(),
                1, 'L', 0, 0, 50, $y_fila_items, true);
            /*N.RS*/
            $pdf->MultiCell(30, 0, ItemTable::getNumRegSanitario($item),
                1, 'L', 0, 0, 130, $y_fila_items, true);
            /*F,Vto.*/
            $pdf->MultiCell(25, 0, $item->getFechaVencimiento(),
                1, 'L', 0, 0, 160, $y_fila_items, true);
            /*N,Lote.*/
            $pdf->MultiCell(20, 0, $item->getNumLote(),
                1, 'L', 0, 0, 185, $y_fila_items, true);
            
            $y_fila_items+=6;
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
