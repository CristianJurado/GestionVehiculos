<?php

class Moto extends Vehiculo{
    public int $cilindrada;

    public function setCilindrada(int $cilindrada){
        $this->cilindrada=$cilindrada;
    }
    public function getCilindrada(){
        return $this->cilindrada;
    }

    public function __construct(string $marca, string $modelo, string $color = 'Negro',int $cilindrada){
        parent::__construct($marca,$modelo,$color);
        $this->cilindrada=$cilindrada;
    }

    public function obtenerInformacion(){
        return parent::obtenerInformacion(). ", Cilindrada:".$this->cilindrada;
    }

    public function mover(){
        echo "La moto se esta moviendo";
    }

    public function detener(){
        echo "La moto se esta deteniendo";
    }
}

?>