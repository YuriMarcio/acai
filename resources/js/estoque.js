$(function () {

    $("#plusProduct").on('click',function(){
        $(".addProduct ").fadeIn();
        if($(".addProduct ").is(":visible")){
            $(document).on("click","#exitCadProduct",function(){
                $(".addProduct ").fadeOut();
            })
        }
    });

    $('button.editbutton').on('click',function() {
        var dataId = $(this).data('id');
        $("#"+dataId).fadeIn();
        if($("#"+dataId).is(":visible")){
            $(document).on("click","#exitCadProduct",function(){
                $("#"+dataId).fadeOut();
            })
        }
    });

});
