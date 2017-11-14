$(document).ready(function() {
    $.ajax({
        url: document.location.href + "home",
        success: function(data) {
            mostrar_render(data);
        }
    });
});


$(document).on("click", ".eliminarComentario", function(event) {
    event.preventDefault();
      let id_comentario = $(this).attr('name');
      let id_plato = $(this).data('idplato');
      borrarComentario(id_comentario, id_plato);
});



let templateComentario;
$.ajax({ url: 'js/templates/comentarios.mst'}).done( template => templateComentario = template);

function cargarComentarios(id_plato) {
      $.ajax("api/comentarios/" + id_plato )
          .done(function(response) {
              $('li.rest').remove();
              let rendered = Mustache.render(templateComentario, {arreglo:response.comentarios});
              $('#comentarios').append(rendered);
          })
          .fail(function() {
              $('#comentarios').append('<li>Imposible cargar la lista de comentarios</li>');
          });
  }

  // function cargarComentariosUsuario(id_plato) {
  //       $.ajax("api/comentarios/" + id_plato )
  //           .done(function(response) {
  //               $('li.rest').remove();
  //               let rendered = Mustache.render(templateComentario, {arreglo:response.comentarios});
  //               $('#comentarios').append(rendered);
  //               $('.eliminarComentario').hide();
  //           })
  //           .fail(function() {
  //               $('#comentarios').append('<li>Imposible cargar la lista de comentarios</li>');
  //           });
  //   }

  function borrarComentario(id_comentario, id_plato) {
      $.ajax({
          method: "DELETE",
          url: "api/comentarios/" + id_comentario
        })
      .done(function() {
          cargarComentarios(id_plato)
        })
      .fail(function() {
          alert('Imposible borrar el comentario');
      });
  }

  // function crearComentario() {
  //     let comentario = {
  //       "id_plato": $('#id_plato').val(),
  //       "id_usuario": $('#id_usuario').val(),
  //       "opinion": $('#opinion').val(),
  //       "puntaje":  $('input:radio[name=puntaje]:checked').val()
  //     };
  //     // alert(id_usuario);
  //   $.ajax({
  //           method: "POST",
  //           url: "api/comentarios",
  //           data: JSON.stringify(comentario)
  //         })
  //       .done(function(response) {
  //             cargarComentarios($('#id_plato').val())
  //       })
  //       .fail(function(data) {
  //           alert('Imposible mandar el comentario');
  //       });
  //   }

  function crearComentario() {
      let comentario = {
        "captcha": $('#captcha').val(),
        "id_plato": $('#id_plato').val(),
        "id_usuario": $('#id_usuario').val(),
        "opinion": $('#opinion').val(),
        "puntaje":  $('input:radio[name=puntaje]:checked').val()
      };
    $.ajax({
            method: "POST",
            url: "api/comentarios",
            data: JSON.stringify(comentario)
          })
        .done(function(response) {
              cargarComentarios($('#id_plato').val())
        })
        .fail(function(data) {
            alert('Imposible mandar el comentario');
        });
    }

$("#nav_logo").on("click", function(event) {
    cargarSeccion(event, "home")
});

$("#registro").on("click", function(event) {
    cargarSeccion(event, "iniciarSesion")
});

$("#nav_inicio").on("click", function(event) {
    cargarSeccion(event, "home");
});

$("#nav_menu").on("click", function(event) {
      cargarSeccion(event, "menuUsuario")
});

$("#nav_contacto").on("click", function(event) {
    cargarSeccion(event, "contacto")
});

$("#nav_nosotros").on("click", function(event) {
    cargarSeccion(event, "nosotros")
});

$("#cerrarSesion").on("click", function(event) {
      cargarSeccion(event, "cerrarSesion");
});

function mostrar_render(data) {
    $("#render").html(data);
};

function cargarSeccion(event, seccion) {
    event.preventDefault();
    $.ajax({
        url: document.location.href + seccion,
        success: function(data) {
            mostrar_render(data);
        }
    });
};

$(document).on("click", ".nuevoComentario", function(event) {
    event.preventDefault();
    renderPost("nuevoComentario", {
        "id_plato": $(this).attr('name')
    });
});

$(document).on("click", ".eliminarPlato", function(event) {
    event.preventDefault();
    renderPost("eliminarPlato", {
        "id_plato": $(this).attr('name')
    });
});

$(document).on("click", ".eliminarMenu", function(event) {
    event.preventDefault();
    renderPost("eliminarMenu", {
        "id_menu": $(this).attr('name')
    });
});

$(document).on("click", ".eliminarUsuario", function(event) {
    event.preventDefault();
    renderPost("eliminarUsuario", {
        "id_usuario": $(this).attr('name')
    });
});

$(document).on("click", ".editarUsuario", function(event) {
    event.preventDefault();
    // alert ($(this).attr('name'));
    renderPost("editarUsuario", {
        "id_usuario": $(this).attr('name')
    });
});

$(document).on("click", ".eliminarImagen", function(event) {
    event.preventDefault();
    renderPost("eliminarImagen", {
        "id_imagen": $(this).attr('name')
    });
});

$(document).on("submit", "#login", function(event) {
    event.preventDefault();
    renderPost("verificarUsuario", $(this).serialize());
});

$(document).on("submit", ".agregarComentario", function(event) {
    event.preventDefault();
    crearComentario();
});



$(document).on("click", ".cargarMenu", function(event) {
    event.preventDefault();
    renderPost("cargarMenu", {
        "id_menu": $(this).attr('name')
    });
});

$(document).on("click","#nuevoPlato", function(event) {
    cargarSeccion(event, "nuevoPlato")
});

$(document).on("click","#nuevoUsuario", function(event) {
    cargarSeccion(event, "nuevoUsuario")
});

$(document).on("click","#principal", function(event) {
    cargarSeccion(event, "menuUsuario")
});

$(document).on("click","#nuevoMenu", function(event) {
    cargarSeccion(event, "nuevoMenu")
});

$(document).on("click","#administrarUsuarios", function(event) {
    cargarSeccion(event, "administrarUsuarios")
});


$(document).on("submit", "#agregarPlato", function(event) {
    event.preventDefault();
    let form_data = new FormData(this);
        $.ajax ({
          url: "agregarPlato",
          contentType: false,
          processData: false,
          data: form_data,
          type:'post',
          success: function(data) {
            	 mostrar_render(data);
          }
  });
});

$(document).on("submit", ".actualizarPlato", function(event) {
    event.preventDefault();
    let form_data = new FormData(this);
    // alert(form_data);
        $.ajax ({
          url: "actualizarPlato",
          contentType: false,
          processData: false,
          data: form_data,
          type:'post',
          success: function(data) {
               mostrar_render(data);
          }
  });
});
function renderPost(destino, serializedData, callback) {
    $.post(document.location.href + destino, serializedData,
        function(response) {
            mostrar_render(response);
            if (callback) {
              callback ();
            }
        });
};

$(document).on("click", ".verPlato", function(event) {
    event.preventDefault();
    let id = $(this).attr('name');
    // let perfil = $(this).data('perfil');
    renderPost("verPlato", {
        "id_plato": $(this).attr('name')
        // ,  "perfil" : $(this).data('perfil')
    },  function() {
          cargarComentarios(id);
    });
    // setInterval(cargarComentariosUsuario(id), 3);
});

$(document).on("click", ".cargarPlato", function(event) {
    event.preventDefault();
    let id_plato = $(this).attr('name');
    renderPost("cargarPlato", {
        "id_plato": $(this).attr('name')
    }, function() {
          cargarComentarios(id_plato);
    });
});


$(document).on("submit", "#agregarMenu", function(event) {
    event.preventDefault();
    renderPost("agregarMenu", $(this).serialize());
});

$(document).on("submit", "#registrar", function(event) {
    event.preventDefault();
    renderPost("registrar", $(this).serialize())
  });


$(document).on("submit", ".actualizarMenu", function(event) {
    event.preventDefault();
    renderPost("actualizarMenu", $(this).serialize());
});

$(document).on("submit", "#filtro", function(event) {
    event.preventDefault();
    renderPost("menuUsuario", $(this).serialize());
});
//
// $(document).on("submit", "#filtroAdm", function(event) {
//     event.preventDefault();
//     renderPost("menuAdmin", $(this).serialize());
// });
