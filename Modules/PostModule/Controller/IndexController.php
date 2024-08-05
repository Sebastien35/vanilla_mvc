<?php
class IndexController extends CommonController{

    public function __construct(){
        parent::__construct();
        $this->module = 'PostModule';
    }


    public function exerciceAction(){
        $this->layout['title']       = "Poster un message";
        $this->layout['description'] = '';
        $this->layout['canonical']   = WEBSITE_URL . '/post';
        $this->layout['selected']    = 'post';

        parent::setViewInLayout('modules/' . $this->module .'/views/post.php');
    }



}