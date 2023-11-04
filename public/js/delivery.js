$(function () {
    $("#menu").on('click', function () {
        $("#infoleft").fadeIn();
        if ($("#infoleft").is(":visible")) {
            $(document).on("click", "#closeinfoleft", function () {
                $("#infoleft").fadeOut();
            });
        }
    });

    let cartProdutos = [];
    var lastOrderId = null;
    updateCartUi();

    $('.addProd').on('click', function () {
        addOrder();
        var $orders = $(".orders");
        $orders.animate({ scrollTop: $orders.scrollTop() + 1500 },700);
    });
    $(document).on("click",".removeOrder",function(){
        var pedidoRemoveId = $(this).data("remove-order");
        var pedidoSplice = cartProdutos.find(pedido => pedido.id == pedidoRemoveId);
        cartProdutos.splice(pedidoSplice,1)
        console.log(cartProdutos);
        updateCartUi();
    })

    $("#finishOrder").on("click",function(){

    })

    $('.EditeEndereco').on('click', function(){
        let enderecoHtml = $(".nullEndereco");
        var endereco ='';

        if ($("input#endereco").is(":hidden")) {
            $("input#endereco").show();
            $("button.confirm").show();
            $(".nullEndereco").hide();
        }else{
            $("input#endereco").hide();
            $("button.confirm").hide();
            $(".nullEndereco").show();
        }

        $("button.confirm").on("click",function(){
            var valor = $("input#endereco").val()
            $(endereco).empty();
            endereco += valor;
            $(enderecoHtml).empty();

            if(endereco == ''){
                $(enderecoHtml).append( "Nenhum Endereço cadastrado");
            }else{
                $(enderecoHtml).append(endereco);
                $("input#endereco").hide();
                $("button.confirm").hide();
                $(".nullEndereco").show();
            }
        })

    })


    $(document).on('click',"button.buttonProd",function () {
        const productId = $(this).data('product-id');
        const productName = $(this).data('product-name');
        const productPrice = $(this).data('product-price');
        const productCate = $(this).data('product-categoria');

        if (productCate == 'copo') {
            addItemCopo(productId, productName, productPrice,lastOrderId,productCate);
        } else if (productCate == 'Creme') {
            addItemCreme(productId, productName, productPrice,lastOrderId,productCate);
        } else if (productCate == 'Acompanhamento') {
            addItemAcom(productId, productName, productPrice,lastOrderId,productCate);
        }
    });

    function generateUniqueId() {
        return Date.now().toString(36);
    }

    function addOrder() {
        const pedido = {
            id: generateUniqueId(),
            copo: [],
            creme: [],
            acompanhamento: [],
            total:['0'],
        };
        cartProdutos.push(pedido);
        lastOrderId = pedido.id;
        updateCartUi();
        notification("pedido criado");
    }

    function addIdPedidoInItem(idPedido){
        $("button.buttonProd").attr('data-pedido-id', idPedido);
    }

    function addItemCopo(copoId, copoName, copoPrice,pedidoId, copoCate) {
        const copoItem = {
            id: copoId,
            idPedido: pedidoId,
            name: copoName,
            price: copoPrice,
            type: copoCate,
        };

        var existingCopo = cartProdutos.find(pedido => pedido.id == pedidoId);

        if (existingCopo) {
            if(existingCopo.copo.length > 0){
                notification('copo já adicionado a esse pedido');
            }else{
                existingCopo.total.splice(0);
                existingCopo.total.push(copoPrice);
                existingCopo.copo.push(copoItem);
                updateCartUi();
                console.log(cartProdutos);
            }
        } else {
            addOrder();
            const lastOrder = pedidoId;
            console.log(lastOrder);
            const newCopoPedido = cartProdutos.find(pedido => pedido.id == lastOrder);
            console.log(newCopoPedido);
            newCopoPedido.total.splice(0);
            newCopoPedido.copo.push(copoItem);
            newCopoPedido.total.push(copoPrice);
            updateCartUi()
        }
    }

    function addItemCreme(cremeId, cremeName, cremePrice, cremePedido, cremeCate) {

        const cremeItem = {
            id: cremeId,
            idPedido: cremePedido,
            name: cremeName,
            price: cremePrice,
            type: cremeCate,
        };

        var existingcreme = cartProdutos.find(pedido => pedido.id == cremePedido);


        if (existingcreme) {
            if(existingcreme.creme.length > 0){
                notification("creme já adicionado ao pedido com o id #"+cremePedido)
            }else
            existingcreme.creme.push(cremeItem);
            updateCartUi()
        } else  {
            addOrder();
            const lastOrder = pedidoId;
            const newCopoPedido = cartProdutos.find(pedido => pedido.id == lastOrder);
            newCopoPedido.creme.push(copoItem);
            updateCartUi()
        }
    }

    function addItemAcom(AcompId, AcompName, AcompPrice, AcompPedido, AcompCate) {
        const AcompItem = {
            id: AcompId,
            idPedido: AcompPedido,
            name: AcompName,
            price: AcompPrice,
            type: AcompCate,
        };

        const existingAcomp = cartProdutos.find(pedido => pedido.id === AcompPedido);

        if (existingAcomp) {
            var totalPedido = parseFloat(existingAcomp.total);
            var priceAcom = existingAcomp.acompanhamento.length < 3 ? 0 : parseFloat(AcompPrice);
            if(!priceAcom){
                var precototal = (total,atual) => total + atual;
                var resultado = precototal(totalPedido, priceAcom);
                existingAcomp.total.splice(0);
                existingAcomp.acompanhamento.push(AcompItem);
                existingAcomp.total.push(resultado);
                console.log("esse é o valor retornado de apriceAcom",priceAcom);
            }else{
                var precototal = (total,atual) => total + atual;
                var resultado = precototal(totalPedido, priceAcom);
                console.log("total é igua : "+resultado);

                existingAcomp.total.splice(0);
                existingAcomp.acompanhamento.push(AcompItem);
                existingAcomp.total.push(resultado);
            }
            somaPedidos();
            console.log(parseFloat(resultado).toFixed(2));
            console.log(cartProdutos);
            addIdPedidoInItem(AcompPedido);
            updateCartUi()
        } else {
            addOrder();
            const lastOrder = pedidoId;
            const newCopoPedido = cartProdutos.find(pedido => pedido.id == lastOrder);
            newCopoPedido.acompanhamento.push(copoItem);
            updateCartUi()
        }
    }

    function somaPedidos() {
        var soma = 0;
        var cartProdTotal= cartProdutos.map(pedido => pedido.total);
        cartProdTotal.forEach(element => {
            soma += parseFloat(element);
        });
        return soma.toFixed(2);
    }

    function notification(message){
        if(typeof message !== 'undefined'){
            var notifyHtml = `
                <div id="notification" class="flex items-center fixed z-50 left-4 bottom-4 w-full max-w-xs p-4 text-gray-500 bg-fuchsia-200 rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg ">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z"/>
                    </svg>
                    <span class="sr-only">Warning icon</span>
                </div>
                <div class="mx-3 text-sm font-normal">${message}</div>
                <button type="button" id="CloseNotify" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#notification" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
            `;
            $('body').append(notifyHtml);

            var notifyId = $('#notification');

            notifyId.hide().slideDown('slow', function() {
                // Aguarde por alguns segundos e, em seguida, esconda a notificação
                setTimeout(function() {
                    notifyId.slideUp('slow', function() {
                        // Remova o elemento após a animação de desaparecimento
                        notifyId.remove();
                    });
                }, 3000);
            });

            $(document).on("click","#CloseNotify",function(){

                notifyId.remove();
            })

        }else{
            console.log("não há mensagem ! ")
        }
    }


    function updateCartUi() {
        const totalHtml = $('.innerTotal');
        $(totalHtml).empty()
        var total = somaPedidos();
        const atzTotal = `
            R$${total}
        `;
        totalHtml.append(atzTotal);


        const orders = $('.orders');
        $(orders).empty();
        if (!cartProdutos.length > 0) {
            $('.orders').append(
                `
            <div class="noOrder p-2 flex justify-center items-center gap-2 border-b-2 rounded-xl text-xl">
            <span class="material-symbols-outlined text-fuchsia-700">specific_gravity</span> adicione um copo
            </div>
            `
            );
        } else {
            $('.noOrder').remove();
            cartProdutos.forEach(pedido => {
                const CopoId = pedido.id ;
                const copoName = pedido.copo.length > 0 ? pedido.copo[0].name : 'adicionar um copo';
                const cremeName = pedido.creme.length > 0 ? pedido.creme[0].name : 'adicionar um creme';
                const acompanhamentoText =  pedido.acompanhamento.length > 0 ? pedido.acompanhamento.map(item => item.name).join(', ')
                : 'adicionar 3 acompanhamentos grátis';

                const itemHtml = `
                    <div class="order p-2 grid grid-col-3 grid-rows-1 gap-2 border-b-2 rounded-xl text-sm ">
                        <div class="flex items-center gap-3">
                            <img src="./img/acaimorango.png" class="w-2/12" alt="">
                            <div class="description h-full flex flex-col justify-center break-all">
                                <span>${copoName}</span>
                                <p>creme : ${cremeName}</p>
                                <p class="">acompanhamento: ${acompanhamentoText}</p>
                            </div>
                        </div>
                        <button data-remove-order="${CopoId}" class="removeOrder Button">
                            <img src="img/icon/remove.svg" class="w-7 h-7" alt="">
                        </button>
                    </div>
                    `;

                orders.append(itemHtml);
            });
        }
    }

});
