<?php

class Controller
{
    public $layout = 'base';
    private $rendered;

    public function render($view, array $vars = null)
    {

        if ($this->rendered) {
            return false;
        }

        if ($vars != null) {
            extract($vars);
        }
        $file = ROOT . DS . 'view' . DS . $view . '.php';

            ob_start();
            require($file);
            $content_for_base = ob_get_clean();
    
            require ROOT . DS . 'view' .  DS . $this->layout . '.php';
        
        $this->rendered = true;
    }
}
