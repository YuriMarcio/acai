$(function () {
    $("#plusCategorie").on('click',function(){
        $(".tagCategories").fadeIn();
        if($(".tagCategories").is(":visible")){
            $(document).on("click","#exitTagCategories",function(){
                $(".tagCategories").fadeOut();
            })
        }
    })
    if ($('#23').length) {
        // Seleciona o botão com data-id="23" dentro do elemento com ID "22"
        $('#23').hide();
    }
});
