$(document).ready(function()
{
    var navItems = $('.admin-menu li > a');
    var navListItems = $('.admin-menu li');
    
    navItems.click(function(e)
    {
        e.preventDefault();
        navListItems.removeClass('active');
        $(this).closest('li').addClass('active');

        var target = $(this).attr('data-target-id');
        $('#' + target).show();
        
        alert(target+" word:"+$('#word').val());
    });
});

function realizaProceso(word, matrix){
    var selected_data = {
            "word" :  word,
            "matrix": matrix
    };

    $.ajax({
            data:  selected_data,
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

/* addEventListener('load',inicializarEventos,false);

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
} */