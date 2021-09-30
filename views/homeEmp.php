<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos_empleados.css">
    <title></title>
</head>
<body onload="document.getElementById('nombre').focus()">
    <div class="encabezado">
        <h2 class="titulo">Concentrado de Empleados</h2>
    </div>
    <div class="banner">
        <div class="boton">
            <a href="addEmp.html">
                Nuevo Empleado
                <img src="../media/icons/edit.svg" alt="Nuevo Empleado">
            </a>
        </div>
        <span>Empleados registrados actualmente.<img src="../media/icons/"></span>
    </div>
    <div class="contenedor">
        <table class="dataEmpleados">
            <thead>
                <td>Clave</td>
                <td>Nombre completo</td>
                <td>Edad</td>
                <td>Estado Civil</td>
            </thead>
            <tbody>
                <?php

                    require "../controllers/ctrlEmpleados.php";

                    $obj=empleadosCtrl::getEmpleados();

                    foreach($obj as $o){

                        ?>

                        <tr>
                            <td>
                                <?php echo $o['idEmp'];?>
                            </td>
                            <td>
                                <?php echo $o['nombreEmp']." ".$o['apePat']." ".$o['apeMat'];?>
                            </td>
                            <td>
                                <?php echo $o['edad'];?>
                            </td>
                            <td>
                                <?php echo $o['edoCivil'];?>
                            </td>
                        </tr>

                        <?php

                    }

                ?>
            </tbody>
        </table>
    </div>
    <script src="../../js/jquery-3.min.js"></script>
    <script src="../../js/verifyCurp.js"></script>
    <script src="../../js/verifyNss.js"></script>
    <script src="../../js/verifyRfc.js"></script>
    <script type="text/javascript">
        if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>
</html>