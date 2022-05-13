function checkEmail(elemId)
{
    var input = document.getElementById(""+elemId).value.trim();
    if ( /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{1,})+$/.test(input))
        return true;
    else
        return false;
}


function sendRequest(data, method, url)
{
    addClass("mdlChild","none");
    removeClassById("mdlLoading","none");
    removeClassById("mdlContainer","none");
    $.ajaxSetup({
        headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    $.ajax(
        {      url: "/"+url,
               method: method,
               contentType: 'application/json; charset=utf-8',
               data: JSON.stringify(data),
               success: function(result)
               {
                addClassById("mdlLoading","none");
                jQuery('.alertContainer').empty();
                if($.isEmptyObject(result.errors))
                {
                    emptyInputs();
                    removeClassById(result.mdlSuccess,"none");
                }
                else
                {
                    jQuery.each(result.errors, function(key, value)
                    {     
                         addClassById("mdlContainer","none");
                         jQuery('#'+result.divError+' .alertContainer').append(''+
                         '<p class="txt-center bgColor-mainColor2 txt-sectionDesc txt-mainColor pd-top-5  alert">'+value+'</p>');
                    });
                }
                },
               error: function (jqXHR, textStatus, errorThrown) 
               {
                   alert("?");
               }
               
         });
}
$(document).ready(function(){
    $(".subscribe").click(function(){
        var btnSub = $(this);
        btnSub.attr("disabled","true");
        btnSub.html("SUBSCRIBING...");
        var inputToCheck = $(this).attr("class").split(" ").pop();
        var email = $("#"+inputToCheck).val().trim();
        var data = {email:email};
        sendRequest(data, "POST", "subscribeUser");
        btnSub.html("SUBSCRIBE");
        btnSub.removeAttr("disabled");
    });

    $(".register").click(function(){
        var btnReg = $(this);
        btnReg.attr("disabled","true");
        btnReg.html("Validating...");
        var username = $(".username").val().trim();
        var password = $(".password").val();
        var gender = $('input[name="gender"]:checked').val();
        var data = {
            username:username,
            password:password,
            gender:gender
        };
        sendRequest(data,"POST","users");
        btnReg.html("REGISTER");
        btnReg.removeAttr("disabled");
    })
});