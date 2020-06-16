<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Este exercício está sendo realizado no curso de HTML5 da UpInside Treinamentos"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>UpInside Treinamentos - Elementos de Estrutura</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        
        <style>
            *{
                margin: 0;
                padding: 0;
                font-family: 'open sans', sans-serif;
                 box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
            }
            .content{
                float: left;
                width: 100%;
                padding: 5%;
                background: #ccc;
                background-image: url(img/praia.jpg);
                background-size: cover;
                /*background-position: right top;*/
                background-attachment: fixed;
                text-align: center;
            }
            
            .news{
                max-width: 500px;
                padding: 30px;
                display: inline-block;
                background:rgba(255,255,255,0.7);
                color: #000;
                box-shadow: 0 2px 5px #555;
            }
            .news header{
                margin-bottom: 30px;
            }
            .title{
                font-size: 1.8em;/*1em equivale a 16px*/
                font-weight: 600;
            }
            .tagline{
                margin-top: 15px;
                font-size: 1em;
                text-transform: uppercase;
            }
            .optin{
                display: block;
            }
            .optin input{
                padding: 15px;
                border: 1px solid #ccc;
                display: block;
                width: 100%;
                margin-bottom: 15px;
                font-family: 'arial', serif;
            }
            
                button{
                    color: #fff;
                    padding: 8px 25px;
                    font-size: 1.2em;
                    cursor: pointer;
                    font-weight: 600;
                    border: 1px solid #22542d;
                    background: #409d55;
                    text-transform: uppercase;
                }
                button:hover{
                    background: #44a85b;
                }
            .clear{clear: both;}
        </style>
    </head>
    <body>
        <div class="content">
            <article class="news">
                <header>
                    <h1 class="title">Conheça o curso Work Series - HTML5 do Jeito Certo!</h1>
                    <p class="tagline">Descubra como utilizar o Poder do HTML5 semântico, somada a avançadas técnicas de SEO e Marketing Digital para criar sites que geram resultados rápidos e eficientes!</p>
                </header>

                <form class="optin">
                    <input type="text" name="nome" placeholder="Seu Nome"/>
                    <input type="email" name="email" placeholder="Seu E-mail"/>
                    <button>Enviar</button>
                </form>
                <div class="clear"></div>
            </article>           
        </div>
    </body>
</html>
