<?php

class ResolucaoDeEscopo{
    
    public $Produto;
    public $Valor;
    public static $Vendas;
    public static $Lucros;
    
    function __construct($Produto, $Valor) {
        $this->Produto = $Produto;
        $this->Valor = $Valor;
    }
    
    public function Vender() {
        self::$Vendas += 1;
        self::$Lucros = $this->Valor * self::$Vendas;
        echo "{$this->Produto} vendido por R$ {$this->Real($this->Valor)}<br>";
    }
    
    public static function Relatorio() {
        echo "<hr>";
        echo "Este produto vendeu " . self::$Vendas . " unidade(s). Total R$ " . self::$Lucros;
        echo "<hr>";
    }
    
    public function Real($Valor) {
        return "R$ " . number_format($Valor, '2', '.', ',');
    }
    
}
