<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos.css" media="screen" />

    <title>¡Convierte tus monedas!</title>
</head>
<body>


<header>

<img class="logoclass" src="img/logo.png" alt="Logo conversor UDB" width="300px">


</header>

<section>
   <div id="formulario">
                <form action="index.php" method="post"> 
                <table>
                <tr>
                    <td><b>Ingrese la cantidad:  </b></td>
                    <td> <input type="number" name="cantidad" placeholder="Cantidad"/>  </td>
                </tr> 

                <tr>
                    <td><b>Convertir de:</b></td>
                    <td>
                        <select name="ConDe">
                            <option>Dolares</option>
                            <option>Euros</option>
                            <option>Yen_Japones</option>
                            <option>Libra_Esterlina</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><b>a:</b></td>
                    <td>
                        <select name="a">
                            <option>Euros</option>
                            <option>Libra_Esterlina</option>
                            <option>Yen_Japones</option>
                            <option>Dolares</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="convertir" value="Convertir" />
                    </td>
                </tr>

                </table>
                </form>
                </div>
</section>



</body>
</html>


<?php



if (isset ($_POST ['convertir']))
{
    $cantidad = $_POST['cantidad'];
    $ConDe = $_POST ['ConDe'];
    $a = $_POST['a'];

    //PARA DOLAR
    if ($ConDe == 'Dolares' AND $a == 'Euros') 
    {
        echo "<br><center><b style='background-color: rgb(162, 209, 108); padding: 10px;'>";
        echo  $cantidad*0.88 . "€";
    }

    if ($ConDe == 'Dolares' AND $a == 'Libra_Esterlina') 
    {
        echo "<br><center><b style='background-color: rgb(162, 209, 108); padding: 10px;'>";
        echo  $cantidad*0.74 . "£";
    }

    if ($ConDe == 'Dolares' AND $a == 'Yen_Japones') 
    {
        echo "<br><center><b style='background-color: rgb(162, 209, 108); padding: 10px;'>";
        echo  $cantidad*115.15 . "¥";
    }

    if ($ConDe == 'Dolares' AND $a == 'Dolares') 
    {
        echo "<br><center><b style='background-color: rgb(162, 209, 108); padding: 10px;'>";
        echo "$".  $cantidad*1;
    }

    //PARA EurosO
    if ($ConDe == 'Euros' AND $a == 'Dolares') 
    {
        echo "<br><center><b style='background-color: rgb(162, 209, 108); padding: 10px;'>";
        echo  "$". $cantidad*1.13;
    }

    if ($ConDe == 'Euros' AND $a == 'Libra_Esterlina') 
    {
        echo "<br><center><b style='background-color: rgb(162, 209, 108); padding: 10px;'>";
        echo  $cantidad*0.84 . "£";
    }

    if ($ConDe == 'Euros' AND $a == 'Yen_Japones') 
    {
        echo "<br><center><b style='background-color: rgb(162, 209, 108); padding: 10px;'>";
        echo  $cantidad*130.51 . "¥";
    }

    if ($ConDe == 'Euros' AND $a == 'Euros') 
    {
        echo "<br><center><b style='background-color: rgb(162, 209, 108); padding: 10px;'>";
        echo   $cantidad*1 . "€";
    }

    //PARA LIBRA
    if ($ConDe == 'Libra_Esterlina' AND $a == 'Dolares') 
    {
        echo "<br><center><b style='background-color: rgb(162, 209, 108); padding: 10px;'>";
        echo  "$". $cantidad*1.36;
    }

    if ($ConDe == 'Libra_Esterlina' AND $a == 'Euros') 
    {
        echo "<br><center><b style='background-color: rgb(162, 209, 108); padding: 10px;'>";
        echo  $cantidad*1.20 . "£";
    }

    if ($ConDe == 'Libra_Esterlina' AND $a == 'Yen_Japones') 
    {
        echo "<br><center><b style='background-color: rgb(162, 209, 108); padding: 10px;'>";
        echo  $cantidad*130.51 . "¥";
    }

    if ($ConDe == 'Libra_Esterlina' AND $a == 'Libra_Esterlina') 
    {
        echo "<br><center><b style='background-color: rgb(162, 209, 108); padding: 10px;'>";
        echo   $cantidad*1 . "£";
    }

    //PARA Yen_Japones
    if ($ConDe == 'Yen_Japones' AND $a == 'Dolares') 
    {
        echo "<br><center><b style='background-color: rgb(162, 209, 108); padding: 10px;'>";
        echo  "$". $cantidad*0.0087;
    }

    if ($ConDe == 'Yen_Japones' AND $a == 'Euros') 
    {
        echo "<br><center><b style='background-color: rgb(162, 209, 108); padding: 10px;'>";
        echo  $cantidad*0.0077. "£";
    }

    if ($ConDe == 'Yen_Japones' AND $a == 'Libra_Esterlina') 
    {
        echo "<br><center><b style='background-color: rgb(162, 209, 108); padding: 10px;'>";
        echo  $cantidad*0.0064 . "¥";
    }

    if ($ConDe == 'Yen_Japones' AND $a == 'Yen_Japones') 
    {
        echo "<br><center><b style='background-color: rgb(162, 209, 108); padding: 10px;'>";
        echo   $cantidad*1 . "¥";
    }


}


?>
