$(document).ready(function() 
{
  let fecha, lugar, incidente;
  fecha=lugar=incidente = false;
  $('#byDate').on('click', function()
  {
    fecha = !fecha;
    callTable(fecha, lugar, incidente);
  });
  $('#byPlace').on('click', function()
  {
    lugar = !lugar;
    callTable(fecha, lugar, incidente);
  });
  $('#byIncident').on('click', function()
  {
    incidente = !incidente;
    callTable(fecha, lugar, incidente);
  });
});

function callTable(byDate, byPlace, byIncident)
{
  $.ajax(
      {
          type: "GET",
          url: 'https://daw-bd-maneroto.c9users.io/Examen/php/viewIncident.php',
          data: {byDate: byDate, byPlace: byPlace, byIncident: byIncident},
          success: function(data)
          {
            $("#tableDisplay").append(data);
          }
      }  
    );
}