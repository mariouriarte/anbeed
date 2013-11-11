<?php

require_once dirname(__FILE__).'/../lib/dispositivosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/dispositivosGeneratorHelper.class.php';

/**
 * dispositivos actions.
 *
 * @package    anbeed
 * @subpackage dispositivos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class dispositivosActions extends autoDispositivosActions
{
    public function executeNew(sfWebRequest $request)
    {
        $this->form = $this->configuration->getForm();
        $this->dispositivo_medico = $this->form->getObject();
        $empresa = $this->getUser()->getAttribute('empresa');
        $this->form->setDefault('empresa_id', $empresa->getId());
    }
    public function executeListAdmEmpresa(sfWebRequest $request)
    {
        $user = $this->getUser();
        $empresa = $user->getAttribute('empresa');
        $this->redirect('empresas/administrarEmpresa?id=' . $empresa->getId());
    }
    
    public function executeIrForm27(sfWebRequest $request)
    {
        $user = $this->getUser();
        $this->dispositivo_medico = $this->getRoute()->getObject();
        $user->setAttribute('dispositivo_medico', $this->dispositivo_medico);
        
        if(sfConfig::get('sf_environment') == 'dev')
        {
            $env = '_dev';
        }
        $this->redirect('/farmaceutica'.$env.'.php/formulario27');
    }
    
//    public function executeIrForm7(sfWebRequest $request)
//    {
//        $user = $this->getUser();
//        $dispositivo = $this->getRoute()->getObject();
//        $user->setAttribute('dispositivo_medico', $dispositivo);
//        $user->setAttribute('tabla', 'dispositivo_medico');
//        $user->setAttribute('producto', 'DispositivoMedico');
//        $this->redirect('formulario7/index');
//    }
    
    protected function processForm(sfWebRequest $request, sfForm $form)
      {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid())
        {
          $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';
          $is_new = $form->getObject()->isNew();
          try {
              $dispositivo_medico = $form->save();
                                    
              if($is_new)
              {
                $producto = new Producto();
                // agregamos el codigo del producto codigo:DI
                $producto->setCodigoProductoId(2); 
                $producto -> save();
                $dispositivo_medico -> setProducto($producto);
                $dispositivo_medico -> save();            
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

          $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $dispositivo_medico)));

          if ($request->hasParameter('_save_and_add'))
          {
            $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

            $this->redirect('@dispositivo_medico_new');
          }
          else
          {
            $this->getUser()->setFlash('notice', $notice);

            $this->redirect(array('sf_route' => 'dispositivo_medico_edit', 'sf_subject' => $dispositivo_medico));
          }
        }
        else
        {
          $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
        }
      }
      
   public function executePrintfcc(sfWebRequest $request)
   {
        $this->DispositivoMedico = $this->getRoute()->getObject();
//        var_dump($this->Medicamento->getFormulaCcId());
//        die;
        if($this->DispositivoMedico->getFormulaCc() == NULL)
        {   
            $this->getUser()->setFlash('notice', 'No cuenta con Fórmula Cuali-Cuantitativa');
            $this->redirect('@dispositivo_medico');
            
        }
        $config = sfTCPDFPluginConfigHandler::loadConfig();
                  sfTCPDFPluginConfigHandler::includeLangFile($this->getUser()->getCulture());

        $pdf = new sfTCPDF('P', PDF_UNIT, 'A4', true, 'UTF-8', false);
        // Informacion el documento
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Capsule Systems');
        $pdf->SetTitle('Formulario');
        $pdf->SetSubject('ANBEED SRL');
        $pdf->SetKeywords('TCPDF, PDF, ANBEED SRL, Formulario027, impresion');

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
        $pdf->MultiCell(78, 0, $this->DispositivoMedico, 0, 'L', 0, 0, 45, 45, true);
        
        /*Imprimimos la formula del dispositivo medico*/            
        $pdf->SetFont('courier', '', 13, '', true);
        $html = '<br><br><br><table border="1" width="100%" cellpadding="2" cellspacing="0">
                    <tr>
                        <td>'.$this->DispositivoMedico->getFormulaCc().'</td>
                    </tr>
                    ';
        
        $html.="</table>";
        //echo $html;
        $pdf->writeHTML($html, true, FALSE, true, FALSE, 'L');
        $pdf->Output('FormulaCc.pdf', 'I');
        throw new sfStopException();
   }
}
