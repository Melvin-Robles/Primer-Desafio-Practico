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

    //PARA DOLAR
    if ($ConDe == 'USD' AND $a == 'EUR') 
    {
        echo  $cantidad*0.88 . "€";
    }

    if ($ConDe == 'USD' AND $a == 'GBP') 
    {
        echo  $cantidad*0.74 . "£";
    }

    if ($ConDe == 'USD' AND $a == 'YEN') 
    {
        echo  $cantidad*115.15 . "¥";
    }

    if ($ConDe == 'USD' AND $a == 'USD') 
    {
        echo "$".  $cantidad*1;
    }

    //PARA EURO
    if ($ConDe == 'EUR' AND $a == 'USD') 
    {
        echo  "$". $cantidad*1.13;
    }

    if ($ConDe == 'EUR' AND $a == 'GBP') 
    {
        echo  $cantidad*0.84 . "£";
    }

    if ($ConDe == 'EUR' AND $a == 'YEN') 
    {
        echo  $cantidad*130.51 . "¥";
    }

    if ($ConDe == 'EUR' AND $a == 'EUR') 
    {
        echo   $cantidad*1 . "€";
    }

    //PARA LIBRA
    if ($ConDe == 'GBP' AND $a == 'USD') 
    {
        echo  "$". $cantidad*1.36;
    }

    if ($ConDe == 'GBP' AND $a == 'EUR') 
    {
        echo  $cantidad*1.20 . "£";
    }

    if ($ConDe == 'GBP' AND $a == 'YEN') 
    {
        echo  $cantidad*130.51 . "¥";
    }

    if ($ConDe == 'GBP' AND $a == 'GBP') 
    {
        echo   $cantidad*1 . "£";
    }

    //PARA YEN
    if ($ConDe == 'YEN' AND $a == 'USD') 
    {
        echo  "$". $cantidad*0.0087;
    }

    if ($ConDe == 'YEN' AND $a == 'EUR') 
    {
        echo  $cantidad*0.0077. "£";
    }

    if ($ConDe == 'YEN' AND $a == 'GBP') 
    {
        echo  $cantidad*0.0064 . "¥";
    }

    if ($ConDe == 'YEN' AND $a == 'YEN') 
    {
        echo   $cantidad*1 . "¥";
    }


}



?>