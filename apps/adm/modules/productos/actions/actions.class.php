<?php

require_once dirname(__FILE__).'/../lib/productosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/productosGeneratorHelper.class.php';

/**
 * productos actions.
 *
 * @package    anbeed
 * @subpackage productos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class productosActions extends autoProductosActions
{
    public function executeBuscar(sfWebRequest $request)
    {   
        $empresa_id = $request->getParameter('_ds_ref');
        //echo $empresa_id;
//        $q = Doctrine_Query::create()
//            ->select('p.id')
//            ->from('Producto p')
//            ->leftJoin('p.Medicamento m')
//            ->leftJoin('p.DispositivoMedico dm')
//            ->leftJoin('p.Cosmetico c')
//            ->leftJoin('p.Higiene h')
//            ->leftJoin('p.Reactivo r')
//            ->where('m.empresa_id = ?', $empresa_id)
//            ->orwhere('dm.empresa_id = ?', $empresa_id)
//            ->orwhere('c.empresa_id = ?', $empresa_id)
//            ->orwhere('h.empresa_id = ?', $empresa_id)
//            ->orwhere('r.empresa_id = ?', $empresa_id)
//            ->orderBy('p.id ASC');
//        $pro = $q->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
//        var_dump($pro);
        
        //medicamento
        $q = Doctrine_Query::create()
            ->from('Producto p')
            ->innerJoin('p.Medicamento m WITH m.empresa_id = ?', $empresa_id)
            ->orderBy('p.id ASC');
//        $pro = $q->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
//        var_dump($pro);
//        die;
//        $productos = $q->execute();
//        $lista_productos = array();
//        foreach ($productos as $producto) {
//            $lista_productos[$producto['id']] = $producto->Medicamento->getNombreGenerico();
//        }
        //higiene
        $q = Doctrine_Query::create()
            ->from('Producto p')
            ->innerJoin('p.Higiene m WITH m.empresa_id = ?', $empresa_id)
            ->orderBy('p.id ASC');
//        $pro = $q->execute(array(), Doctrine_Core::HYDRATE_ARRAY);
//        var_dump($pro);
//        die;
        $productos = $q->execute();
        //$lista_productos = array();
        foreach ($productos as $producto) {
            $lista_productos[$producto['id']] = "NSOH | ".$producto->Higiene->getNombre();
        }
        //var_dump($lista_productos);
        //die();
        return $this->renderText(json_encode($lista_productos));
        //var_dump(json_encode($pro));
        //die();
//        $q = Doctrine_Query::create()
//                    ->se
//                    ->from('Producto p')
//                    ->leftJoin('p.Medicamento m')
//                    ->leftJoin('p.DispositivoMedico dm')
//                    ->leftJoin('p.Cosmetico c')
//                    ->leftJoin('p.Higiene h')
//                    ->leftJoin('p.Reactivo r')
//                    ->where('m.empresa_id = ?', $empresa_id)
//                    ->orwhere('dm.empresa_id = ?', $empresa_id)
//                    ->orwhere('c.empresa_id = ?', $empresa_id)
//                    ->orwhere('h.empresa_id = ?', $empresa_id)
//                    ->orwhere('r.empresa_id = ?', $empresa_id)
//                    ->orderBy('p.id ASC');
//        
//        
//        
//            
//        $productos = $q->execute();
//        $lista_productos = array();
//        
//        foreach ($productos as $producto) {
//            $lista_productos[$producto['id']] = $producto['nombre'];
//        }
// 
//        return $this->renderText(json_encode($marcas));
//        
//        
//        
//        
//        
//        
//        
//        
//        if($request->hasParameter('rubro_id'))
//        {
//            $empresa_id = $request->getParameter('empresa_id');
//            
//            $q = Doctrine_Query::create()
//                    ->from('Activo a')
//                    ->leftJoin('a.Subrubro s')
//                    ->leftJoin('s.Rubro r')
//                    ->where('r.id = ?', $rubro_id)
//                    ->orderBy('a.codigo DESC');
//            
//            $activo = $q->fetchOne();
//            $codigo = $activo['codigo'] + 1;
//            $codigo = array('codigo' => str_pad($codigo, 4, '0', STR_PAD_LEFT));
//        
//            echo json_encode($codigo, JSON_FORCE_OBJECT);
//            
//            throw new sfStopException();
//        }
    }
    public function executeAjaxGetDatosJSON(sfWebRequest $request)
    {
        $producto_id = $request->getParameter('id');
        $tipo = $request->getParameter('tipo');
        
        if($tipo == 'NSOH')
        {
            $q = Doctrine_Query::create()
                ->from('Producto p WIHT id = ?', $producto_id)
                ->innerJoin('p.Higiene h');
        
        }
            
        $producto = $q->fetchOne();
        
        $datos = array('');
        //die();
        //throw new sfStopException();
    }
    
}
