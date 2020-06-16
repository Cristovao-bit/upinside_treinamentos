<?php
/**
 * View.class [ HELPER ]
 * Responsável por carregar o template, povoar e exibir a view, povoar e incluir arquivos PHP no sistema!
 * Arquitetura MVC
 * 
 * @copyright (c) 2018, Cristovão Lira Braga UPINSIDE TREINAMENTOS
 */
class View {
    
    private $Date;
    private $Keys;
    private $Values;
    private $Template;
    
    /*
     * <b>Carregar Template View:</b> Dentro da pasta do seu template, crie a pasta_tpl e armazene as
     * template_views.tpl.html. Depois basta informar o APENAS O NOME do arquivo para carregar o mesmo!
     * @param STRING $Template = Nome_do_arquivo   
     */
    public function Load($Template){
        $this->Template = REQUIRE_PATH . DIRECTORY_SEPARATOR . '_tpl' . DIRECTORY_SEPARATOR . (string) $Template;
        $this->Template = file_get_contents($this->Template . '.tpl.html');
        return $this->Template;
    }
    
    /*
     * <b>Exibir Template View:</b> Execute um foreach com um getResult() do seu model e informe o envelope
     * neste metodo para configurar a view. Não esqueça de carregar a view acima do foreach com o método Load.
     * @param array $Data = Array com dados obtidos
     * @param View $View = Template carregado pelo mÃ©todo Load()
     */
    public function Show(array $Date, $View){
        $this->setKeys($Date);
        $this->setValues();
        $this->ShowView($View);
    }
    
    public function Request($File, array $Date){
        extract($Date);
        require("{$File}.inc.php");
    }
    
    /**
     * ******************************
     * *********** PRIVATE **********
     * ******************************
     */
    
    private function setKeys($Date){
        $this->Date = $Date;
        $this->Date['HOME'] = HOME;
        $this->Keys = explode('&', '#' . implode("#&#", array_keys($this->Date)) . '#');
        $this->Keys[] = '#HOME#';
    }
    
    private function setValues(){
        $this->Values = array_values($this->Date);
    }
    
    private function ShowView($View){
        $this->Template = $View;
        echo str_replace($this->Keys, $this->Values, $this->Template);
    }
}
