<?php
require_once "Vehiculo.php";
require_once "Coche.php";
require_once "Moto.php";
require_once "Camion.php";
require_once "Concesionario.php";
// Ejemplo de uso
// $coche = new Coche("Toyota", "Corolla", "rojo", 4);
// $moto = new Moto("Yamaha", "MT-07", "verde", 7500.00);
// $camion = new Camion("Volvo", "FH16", "Blanco", 120000.00);

// echo $coche->obtenerInformacion(). "<br>" ;
// echo $moto->obtenerInformacion(). "<br>" ;
// echo $camion->obtenerInformacion(). "<br>" ;

// echo $coche->mover(). "<br>" ;
// echo $moto->mover(). "<br>" ;
// echo $camion->mover(). "<br>" ;
// echo $coche. "<br>" ;
// echo $moto. "<br>" ;

$concesionario = new Concesionario();
$coche = new Coche("Toyota", "Corolla", "rojo", 4);
$moto = new Moto("Yamaha", "MT-07", "verde", 7500.00);
$camion = new Camion("Volvo", "FH16", "Blanco", 120000.00);

// Mostrar información de cada vehículo
$concesionario->mostrarVehiculo($coche);
$concesionario->mostrarVehiculo($moto); 
$concesionario->mostrarVehiculo($camion); 

$coche->marca;

?>