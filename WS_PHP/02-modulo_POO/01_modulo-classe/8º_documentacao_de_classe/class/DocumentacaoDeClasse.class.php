<?php

/**
 * <b>DocumentacaoDeClasse:</b>
 * Essa classe foi criada para mostrar a interação de objetos. Logo depois replicamos ela para ver sobre
 * a documentação de classes com PHPDoc.
 * 
 * @copyright (c) 2018, Cristovão L. Braga UPINSIDE TECNOLOGIA
 */

class DocumentacaoDeClasse{
    
    /** @var string Nome da Empresa */
    public $Empresa;
    
    /** 
     * Este atributo é auto gerido pela classe e incrementa o número de funcionário!
     * @var int Número de funcionários 
     */
    public $Setores;
    
    /** @var InteracaoClasse Objeto vindo da classe InteracaoClasse */
    public $Funcionario;   
    
    //constrói a classe requisitando o nome da empresa
    function __construct($Empresa) {
        $this->Empresa = $Empresa;
        $this->Setores = 0;
    }

    /**
     * <b>Contratar funcionário:</b> Informe um objeto da classe InteracaoClasse, o cargo e o salário do funcionário
     * a ser contratado!
     * @param Object $Funcionario = Objeto da classe InteracaoClasse
     * @param string $Cargo =  Profissão ou cargo a ocupar
     * @param float $Salario = Salário do funcionário
     */
    public function Contratar($Funcionario, $Cargo, $Salario) {
        $this->Funcionario = (Object) $Funcionario;
        $this->Funcionario->Trabalhar($this->Empresa, $Salario, $Cargo);
        $this->Setores += 1;
    }
    
    /**
     * <b>Pagar e obter salário:</b>Ao executar esse método o salário do funcionário será pago. Você ainda podera 
     * da um echo neste mesmo para visualizar o salário!
     * @return float Retorna o salário do contratado!
     */
    public function Pagar() {
        $this->Funcionario->Receber($this->Funcionario->Salario);
        return $this->Funcionario->Salario;
    }
    
    /**
     * 
     * @param string $Cargo =  Profissão ou cargo a ocupar
     * @param float $Salario = Salário do funcionário
     */
    public function Promover($Cargo, $Salario = null) {
        $this->Funcionario->Profissao = $Cargo;
        if($Salario):
        $this->Funcionario->Salario = $Salario;
        endif;
    }
    
    /**
     * 
     * @param int $Recisao = dinherio a receber após ser demitido
     */
    public function Demitir($Recisao) {
        $this->Funcionario->Receber($Recisao);
        $this->Funcionario->Empresa = null;
        $this->Funcionario->Salario = null;
        $this->Setores -= 1;
    }
    
    /**
     * 
     * @param Object $Funcionario = Objeto da classe InteracaoClasse
     */
    public function Funcionarios($Funcionario) {
        $this->Funcionarios = (object) $Funcionario;
    }
            
    public function ver() {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
    
}
