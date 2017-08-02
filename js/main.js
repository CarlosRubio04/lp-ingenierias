// Cargar
function cargar(){
  $('#loader').fadeIn();
}
// Descargar
function descargar(){
  $('#loader').fadeOut();
}
// carga asincronica de las imagenes
var bLazy = new Blazy({ 
  selector: '.lazyImg' // all images
});

// Validacion del formulario 1
$('#contacto').validate(  {
  rules: {
    nombre: {
      required: true,
      minlength: 5
    },
    telefono: {
      required: true,
      minlength: 7
    },
    correo: {
      email: true,
      required: true,

    },
    cargo: {
      required: true,
    },
    empleados: {
      required: true,
    },
    empresa: {
      required: true,
    }
  },
  messages: {
    nombre: {
      required: "Por favor escribe tu nombre",
      minlength: "Tu nombre es demasiado corto"
    },
    telefono: {
      required: "Por favor escribe tu teléfono",
      minlength: "Tu teléfono es demasiado corto"
    },
    correo: {
      required: "Por favor escribe tu E-mail",
      minlength: "Escribe un E-mail valido"
    },
    cargo: {
      required: "Por favor completa este campo",
    },
    empleados: {
      required: "Por favor completa este campo",
    },
    empresa: {
      required: "Por favor completa este campo",
    }

  },
  submitHandler: function(form){
    cargar();
    $.post('includes/validation.php',$('#contacto').serialize())
    .done(function(data){
      $('.form-control').val('');
      descargar();
      //bootbox.alert(data, function() {console.log("Alert Callback");});
      window.location.href = "?content=gracias";
    })
  }
});
// Validacion del formulario 1
$('#contacto2').validate(  {
  rules: {
    nombre: {
      required: true,
      minlength: 5
    },
    telefono: {
      required: true,
      minlength: 7
    },
    correo: {
      email: true,
      required: true,

    },
    cargo: {
      required: true,
    },
    empleados: {
      required: true,
    },
    empresa: {
      required: true,
    }
  },
  messages: {
    nombre: {
      required: "Por favor escribe tu nombre",
      minlength: "Tu nombre es demasiado corto"
    },
    telefono: {
      required: "Por favor escribe tu teléfono",
      minlength: "Tu teléfono es demasiado corto"
    },
    correo: {
      required: "Por favor escribe tu E-mail",
      minlength: "Escribe un E-mail valido"
    },
    cargo: {
      required: "Por favor completa este campo",
    },
    empleados: {
      required: "Por favor completa este campo",
    },
    empresa: {
      required: "Por favor completa este campo",
    }

  },
  submitHandler: function(form){
    cargar();
    $.post('includes/validation.php',$('#contacto2').serialize())
    .done(function(data){
      $('.form-control').val('');
      descargar();
      //bootbox.alert(data, function() {console.log("Alert Callback");});
      window.location.href = "?content=gracias";
    })
  }

});

$(document).ready(function() {
  descargar();
  $(".cta-btn").click(function(){
    project = $(this).attr("data");
    $("#myModal").find("#programa").val(project);
    $("#myModal").modal("show");
  });
});
