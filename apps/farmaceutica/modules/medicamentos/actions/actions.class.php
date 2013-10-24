<?php

require_once dirname(__FILE__).'/../lib/medicamentosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/medicamentosGeneratorHelper.class.php';

/**
 * medicamentos actions.
 *
 * @package    anbeed
 * @subpackage medicamentos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class medicamentosActions extends autoMedicamentosActions
{
    public function executeNew(sfWebRequest $request)
    {
        $this->form = $this->configuration->getForm();
        $this->medicamento = $this->form->getObject();
        $empresa = $this->getUser()->getAttribute('empresa');
        $this->form->setDefault('empresa_id', $empresa->getId());
    }
    
    public function executeListAdmEmpresa(sfWebRequest $request)
    {
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id=' . $empresa->getId());
    }
    public function executeIrFormula(sfWebRequest $request)
    {
        $user = $this->getUser();
        
        $this->medicamento = $this->getRoute()->getObject();
        //Verificamos si ya tiene formulacc para mandarlo a NEW o a EDIT        
        $formula_cc_id = $this->medicamento->getFormulaCcId();
        //var_dump($formula_cc_id);
        //die();
        $user->setAttribute('medicamento', $this->medicamento);
        
        if(sfConfig::get('sf_environment') == 'dev')
        {
            $env = '_dev';
        }
        
        if(($formula_cc_id == NULL))
           $this->redirect('/farmaceutica'.$env.'.php/formulas/new');
        else
           $this->redirect('/farmaceutica'.$env.'.php/formulas/'.$formula_cc_id.'/edit');
    }
    public function executeIrForm5(sfWebRequest $request)
    {
        $user = $this->getUser();
        $this->medicamento = $this->getRoute()->getObject();
        $user->setAttribute('medicamento', $this->medicamento);
        
        if(sfConfig::get('sf_environment') == 'dev')
        {
            $env = '_dev';
        }
        $this->redirect('/farmaceutica'.$env.'.php/formulario5');
    }
    
    public function executeIrForm7(sfWebRequest $request)
    {
        $user = $this->getUser();
        $medicamento = $this->getRoute()->getObject();
        $user->setAttribute('medicamento', $medicamento);
        $user->setAttribute('tabla', 'medicamento');
        $user->setAttribute('producto', 'Medicamento');
        $this->redirect('formulario7/index');
    }
    
    protected function processForm(sfWebRequest $request, sfForm $form)
    {
      $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
      if ($form->isValid())
      {
        $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';
        $is_new = $form->getObject()->isNew();
        try {
          $medicamento = $form->save();
          
          if($is_new)
          {
            $producto = new Producto();
            // agregamos el codigo del producto codigo:II
            $producto->setCodigoProductoId(1); 
            $producto -> save();

            $medicamento -> setProducto($producto);
            $medicamento -> save();
          }
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

        $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $medicamento)));

        if ($request->hasParameter('_save_and_add'))
        {
          $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

          $this->redirect('@medicamento_new');
        }
        else
        {
          $this->getUser()->setFlash('notice', $notice);

          $this->redirect(array('sf_route' => 'medicamento_edit', 'sf_subject' => $medicamento));
        }
      }
      else
      {
        $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
      }
    }
    
   public function executePrintfcc(sfWebRequest $request)
   {
        $this->Medicamento = $this->getRoute()->getObject();
//        var_dump($this->Medicamento->getFormulaCcId());
//        die;
        if($this->Medicamento->getFormulaCcId() == NULL)
        {   
            $this->getUser()->setFlash('notice', 'No cuenta con Fórmula Cuali-Cuantitativa');
            $this->redirect('@medicamento');
            
        }
        $config = sfTCPDFPluginConfigHandler::loadConfig();
                  sfTCPDFPluginConfigHandler::includeLangFile($this->getUser()->getCulture());

        $pdf = new sfTCPDF('P', PDF_UNIT, 'A4', true, 'UTF-8', false);
        // Informacion el documento
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Capsule Systems');
        $pdf->SetTitle('Formulario');
        $pdf->SetSubject('ANBEED SRL');
        $pdf->SetKeywords('TCPDF, PDF, ANBEED SRL, Formulario005, impresion');

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
        $pdf->SetFont('courier', '', 13, '', true);

        // Add a page
        // This method has several options, check the source code documentation for more information.
        $pdf->AddPage();

        /*Imprimimos titulo*/
        $pdf->MultiCell(78, 0, 'FÓRMULA CUALI-CUANTITATIVA', 'B', 'L', 0, 0, 65, 30, true);
        
        $pdf->SetFont('courier', '', 13, '', true);
        /*Imprimimos el producto*/
        $pdf->MultiCell(78, 0, 'Producto:', 0, 'L', 0, 0, 15, 45, true);
        $pdf->MultiCell(78, 0, $this->Medicamento, 0, 'L', 0, 0, 45, 45, true);
        
        /*Imprimimos la formula del medicamento*/            
        $q = Doctrine_Core::getTable('DetalleFormulaCc')->getIngredientes($this->Medicamento->getFormulaCcId());
        $ingredientes = $q->execute();
        $pdf->SetFont('courier', '', 13, '', true);
        $html = '<br><br><br><table border="1" width="100%" cellpadding="2" cellspacing="0">
                    <tr bgcolor="#EEE">
                        <th width="70%"><b>INGREDIENTE</b></th>
                        <th width="15%"><b>CANTIDAD</b></th>
                        <th width="15%"><b>UNIDAD</b></th>
                    </tr>
                    <tr>
                        <td colspan="3">'.$this->Medicamento->FormulaCc->getContenido().':</td>
                    </tr>
                    <tr bgcolor="#EEE">
                        <td colspan="3"><b>PRINCIPIO ACTIVO:</b></td>
                    </tr>
                    <tr>
                        <td>'.$this->Medicamento->FormulaCc->Ingrediente.'</td>
                        <td align="center">'.$this->Medicamento->FormulaCc->getCantidad().'</td>
                        <td align="center">'.$this->Medicamento->FormulaCc->getUnidad().'</td>
                    </tr>
                    <tr bgcolor="#EEE">
                        <td colspan="3"><b>EXCIPIENTES:</b></td>
                    </tr>
                    ';
        
        foreach ($ingredientes as $ingrediente)
        {
            $html.='
                <tr>
                    <td>'.$ingrediente->Ingrediente[0].'</td>
                    <td align="center">'.$ingrediente->getCantidad().'</td>
                    <td align="center">'.$ingrediente->getUnidad().'</td>
                </tr>
                ';
        }
        $html.="</table>";
        //echo $html;
        $pdf->writeHTML($html, true, FALSE, true, FALSE, 'L');
        $pdf->Output('FormulaCc.pdf', 'I');
        throw new sfStopException();
   }
}
