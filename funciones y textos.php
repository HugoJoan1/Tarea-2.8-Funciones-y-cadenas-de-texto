<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
   
<h2>Ejercicio 2.8 </h2>
<h3>Escribe una palabra y se le dara detalles de la plabra:</h3>
    <form method="POST" action="">
        <label for="texto">texto:</label>
        <input type="text" step="any" name="texto" required>
        <br></br>
        <button type="submit" name="calcular1">Contar los caracteres</button>
        <button type="submit" name="calcular2">Convertir a mayusculas</button>
        <button type="submit" name="calcular3">Convertir a minusculas</button>
        <button type="submit" name="calcular4">Invertir texto</button>
        <button type="submit" name="calcular5">Palindromo</button>
        <button type="submit" name="calcular6">Contar sus vocales</button>
    </form>
    <br>

<?php
$texto = $_POST['texto'];

//Hay Comandos que saque de W3SHOOLS
if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['calcular2'])){

    echo "La palabra en todas mayusculas es: " . mb_strtoupper($texto, 'UTF-8') . "<br>";
    
    }

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['calcular3'])){

    echo "La palabra en todas minusculas es: " . mb_strtolower($texto, 'UTF-8') . "<br>";
    
    }

if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['calcular1'])){

    echo "La palabra tiene " . mb_strlen($texto, 'UTF-8') . " Caracteres<br>";
    
    }




?>

</body>
</html>
