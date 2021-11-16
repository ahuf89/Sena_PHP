<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Opreciones Respuesta php</title>
</head>
<body>
    <?php
    // captura de datos
    
    if(isset($_POST['calc'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
    }

    // proscesamiento
    $sum = $num1 + $num2;
    $res = $num1 - $num2;
    $mult = $num1 * $num2;
    $div = $num1 / $num2;
    

    // salida de informacion
    echo'<center><br>
                <br>
                <h1>Resultados</h1>
                La suma es:
                <font color="red">'.$sum.'</font> 
                <br>
                La resta es:
                <font color="red">'.$res.'</font> 
                <br>
                La multiplicacion es:
                <font color="red">'.$mult.'</font> 
                <br>
                La division es:
                <font color="red">'.$div.'</font>                
            </center>';         
    ?>

    <!-- REalice una pagina q asigne el subcidio de transporte a un empleado q reciba menos de dos salarios minimos, teniendo en 
cuenta q solo se pagan dias laborados -->
<!-- realizar una factura que muestre sub total iva y factura a pagar para cuatro articulos -->
<!-- realizar la entrega de notas para 5 estudiantes con promedio de los estudiants
si saco 5 = exelente
si saco 4.1 y 4.9 muy bueno
si saco 3.5 y 4 bueno
si saco 3.0 y 3.4 aceptable
si saco menos de 3.0 = insuficiente
-->
<!-- sacr la nomina para 5 empleados donde se le descuenta:
pension 4%
salud 4.5
fondo empleados 1.5%
y sie el salario es mayor de 2 salarios minimos no se le asigna de lo contrario si mostrar el valor de la nomona-->




    
</body>
</html>