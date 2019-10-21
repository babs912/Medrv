<?php

class Controller
{
    public $layout;
    private $rendered;

    public function __construct($layout = null)
    {
        
            $this->layout = $layout;
        
    }

    public function render($view, array $vars = null)
    {

        if ($this->rendered) {
            return false;
        }

        if ($vars != null) {
            extract($vars);
        }
        $file = ROOT . DS . 'view' . DS . $view . '.php';
           if($this->layout != null){
            ob_start();
            require($file);
            $content_for_base = ob_get_clean();
    
            require ROOT . DS . 'view' .  DS . $this->layout . '.php';
           }else{
               require $file;
           }
            
        
        $this->rendered = true;
    }
}
