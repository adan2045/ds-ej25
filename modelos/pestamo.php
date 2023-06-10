<?php

class Prestamo {


    public $Id;
    public $Numero;
    public $FechaDeAlta;
    public $CantidadCuotas;
    public $MontoCapital;
    public $DatosPersona;
   
    
    public $LineaPrestamo; 


    public function MostrarDatos(){

    
    
        echo 'persona direccion: '. $this->Id . '<br>';
        echo 'persona Nombre: '. $this->Numero . '<br>';
        echo 'persona documento: '. $this->FechaDeAlta . '<br>';
        echo 'persona edad : '. $this->CantidadCuotas . '<br>';
        echo 'persona edad : '. $this->MontoCapital . '<br>';
        echo 'persona edad : '. $this->DatosPersona . '<br>';




        
        echo  '<br>';
        echo 'nacionalidad id: '. $this->Nacionalidad->Id . '<br>';
        echo 'nacionalidad descripcion: '. $this->Nacionalidad->Descripcion . '<br>';
    }
    
    



}