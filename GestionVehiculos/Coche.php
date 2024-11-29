<?php
 class Coche extends Vehiculo{
    public int $numeroPuertas;

    public function setPuertas(int $numeroPuertas){
        $this->numeroPuertas=$numeroPuertas;
    }
    public function getPuertas(){
        return $this->numeroPuertas;
    }

    public function __construct(string $marca, string $modelo, string $color = 'Negro',int $numeroPuertas){
        parent::__construct($marca,$modelo,$color);
        $this->numeroPuertas=$numeroPuertas;
    }

    public function obtenerInformacion(){
        return parent::obtenerInformacion(). ", Numero de puertas:".$this->numeroPuertas;
    }

    public function mover(){
        echo "El coche se esta moviendo";
    }

    public function detener(){
        echo "El coche se esta deteniendo";
    }
}

?>