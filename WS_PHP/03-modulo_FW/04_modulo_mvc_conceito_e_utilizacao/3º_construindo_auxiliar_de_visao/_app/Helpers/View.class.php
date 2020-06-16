<?php

/**
 * View.class [ HELPER ]
 * Responsável por carregar o template, povoar e exibir a view, povoar e incluir arquivos PHP no sistema!
 * Arquitetura MVC
 * 
 * @copyright (c) 2018, Cristovão Lira Braga UPINSIDE TREINAMENTOS
 */
class View {
    
    private static $Date;
    private static $Keys;
    private static $Values;
    private static $Template;
    
    public static function Load($Template){
        self::$Template = (string) $Template;
        self::$Template = file_get_contents(self::$Template . '.tpl.html');
    }
    
    public static function Show(array $Date){
        self::setKeys($Date);
        self::setValues();
        self::ShowView();
    }
    
    public static function Request($File, array $Date){
        extract($Date);
        require("{$File}.inc.php");
    }
    
    /**
     * ******************************
     * *********** PRIVATE **********
     * ******************************
     */
    
    private static function setKeys($Date){
        self::$Date = $Date;
        self::$Keys = explode('&', '#' . implode("#&#", array_keys(self::$Date)) . '#');
    }
    
    private static function setValues(){
        self::$Values = array_values(self::$Date);
    }
    
    private static function ShowView(){
        echo str_replace(self::$Keys, self::$Values, self::$Template);
    }
}
