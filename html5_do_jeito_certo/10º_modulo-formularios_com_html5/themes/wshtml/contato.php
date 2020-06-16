<section class="container">
    <div class="content">
        <header class="sectiontitle">
            <h1><?= $pg_title; ?></h1>
            <p class="tagline"><?= $pg_desc; ?></p>
        </header>

        <form action="" method="post">
            <input type="search" autofocus list="s" style="width: 80%; margin: 0 10%;" placeholder="Uma Pesquisa Selecionada! Carregue a Página e Saia Digitando!"/>
        </form>

        <p class="al-center" style="color: #E16F4D; margin-top: 5px;">Todos os Efeitos e Eventos Desta Página Foram Criados Utilizando Exclusivamente HTML5 e CSS!</p>

        <div class="clear"></div>
    </div>


    <article class="container bg-light">
        <div class="content" style="background: url(<?= INCLUDE_PATH; ?>/img/mapa.png) center center no-repeat">
            <header class="articletitle">
                <h1>CSS Produtivo para Formulário!</h1>
                <p class="tagline">Um estilo padronizado, ágil, distribuido e muito clean. Confira:</p>
            </header>

            <aside class="fl-right contact_info box-forthreesmall">
                <h1 class="form-legend"><span class="shorticon shorticon-mail shorticon-legendtitle">Formas de Contato:</span></h1>
                <ul>
                    <li><b>Por Telefone:</b> +55 54 3381.2185</li>
                    <li><b>Por E-mail:</b> <a title="Envie Um E-mail" href="mailto:cursos@upisnide.com.br?subject=Fale Conosco - WS HTML5">cursos@upinside.com.br</a></li>
                    <li><b>Por Facebook:</b> <a title="UpInside no Facebook" href="http://facebook.com/upinside">fb.com/upinside</a></li>
                </ul>

                <p>
                    Rua Lourival da Cruz 174,<br>
                    99300000 - Soledade/RS<br>
                    Brasil
                </p>
            </aside>

            <form action="" method="post" class="fl-left box-forthree">
                <label>
                    <span class="form-field">Nome:</span>
                    <input type="text" name="nome" required title="Favor Informe Seu Nome!" placeholder="Informe seu Nome:"/>
                </label>

                <label>
                    <span class="form-field">Bio:</span>
                    <textarea name="bio" placeholder="Fale Um Pouco Sobre Você!" required title="Favor Escreva Uma Breve Bio" rows="4"></textarea>
                </label>

                <label>
                    <span class="form-field">Sexo:</span>
                    <select name="gender" required title="Favor Selecione Seu Sexo!">
                        <option value=""> Selecione Seu Sexo: </option>
                        <option value="f"> Femininio </option>
                        <option value="m"> Masculino </option>
                    </select>
                </label>

                <label>
                    <span class="form-field">Senha:</span>
                    <input type="password" required title="Favor Informe Sua Senha" name="senha" placeholder="Informe Uma Senha:"/>
                </label>

                <div class="form-check">
                    <span class="form-field">Deixe Sua Nota:</span>
                    <label><input type="radio" required title="Favor Deixe Sua Nota!" name="review" value="1"> 1</label>
                    <label><input type="radio" name="review" value="2"> 2</label>
                    <label><input type="radio" name="review" value="3"> 3</label>
                </div>

                <div class="form-check">
                    <span class="form-field">Receber E-mail Sobre:</span>
                    <label><input type="checkbox" name="list" value="1"> Técnicas</label>
                    <label><input type="checkbox" name="list" value="2"> Tutorias</label>
                    <label><input type="checkbox" name="list" value="3"> Empregos</label>
                </div>

                <input type="submit" class="btn btn-green radius" value="Enviar"/>
                <input type="reset" class="btn btn-red radius" style="margin: 0 20px;" value="Limpar"/>
                <button class="btn btn-blue radius">Nada Aqui</button>                
            </form>            

            <div class="clear"></div>
        </div>
    </article>

    <article class="container bg-blue">
        <div class="content">
            <header class="sectiontitle" style="margin-bottom: 60px;">
                <h1>Novos Inputs do HTML5</h1>
                <p class="tagline">Conheça e aplique os novos campos disponíveis!</p>
            </header>

            <form action="" method="post">

                <div class="box box-medium">
                    <label>
                        <span class="form-field">Este é Um Campo De Pesquisa:<br><small>O Que Você Procura?</small></span>
                        <input required type="search" name="s" list="s" placeholder="Pesquisa Pela Palvra Curso:"/>

                        <datalist id="s">
                            <option label="Gerenciado Dados" value="Curso Pro PHP">
                            <option label="Padrões Web" value="Curso Pro Tableless">
                            <option label="Orientado a Objetos" value="Curso WS PHP">
                            <option label="SEO, SMO, SEM e Mais" value="Curso WS HTML5">
                        </datalist>                        
                    </label>

                    <label>
                        <span class="form-field">Este é Um Campo de URL:<br><small>Você Tem Um Site?</small></span>
                        <input required type="url" name="site" placeholder="Informe Seu Site Partindo de http://"/>
                    </label>

                    <label>
                        <span class="form-field">Este é Um Campo De Data<br><small>Que Dia É Hoje?</small></span>
                        <input required name="data" type="date"/>
                    </label>
                </div>

                <div class="box box-medium">
                    <label>
                        <span class="form-field">Este é Um Campo De E-mail:<br><small>Como Eu Falo Com Você?</small></span>
                        <input required type="email" name="email" placeholder="Informe Um E-mail Válido:"/>                      
                    </label>

                    <label>
                        <span class="form-field">Este é Um Campo de Telefone:<br><small>Posso Te Ligar?</small></span>
                        <input required type="tel" name="telefone" placeholder="Informe Seu Telefone:"/>
                    </label>

                    <label>
                        <span class="form-field">Este é Um Campo De Spin<br><small>Avalie de 1 à 10!</small></span>
                        <input required name="nota" type="number" min="1" max="10" step="1" value="5"/>
                    </label>
                </div>

                <div class="box box-medium last">
                    <label style="margin-bottom: 19px;">
                        <span class="form-field">Este é Um Campo De Slide:<br><small>Você Esta Feliz?</small></span>
                        <input name="feliz" type="range" min="1" max="10" step="1" value="5"/>                      
                    </label>

                    <label>
                        <span class="form-field">Este é Um Campo de Cor:<br><small>Qual A Sua Preferida?</small></span>
                        <input type="color" name="cor" value="#0099FF"/>
                    </label>
                </div>


                <div class="box box-full" style="margin-top: 20px;">
                    <p class="fl-right" style="margin-top: 20px; color: #fbfbfb">Lembre-se de estar utilizando um browser atualizado. No Chrome tudo funciona!</p>
                    <input type="submit" class="btn btn-green radius" value="Enviar"/>                    
                </div>
            </form>

            <div class="clear"></div>
        </div>
    </article>


    <article class="container">
        <div class="content">
            <header class="articletitle articletitle-nomargin">
                <h1>Variações de Campos de Data:</h1>
                <p class="tagline">Data, data e horário, mês, semana. Conheça as variações!</p>
            </header>
            <div class="clear"></div>
        </div>

        <div class="container bg-light">
            <div class="content" style="background: url(<?= INCLUDE_PATH; ?>/img/mapa.png) center center no-repeat">
                <form action="" method="post">
                    <div class="box box-large">
                        <label>
                            <span class="form-field">Este é Um Campo De Data:<br><small>Que Dia É Hoje?</small></span>
                            <input required name="date" type="date"/>
                        </label>

                        <label>
                            <span class="form-field">Este é Um Campo De Semana:<br><small>Selecine a Semana do Ano?</small></span>
                            <input required name="semana" type="week"/>
                        </label>

                        <label>
                            <span class="form-field">Este é Um Campo De Data e Tempo:<br><small style="color: #E16F4D">Este Só Funciona no Opera e No Safari!</small></span>
                            <input required name="data-e-tempo" type="datetime"/>
                        </label>
                    </div>

                    <div class="box box-large last">
                        <label>
                            <span class="form-field">Este é Um Campo De Mês:<br><small>Em Que Mês Você Nasceu?</small></span>
                            <input required name="mes" type="month"/>
                        </label>

                        <label>
                            <span class="form-field">Este é Um Campo De Tempo:<br><small>Que Horas São?</small></span>
                            <input required name="tempo" type="time"/>
                        </label>

                        <label>
                            <span class="form-field">Este é Um Campo De Data, Tempo e Local:<br><small>Que Dia e Horas São?</small></span>
                            <input required name="data-e-tempo" type="datetime-local"/>
                        </label>
                    </div>

                    <div class="box box-full" style="margin-top: 20px;">
                        <p class="fl-right" style="margin-top: 20px; color: #555">Lembre-se de estar utilizando um browser atualizado. No Chrome tudo funciona!</p>
                        <input type="submit" class="btn btn-green radius" value="Enviar"/>                    
                    </div>
                </form>
                <div class="clear"></div>
            </div>
        </div>        
    </article>


    <article class="container bg-orange">
        <div class="content">
            <header class="articletitle al-center">
                <h1>Trabalhando com Expressões Regulares!</h1>
                <p class="tagline">Veja Como Aplicar Expressões Regulares Diretamente nos Inputs!</p>
            </header>

            <div class="fl-left" style="width: 80%; margin: 0 10%; padding: 30px; background: rgba(0,0,0,0.3)">
                <form action="" method="post">
                    <label>
                        <span class="form-field">Uma Senha de 5 à 10 Caracteres:</span>
                        <input type="password" pattern="^[^*]{5,10}$" required title="Informe Sua Senha Com 5 - 10 Caracteres"/>
                    </label>

                    <label>
                        <span class="form-field">Um E-mail Padrão:</span>
                        <input type="email" pattern="^[^*]@[^*]+\.[a-z]{2,4}$" required title="Informe Um E-mail Válido!"/>
                    </label>

                    <label>
                        <span class="form-field">O CEP da Sua Cidade:</span>
                        <input type="text" pattern="^([0-9]{5})-([0-9]{3})$" required title="Informe O Cep, Ex: 00000-000!"/>
                    </label>

                    <label>
                        <span class="form-field">Uma Data:</span>
                        <input type="text" pattern="^(0[1-9]|1[0-9]|2[0-9]|3[0-1])/(0[1-9]|1[0-2])/([0-9]{4})$" required title="Informe Uma Data Válida, Ex: MM/DD/YYYY!"/>
                    </label>

                    <input type="submit" class="btn btn-green radius" value="Enviar"/>
                </form>             
            </div>

            <div class="clear"></div>
        </div>
    </article>

</section>
