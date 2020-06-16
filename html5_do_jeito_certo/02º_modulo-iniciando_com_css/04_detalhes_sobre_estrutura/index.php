<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Este exercício está sendo realizado no curso de HTML5 da UpInside Treinamentos"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>UpInside Treinamentos - Elementos de Estrutura</title>
        
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            
            body{
                height: 1600px;
            }
            
            .content{
                float: left;
                width: 80%;
                padding: 30px 10%;
                background: #ccc;
                background-color: red;
                background-image: url(img/praia.jpg);
                background-size: cover;
                /*background-position: right top;*/
                background-attachment: fixed;
            }
            
            .news{
                float: left;
               width: 22.75%;
               margin-right: 3%;
               /*width:100%;*/
                padding: 30px;
                color: #fff;
                background:rgba(255,255,255,0.5);
                color: #000;
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
            }
            
            .news:nth-of-type(4n+0){
                margin-right: 0;
            }
            
            header{float: left;}
            p{float: left; width: 100%;}
            
            .clear{clear: both;}
        </style>
    </head>
    <body>
        <div class="content">
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
                <div class="clear"></div>
            </article>

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
                <div class="clear"></div>
            </article>
        </div>
    </body>
</html>
