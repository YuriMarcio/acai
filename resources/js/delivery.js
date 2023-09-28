$(function () {
    $("#menu").on('click',function(){
        $("#infoleft").fadeIn();
        if($("#infoleft").is(":visible")){
            $(document).on("click","#closeinfoleft",function(){
                $("#infoleft").fadeOut();
            })
        }
    })

});
