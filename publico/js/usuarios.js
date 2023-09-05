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

function actualizarUsuario(){
  $.ajax({
    type:"POST",
    data:$('#frmEditarUsuario').serialize(),
    url:"../servidor/usuarios/actualizar.php",
    success:function(respuesta){
      if(respuesta == 1){
        $("#tablaUsuarios").load("usuarios/tabla_usuarios.php");
        Swal.fire({
          icon: "success",
          title: "Actualizado Correctamente",
          showConfirmButton: false,
          timer: 1900,
        });
      }else{
        Swal.fire({
          icon: "error",
          title: "El Usuario no se a Podido Actualizar" + respuesta,
          showConfirmButton: false,
          timer: 1900,
        });
      }
    }
  });
  return false;
}