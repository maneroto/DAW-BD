$(document).ready(function() 
{
    $('#registerForm').submit(function(e)
    {
        e.preventDefault();
        $.ajax(
          {
              type: "POST",
              url: 'https://daw-bd-maneroto.c9users.io/Examen/php/insertIncident.php',
              data: $(this).serialize(),
              success: function(data)
              {
                alert(data);
              }
          }  
        );
    });
});