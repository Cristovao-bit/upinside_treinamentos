<?php

/**
 * Pager.class [ HELPERS ]
 * Realização a gestão e a paginação de resultados no sistema!
 *
 * @copyright (c) 2018, Cristovão Lira Braga UPINSIDE TECNOLOGIA
 */
class Pager {
    
    /** DEFINE O PAGER */
    private $Page;
    private $Limit;
    private $Offset;
    
    /** REALIZA A LEITURA */
    private $Tabela;
    private $Termos;
    private $Places;

    /** DEFINE O PAGINATOR */
    private $Rows;
    private $Link;
    private $MaxLinks;
    private $First;
    private $Last;

    /** RENDERIZA O PAGINATOR */
    private $Paginator;
    
    function __construct($Link, $First = null, $Last = null, $MaxLinks = null) {
        $this->Link = (string) $Link;
        $this->First = ( (string) $First ? $First : 'Primeira Página');
        $this->Last = ( (string) $Last ? $Last : 'Última Página');
        $this->MaxLinks = ((int) $MaxLinks ? $MaxLinks : 5);
    }
    
    public function ExePager($Page, $Limit) {
        $this->Page = ((int) $Page ? $Page : 1);
        $this->Limit = (int) $Limit;
        $this->Offset = ( $this->Page * $this->Limit ) - $this->Limit;
    }
    
    public function ReturnPage(){
        if($this->Page > 1):
            $nPage = $this->Page - 1;
            header("Location: {$this->Link}{$nPage}");
        endif;
    }
    
    public function getPage() {
        return $this->Page;
    }

    public function getLimit() {
        return $this->Limit;
    }

    public function getOffset() {
        return $this->Offset;
    }
    
    public function ExePaginator($Tabela, $Termos = null, $ParseString = null) {
        $this->Tabela = (string) $Tabela;
        $this->Termos = (string) $Termos;
        $this->Places = (string) $ParseString;
        $this->getSyntax();
    }
    
    public function getPaginator(){
        return $this->Paginator;
    }

}
