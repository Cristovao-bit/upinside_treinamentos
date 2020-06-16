<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Este exercício está sendo realizado no curso de HTML5 da UpInside Treinamentos"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>UpInside Treinamentos - Elementos de Estrutura</title>
        
        <style>
            .news{
                /*Primeiro exemplo de estrutura*/
                /*width: 300px; /*Aqui eu podia usar % porque a web é relativa*/
                /*width: 25%;
                min-width: 200px;
                background: #ccc;
                display: inline-block; /*Para deixar os elementos na mesma linha e esse estilo já vem por se só com um espaçamento*/
                /*margin-left: -4px;*/
               
                /*Segundo exemplo com flotando os elementos*/
                float: left; /*Aplicando um float também estarei utilizando todo espaço*/
                width: 25%;
                background: red;
                padding: 20px;
                box-sizing: border-box;/*Aplicando isso vamos ter o tamanho da box pelo tamanho da borda e no caso de quatro elementos como no exemplo abaixo vamos colocar eles todos na mesma linha*/
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                border: 5px solid #fff; /*Aqui eu criei um espaço entre as box mantendo todos na mesma linha*/
                
                /*Terceiro exemplo com display nos elementos*/
                /*display: block;
                background: red;
                padding: 20px;
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                
                margin-bottom: 50px;
                
                outline: 10px solid #999;*/
            }
            
            header{float: left;}
            p{float: left; width: 100%;}
            
            .clear{clear: both;}
        </style>
    </head>
    <body>
        <article class="news">
            <header>
                <h1>Iniciando com CSS</h1>
                <p>Vamos aprender o básico e essencial em CSS!</p>
            </header>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique consequat venenatis. Suspendisse potenti. Cras nunc tellus, rutrum vel congue et, porttitor in purus. Quisque ultrices ullamcorper eleifend. Praesent porta mauris vitae viverra elementum. Sed leo lorem, imperdiet vel mattis nec, tristique eu leo. Proin sit amet ipsum ante. Sed imperdiet eleifend consequat.</p> 
            <div class="clear"></div>
        </article>
        
        <article class="news">
            <header>
                <h1>Iniciando com CSS</h1>
                <p>Vamos aprender o básico e essencial em CSS!</p>
            </header>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique consequat venenatis. Suspendisse potenti. Cras nunc tellus, rutrum vel congue et, porttitor in purus. Quisque ultrices ullamcorper eleifend. Praesent porta mauris vitae viverra elementum. Sed leo lorem, imperdiet vel mattis nec, tristique eu leo. Proin sit amet ipsum ante. Sed imperdiet eleifend consequat.</p>             
        </article>
        
        <article class="news">
            <header>
                <h1>Iniciando com CSS</h1>
                <p>Vamos aprender o básico e essencial em CSS!</p>
            </header>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique consequat venenatis. Suspendisse potenti. Cras nunc tellus, rutrum vel congue et, porttitor in purus. Quisque ultrices ullamcorper eleifend. Praesent porta mauris vitae viverra elementum. Sed leo lorem, imperdiet vel mattis nec, tristique eu leo. Proin sit amet ipsum ante. Sed imperdiet eleifend consequat.</p> 
        </article>
        
        <article class="news">
            <header>
                <h1>Iniciando com CSS</h1>
                <p>Vamos aprender o básico e essencial em CSS!</p>
            </header>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique consequat venenatis. Suspendisse potenti. Cras nunc tellus, rutrum vel congue et, porttitor in purus. Quisque ultrices ullamcorper eleifend. Praesent porta mauris vitae viverra elementum. Sed leo lorem, imperdiet vel mattis nec, tristique eu leo. Proin sit amet ipsum ante. Sed imperdiet eleifend consequat.</p> 
        </article>
    </body>
</html>
