function addClassById(elem,classToAdd)
{
    $("#"+elem).addClass(classToAdd);
}
function removeClassById(elem,classToRemove)
{
    $("#"+elem).removeClass(classToRemove);
}
function addClass(elem,classToAdd)
{
    $("."+elem).addClass(classToAdd);
}
function removeClass(elem,classToRemove)
{
    $("."+elem).removeClass(classToRemove);
}
function emptyInputs()
{
    $(".input").val("");
}

$(document).ready(function(){
    $(".openBtn").click(function()
    {   var divToClose = $(this).attr("id").split("_")[1];
        var divToOpen = $(this).attr("id").split("_")[0];
        addClassById(divToClose,"none");
        removeClassById(divToOpen,"none");
    });
    $(".btnMark").click(function(){
        $(this).addClass("clicked");
        var btnToUncheck = $(this).attr("class").split(" ")[$(this).attr("class").split(" ").length-2].split("-")[1];
        removeClassById(btnToUncheck,"clicked");
    });
    $(".closeMdl").click(function()
    {
        addClass("mdl","none");   
    });
});
