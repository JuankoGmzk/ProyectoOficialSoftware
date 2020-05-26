$(document).ready(function(){
$("#Ingresar").click(function () {

  var Usuario = $('#Usuario').val();
  var Contraseña = $('#Contraseña').val();
  var parametros = {"Usuario": Usuario, "Contraseña":Contraseña};
  $.ajax({
              type: "POST",
              url: "php/validacion.php",
              data: parametros,
              success: function(data){
                if(data=='true')
                {
                  window.location.href = "Clases.php";
                }else{
                  alert("Usuario o Contraseña Incorrectos");
                }
              }
        });
  });

});

//function mostrarmaterias (Usuario){
//$("#getmaterias").click(function () {
//});
//}
