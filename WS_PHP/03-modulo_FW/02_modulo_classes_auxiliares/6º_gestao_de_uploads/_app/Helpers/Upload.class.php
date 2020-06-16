<?php

/**
 * Upload.class [ HELPER ]
 * Responsável por executar upload de imagens, arquivos e mídias no sistema.
 *
 * @copyright (c) 2018, Cristovão Lira Braga UPINSIDE TECNOLOGIA
 */
class Upload {

    private $File;
    private $Name;
    private $Send;
    //** IMAGE UPLOAD */
    private $Width;
    private $Image;
    //** RESULTSET */
    private $Result;
    private $Error;
    //** DIRETÓRIOS */
    private $Folder;
    private static $BaseDir;

    function __construct($BaseDir = null) {
        self::$BaseDir = ((string) $BaseDir ? $BaseDir : '../uploads/');
        if (!file_exists(self::$BaseDir) && !is_dir(self::$BaseDir)):
            mkdir(self::$BaseDir, 0777);
        endif;
    }

    public function Image(array $Image, $Name = null, $Width = null, $Folder = null) {
        $this->File = $Image;
        $this->Name = ((string) $Name ? $Name : substr($Image['name'], 0, strrpos($Image['name'], '.')));
        $this->Width = ((int) $Width ? $Width : 1024);
        $this->Folder = ((string) $Folder ? $Folder : 'images');

        $this->CheckFolder($this->Folder);
        $this->setFileName();
    }

    function getResult() {
        return $this->Result;
    }

    function getError() {
        return $this->Error;
    }

    //PRIVATES
    private function CheckFolder($Folder) {
        list($Y, $m) = explode('/', date('Y/m'));
        $this->CreateFolder("{$Folder}");
        $this->CreateFolder("{$Folder}/{$Y}");
        $this->CreateFolder("{$Folder}/{$Y}/{$m}/");
        $this->Send = "{$Folder}/{$Y}/{$m}/";
    }

    private function CreateFolder($Folder) {
        if (!file_exists(self::$BaseDir . $Folder) && !is_dir(self::$BaseDir . $Folder)):
            mkdir(self::$BaseDir . $Folder, 0777);
        endif;
    }

    private function setFileName() {
        $FileName = Check::Name($this->Name) . strrchr($this->File['name'], '.');
        if (file_exists(self::$BaseDir . $this->Send . $FileName)):
            $FileName = Check::Name($this->Name) . '-' . time() . strrchr($this->File['name'], '.');
        endif;
        $this->Name = $FileName;
    }

}
