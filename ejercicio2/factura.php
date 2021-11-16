<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Factura de venta</title>
</head>
<body>
    <?php
    // captura de datos
    
    if(isset($_POST['calc'])){
        $nom = $_POST['nom'];
        $ape = $_POST['ape'];
        $ced = $_POST['ced'];
        $tel = $_POST['tel'];
        $pro1 = $_POST['op1'];
        $pro2 = $_POST['op2'];
        $pro3 = $_POST['op3'];
        $pro4 = $_POST['op4'];
        $pro5 = $_POST['op5'];       
        $val1 = $_POST['val1'];
        $val2 = $_POST['val2'];
        $val3 = $_POST['val3'];
        $val4 = $_POST['val4'];         
        $val5 = $_POST['val5'];         
        $subt = $_POST['subt'];       
        $iva = $_POST['iva'];       
        $pdes = $_POST['pdes'];       
        $des = $_POST['des'];       
        $totalF = $_POST['totalF'];      
    } 
    
    echo'    
    <center>
        <table width="80%" cellspacing="3">
            <tr bgcolor=lightblue>
                <th colspan=2>
                    Factura producto
                </th>

            </tr>
            <tr bgcolor=lightblue>
                <th>Nombre</th>
                <th>'.$nom.'</th>
            </tr>
            <tr bgcolor=lightblue>
                <th>Apellido</th>
                <th>'.$ape.'</th>
            </tr>
            <tr bgcolor=lightblue>
                <th>cedula</th>
                <th>'.$ced.'</th>
            </tr>
            <tr bgcolor=lightblue>
                <th>Telefono</th>
                <th>'.$tel.'</th>
            </tr>
            <tr bgcolor=lightblue>
                <th colspan=1>Producto</th>  
                <th width=35%>Valor</th>                      
            </tr>
            <tr bgcolor=lightblue>
                <th>'.$pro1.'</th>       
                <th>'.$val1.'</th>                       
            </tr>
            <tr bgcolor=lightblue>
                <th>'.$pro2.'</th>
                <th>'.$val2.'</th>
            </tr>
            <tr bgcolor=lightblue>
                <th>'.$pro3.'</th>
                <th>'.$val3.'</th>
            </tr>
            <tr bgcolor=lightblue>
                <th>'.$pro4.'</th>
                <th>'.$val4.'</th>
            </tr>
            <tr bgcolor=lightblue>
                <th>'.$pro5.'</th>
                <th>'.$val5.'</th>
            </tr>

            <tr bgcolor=lightblue>
                <th>
                    SubTotal
                </th>
                <th>
                '.$subt.'
                </th>
            </tr>
            <tr bgcolor=lightblue>
                <th>
                    Iva<br>
                </th>
                <th>
                '.$iva.'
                </th>
            </tr>
            <tr bgcolor=lightblue>
                <th>
                    Descuento
                </th>
                <th>
                '.$des.'
                </th>
            </tr>
            <tr bgcolor=lightblue>
                <th>
                    % Descuento
                </th>
                <th>
                '.$pdes.'
                </th>
            </tr>
            <tr bgcolor=lightblue>
                <th>
                    Total factura
                </th>
                <th>
                '.$totalF.'
                </th>
            </tr>
        </table>
    </center>
    '
    ?>

</body>