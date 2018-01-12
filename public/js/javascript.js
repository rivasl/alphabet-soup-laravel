addEventListener('load',inicializarEventos,false);

function inicializarEventos()
{
    
    var ob=document.getElementById('boton1'); 
    ob.addEventListener('click', presionBoton, false);
}

function presionBoton(e)
{
    var words=document.getElementById('words');
    realizaProceso(words.value);
}

function realizaProceso(words){
    var palabras = {
            "words" :  words
    };

    $.ajax({
            data:  palabras,
            url:   'ajax_proceso.php',
            type:  'GET',
            beforeSend: function () {
                    $("#resultado").html("Procesando, espere por favor...");
            },
            success:  function (response) {
                    $("#resultado").html(response);
            }
    });
}