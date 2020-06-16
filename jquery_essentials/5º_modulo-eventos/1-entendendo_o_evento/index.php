<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Entendo Eventos no jQuery</title>
        <style>
            body{padding: 10%;}
            div{
                width: 300px;
                padding: 10px;
                color: #fff;
                background: #000;
            }
            button{
                outline: none;
                padding: 10px 20px;
                color: #fff;
                background: rgba(0,0,0,0.5);
                border: none;
                border-radius: 5px;
                -moz-border-radius: 5px;
                -webkit-border-radius: 5px;
                box-shadow: 0 5px 7px rgba(0,0,0,0.3);
                -moz-box-shadow: 0 5px 7px rgba(0,0,0,0.3);
                -webkit-box-shadow: 0 5px 7px rgba(0,0,0,0.3);
                cursor: pointer;
                transition: 0.5s;
            }
            
            button:hover{
                background: #fbc02d;
                box-shadow: 0 0 0 rgba(0,0,0,0);
                -moz-box-shadow: 0 0 0 rgba(0,0,0,0);
                -webkit-box-shadow: 0 0 0 rgba(0,0,0,0);
            }
        </style>
    </head>
    
    <body>
        <button>Gerar Evento</button>
       
        <script src="_js/jquery.js"></script>
        <script src="_js/script.js"></script>
    </body>
</html>