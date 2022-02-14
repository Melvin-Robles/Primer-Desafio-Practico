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
    <article>
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
                            <option>USD</option>
                            <option>EUR</option>
                            <option>YEN</option>
                            <option>GBP</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><b>a:</b></td>
                    <td>
                        <select name="a">
                            <option>EUR</option>
                            <option>GBP</option>
                            <option>YEN</option>
                            <option>USD</option>
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
      
   </article>
</section>



</body>
</html>

<?php



if (isset ($_POST ['convertir']))
{
    $cantidad = $_POST['cantidad'];
    $ConDe = $_POST ['ConDe'];
    $a = $_POST['a'];

    if ($ConDe == 'USD' AND $a == 'EUR') 
    {
        echo  $cantidad*0.88 . "€";
    }

    if ($ConDe == 'USD' AND $a == 'GBP') 
    {
        echo  $cantidad*0.74 . "£";
    }

}








/*if ($cbxconver = "Euro") 
{

   $txt1 = $_POST['txt1'];

   $euro = ((double)$txt1*0.88);
   $yen = ((double)$txt1*115.37);
   $libra = ((double)$txt1*0.74);

   echo "Euro: $euro Yen: $yen Libra: $libra";

}*/

?>