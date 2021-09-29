$("#nss").change(function(){

    var nss=$(this).val();

    $.ajax({

        type:"POST",
        url: "../../ajax/ctrlNssEmpleado.php",
        data: ("nss="+nss),
        success: function(response){

            if(response==nss){

                $(".alert").show();
                $("#nss").val("");
                $("$nss").focus();

            }else{

                $(".alert").hide();

            }

        }

    });

})