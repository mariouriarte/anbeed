<?php
class funciones 
{
    static public function FormatearFecha($fecha)
    {
        return date("d/m/Y",strtotime($fecha)); 
    }
    static public function FechaEspanol($fecha)
    {
        $i = strtotime($fecha);
        $ano = date('Y', $i);
        $mes = date('n',$i);
        $dia = date('d',$i);
        $diasemana = date('w',$i);
        $dias = array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        return  $dias[$diasemana]." ".$dia." de ".$meses[$mes-1]. " de ".$ano ;
    }
}
