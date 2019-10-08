<?php
include "BDPokemones.php";

$pokes = array(); 
if(isset($_GET["tipo"]))
{
    $t = $_GET["tipo"];
    foreach ($pokemones as $p) {
        //si p es de tipo t
        //entonces agregar a pokes

        if($p->getTipo() == $t)
        {
            array_push($pokes, $p);
        }
    }           
}
else
{
    echo "Error, número de pokemon no especificado"; 
}

var_dump($pokes);
?>