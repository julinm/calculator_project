<link rel="stylesheet" href="style.css" type="text/css">


<?php

if (isset($_GET["operacion"])){

    $num1= $_GET["num1"];
    $num2= $_GET["num2"];
    $op = $_GET["operacion"];
  
    

    if ($op && $op !=='C' && (!$num1 || !$num2)){
        
        echo "Rellene todos los campos";

        } else if (is_numeric($num1) && is_numeric($num2) || $op == 'C') {

            switch ($op){
                case '+' : $resultado = $num1 + $num2;
                break;

                case 'x' : $resultado = $num1 * $num2;
                break;

                case '-' : $resultado = $num1 - $num2;
                break;

                case '/' : $resultado = $num1 / $num2;
                break;

                case 'C' : $resultado = ""; $num1=""; $num2="";
                break;
            }
            
    
        }

}
?>


<!DOCTYPE html>
<head>
    <title> Calculadora </title>
    <link href="style.css" rel="Stylesheet" type="text/css" />
</head>

<body>
   <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get" class="form">

        <h1>Calculadora</h1>
        <h2>Ingresa los números</h2>  

        <!--numero 1-->
            <div>
                <label for="num1"> Número 1:</label>
                <input type="number" name="num1"  value="<?= $num1 ?>">
            </div>
            <!--numero 2-->
            <div>
                <label for="num2"> Número 2:</label>
                <input type="number" name="num2"  value="<?= $num2 ?>">
            </div>

            <!--resultado-->
            <div>
                <label for="resultado"> Resultado:</label>
                <input type="number" name="resultado" value="<?= $resultado ?>" disabled>
            </div>

            <!--operaciones-->
            <div class= "calculos">
                <input type="submit" name="operacion" value="+" class="op">
                <input type="submit" name="operacion" value="-" class="op">
                <input type="submit" name="operacion" value="x" class="op">
                <input type="submit" name="operacion" value="/" class="op">
                <input type="submit" name="operacion" value="C" class="op" id = "c">
            </div>

        </form>
        
    
</body>