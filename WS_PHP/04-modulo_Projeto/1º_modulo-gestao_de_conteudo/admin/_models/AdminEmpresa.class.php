<?php

/**
 * AdminEmpresa.class [ MODEL AMDMIN ]
 * Responsável por gerenciar as empresas no Admin do sistema!
 *
 * @copyright (c) 2018, Cristovão Lira Braga UPINSIDE TECNOLOGIA
 */
class AdminEmpresa {

    private $Data;
    private $Empresa;
    private $Error;
    private $Result;

    //Nome da tabela no banco de dados!
    const Entity = 'app_empresas';

    /**
     * <b>Cadastrar a Empresa:</b> Envelope os dados da empresa em um array atribuitivo e execute esse mÃ©todo
     * para cadastrar a mesma no banco.
     * @param ARRAY $Data = Atribuitivo
     */
    public function ExeCreate(array $Data) {
        $this->Data = $Data;
        if (in_array('', $this->Data)):
            $this->Error = ["<b>Erro ao cadastrar:</b> Para cadastrar uma empresa, preencha todos os campos!", WS_ALERT];
            $this->Result = false;
        else:
            $this->setData();
            $this->setName();
            $this->sendCapa();
            $this->Create();
        endif;
    }

    public function ExeUpdate($EmpresaId, array $Data) {
        $this->Empresa = (int) $EmpresaId;
        $this->Data = $Data;
        if (in_array('', $this->Data)):
            $this->Error = ["<b>Erro ao Atualizar:</b> Para atualizar <b>{$this->Data['empresa_title']}</b>, preencha todos os campos ( Capa não precisa ser enviada! )", WS_ALERT];
            $this->Result = false;
        else:
            $this->setData();
            $this->setName();
            $this->sendCapa();
            $this->Update();
        endif;
    }

    /**
     * <b>Deleta Empresas:</b> Informe o ID da empresa a ser removida para que esse método realize uma
     * checagem excluinto todos os dados nessessarios e removendo a empresa do banco!
     * @param INT $EmpresaId = Id da empresa!
     */
    public function ExeDelete($EmpresaId) {
        $this->Empresa = (int) $EmpresaId;
        $ReadEmp = new Read;
        $ReadEmp->ExeRead(self::Entity, "WHERE empresa_id = :emp", "emp={$this->Empresa}");
        if (!$ReadEmp->getResult()):
            $this->Error = ["A empresa que você tentou deletar não existe no sistema!", WS_ERROR];
            $this->Result = false;
        else:
            $EmpDelete = $ReadEmp->getResult()[0];
            if (file_exists('../uploads/' . $EmpDelete['empresa_capa']) && !is_dir('../uploads/' . $EmpDelete['empresa_capa'])):
                unlink('../uploads/' . $EmpDelete['empresa_capa']);
            endif;

            $deleta = new Delete;
            $deleta->ExeDelete(self::Entity, "WHERE empresa_id = :emp", "emp={$this->Empresa}");

            $this->Error = ["A empresa <b>{$EmpDelete['empresa_title']}</b> foi removida com sucesso do sistema!", WS_ACCEPT];
            $this->Result = true;
        endif;
    }

    /**
     * <b>Ativa/Inativa Empresa:</b> Informe o ID da empresa e o status e um status sendo 1 para ativo e 0 para
     * rascunho. Esse método ativa e inativa as empresas!
     * @param INT $PostId = Id do post
     * @param STRING $PostStatus = 1 para ativo, 0 para inativo
     */
    //Obs.: Aqui posso usar um ajax pra deixar mais legal!
    public function ExeStatus($EmpresaId, $EmpresaStatus) {
        $this->Empresa = (int) $EmpresaId;
        $this->Data['empresa_status'] = (string) $EmpresaStatus;
        $Update = new Update;
        $Update->ExeUpdate(self::Entity, $this->Data, "WHERE empresa_id = :id", "id={$this->Empresa}");
    }

    public function getResult() {
        return $this->Result;
    }

    public function getError() {
        return $this->Error;
    }

    /*
     * ****************************************
     * ********** PRIVATE METHODS *************
     * ****************************************
     */

    private function setData() {
        $Capa = $this->Data['empresa_capa'];
        $Content = $this->Data['empresa_sobre'];
        unset($this->Data['empresa_capa'], $this->Data['empresa_sobre']);

        $this->Data = array_map('strip_tags', $this->Data);
        $this->Data = array_map('trim', $this->Data);
        
        $this->Data['empresa_name'] = Check::Name($this->Data['empresa_title']);
        $this->Data['empresa_date'] = date('Y-m-d H:i:s');
        $this->Data['empresa_capa'] = $Capa;
        $this->Data['empresa_sobre'] = $Content;
    }

    private function setName() {
        $Where = (isset($this->Empresa) ? "empresa_id != {$this->Empresa} AND" : '');

        $readName = new Read;
        $readName->ExeRead(self::Entity, "WHERE {$Where} empresa_title = :t", "t={$this->Data['empresa_title']}");
        if ($readName->getResult()):
            $this->Data['empresa_name'] = $this->Data['empresa_name'] . '-' . $readName->getRowCount();
        endif;
    }

    private function sendCapa() {
        if (!empty($this->Data['empresa_capa']['tmp_name'])):
            list($w, $h) = getimagesize($this->Data['empresa_capa']['tmp_name']);

            //Não apresenta mensagem de erro, Pesquisar para saber com resolver isso!
            if ($w != '578' || $h != '288'):
                $this->Error = ['<b>Capa inválida:</b> A Capa da empresa deve ter exatamente 578x288px do tipo .JPG, .PNG ou .GIF!', WS_INFOR];
                $this->Result = false;
            else:
                $this->checkCover();
                $Upload = new Upload;
                $Upload->Image($this->Data['empresa_capa'], $this->Data['empresa_name'], 578, 'empresas');
                if ($Upload->getError()):
                    $this->Error = $Upload->getError();
                    $this->Result = false;
                else:
                    $this->Data['empresa_capa'] = $Upload->getResult();
                    $this->Result = true;
                endif;
            endif;
        endif;
    }

    private function checkCover() {
        $readCapa = new Read;
        $readCapa->FullRead("SELECT empresa_capa FROM app_empresas WHERE empresa_id = :id", "id={$this->Empresa}");

        if ($readCapa->getRowCount()):
            $delCapa = $readCapa->getResult()[0]['empresa_capa'];
            if (file_exists("../uploads/{$delCapa}") && !is_dir("../uploads/{$delCapa}")):
                unlink("../uploads/{$delCapa}");
            endif;
        endif;
    }

    private function Create() {
        $Create = new Create;
        $Create->ExeCreate(self::Entity, $this->Data);
        if ($Create->getResult()):
            $this->Result = $Create->getResult();
            $this->Error = ["A empresa <b>{$this->Data['empresa_title']}</b> foi cadastrada com sucesso no sistema!", WS_ACCEPT];
        endif;
    }

    //Atualiza a empresa no banco!
    private function Update() {
        $Update = new Update;
        $Update->ExeUpdate(self::Entity, $this->Data, "WHERE empresa_id = :id", "id={$this->Empresa}");
        if ($Update->getRowCount() >= 1):
            $this->Error = ["A Empresa <b>{$this->Data['empresa_title']}</b> foi atualizada com sucesso!", WS_ACCEPT];
            $this->Result = true;
        endif;
    }

}
