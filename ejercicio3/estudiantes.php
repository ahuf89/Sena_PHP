<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Opreciones Respuesta php</title>
</head>
<body>
    <?php
        // captura de datos
        // $msj="";
        
        if(isset($_POST['calc'])){     
            $almn1 = $_POST['almn1'];
            $almn2 = $_POST['almn2'];
            $almn3 = $_POST['almn3'];
            $almn4 = $_POST['almn4'];
            $almn5 = $_POST['almn5'];
            $nt1 = $_POST['nt1'];
            $nt2 = $_POST['nt2'];
            $nt3 = $_POST['nt3'];
            $nt4 = $_POST['nt4'];
            $nt2_1 = $_POST['nt2_1'];
            $nt2_2 = $_POST['nt2_2'];
            $nt2_3 = $_POST['nt2_3'];
            $nt2_4 = $_POST['nt2_4'];
            $nt3_1 = $_POST['nt3_1'];
            $nt3_2 = $_POST['nt3_2'];
            $nt3_3 = $_POST['nt3_3'];
            $nt3_4 = $_POST['nt3_4'];
            $nt4_1 = $_POST['nt4_1'];
            $nt4_2 = $_POST['nt4_2'];
            $nt4_3 = $_POST['nt4_3'];
            $nt4_4 = $_POST['nt4_4'];
            $nt5_1 = $_POST['nt5_1'];
            $nt5_2 = $_POST['nt5_2'];
            $nt5_3 = $_POST['nt5_3'];
            $nt5_4 = $_POST['nt5_4'];
        }

        $def1 = ($nt1 + $nt2 + $nt3 + $nt4)/4;
        $def2 = ($nt2_1 + $nt2_2 + $nt2_3 + $nt2_4)/4;
        $def3 = ($nt3_1 + $nt3_2 + $nt3_3 + $nt3_4)/4;
        $def4 = ($nt4_1 + $nt4_2 + $nt4_3 + $nt4_4)/4;
        $def5 = ($nt5_1 + $nt5_2 + $nt5_3 + $nt5_4)/4;
        $proEs = ($def1 + $def2 + $def3 + $def4 + $def5);

        function notaEstudiante($nota){
            $msj= "";
            if($nota >= 5){
                $msj = "Exelente";
            } else if($nota > 4.1 & $nota <= 4.9){
                $msj = "Muy bueno";
            } else if($nota >= 3.5 & $nota <= 4){
                $msj = "Bueno";
            } else if($nota >= 3 & $nota <= 3.4){
                $msj = "Aceptable";
            } else if($nota < 3){
                $msj = "Insuficiente";           
            }
            return $msj;
        }
    
        echo'
        <center>
            <br>
            <br>
            <br>
            <br>
            <table width="60%">
                <thead>
                    <tr bgcolor=lightblue height="20px">
                        <th colspan=7>Sabana de notas</th>
                    </tr>
                    <tr bgcolor=lightblue>
                        <th>Alumno</th>
                        <th>Nota 1</th>
                        <th>Nota 2</th>
                        <th>Nota 3</th>
                        <th>Nota 4</th>
                        <th colspan=2>Definitiva</th>                               
                    </tr>
                </thead>
                <tbody>
                    <tr bgcolor=lightblue>
                        <th>'.$almn1.'</th>
                        <th>'.$nt1.'</th>
                        <th>'.$nt2.'</th>
                        <th>'.$nt3.'</th>
                        <th>'.$nt4.'</th>
                        <th>'.$def1.'</th>                
                        <th>'.notaEstudiante($def1).'</th>                
                    </tr>
                    <tr bgcolor=lightblue>
                        <th>'.$almn2.'</th>
                        <th>'.$nt2_1.'</th>
                        <th>'.$nt2_2.'</th>
                        <th>'.$nt2_3.'</th>
                        <th>'.$nt2_4.'</th>
                        <th>'.$def2.'</th>                
                        <th>'.notaEstudiante($def2).'</th>                
                    </tr>
                    <tr bgcolor=lightblue>
                        <th>'.$almn3.'</th>
                        <th>'.$nt3_1.'</th>
                        <th>'.$nt3_2.'</th>
                        <th>'.$nt3_3.'</th>
                        <th>'.$nt3_4.'</th>
                        <th>'.$def3.'</th>                
                        <th>'.notaEstudiante($def3).'</th>                
                    </tr>
                    <tr bgcolor=lightblue>
                        <th>'.$almn4.'</th>
                        <th>'.$nt4_1.'</th>
                        <th>'.$nt4_2.'</th>
                        <th>'.$nt4_3.'</th>
                        <th>'.$nt4_4.'</th>
                        <th>'.$def4.'</th>                
                        <th>'.notaEstudiante($def4).'</th>                
                    </tr>
                    <tr bgcolor=lightblue>
                        <th>'.$almn5.'</th>
                        <th>'.$nt5_1.'</th>
                        <th>'.$nt5_2.'</th>
                        <th>'.$nt5_3.'</th>
                        <th>'.$nt5_4.'</th>
                        <th>'.$def5.'</th>                
                        <th>'.notaEstudiante($def5).'</th>                
                    </tr>
                    <tr bgcolor=lightblue>
                        <th>Promedio estudiantes</th>
                        <th colspan=6>'.$proEs.'</th>
                    </tr>
                </tbody>
            </table>
        </center>'            
    ?>
</body>