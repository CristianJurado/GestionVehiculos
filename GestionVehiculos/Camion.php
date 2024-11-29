<?php
class Camion extends Vehiculo{
    public float $capacidadCarga;
    public function setCarga(float $capacidadCarga){
        $this->capacidadCarga=$capacidadCarga;
    }
    public function getCarga(){
        return $this->capacidadCarga;
    }

    public function __construct(string $marca, string $modelo, string $color = 'Negro',float $capacidadCarga){
        parent::__construct($marca,$modelo,$color);
        $this->capacidadCarga=$capacidadCarga;
    }

    public function obtenerInformacion(){
       return parent::obtenerInformacion(). ", Capacidad de carga:".$this->capacidadCarga;
    }

    public function mover(){
        echo "El camion se esta moviendo";
    }

    public function detener(){
        echo "El camion se esta deteniendo";
    }
}
?>