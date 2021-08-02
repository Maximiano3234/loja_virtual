<?php
class Language {

    private $l;

    public function __construct() {
        global $config;
        $this->l = $config['default_lang'];

        if(!empyt($_SESSION['lang']) && file_exists('lang/'.$_SESSION['lang'].'.ini')) {
            $this->l = $_SESSION['lang'];
        }
           
    }
}