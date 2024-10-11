<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <h2>Versión A : Números pares colocados por filas de 5 * 5</h2>
        <?php
        $matriz50 = [];
        $num = 0;
        for ($filas = 0; $filas < 5; $filas++) {
            for ($columnas = 0; $columnas < 5; $columnas++) {
                $matriz50[$filas][] = $num % 2 == 0 ? $num += 2 : ++$num;
            }
        }
        ?>
        <table border = "1"> <!-- Creamos la tabla -->
            <?php
            foreach ($matriz50 as $fila) {
                ?>
                <tr>
                    <!-- Generamos las columnas de la tabla -->
                    <?php foreach ($fila as $numero) { //Recorremos las columnas ?>
                        <td ><?php echo $numero ?></td><!-- Mostramos el numero asociado a cada celda -->
                    <?php } ?>
                </tr> 
            <?php } ?>
        </table>

        <h2>Versión B: Números pares colocados por columnas de 5 * 5</h2>
        <table border ="1">
            <?php for ($filas = 0; $filas < count($matriz50); $filas++) {
                ?>
                <tr><!-- Abrimos la nueva fila-->
                    <?php foreach ($matriz50 as $numero) { ?>
                        <!-- Colocamos los numeros en las columnas -->
                        <td> <?php echo $numero[$filas] ?></td>
                    <?php } ?>
                </tr><!-- Cerramos la fila -->
            <?php } ?>
        </table><!-- Finalmente cerramos la tabla -->
    </body>
</html>
