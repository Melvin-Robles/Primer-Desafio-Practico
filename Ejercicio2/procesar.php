<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
    maximum-scale=1.0, minimum-scale=1.0" />
    <title>Información recibida</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Nobile" />
    <link rel="stylesheet" href="css/tables.css" />
    <script src="js/modernizr.custom.lis.js"></script>
</head>
<body>
    <section>
        <article>
            <div id="info">
                <table id="hor-zebra" summary="Datos recibidos del formulario">
                    <caption>Información de formulario</caption>
                    <thead>
                        <tr class="thead">
                        <th scope="col">Fecha</th>
                        <th scope="col">Cuota</th>
                        <th scope="col">Capital</th>
                        <th scope="col">Interés</th>
                        <th scope="col">Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(isset($_POST['submit']) && $_POST['submit'] == "Enviar"):
                                //Accediendo a los datos del formulario usando la funcion extract()
                                extract($_POST);
                                
                                if(!empty($sis_amo) && !empty($fecha) && !empty($importe) && !empty($periodo) && !empty($interes) && !empty($plazo) && !empty($sis_amo)){
                                    if($sis_amo == "sis_simple"){
                                        $interes_n = number_format($importe*$interes/100, 2);
                                        $capital_n = number_format($importe/$plazo, 2);
                                        $cuota_n = number_format($capital_n + $interes_n, 2);
                                        $cont = 1;
                                        while($cont <= $plazo){
    
                                            $saldo = number_format($importe - ($cont * $capital_n), 2);
                                        
                                            if($cont % 2 == 0){
                                                echo "\t<tr>\n";
                                            } else {
                                                echo "\t<tr class=\"odd\">\n";
                                            }
                                            
                                            echo "\t\t<td>\n" . $fecha . "\n</td>\n";
                                            echo "\t\t<td>\n" . $cuota_n . "\n</td>";
                                            echo "\t\t<td>\n" . $capital_n . "\n</td>";
                                            echo "\t\t<td>\n" . $interes_n . "\n</td>";
                                            echo "\t\t<td>\n" . $saldo . "\n</td>";
                                            echo "\t</tr>\n";
                                            $cont++;
                                        }
                                    }
                                    else{
                                        $interes_n = number_format($importe*$interes/100, 2);
                                        $capital_n = number_format($importe/$plazo, 2);
                                        $cuota_n = number_format($importe * $interes * $plazo, 2);
                                        $importetotal = $importe;
                                        
                                        $cont = 0;
                                        while($cont < $plazo){
                                            
                                            //$cuota_n = number_format(($capital_n+$interes_n)*pow(1+$interes/100, $cont), 2);
                                            $cuota_n = number_format($capital_n + $interes_n, 2);
                                            //$importetotal += $cuota_n;
                                            $saldo = number_format($importe - (($cont + 1) * $capital_n), 2);
                                            $interes_n = number_format($interes*$cuota_n, 2);
                                            
                                        
                                            if($cont % 2 == 0){
                                                echo "\t<tr>\n";
                                            } else {
                                                echo "\t<tr class=\"odd\">\n";
                                            }
                                            
                                            echo "\t\t<td>\n" . $fecha . "\n</td>\n";
                                            echo "\t\t<td>\n" . $cuota_n . "\n</td>";
                                            echo "\t\t<td>\n" . $capital_n . "\n</td>";
                                            echo "\t\t<td>\n" . $interes_n . "\n</td>";
                                            echo "\t\t<td>\n" . $saldo . "\n</td>";
                                            echo "\t</tr>\n";
                                            $cont++;
                                        }
                                    }
                                }else{
                                    echo "<script>
                                                alert('No ha ingresado todos los datos');
                                                window.location= 'procesar.php'
                                        </script>";
                                }
                                
                            else:
                                echo "\t</tr class=\"odd\">\n";
                                echo "\t\t<td>No se han ingresado desde el formulario.</td>";
                                echo "\t</tr>\n";
                            endif;
                        ?>
                    </tbody>
                </table>
            <div id="link">
                <a href="index.php" class="button-link">Ingresar nuevos datos</a>
            </div>    
            </div>
        </article>
    </section>
</body>
</html>