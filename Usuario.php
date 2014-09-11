<?php
namespace Modelo;
require_once('Persona.php');


/**
* 
*/
class Usuario extends Persona
{
  private $username = "";
  private $rol = "invitado";
  private $activo = true;

  function __construct()
  {
  }

  public function CambiarRol($rol){
    if($rol == "administrador" || 
      $rol == "invitado" || 
      $rol == "moderador" || 
      $rol == "lector" || 
      $rol == "redactor"){

      $this->rol = $rol;
      return true;
    }else
      return false;
  }

  public function TieneRol($rol){
    return $this->rol == $rol; //comparar
  }

  public function CambiarEstadoActivo($estado){
    return $this->activo = $estado; //asignar
  }
}
?>