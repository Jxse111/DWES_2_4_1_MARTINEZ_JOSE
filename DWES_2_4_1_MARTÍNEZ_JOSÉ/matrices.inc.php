<?php

function muestra_matriz($matriz1) {
    $tabla = " ";
    if (is_array($matriz1) && $matriz1 != null) {
        $tabla .= "<table border = '1'>"; //Creamos la tabla
        for ($filas = 0; $filas < count($matriz1); $filas++) {
            $tabla .= "<tr>";
            for ($columnas = 0; $columnas < count($matriz1[$filas]); $columnas++) {
                $tabla .= sprintf("<td>%s</td>", $matriz1[$filas][$columnas]);
            }
            $tabla .= "</tr>";
        }
        $tabla .= "</table>";
    }
    return $tabla;
}

function suma_matriz($matriz1, $matriz2) {
    $tamanioMatriz1 = count($matriz1);
    $tamanioMatriz2 = count($matriz2);
    if ($tamanioMatriz1 == $tamanioMatriz2) {
        for ($filas = 0; $filas < count($matriz1); $filas++) {
            for ($columnas = 0; $columnas < count($matriz1[$filas]); $columnas++) {
                $resultado[$filas][$columnas] = $matriz1[$filas][$columnas] + $matriz2[$filas][$columnas];
            }
        }
    } else {
        $resultado = false;
    }
    return $resultado;
}
