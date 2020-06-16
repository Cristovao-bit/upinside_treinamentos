<?php
/**
 * AdminPost.class [ MODEL ADMIN ] 
 * Responsável por gerenciar os posts no admin do sistema!
 *
 * @copyright (c) 2018, Cristovão Lira Braga UPINSIDE TECNOLOGIA
 */
class AdminPost {

    private $Data;
    private $Post;
    private $Error;
    private $Result;

    //Nome da tabela no banco de dados
    const Entity = 'ws_posts';

    /**
     * <b>Cadastrar o Post:</b> Envelope os dados do post em um array atribuitivo e execute esse método
     * para cadastrar o post. Envia a capa automaticamente!
     * @param ARRAY $Data = Atribuitivo
     */
    public function ExeCreate(array $Data) {
        $this->Data = $Data;

        if (in_array('', $this->Data)):
            $this->Error = ['<b>Erro ao cadastrar:</b> Para criar um post, favor preencha todos os campos!', WS_ALERT];
            $this->Result = false;
        else:
            $this->setData();
            $this->setName();

            //Código de envio da capa para a pasta
            if ($this->Data['post_cover']):
                $upload = new Upload;
                $upload->Image($this->Data['post_cover'], $this->Data['post_name'], 120, 'posts');
            endif;

            if (isset($upload) && $upload->getResult()):
                $this->Data['post_cover'] = $upload->getResult();
                $this->Create();
            else:
                $this->Data['post_cover'] = null;
                $_SESSION['errCapa'] = "<b>ERRO AO ENVIAR CAPA:</b> Tipo de arquivo inválido, envie imagens JPG e PNG!";
                $this->Create();
            endif;
        endif;
    }

    /**
     * <b>Atualizar Post:</b> Envelope os dados em um array atribuitivo e informe o id de um
     * post para atualiza-lo na tabela!
     * @param INT $PostId = Id do post
     * @param ARRAY $Data = Atribuitivo
     */
    public function ExeUpdate($PostId, array $Data) {
        $this->Post = (int) $PostId;
        $this->Data = $Data;

        if (in_array('', $this->Data)):
            $this->Error = ['Para atualizar este post, preencha todos os campos ( Capa não precisa ser enviada! )', WS_ALERT];
            $this->Result = false;
        else:
            $this->setData();
            $this->setName();

            if (is_array($this->Data['post_cover'])):
                $readCapa = new Read;
                $readCapa->ExeRead(self::Entity, "WHERE post_id = :post", "post={$this->Post}");
                $capa = '../uploads/' . $readCapa->getResult()[0]['post_cover'];
                if (file_exists($capa) && !is_dir($capa)):
                    unlink($capa);
                endif;

                $uploadCapa = new Upload;
                $uploadCapa->Image($this->Data['post_cover'], $this->Data['post_name']);
            endif;

            if (isset($uploadCapa) && $uploadCapa->getResult()):
                $this->Data['post_cover'] = $uploadCapa->getResult();
                $this->Update();
            else:
                unset($this->Data['post_cover']);
                if(!empty($uploadCapa) && $uploadCapa->getError()):
                    WSErro("<b>ERRO AO ENVIAR CAPA:</b> " . $uploadCapa->getError(), E_USER_WARNING);
                endif;
                $this->Update();
            endif;
        endif;
    }

    /**
     * <b>Deleta Post:</b> Informe o ID do post a ser removido para que esse método realize uma checagem de
     * pastas e galerias excluindo todos os dados necessários
     * @param INT $PostId = Id do post
     */
    public function ExeDelete($PostId) {
        $this->Post = (int) $PostId;

        $ReadPost = new Read;
        $ReadPost->ExeRead(self::Entity, "WHERE post_id = :post", "post={$this->Post}");
        if (!$ReadPost->getResult()):
            $this->Error = ["O post que você tentou deletar nao existe no sistema!", WS_ERROR];
            $this->Result = false;
        else:
            $PostDelete = $ReadPost->getResult()[0];
            if (file_exists('../uploads/' . $PostDelete['post_cover']) && !is_dir('../uploads/' . $PostDelete['post_cover'])):
                unlink('../uploads/' . $PostDelete['post_cover']);
            endif;

            $readGallery = new Read;
            $readGallery->ExeRead("ws_posts_gallery", "WHERE post_id = :id", "id={$this->Post}");
            if ($readGallery->getResult()):
                foreach ($readGallery->getResult() as $gbdel):
                    if (file_exists('../uploads/' . $gbdel['gallery_image']) && !is_dir('../uploads/' . $gbdel['gallery_image'])):
                        unlink('../uploads/' . $gbdel['gallery_image']);
                    endif;
                endforeach;
            endif;

            $deleta = new Delete;
            $deleta->ExeDelete("ws_posts_gallery", "WHERE post_id = :gbpost", "gbpost={$this->Post}");
            $deleta->ExeDelete(self::Entity, "WHERE post_id = :postid", "postid={$this->Post}");

            $this->Error = ["O post <b>{$PostDelete['post_title']}</b> foi removido com sucesso do sistema!", WS_ACCEPT];
            $this->Result = true;
        endif;
    }

    public function ExeStatus($PostId, $PostStatus) {
        $this->Post = (int) $PostId;
        $this->Data['post_status'] = (string) $PostStatus;
        $Update = new Update;
        $Update->ExeUpdate(self::Entity, $this->Data, "WHERE post_id = :id", "id={$this->Post}");
    }

    /**
     * <b>Enviar Galeria:</b> Envelope um $_FILES de um input multiple e envie junto a um postID para
     * o upload e o cadastro de galerias do artigo!
     * @param ARRAY $Files = Envie um $_FILES multiple 
     * @param INT $PostId = Informe o ID do post
     */
    public function gbSend(array $Images, $PostId) {
        $this->Post = (int) $PostId;
        $this->Data = $Images;

        $ImageName = new Read;
        $ImageName->ExeRead(self::Entity, "WHERE post_id = :id", "id={$this->Post}");
        if (!$ImageName->getResult()):
            $this->Error = ["Erro ao enviar galeria. O índice {$this->Post} não foi encontrado no banco!", WS_ERROR];
            $this->Result = false;
        else:
            $ImageName = $ImageName->getResult()[0]['post_name'];

            $gbFiles = array();
            $gbCount = count($this->Data['tmp_name']);
            $gbKeys = array_keys($this->Data);

            for ($gb = 0; $gb < $gbCount; $gb++):
                foreach ($gbKeys as $Keys):
                    $gbFiles[$gb][$Keys] = $this->Data[$Keys][$gb];
                endforeach;
            endfor;

            $gbSend = new Upload;
            $i = 0;
            $u = 0;

            foreach ($gbFiles as $gbUpload):
                $i++;
                $ImgName = "{$ImageName}-gb-{$this->Post}-" . (substr(md5(time() + $i), 0, 5));
                //Código de envio da galeria para a pasta!
                $gbSend->Image($gbUpload, $ImgName, 120, 'posts');

                if ($gbSend->getResult()):
                    $gbImage = $gbSend->getResult();
                    $gbCreate = ['post_id' => $this->Post, "gallery_image" => $gbImage, "gallery_date" => date('Y-m-d H:i:s')];
                    $insertGb = new Create;
                    $insertGb->ExeCreate("ws_posts_gallery", $gbCreate);
                    $u++;
                endif;
            endforeach;

            if ($u > 1):
                $this->Error = ["Galeria Atualizada: Foram enviadas {$u} imagens para galeria deste post!", WS_ACCEPT];
                $this->Result = true;
            endif;
        endif;
    }

    public function gbRemove($GbImageId) {
        $this->Post = (int) $GbImageId;
        $readGb = new Read;
        $readGb->ExeRead("ws_posts_gallery", "WHERE gallery_id = :gb", "gb={$this->Post}");
        if ($readGb->getResult()):
            $Imagem = '../uploads/' . $readGb->getResult()[0]['gallery_image'];
            if (file_exists($Imagem) && !is_dir($Imagem)):
                unlink($Imagem);
            endif;

            $Deleta = new Delete;
            $Deleta->ExeDelete("ws_posts_gallery", "WHERE gallery_id = :id", "id={$this->Post}");
            if ($Deleta->getResult()):
                $this->Error = ["A imagem foi removida com sucesso da galeria!", WS_ACCEPT];
                $this->Result = true;
            endif;
        endif;
    }

    /**
     * <b>Verificar Cadastro:</b> Retorna ID do registro se o cadastro for efetuado ou FALSE se não.
     * Para verificar erros execute um getError();
     * @return BOOL $Var = InsertID or false
     */
    function getResult() {
        return $this->Result;
    }

    /**
     * <b>Obter Erro:</b> Retorna um array associativo com uma mensagem e o tipo de erro.
     * @return ARRAY $Error = Array associativo com o erro
     */
    function getError() {
        return $this->Error;
    }

    /**
     * ****************************************
     * *********** PRIVATE METHODS ************
     * **************************************** 
     */
    //Valida e cria os dados para realizar o cadastro
    private function setData() {
        $Cover = $this->Data['post_cover'];
        $Content = $this->Data['post_content'];
        unset($this->Data['post_cover'], $this->Data['post_content']);

        $this->Data = array_map('strip_tags', $this->Data);
        $this->Data = array_map('trim', $this->Data);

        $this->Data['post_name'] = Check::Name($this->Data['post_title']);
        $this->Data['post_date'] = Check::Date($this->Data['post_date']);
        $this->Data['post_type'] = 'post';
        $this->Data['post_cover'] = $Cover;
        $this->Data['post_content'] = $Content;
        $this->Data['post_cat_parent'] = $this->getCatParent();
    }

    //Obtem o ID da categoria PAI
    private function getCatParent() {
        $rCat = new Read;
        $rCat->ExeRead("ws_categories", "WHERE category_id = :id", "id={$this->Data['post_category']}");
        if ($rCat->getResult()):
            return $rCat->getResult()[0]['category_parent'];
        else:
            return null;
        endif;
    }

    //Verifica o NAME post. Se existir adiciona um pós-fix -Count
    private function setName() {
        $Where = (isset($this->Post) ? "post_id != {$this->Post} AND" : '' );
        $readName = new Read;
        $readName->ExeRead(self::Entity, "WHERE {$Where} post_title = :t", "t={$this->Data['post_title']}");
        if ($readName->getResult()):
            $this->Data['post_name'] = $this->Data['post_name'] . '-' . $readName->getRowCount();
        endif;
    }

    private function Create() {
        $cadastra = new Create;
        $cadastra->ExeCreate(self::Entity, $this->Data);
        if ($cadastra->getResult()):
            $this->Error = ["O post {$this->Data['post_title']} foi cadastrado com sucesso no sistema!", WS_ACCEPT];
            $this->Result = $cadastra->getResult();
        endif;
    }

    private function Update() {
        $Update = new Update;
        $Update->ExeUpdate(self::Entity, $this->Data, "WHERE post_id = :id", "id={$this->Post}");
        if ($Update->getResult()):
            $this->Error = ["O post <b>{$this->Data['post_title']}</b> foi atualizado com sucesso no sistema!", WS_ACCEPT];
            $this->Result = true;
        endif;
    }

}
