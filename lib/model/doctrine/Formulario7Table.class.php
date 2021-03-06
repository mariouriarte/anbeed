<?php

/**
 * Formulario7Table
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Formulario7Table extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object Formulario7Table
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Formulario7');
    }

    public static function selectForms7DeEmpresaProducto()
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        $tabla = $user->getAttribute('tabla');
        
        if($tabla == "medicamento")
        {
            $q = Doctrine_Query::create()
                    ->from('Formulario7 f')
                    ->innerJoin('f.Producto p')
                    ->innerJoin('p.Medicamento m')
                    ->innerJoin('m.Empresa')
                    ->where('m.empresa_id = ?', $empresa->getId());
            return $q;
        }
        if($tabla == "reactivo")
        {
            $q = Doctrine_Query::create()
                    ->from('Formulario7 f')
                    ->innerJoin('f.Producto p')
                    ->innerJoin('p.Reactivo r')
                    ->innerJoin('r.Empresa')
                    ->where('r.empresa_id = ?', $empresa->getId());
            return $q;
        }
        if($tabla == "dispositivo_medico")
        {
            $q = Doctrine_Query::create()
                    ->from('Formulario7 f')
                    ->innerJoin('f.Producto p')
                    ->innerJoin('p.DispositivoMedico d')
                    ->innerJoin('d.Empresa')
                    ->where('d.empresa_id = ?', $empresa->getId());
            return $q;
        }
        if($tabla == "cosmetico")
        {
            $q = Doctrine_Query::create()
                    ->from('Formulario7 f')
                    ->innerJoin('f.Producto p')
                    ->innerJoin('p.Cosmetico c')
                    ->innerJoin('c.Empresa')
                    ->where('c.empresa_id = ?', $empresa->getId());
            return $q;
        }
        if($tabla == "higiene")
        {
            $q = Doctrine_Query::create()
                    ->from('Formulario7 f')
                    ->innerJoin('f.Producto p')
                    ->innerJoin('p.Higiene h')
                    ->innerJoin('h.Empresa')
                    ->where('h.empresa_id = ?', $empresa->getId());
            return $q;
        }
        
        
    }
    public static function  selectForms7DeEmpresa()
    {
        $user = sfContext::getInstance()->getUser();
        $empresa = $user->getAttribute('empresa');
        
        $q = Doctrine_Query::create()
                    ->from('Formulario7 f')
                    ->leftJoin('f.Producto p')
                    ->leftJoin('p.Medicamento m')
                    ->leftJoin('p.Reactivo r')
                    ->leftJoin('p.DispositivoMedico d')
                    ->leftJoin('p.Cosmetico c')
                    ->leftJoin('p.Higiene h')
                    ->leftJoin('m.Empresa')
                    ->leftJoin('r.Empresa')
                    ->leftJoin('d.Empresa')
                    ->leftJoin('c.Empresa')
                    ->leftJoin('h.Empresa')
                    ->where('m.empresa_id = ?', $empresa->getId())
                    ->orWhere('r.empresa_id = ?', $empresa->getId())
                    ->orWhere('d.empresa_id = ?', $empresa->getId())
                    ->orWhere('c.empresa_id = ?', $empresa->getId())
                    ->orWhere('h.empresa_id = ?', $empresa->getId())
                    ->orderBy('f.id ASC');
        return $q;
        
    }
}