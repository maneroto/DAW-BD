$(document).ready(function()
{
   $.ajax(
   {
      type: "GET",
      url: 'https://daw-bd-maneroto.c9users.io/Examen/php/selectLugar.php',
      success: function(data)
      {
          $('#lugar').append(data);
          $('#lugar').formSelect();
      }
   });
   $.ajax(
   {
      type: "GET",
      url: 'https://daw-bd-maneroto.c9users.io/Examen/php/selectTipo.php',
      success: function(data)
      {
          $('#tipo').append(data);
          $('#tipo').formSelect();
      }
   });
});