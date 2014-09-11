<?php

namespace Negocio;
/**
* 
*/
class Calculadora
{
  //equivalente a Calculadora()
  function __construct()
  {
  }

  public function Sumar($Cantidad){
    //devolver la suma desde 1 hasta $Cantidad
    $suma = 0;
    for($i=1; $i<=$Cantidad; $i++){
      $suma += $i; // es igual a $sumar = $sumar + $i
    }
    return $suma;
  }

  public function Sumar3($Valor1, $Valor2, $Valor3){
    return $Valor1 + $Valor2 + $Valor3;
  }

  //hacer el resto de los métodos
}
?>