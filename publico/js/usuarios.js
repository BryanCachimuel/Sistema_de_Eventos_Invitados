$(document).ready(function () {
    $("#tablaUsuarios").load("usuarios/tabla_usuarios.php");
  });

function editarUsuarios(id_usuario){
  $.ajax({
    type:"POST",
    url:"../servidor/usuarios/editar.php",
    data:"id_usuario=" + id_usuario,
    success:function(respuesta){
      respuesta = jQuery.parseJSON(respuesta);
        $('#usuario_nombreu').val(respuesta[0].usuario);
        $('#usuario_correou').val(respuesta[0].correo);
    }
  });
}