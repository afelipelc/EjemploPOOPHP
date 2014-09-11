<?php

namespace Modelo;
/**
* 
*/
class Persona
{
  
  private $nombre = "";
  private $apellidos = "";

  function __construct()
  {
  }
  public function NombreCompleto(){
    return $this->nombre." ".$this->apellidos;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre($nombre){
    $this->nombre = $nombre;
    $this->getNombre();
  }

  //terminar el resto
}
?>