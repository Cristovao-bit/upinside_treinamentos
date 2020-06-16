<!--HOME CONTENT-->
<div class="site-container" id="c">

    <article class="cadastra_empresa">
        <header class="cat_header">
            <h1>Cadastre sua Empresa</h1>
            <p class="tagline">Olá, este é um modelo de cadastro de empresa para que você possa realizar uma simples ineração com o site. Informe os dados e vou moderar e aprovar caso estes estejam correatos. Forte abraço meu querido!</p>
        </header>

        <?php
        if (isset($Link->getLocal()[1]) && $Link->getLocal()[1] == 'create'):
            WSErro("Tudo certo meu querido! Sua empresa foi cadastrada com sucesso. Lembre que esse é apenas uma página de exemplo, então assim que eu ver esse cadastro eu atibo ele pra você!", WS_ACCEPT);
            WSErro("Moderação: O cadastro é moderado, logo esse só vai para o site depois da ativação pelo ADMIN!", WS_ALERT);
        endif;

        $postempresa = filter_input(INPUT_POST, 'SendPostForm', FILTER_DEFAULT);
        if ($postempresa):
            $empDataSet = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            unset($empDataSet['SendPostForm']);

            $empDataGet = array_map('strip_tags', $empDataSet);
            $data = array_map('trim', $empDataGet);
            $data['empresa_capa'] = $_FILES['empresa_capa'];

            if (in_array('', $data) || $data['empresa_capa']['error'] != 0):
                WSErro("Oppsss: Para cadastrar sua empresa, preencha todos os campos. <b>Tudo é obrigatório aqui!</b> :)", WS_ERROR);
            else:
                //CADASTRAR EMPRESA... NOME DA CAPA COM EMPRESA_NAME PÓS CAD
                $data['empresa_name'] = Check::Name($data['empresa_title']);
                $data['empresa_date'] = date('Y-m-d H:i:s');

                $checkName = new Read;
                $checkName->ExeRead("app_empresas", "WHERE empresa_title = :title", "title={$data['empresa_title']}");
                if ($checkName->getResult()):
                    $data['empresa_name'] = $data['empresa_name'] . '-' . $checkName->getRowCount();
                endif;

                $sendCapa = new Upload('uploads/');
                $sendCapa->Image($data['empresa_capa'], $data['empresa_name'], 578, 'empresas');
                $data['empresa_capa'] = $sendCapa->getResult();

                $cadasta = new Create;
                $cadasta->ExeCreate("app_empresas", $data);

                if ($cadasta->getResult()):
                    header('Location: ' . HOME . '/cadastra-empresa/create');
                endif;

            endif;
        endif;
        ?>

        <form name="PostForm" action="" method="post" enctype="multipart/form-data">

            <label class="label">
                <span class="field">Logo da empresa: <sup>Exatamente 578x288px (JPG ou PNG)</sup></span>
                <input type="file" name="empresa_capa" />
            </label>

            <label class="label">
                <span class="field">Nome da Empresa:</span>
                <input type="text" name="empresa_title" value="<?php if (isset($data['empresa_title'])) echo htmlspecialchars($data['empresa_title']); ?>" />
            </label>

            <label class="label">
                <span class="field">Ramo de atividade:</span>
                <input type="text" name="empresa_ramo" value="<?php if (isset($data['empresa_ramo'])) echo htmlspecialchars($data['empresa_ramo']); ?>" />
            </label>

            <label class="label">
                <span class="field">Sobre a empresa:</span>
                <textarea name="empresa_sobre" rows="3"><?php if (isset($data['empresa_sobre'])) echo htmlspecialchars($data['empresa_sobre']); ?></textarea>
            </label>

            <div class="label_line">
                <label class="label_medium">
                    <span class="field">Site da Empresa:</span>
                    <input type="url" placeholder="http://www.upinside.com.br" name="empresa_site" value="<?php if (isset($data['empresa_site'])) echo htmlspecialchars($data['empresa_site']); ?>" />
                </label>

                <label class="label_medium">
                    <span class="field">Facebook Page:</span>
                    <input type="text" placeholder="upinside" name="empresa_facebook" value="<?php if (isset($data['empresa_facebook'])) echo htmlspecialchars($data['empresa_facebook']); ?>" />
                </label>                
            </div><!-- line -->

            <label class="label">
                <span class="field">Nome da rua / Número:</span>
                <input type="text" placeholder="Rua Nome da Rua / 1287" name="empresa_endereco" value="<?php if (isset($data['empresa_endereco'])) echo htmlspecialchars($data['empresa_endereco']); ?>" />
            </label>            

            <div class="label_line">
                <label class="label_small">
                    <span class="field">Estado UF:</span>
                    <select class="j_loadstate" name="empresa_uf">
                        <option value="" selected> Selecione o estado </option>
                        <?php
                        $readState = new Read;
                        $readState->ExeRead("app_estados", "ORDER BY estado_nome ASC");
                        foreach ($readState->getResult() as $estado):
                            extract($estado);
                            echo "<option value=\"{$estado_id}\" ";
                            if (isset($data['empresa_uf']) && $data['empresa_uf'] == $estado_id): echo 'selected';
                            endif;
                            echo "> {$estado_uf} / {$estado_nome} </option>";
                        endforeach;
                        ?>                        
                    </select>
                </label>

                <label class="label_small">
                    <span class="field">Cidade:</span>
                    <select class="j_loadcity" name="empresa_cidade">
                        <?php if (!isset($data['empresa_cidade'])): ?>
                            <option value="" selected disabled> Selecione antes um estado </option>
                            <?php
                        else:
                            $City = new Read;
                            $City->ExeRead("app_cidades", "WHERE estado_id = :uf ORDER BY cidade_nome ASC", "uf={$data['empresa_uf']}");
                            if ($City->getRowCount()):
                                foreach ($City->getResult() as $cidade):
                                    extract($cidade);
                                    echo "<option value=\"{$cidade_id}\" ";
                                    if (isset($data['empresa_cidade']) && $data['empresa_cidade'] == $cidade_id):
                                        echo "selected";
                                    endif;
                                    echo "> {$cidade_nome} </option>";
                                endforeach;
                            endif;
                        endif;
                        ?>
                    </select>
                </label>

                <label class="label_small">
                    <span class="field">Indicação:</span>
                    <select name="empresa_categoria">
                        <option value="" selected> Indique a empresa como </option>
                        <option value="onde-comer" <?php if (isset($data['empresa_categoria']) && $data['empresa_categoria'] == 'onde-comer') echo 'selected'; ?>> Onde Comer </option>
                        <option value="onde-ficar" <?php if (isset($data['empresa_categoria']) && $data['empresa_categoria'] == 'onde-ficar') echo 'selected'; ?>> Onde Ficar </option>
                        <option value="onde-comprar" <?php if (isset($data['empresa_categoria']) && $data['empresa_categoria'] == 'onde-comprar') echo 'selected'; ?>> Onde Comprar </option>
                        <option value="onde-se-divertir" <?php if (isset($data['empresa_categoria']) && $data['empresa_categoria'] == 'onde-se-divertir') echo 'selected'; ?>> Onde se Divertir </option>
                    </select>
                </label>
            </div><!--/line-->

            <div class="gbform"></div>

            <input type="submit" class="btn green" value="Cadastrar Empresa" name="SendPostForm" />

        </form>

        <div id="j_ajaxident" class="<?= HOME . "/_cdn/ajax/" ?>"></div>

    </article>

    <div class="clear"></div>
</div><!--/ site container -->