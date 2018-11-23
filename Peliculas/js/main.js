"use strict"

let templateComentarios;
fetch('js/templates/comentarios.handlebars')
.then(response => response.text())
.then(template => {
  templateComentarios = Handlebars.compile(template);
}).then(GetComentarios());


function GetComentarios(){
  let id = document.querySelector("#id_pelicula").value;
  fetch("api/comentarios/"+ id)
  .then(response => response.json())
  .then(jsonComentarios => {
    MostrarComentarios(jsonComentarios);
  })
}

function MostrarComentarios(jsonComentarios){
  let NombreUsuarioLogueado = document.querySelector("#nombreUserLog").value;

  if(NombreUsuarioLogueado === "nada"){
    let context = {
    comentarios: jsonComentarios,
    }
    let html = templateComentarios(context);
    document.querySelector("#contenedor-Comentarios-Solos").innerHTML = html;

  }else{
    let administrador = document.querySelector("#esAdmin").value;
    let admin = 1;
    if(administrador == admin){
      let context = { //asign de smarty
        comentarios: jsonComentarios,
        nombreUserLog: NombreUsuarioLogueado,
        admin: administrador,
      }
      let html = templateComentarios(context);
      document.querySelector("#contenedor-Comentarios").innerHTML = html;
      console.log("sosADMIN");
      AsignarBotonesComentar();
      AsignarBotonesBorrar();
    }else{
      let context = { //asign de smarty
        comentarios: jsonComentarios,
        nombreUserLog: NombreUsuarioLogueado,
      }
      let html = templateComentarios(context);
      document.querySelector("#contenedor-Comentarios").innerHTML = html;
      AsignarBotonesComentar();
    }
  }
}

function AsignarBotonesComentar(){
  let boton = document.querySelector("#submit-comment");
  boton.addEventListener('click', function(e){

    console.log("hola");
    let CommentBox = document.querySelector("#comment-box").value;
    let idUserLog = document.querySelector("#idUsuarioLog").value;
    let NombreUsuarioLogueado = document.querySelector("#nombreUserLog").value;
    let id = document.querySelector("#id_pelicula").value;
    let puntaje = document.querySelector('input[name="estrella"]:checked').value;

    let Comentario = {
      "cuerpo": CommentBox,
      "nombre_user": NombreUsuarioLogueado,
      "id_pelicula": id,
      "id_usuario": idUserLog,
      "puntaje": puntaje

    }
    console.log(Comentario);
    fetch("api/comentarios", {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(Comentario)
    }).then(setTimeout(GetComentarios(), 2000));
  });
}


function AsignarBotonesBorrar(){
  let botonBorrar = document.querySelectorAll(".btBorrar");
  for (let i=0; i<botonBorrar.length; i++) {
    botonBorrar[i].addEventListener('click', function(e){
      alert("Borrando Comentario nº:" + botonBorrar[i].value);
          fetch("api/comentarios/" + botonBorrar[i].value, {
            method: 'DELETE',
            headers: {
              'Content-Type': 'application/json'
            },
          }).then(setTimeout(GetComentarios(), 3000));
    });
  }
}
  // for()
//   if(administrador === "admin"){
//     console.log(botonBorrar.value);
//     fetch("api/comentarios/" + botonBorrar.value, {
//       method: 'DELETE',
//       headers: {
//         'Content-Type': 'application/json'
//       },
//     }).then(setTimeout(GetComentarios(), 1000));
//
//   }else{
//     console.log("No sos Admin");
// }
// });
// }

// if(NombreUsuarioLogueado == null){
//     let boton = document.getElementById("submit-comment");
//     boton.addEventListener('click', function(e){
//       boton.setAttribute('disabled', 'disabled');
//     });
// }else{}
