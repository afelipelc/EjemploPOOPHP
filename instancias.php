<?php
ini_set('display_errors', '1');
require_once('Persona.php');
require_once('Usuario.php');
require_once('Calculadora.php');

use Negocio\Calculadora;
use Modelo\Persona;
use Modelo\Usuario;

$calc = new Calculadora();
echo $calc->Sumar(4);
echo "<br>";
echo $calc->Sumar3(8,4,6);
echo "<br>";

$persona1 = new Persona();
$persona1->setNombre("Felipe");
//$persona1->setApellidos("Lima");

echo $persona1->NombreCompleto();
echo "<br><br>";
$usuario = new Usuario();
$usuario->setNombre("Pepe");
//$usuario->setApellidos("Pecas");
$usuario->CambiarRol("administrador");
echo "El usuario se llama: "
.$usuario->NombreCompleto();
echo "<br>";
echo "¿Es administrador?: "
.$usuario->TieneRol("administrador");

?>