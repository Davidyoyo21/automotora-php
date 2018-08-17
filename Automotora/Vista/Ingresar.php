<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="grabar_auto.php">
            <table border="1">
                <thead>
                    <tr>
                        <th>Formulario de Ingreso Autos</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Patente</td>
                        <td>
                            <input type="text" name="txtPatente" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>Dueño</td>
                        <td>
                            <input type="text" name="txtDueno" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>Modelo</td>
                        <td>
                            <input type="text" name="txtModelo" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>Marca</td>
                        <td>
                            <input type="text" name="txtMarca" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>Año</td>
                        <td>
                            <input type="number" min="1900" max="2018" name="txtAnio" value="" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Enviar" />
                            <input type="reset" value="Limpiar" />
                        </td>
                        
                    </tr>
                </tbody>
            </table>

        </form>
    </body>
</html>
