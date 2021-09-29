<?php

    require "../controllers/ctrlEmpleados.php";

    $obj=empleadosCtrl::addEmpleado();

    if($obj==true){

        $obj=null;
        header("location:../views/empleados/home.html");

    }else{

        $obj=null;
        echo ".";
        ?>
        <script src="../js/sweetAlert.js"></script>
        <script type="text/javascript">
            Swal.fire({
                icon: 'error',
                title: 'SORRY!',
                text: 'Hubo un inconveniente con el registro del empleado.',
                showConfirmButton: false,
                footer: '<a href="../views/empleados/home.html" style=" width: 33.3%; height:auto; display:block; padding: 10px; background-color: #1E90FF; color: white; border:none; border-radius:5px; text-decoration:none; text-align:center;">Intentar de nuevo</a>',
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                backdrop: '#F5A9A9'
            })
        </script>
        <?php

    }

?>