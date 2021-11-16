<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Opreciones Respuesta php</title>
</head>
<body>
    <?php     
        $nomTot = 0;        
        
        if(isset($_POST['calc'])){     
            $emp1 = $_POST['emp1'];
            $emp2 = $_POST['emp2'];
            $emp3 = $_POST['emp3'];
            $emp4 = $_POST['emp4'];
            $emp5 = $_POST['emp5'];
            $salEm1 = $_POST['salEm1'];
            $salEm2 = $_POST['salEm2'];
            $salEm3 = $_POST['salEm3'];
            $salEm4 = $_POST['salEm4'];
            $salEm5 = $_POST['salEm5'];           
        }   
           
        
        function calcPen($salE){
            $penE =  $salE*0.04;
            return $penE;
        }
        
        function calcSalud($salE){
            $saluE =  $salE*0.045;
            return $saluE;
        }
        
        function calcFon($salE){
            $fonE =  $salE*0.015;
            return $fonE;
        }

        function calcTotEmp($salE){
            $penE =  $salE*0.04;
            $saluE =  $salE*0.045;
            $fonE =  $salE*0.015;
            $tEmpl = $salE - ($penE+$saluE+$fonE);
            global $nomTot;
            $nomTot +=  $tEmpl;
            return $tEmpl;
        }

        function validaSubTras($salE){
            $salMin = 908526;
            $subTr = 106454;
            $mSal= "";
            if($salE >=($salMin*2)){
                $mSal = "No tiene";
                return $mSal;
            } else if($salE <= ($salMin*2)){
                return '$'.$subTr;
            }           
        }
    
        echo'
        <center>
            <br>
            <br>
            <br>
            <br>
            <table width="80%">
                <thead>
                    <tr bgcolor=lightblue height="20px">
                        <th colspan=8>Nomina de empleados</th>
                    </tr>
                    <tr bgcolor=lightblue>
                        <th>Epleaado</th>
                        <th>Salario</th>
                        <th>Pension</th>
                        <th>Salud</th>
                        <th>F Empleados</th>
                        <th>Sub trans</th>                               
                        <th>Tot Empleado</th>                               
                    </tr>
                </thead>
                <tbody>
                    <tr bgcolor=lightgreen>
                        <th>'.$emp1.'</th>
                        <th>$'.$salEm1.'</th>
                        <th>$'.calcPen($salEm1).'</th>                        
                        <th>$'.calcSalud($salEm1).'</th>                        
                        <th>$'.calcFon($salEm1).'</th>                                      
                        <th>'.validaSubTras($salEm1).'</th>                
                        <th>$'.calcTotEmp($salEm1).'</th>                                      
                    </tr>                 
                    <tr bgcolor=lightgreen>
                        <th>'.$emp2.'</th>
                        <th>$'.$salEm2.'</th>
                        <th>$'.calcPen($salEm2).'</th>                        
                        <th>$'.calcSalud($salEm2).'</th>                        
                        <th>$'.calcFon($salEm2).'</th>                                      
                        <th>'.validaSubTras($salEm2).'</th>                
                        <th>$'.calcTotEmp($salEm2).'</th>                                      
                    </tr>                 
                    <tr bgcolor=lightgreen>
                        <th>'.$emp3.'</th>
                        <th>$'.$salEm3.'</th>
                        <th>$'.calcPen($salEm3).'</th>                        
                        <th>$'.calcSalud($salEm3).'</th>                        
                        <th>$'.calcFon($salEm3).'</th>                                      
                        <th>'.validaSubTras($salEm3).'</th>                
                        <th>$'.calcTotEmp($salEm3).'</th>                                      
                    </tr>                 
                    <tr bgcolor=lightgreen>
                        <th>'.$emp4.'</th>
                        <th>$'.$salEm4.'</th>
                        <th>$'.calcPen($salEm4).'</th>                        
                        <th>$'.calcSalud($salEm4).'</th>                        
                        <th>$'.calcFon($salEm4).'</th>                                      
                        <th>'.validaSubTras($salEm4).'</th>                
                        <th>$'.calcTotEmp($salEm4).'</th>                                      
                    </tr>                 
                    <tr bgcolor=lightgreen>
                        <th>'.$emp5.'</th>
                        <th>$'.$salEm5.'</th>
                        <th>$'.calcPen($salEm5).'</th>                        
                        <th>$'.calcSalud($salEm5).'</th>                        
                        <th>$'.calcFon($salEm5).'</th>                                      
                        <th>'.validaSubTras($salEm5).'</th>                
                        <th>$'.calcTotEmp($salEm5).'</th>                                      
                    </tr>                 
                    <tr bgcolor=lightblue>
                        <th>Valor Nomina</th>
                        <th colspan=6>$'.$nomTot.'</th>
                    </tr>
                </tbody>
            </table>
        </center>'            
    ?>
</body>