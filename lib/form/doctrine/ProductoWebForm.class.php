<?php

/**
 * ProductoWeb form.
 *
 * @package    anbeed
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductoWebForm extends BaseProductoWebForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at'], $this['created_by'], $this['updated_by']);
      
      $this->widgetSchema['categoria_id']->setOption('add_empty', ' - Seleccione categoría -');
      
      $this->widgetSchema['pais_id']->setOption('add_empty', ' - Seleccione procedencia -');
      
      $this->widgetSchema['linea_id']->setOption('add_empty', ' - Seleccione la línea o marca -');
      
      
      $this->widgetSchema->setHelp('precio', 'Debe llenar en el siguiente formato: 1255.50');
      
      
      /*fotografia*/
      
      $this->widgetSchema['foto'] = new sfWidgetFormInputFileEditable(array(
                                                'file_src'  => '', 
                                                'is_image' => true,
                                                'edit_mode' => !$this->isNew(),
                                                'delete_label' => 'Eliminar foto'));
      
      $this->widgetSchema->setHelp('foto', 'El Tamaño maximo de la imagen debe ser de 2MB ');
      
        
      
            
      $this->validatorSchema['foto'] = new sfValidatorFile(array(
                                  'max_size' => 1073741824,  
                                  'mime_types' => 'web_images',
                                  'path' => 'images/catalogo/normal',
                                  'required' => false,
                                  'validated_file_class' => 'sfValidatedFileCustom'));
            
      $this->validatorSchema['foto_delete'] = new sfValidatorBoolean();
      
      
      
      /*AJUSTANDO LOS TAMAños*/
      $this->widgetSchema['nombre']->setAttribute('size' , 50);
      $this->widgetSchema['caracteristicas']->setAttribute('cols' , 80);
  }
  
    public function doSave($con = null)
    {
        //si elimino la imagen con check
        if($this->getValue('foto_delete'))
        {
        $filename = $this->getObject()->getFoto();

        //directorio de la imagen original
        $filepath = 'images/catalogo/normal/'.$filename;
        @unlink($filepath);

        //directorio de la imagen con tamaño pequeño
        $thumbnailpath = 'images/catalogo/small/'.$filename;
        @unlink($thumbnailpath);

        $this->getObject()->setFoto(null);
        }
        return parent::doSave($con);
    }
}
