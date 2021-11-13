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
?>