<?php
$persona = array (
    array("nombre" => "Rosa", "estatura" => 168, "sexo" => "F"),
    array("nombre" => "Ignacio", "estatura" => 175, "sexo" => "M"),
    array("nombre" => "Daniel", "estatura" => 172, "sexo" => "M"),
    array("nombre" => "Rubén", "estatura" => 182, "sexo" => "M")
);

// Añadir nueva persona al final
array_push($persona, array("nombre" => "Laura", "estatura" => 160, "sexo" => "F"));
array_push($persona, array("nombre" => "Javier", "estatura" => 178, "sexo" => "M"));
array_push($persona, array("nombre" => "Sara", "estatura" => 165, "sexo" => "F"));

// Eliminar última persona
array_pop($persona);

// Añadir nueva persona al principio
array_unshift($persona, array("nombre" => "Carlos", "estatura" => 170, "sexo" => "M"));
array_unshift($persona, array("nombre" => "Ana", "estatura" => 160, "sexo" => "F"));

// Eliminar primera persona
array_shift($persona);

// Actualizar información de una persona específica
$indice = 2;
array_splice($persona, $indice, 1, array("nombre" => "David", "estatura" => 175, "sexo" => "M"));

// Crear una cadena de nombres
$nombresComoString = implode(', ', array_column($persona, 'nombre'));
echo "Lista de nombres como cadena: $nombresComoString\n";

// Dividir cadena en un array de nombres
$nuevoArrayDeNombres = explode(', ', $nombresComoString);
echo "Nuevo array de nombres:\n";
print_r($nuevoArrayDeNombres);

// Obtener claves del array
$claves = array_keys($persona[0]);
echo "Claves del array:\n";
print_r($claves);

// Obtener valores del array
$valores = array_values($persona[0]);
echo "Valores del array:\n";
print_r($valores);

// Combinar dos arrays en uno asociativo
$clavesCombinadas = ['nombre', 'estatura', 'sexo'];
$nuevoArrayCombinado = array_combine($clavesCombinadas, ["Marta", 175, "F"]);
echo "Nuevo array combinado:\n";
print_r($nuevoArrayCombinado);

// Verificar existencia de una persona específica
$personaBuscada = array("nombre" => "David", "estatura" => 175, "sexo" => "M");
if (in_array($personaBuscada, $persona)) {
    echo "La persona se encuentra en la lista.\n";
} else {
    echo "La persona no se encuentra en la lista.\n";
}

// Contar el número de personas
$numeroDePersonas = count($persona);
echo "Número total de personas: $numeroDePersonas\n";
?>
