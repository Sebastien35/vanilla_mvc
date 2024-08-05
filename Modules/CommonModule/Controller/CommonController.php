<?php

class CommonController  {
    public $layout;
    public $module;
    public $view;
    public $formError;
    public $cache;

    public function __construct(){
        
        $this->layout                = array();
        $this->module                = '';
        $this->view                  = array();
        $this->formError             = array();
        $this->layout['description'] = '';
        $this->view['formDatas']     = '';
        $this->view['showErrorMsg']  = '';
        $this->view['formElError']   = array();
        $this->view['h1']            = true;
        $this->layout['formOk']      = 0;

           
    }

    public function wsResponse($code_retour, $resultat)
    {
        echo json_encode([
            'code_retour' => $code_retour,
            'resultat'    => $resultat ?? []
        ]);
    }

    public function setViewInLayout($view){
            require_once 'layouts/header.php';
            extract($this->view);
            require_once $view;
            require_once 'layouts/footer.php';
    }

    
}