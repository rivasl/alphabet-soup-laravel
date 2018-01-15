/**
 * Preparation of the home page
 */
$(document).ready(function()
{
    var navItems = $('.admin-menu li > a');
    var navListItems = $('.admin-menu li');
    
    $('#word').val('OIE'); // Word by default

    navItems.click(function(e)
    {
        e.preventDefault();
        navListItems.removeClass('active');
        $(this).closest('li').addClass('active');

        var target = $(this).attr('data-target-id');
        $('#' + target).show();

        console.log((target+" word:"+$('#word').val()));
        
        checkTheSoup($('#word').val(), target);
    });
});

/**
 * checkTheSoup Make request to server to check the word inside the matrix
 * 
 * @param {string} word 
 * @param {string} matrix 
 */
function checkTheSoup(word, matrix){
        var selected_data = {"word": word, "matrix": matrix};

        $.ajax({
                data:  selected_data,
                url:   'checkSoup'+'/'+selected_data.word+'/'+selected_data.matrix,
                type:  'GET',

                beforeSend: function () {
                        $("#ocurrence").val("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#ocurrence").val(response);
                }
        });
}
