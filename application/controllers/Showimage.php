<?php

class Showimage extends CI_Controller {
    
    function __construct() {
        parent::__construct();
    }
    
    function index($username='')
    {
        //
        
        
        $file = 'public/img/mini.jpg';
        $type = 'image/jpeg';
        header('Content-Type:'.$type);
        header('Content-Length: ' . filesize($file));
        readfile($file);
    }
}
