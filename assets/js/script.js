$(document).ready(function(){
    $("#hide").click(function(){
        $("p:visible").last().hide();
    });
    $("#show").click(function(){
        $("p:hidden").first().show();
    });
});