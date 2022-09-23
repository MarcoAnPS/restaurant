<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';

/*
* Clase CtrlPrincipal
*/
class CtrlPrincipal extends Controlador {
    
    public function index(){
        $menu = array(
            'CtrlTurno'=>'Turnos',
            'CtrlCarrera'=>'Carreras Profesionales',
            'CtrlTipoPersona'=>'Tipos de Persona',
            'CtrlSemestre'=>'Semestres Académicos',
            'CtrlDepartamento'=>'Departamentos',
            'CtrlTipoVacuna'=>'Tipos de Vacunas',
            'CtrlPersona'=>'Personas (Estudiantes,...)',
            'CtrlVacuna'=>'Vacunas',
            );
        $datos = array(
                'encabezado'=> 'Sistema Administración Vacunas',
                'menu'=>$menu
            );
        
        $this->mostrarVista('principal.php',$datos);
    }
}