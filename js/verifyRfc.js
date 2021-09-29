$("#rfc").change(function(){

    var rfc=$(this).val();

    $.ajax({

        type:"POST",
        url: "../../ajax/ctrlRfcEmpleado.php",
        data: ("rfc="+rfc),
        success: function(response){

            if(response==rfc){

                $(".alert").show();
                $("#rfc").val("");
                $("$rfc").focus();

            }else{

                $(".alert").hide();

            }

        }

    });

})