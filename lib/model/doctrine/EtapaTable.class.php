<?php

/**
 * EtapaTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class EtapaTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object EtapaTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Etapa');
    }
    
    public function selectEtapaVerificacion()
    {
        $q = Doctrine_Query::create()
                    ->from('Etapa e')
                    ->leftJoin('e.TipoEtapa t')
                    ->where('t.nombre = ?', 'Verificación');
        return $q;
    }
    
    public function selectEtapaSeguimiento($id = null)
    {
        $q = Doctrine_Query::create()
            ->from('Etapa e')
            ->leftJoin('e.TipoEtapa t')
            ->where('e.formulario_id = ?', $id)
            ->orderBy('e.created_at DESC');
        
        return $q;
    }
    
//    public function selectEtapasDeEmpresa()
//    {
//        $user = sfContext::getInstance()->getUser();
//        $empresa = $user->getAttribute('empresa');
//        
//        $q = Doctrine_Query::create()
//            ->from('Etapa e')
//            //->where('e.empresa_id = ?', $empresa->getId())
//            //->leftJoin('a.Consolidados c WITH c.gestion = ?', $anio-1)
//                
//            ->leftJoin('e.Formulario f')
//                
//            ->leftJoin('f.Formulario5 f5')
//            ->leftJoin('f5.Medicamento m WITH m.empresa_id = ?', $empresa->getId())
//                
//            ->leftJoin('f.Formulario27 f27')
//            ->leftJoin('f27.DispositivoMedico d WITH d.empresa_id = ?', $empresa->getId())
//                
//            ->leftJoin('f.Formulario516 f516')
//            ->leftJoin('f516.Cosmetico c WITH c.empresa_id = ?', $empresa->getId())
//                
//            ->leftJoin('f.Formulario706 f706')
//            ->leftJoin('f706.Higiene h WITH h.empresa_id = ?', $empresa->getId())
//                
////            ->leftJoin('f.Formulario7 f7')
////            ->leftJoin('f706.Higiene h WITH h.empresa_id = ?', $empresa->getId())
//                
//            ->leftJoin('f.Formulario11 f11')
//                
//            ->leftJoin('f.Formulario12 f12')
//            ->leftJoin('f12.Reactivo r WITH r.empresa_id = ?', $empresa->getId())
//            
//            ->where('m.empresa_id = ?', $empresa->getId())
//            ->orWhere('d.empresa_id = ?', $empresa->getId())
//            ->orWhere('c.empresa_id = ?', $empresa->getId())
//            ->orWhere('h.empresa_id = ?', $empresa->getId())
//            ->orWhere('f11.empresa_id = ?', $empresa->getId())
//            ->orWhere('r.empresa_id = ?', $empresa->getId())
//            ->orderBy('e.created_at DESC');
//            
//        return $q;
//    }
}
