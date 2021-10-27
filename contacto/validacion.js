$(document).ready(function(){

    $('#btnSend').click(function(){

        var errores = '';

        // Validado Nombre ==============================
        if( $('#nombre').val() == '' ){
            errores += '<p>Escriba un nombre</p>';
            $('#nombre').css("border-bottom-color", "#F14B4B")
        } else{
            $('#nombre').css("border-bottom-color", "#02ce7c")
        }

        // Validado Telefono ==============================
        if( $('#telefono').val() == '' ){
            errores += '<p>Ingrese un teléfono</p>';
            $('#telefono').css("border-bottom-color", "#F14B4B")
        } else{
            $('#telefono').css("border-bottom-color", "#02ce7c")
        }

        // Validado Correo ==============================
        if( $('#email').val() == '' ){
            errores += '<p>Ingrese un correo</p>';
            $('#email').css("border-bottom-color", "#F14B4B")
        } else{
            $('#email').css("border-bottom-color", "#02ce7c")
        }

         // Validado Asunto ==============================
        if( $('#asunto').val() == '' ){
            errores += '<p>Escriba el asunto</p>';
            $('#asunto').css("border-bottom-color", "#F14B4B")
        } else{
            $('#asunto').css("border-bottom-color", "#02ce7c")
        }

        // Validado Mensaje ==============================
        if( $('#mensaje').val() == '' ){
            errores += '<p>Escriba el mensaje</p>';
            $('#mensaje').css("border-bottom-color", "#F14B4B")
        } else{
            $('#mensaje').css("border-bottom-color", "#02ce7c")
        }

        // ENVIANDO MENSAJE ============================
        if( errores == '' == false){
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        '<h3>Por favor! complete los siguientes campos</h3>'+
                                        errores+
                                        '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'

            $('body').append(mensajeModal);
        }

        // CERRANDO MODAL ==============================
        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });
    });

});