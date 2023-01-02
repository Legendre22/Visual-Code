<?php

function recomendacion() {
  
  // Primero se escribe el nombre de cada array con $ primero, seguido de =() y lo que esta dentro. Si estoy comparando lo que hay en cada posicion del array, entonces la forma correcta de escribirlo es la siguiente: "" => "",
  
$clima = array("Bogota" => "frio", "Monteria" => "calido", "Medellin" => "templado");
$ubicacion = array("Guajira" => "norte", "Leticia" => "sur", "Santander" => "este", "Antioquia" => "oeste");
$turismo = array("Santa Marta" => "mar", "Villavicencio" => "llano", "Riohacha" => "desierto", "Quindio" => "valle");

switch("turismo") {
  
  // Switch se acompaña de una condicion con "" y se usa para cambiar entre distintos parametros establecidos (estos se establecen con el case)
  
  case "clima":
  
  // "En caso de que la condicion switch sea 'clima', entonces va a suceder algo"
  
    echo array_search("frio", $clima);
      break;
  case "ubicacion":
    echo array_search("norte", $ubicacion);
      break;
  case "turismo":
    echo array_search("valle", $turismo);
      break;

  // Break indica que hasta ahi finaliza ese analisis del caso
  // Echo se usa para mostrar en forma de texto lo que tiene escrito en frente de ella. Con array_search busco el clima por el cual quiero buscar. Ej: "frio", y el segundo valor es donde lo va a ir a buscar, en este caso $clima

  }

}

recomendacion(); // Con esto, se va a mostrar en la pantalla lo que se quiere ejecutar (lo que esta al lado de function y defino yo mismo el nombre)

?>