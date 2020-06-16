<?php

class ClassesObjetos {
    
    //ATRIBUTOS DA CLASSE
    var $Classe;
    var $Funcao;
    
    //METODOS DA CLASSE
    function getClass($Class, $Funcao) {
        //PARAMETOS DA CLASSE
        echo "<p>A classe {$Class} serve para {$Funcao}";
    }    
    
    //METODOS DA CLASSE
    function verClass() {
        //PARAMETOS DA CLASSE
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
    
}
