<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <!-- Essa é a primeira forma de incluir o jquery no documento.Mas ae seu site vai ficar mais lento pra carregar!
        <script src="js/jquery.js"></script>
        -->
    </head>
    <body>
       
        <article>
            <header>
                <h1>Iniciando com jQuery!</h1>
                <p class="j_alert">Estamos estudando jQuery de forma profissional e descomplicada (Clicke em mim e veras o efeito).</p>
                <a href="#teste" title="UpInside Treinamentos">UpInside</a>
            </header>
        </article>
        
        <article id="teste">
            <header>
                <h1 class="j_alert">Iniciando com jQuery!</h1>
                <p>Iniciando com jQuery!</p>
                 <a href="#teste" title="UpInside Treinamentos">UpInside</a>
            </header>
        </article>
        
        <!--Async serve para que carregue meu documento todo e só depois carregue a biblioteca jquery-->
        <script src="js/jquery.js"></script>
        <script async src="js/script.js"></script>
    </body>
</html>
