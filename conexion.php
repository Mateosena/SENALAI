<?php

class conexion {

private $hosting = "localhost";
private $user = "root";
private $bd ="senalai";
private $pas ="";



public function conectar(){
$conexion = mysqli_connect($this->hosting,$this->user,$this->pas,$this->bd);
return $conexion;
}

};
?>