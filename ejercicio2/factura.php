<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Opreciones Respuesta php</title>
</head>
<body>
    <?php
    // captura de datos



    $salMin = 908526;
    $sublTr = 106454;

    
    if(isset($_POST['calc'])){
        $salEm = $_POST['salEm'];
        $diasT = $_POST['diasT'];
    }
    $sueldo = ($salEm/30) * $diasT;
    
    if($salEm>($salMin*2)){
        echo' 
        <h1>No tiene subsidio de transporte</h1>
        ';
    } elseif ($salEm<($salMin*2)){
        echo'<center>   
                <br>     
                <br>     
                <h1>Tiene subsidio de transporte</h1>
                <h2>'.$sublTr.'</h2>
                <h1>Dias trabajados son: '.$diasT.'</h1>
                <h1>Total nomina: '.$sueldo.'</h1>

            </center>';
    }



    /*

    // proscesamiento
    $sum = $num1 + $num2;
    $res = $num1 - $num2;
    $mult = $num1 * $num2;
    $div = $num1 / $num2;
    

    // salida de informacion
    echo'<center><br>
                <br>
                <h1>Resultados</h1>
                Slario base:
                <font color="red">'.$salEm.'</font> 
                <br>
                Subsidio de transporte:
                <font color="red">'.$res.'</font> 
                <br>
                La multiplicacion es:
                <font color="red">'.$mult.'</font> 
                <br>
                La division es:
                <font color="red">'.$div.'</font>                
            </center>';         

            */
            
    ?>