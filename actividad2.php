<!DOCTYPE HTML>
<html>
    <head>
        <title>Descuento en el precio de gaseosas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $precio_actual_gaseosa = floatval ($_POST['precio_actual_gaseosa']);
    $cantidad_unidades_adquiridas = floatval ($_POST['unidades_adquiridas']);
    $nuevo_precio_gaseosa = 0.05 * $precio_actual_gaseosa;
    $importe_compra = $nuevo_precio_gaseosa * $cantidad_unidades_adquiridas;
    $importe_descuento = 0.07 * $importe_compra;
    $importe_pagar = $importe_compra - $importe_descuento;
    $obsequio = 2 * $cantidad_unidades_adquiridas;
    echo 'Nuevo precio  de la gaseosa: ' . $nuevo_precio_gaseosa . "<br/>\n";
    echo 'Importe de la compra: ' . $importe_compra . "<br/>\n";
    echo 'Importe del descuento: ' . $importe_descuento . "<br/>\n";
    echo 'Importe a pagar: ' . $importe_pagar . "<br/>\n";
    echo 'Obsequio: ' . $obsequio . "<br/>\n";

}
 
?>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="precio_actual_gaseosa">Ingresa precio actual de la gaseosa:</label>
                        </td>
                        <td>
                            <input name="precio_actual_gaseosa" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="unidades_adquiridas">Ingresa cantidad de unidades adquiridas:</label>
                        </td>
                        <td>
                            <input name="unidades_adquiridas" required="required" step="0.000001" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" rowspan="2">
                            <input value="Procesar" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>