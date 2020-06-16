<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Este exercício está sendo realizado no curso de HTML5 do UpInside Treinamentos"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>UpInside Treinamentos - Especificidade do CSS</title>
        
        <style>
            /*Se colocarmos um !important dentro do style o style vai ser aplicado sobrepondo todos. ex: p{color: red !important}*/
            p{color: red;}
            .p{color: orange;}
            #p{color: green;}
            article p{color: blue;}
        </style>
    </head>
    <body>
        
        <!--
        1, 0, 0, 0
        Inline, ID, Classes, Elementos
        
        *Sempre vai ser usado Elementos e Classes para estilização!
        
        0001 = Elemento
        0002 = 2 Elementos
        0010 = Classes
        0100 = ID
        1000 = Inline ( O style aplicado diretamento na tag)
        -->
        
        <p class="p" style="color: aqua">Especificidade</p>
        
        <article>
            <header>
                <h1>Iniciando com CSS!</h1>
                <p class="tagline">Vamos aprender o básico e essencial em CSS</p>
            </header>
            
            <p id="p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique consequat venenatis. Suspendisse potenti. Cras nunc tellus, rutrum vel congue et, porttitor in purus. Quisque ultrices ullamcorper eleifend. Praesent porta mauris vitae viverra elementum. Sed leo lorem, imperdiet vel mattis nec, tristique eu leo. Proin sit amet ipsum ante. Sed imperdiet eleifend consequat.</p>
        </article>
    </body>
</html>
