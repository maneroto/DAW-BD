$(document).ready(function(){
    
    var color = document.getElementById("favcolor").textContent;
    $('nav').css('background-color', color);
    $('.page-footer').css('background-color', color);
    $("#name").toggle("slow");
    $("#color").fadeToggle("slow");
    $("#animal").slideToggle("slow");
    $("#hobby").animate({height: 'toggle'});

    $("button").click(function(){
        $("#name").toggle("slow");
        $("#color").fadeToggle("slow");
        $("#animal").slideToggle("slow");
        $("#hobby").animate({height: 'toggle'});
    });
});
    
    
    
