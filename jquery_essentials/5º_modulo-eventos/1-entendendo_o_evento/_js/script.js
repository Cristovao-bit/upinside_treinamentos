$(function(){
    //event.target: O elemento que disparou o evento. Pode ser comparado
    //a this para controlar a delegação de eventos.
    //o event dentro de function pode também ser um data pra obter ou recuperar os valores
//    $("button").on("click", function(event){
//        console.log(event.target);
//        console.log(this);
//    });

    //event.currentTarget: Retorna o elemento atual dentro de um callback de evento.
    //Geralmente representa o this
//    $("button").on("click", function(event){
//        console.log(event.currentTarget);
//        console.log(this);
//    });

    //event.delegateTarget: Retorna o elemento delegado em um anexo de evento manipulado por on.
//    $("div").on("click", "button", function(event){
//        console.log(event.currentTarget);
//        console.log(event.delegateTarget);
//    });
    
    //event.data: Passe um objeto adicional ao evento quando o manipulador de execução está vinculado.
//    $("button").on("click", {
//        e_text: "Eu Sou O Homem de Ferro!"
//    }, function(event){
//        console.log(event.data.e_text);
//    });

    //event.result: O último valor retornado por um manipulador de eventos utilizando o mesmo evento que este.
//    $("button").on("click", function(event){
//        return "Eu Sou O Batman!";
//    }).click(function(event){
//        console.log(event.result);
//    });

    //event.type: Tipo de evento que foi executado neste.
//    $("button").on("click", function(event){
//        console.log(event.type);
//    }).on("mouseup", function(event){
//        console.log(event.type);
//    });

    //event.namespace: Você pode criar eventos e gatilhos para serem disparados por namespace.
    //Este retorna o namespace utilizado
//    $("div").on("upinside.essentails", function(event){
//        console.log("NAMESPACE: " + event.namespace);
//    }).on("click", "button", function(){
//        $(this).trigger("upinside.essentials");
//    });

    //event.timeStamp: Retorna a diferença em milissegundos entre o tempo que o navegador criou o
    //evento e 1 de janeiro de 1970.
    //Esse valor obviamente é diferente do valor de time.
//    $("button").on("click", function(event){
//        console.log(event.timeStamp); //event timeStamp.
//        console.log((new Date()).getTime()); //timeStamp.
//    });

    ///
});