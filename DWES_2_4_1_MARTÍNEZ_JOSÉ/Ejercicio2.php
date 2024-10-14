<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <h2>Versión A : Números pares colocados por filas de 5 * 5, las columnas impares se tiñen de naranja</h2>
        <?php
        $matriz50 = [];
        $num = 0;
        $naranja = 'orange';//Usando una varaible para el color
        define("TAM", 8);
        for ($filas = 0; $filas < 5; $filas++) {
            for ($columnas = 0; $columnas < 5; $columnas++) {
                $matriz50[$filas][] = $num % 2 == 0 ? $num += 2 : ++$num;
            }
        }
        ?>
        <table border = "1"> <!-- Creamos la tabla -->
            <?php
            foreach ($matriz50 as $filas => $fila) {
                ?>
                <tr>
                    <!-- Generamos las columnas de la tabla -->
                    <?php foreach ($fila as $numero) { //Recorremos las columnas ?>
                        <td
                            width='<?php echo TAM ?>';
                            height='<?php echo TAM ?>';
                            bgcolor = '<?php if ($filas % 2 != 0) echo $naranja ?>'>
                            <?php echo $numero ?></td><!-- Mostramos el numero asociado a cada celda -->
                    <?php } ?>
                </tr> 
            <?php } ?>
        </table>

        <h2>Versión B: Números pares colocados por columnas de 5 * 5, las columnas impares se tiñen de naranja</h2>
        <table border ="1">
            <?php for ($filas = 0; $filas < count($matriz50); $filas++) {
                ?>
                <!-- Abrimos la nueva fila y le asignamos la condicion que en caso de que sea impar se tiña el fondo de naranja-->
                <tr bgcolor = '<?php if ($filas % 2 != 0) echo $naranja ?>'>
                    <?php foreach ($matriz50 as $numero) { ?>
                        <!-- Colocamos los numeros en las columnas -->
                        <td
                            width='<?php echo TAM ?>' 
                            height='<?php echo TAM ?>'
                            >
                            <?php echo $numero[$filas] ?></td>
                    <?php } ?>
                </tr><!-- Cerramos la fila -->
            <?php } ?>
        </table><!-- Finalmente cerramos la tabla -->
    </body>
</html>
