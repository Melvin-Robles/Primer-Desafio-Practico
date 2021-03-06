<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />
    <title>Tabla de amortización</title>
</head>
<body>

<header>
<h1>Calculadora Tabla de Amortización</h1>
</header>


<section id="caja">

<!-- Campo Sistema de amortización -->
<br>
            <form action="procesar.php" method="post"> 
           <table>
                <tr>
                    <td><b>Sistema de amortización: </b></td>
                    <td>
                        <select name="sis_amo">
                            <option value="sis_frances">Sistema francés</option>
                            <option value="sis_aleman">Sistema alemán</option>
                            <option value="sis_americano">Sistema americano</option>
                            <option value="sis_simple">Sistema simple: Cuota, amortización e interés fijo</option>
                            <option value="sis_compuesto">Sistema compuesto: Cuota, amortización e interés fijo</option>
                        </select>
                    </td>
                </tr>

<!-- Campo de fecha -->



                <label for="start"><b>Fecha del préstamo:</b></label>

                <input type="date" id="start" name="fecha" value="2022-01-01" min="2000-01-01" max="2050-12-31">

<!-- Campo Importe de prestamo -->


<br>
<br>        
              
                <tr>
                    <td><b>Importe del prestamo:  </b></td>
                    <td> <input type="number" name="importe" placeholder="Cantidad"/>  </td>
                </tr> 
                

<!-- Campo Periodo -->


<tr>
                    <td><b>Periodo: </b></td>
                    <td>
                        <select name="periodo">
                            <option value="+ 1 days">Diario</option>
                            <option value="+ 7 days">Semanal</option>
                            <option value="+ 15 days">Quincenal</option>
                            <option value="+ 1 months">Mensual</option>
                            <option value="+ 1 years">Anual</option>       
                        </select>
                    </td>
                </tr>

<!-- Campo Interes diario -->


<tr>
                    <td><b>Interes:  </b></td>
                    <td> <input type="number" name="interes" placeholder="Cantidad"/>  </td>
</tr> 

<!-- Campo Plazo -->


<tr>
                    <td><b>Plazo:  </b></td>
                    <td> <input type="number" name="plazo" placeholder="Cantidad"/>  </td>
</tr> 


<!-- Boton -->
<tr>
                    <td>
                        <input type="submit" id="enviar" name="submit" value="Enviar" />
                    </td>
</tr>

</form>
</section> 
</body>
</html>

<?php
?>
