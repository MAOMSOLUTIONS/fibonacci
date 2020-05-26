<?php

function fibonacci($n)
{
    $fibonacci  = [0,1];
 
  for($i=2;$i<=$n;$i++)
    {
        $fibonacci[] = $fibonacci[$i-1]+$fibonacci[$i-2];
    }
    
    return $fibonacci[$n];
}
 
function calculo($valor){
    if(($valor >0)&&($valor <=12)){
        $primerResultado = fibonacci($valor);
        $segundoResultado = fibonacci($valor + 1);
        $Total =  $primerResultado + $segundoResultado;
        echo "Entrada ".$valor. " => ".$primerResultado. " + ". $segundoResultado . " = ".$Total;
        

        
    }else{
        echo "Debe introducir un número entre 0 y 12";
    }
    
}

Calculo(11);

?>
