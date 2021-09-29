$("#curp").change(function(){

    var curp=$(this).val();

    $.ajax({

        type:"POST",
        url: "../../ajax/ctrlCurpEmpleado.php",
        data: ("curp="+curp),
        success: function(response){

            if(response==curp){

                $(".alert").show();
                $("#curp").val("");
                $("$curp").focus();

            }else{

                $(".alert").hide();

            }

        }

    });

})