$(function(){
    $(".jquery_essentials").html('jQuery Essentials!');
    
    console.group("Mensagens Gerais");
    console.log("jQuery Essentials!");
    console.info("O jQuery foi carregado com sucesso!");
    console.warn("Um alerta!");
    console.error("Um erro!");
    console.groupEnd();
    
    var cadastro = false;
    
    console.group("Cadastro de Usuário");
    console.info("cadastro iniciado!");
    
    if(cadastro === true){
        console.log("Cadastro Realizado!");
    }else{
        console.warn("Erro ao cadastrar!");
    }
    console.groupEnd();
});