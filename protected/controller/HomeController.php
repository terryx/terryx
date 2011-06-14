<?php

class HomeController extends DooController{
    
    public function index(){
       $this->renderc('home');
    }
    
     public function login(){
        $this->renderc('login');
    }
    
     public function contact(){
        $this->renderc('contact');
    }
    
     public function about(){
        $this->renderc('about');
    }
    
}
?>
