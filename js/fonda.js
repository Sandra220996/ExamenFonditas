'use strict';
$(document).ready( function() {   // se ejecuta automáticamente cuando la página este lista
    $("#btnGuardar").click( function() {     // establecemos la acción para el botón 
        Swal.fire({  // animacion del alerta
            title: 'Estas seguro que deceas guardar la información',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Guardar',
            denyButtonText: 'Cancelar',
          }).then((result) => {
            if (result.isConfirmed) {
                if(validaForm()){    // valida el formulario
                    $.ajax({
                        type:"POST", // especificar el tipo de peticion, puede ser POST o GET
                        url:"enviar.php", // url para la peticion
                        data:$("#formularioFonda").serialize(), // manda el valor del formulario completo
                        success:function(res){
                            if(res == 1){ // valida si retorna 1 es satisfactorio el proceso
                                Swal.fire({
                                    icon: 'success',
                                    text: 'La información se guardo exitosamente.',
                                });     // Si hemos tenido éxito, hacemos aparecer mensaje confirmando que fue exitoso
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    text: 'Ocurrio un error. Favor de intentarlo mas tarde!',
                                });    // Si no, lo mismo, pero haremos aparecer el mensaje de "error"
                            }
                        }
                    });
                }
            } else if (result.isDenied) { // en caso de selecionar cancelar
              Swal.fire('La información no se guardo', '', 'warning');   
              $("form select").each(function() { this.selectedIndex = 0 }); //limpia los valores del select
              $("form input[type=text] , form textarea").each(function() { this.value = '' }); // limpia los valores de los campos tipo text y text area
            }
          })
    });  

    $("#btnGuardarMenu").click( function() {     // establecemos la acción para el botón
        Swal.fire({
            title: 'Estas seguro que deceas guardar la información',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Guardar',
            denyButtonText: 'Cancelar',
          }).then((result) => {
            if (result.isConfirmed) {
                alert($('select[name=nombreFonda]').val());
                if(validaForm() && $('select[name=nombreFonda]').val() != 0){    // valida el formulario
                    //alert($("#formularioMenu").serialize());
                    $.ajax({
                        type:"POST",  // especificar el tipo de peticion, puede ser POST o GET
                        url:"enviarMenu.php", // url para la peticion
                        data:$("#formularioMenu").serialize(), // manda el valor del formulario completo
                        success:function(res){ // si la peticion es satisfactoria
                            if(res == 1){ // valida si retorna 1 es satisfactorio el proceso
                                Swal.fire({
                                    icon: 'success',
                                    text: 'La información se guardo exitosamente.',
                                });     // Si hemos tenido éxito, hacemos aparecer mensaje confirmando que fue exitoso
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    text: 'Ocurrio un error. Favor de intentarlo mas tarde!',
                                });    // Si no, lo mismo, pero haremos aparecer el mensaje de "error"
                            }
                        }
                    });
                }
                else {
                    $("#nombreFonda").focus(); // coloca el foco de escritura del campo Nombre 
                    Swal.fire({
                        icon: 'error',
                        text: 'Debes seleccionar una fonda para continuar...',
                    });
                    return null;
                }
            } else if (result.isDenied) { // en caso de selecionar cancelar
              Swal.fire('La información no se guardo', '', 'warning');   
              $("form select").each(function() { this.selectedIndex = 0 }); //limpia los valores del select
              $("form input[type=text] , form textarea").each(function() { this.value = '' }); // limpia los valores de los campos tipo text y text area
            }
          })
    });

    $("#envia").click( function() {
        $(location).attr('href','creaReceta.php?fonda='+$('#idF').val()); // redirecciona la pagina
        
    });
    $("#muestra").click( function() {
        $(location).attr('href','consultaFonda.php?fonda='+$('#idF').val()); // redirecciona la pagina
              
    });

    $("#typeFonda").change(function(){  // ejecuta la peticion al cambio de la accion
        var id  = $('select[name=nombreFonda]').val(); //obtenemos el valor del select por el nombre 
        $.ajax({
            type:"POST", // especificar el tipo de peticion, puede ser POST o GET
            url:"consultaMenu.php", // url para la peticion
            data:{id:id}, // mandar los valores
            success:function(res){ // si la peticion es satisfactoria
                $('#filtro').html(res);
            }

        });
    });
    
    $(".cancela").click(function(){ // establecemos la acción para el botón
        $("form select").each(function() { this.selectedIndex = 0 }); //limpia los valores del select
        $("form input[type=text] , form textarea").each(function() { this.value = '' }); // limpia los valores de los campos tipo text y text area
    });

    function validaForm(){
        if($("#nombre").val() == ""){ // valida si el campo viene vacio 
            Swal.fire({
                icon: 'error',
                text: 'El nombre de la Fonda no puede estar vacío.!',
            } ) ;
            $("#nombre").focus();      // coloca el foco de escritura del campo Nombre
            return false;
        }
        return true; // Si todo está correcto
    }

    $('.costo').on('input', function () { 
        this.value = this.value.replace(/[^0-9]/g,''); // valida que solo ingrese numeros
    });

    $(".modal").modal({
        show: false,
        backdrop: 'static'
    });
});
   
function verInfo(valor, band){
    if(band == 1){
        //obtener los valores del formulario
        var idF = document.getElementById("id_"+valor).value;
        var nombreFonda = document.getElementById("nombre_"+valor).value;
        var calle   = document.getElementById("calle_"+valor).value;
        var numeroExt   = document.getElementById("numExt_"+valor).value;
        var numeroInt   = document.getElementById("numInt_"+valor).value;
        var cp  = document.getElementById("cp_"+valor).value;
        var colonia = document.getElementById("colonia_"+valor).value;
        var municipio   = document.getElementById("estado_"+valor).value;
        var municipio   = document.getElementById("municipio_"+valor).value;
        var ciudad  = document.getElementById("ciudad_"+valor).value;
        var pais    = document.getElementById("pais_"+valor).value;
        
        // manda los valores al modal
        document.getElementById("idF").value = idF; 
        $('#nombre').html(nombreFonda); 
        $('#calle').html(calle); 
        $('#numExt').html(numeroExt); 
        $('#numInt').html(numeroInt); 
        $('#cp').html(cp); 
        $('#colonia').html(colonia); 
        $('#estado').html(estado); 
        $('#municipio').html(municipio); 
        $('#ciudad').html(ciudad); 
        $('#pais').html(pais); 
        $(".modal").modal("show");
    }else{
        //obtener los valores del formulario
        var id  = document.getElementById("id_"+valor).value;
        var idF = document.getElementById("idFonda_"+valor).value;
        var nombre  = document.getElementById("nombre_"+valor).value;
        var desc    = document.getElementById("desc_"+valor).value;
        var ingr    = document.getElementById("ingr_"+valor).value;
        var costo   = document.getElementById("costo_"+valor).value;

        // manda los valores al modal
        document.getElementById("id").value = id; 
        document.getElementById("idF").value= idF; 
        $('#nombre').html(nombre); 
        $('#desc').html(desc); 
        $('#ingr').html(ingr); 
        $('#costo').html(costo);
        $(".modal").modal("show");
    }
    
}