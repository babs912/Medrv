<?php

class Dispatcher
{
    public $request;


    public function __construct()
    {
        $this->request = new Request();
        Router::parse($this->request, $this->request->url);
        $controller =  $this->loadController();
        if (!in_array($this->request->action, get_class_methods($controller))) {
            $this->error('l\'action ' . $this->request->action . ' n\'existe pas dans le controlleur ' . $this->request->controller . '');
        } else {
            call_user_func_array([$controller, $this->request->action], $this->request->params);
        }
    }

    public function error($message)
    {
        $controller = new Controller();
        $controller->render('error/e404', ['message' => $message]);
    }

    public function loadController()
    {
        $name =  ucfirst($this->request->controller) . 'Controller';
        $file = ROOT . DS . 'controller' . DS . $name . '.php';
        require($file);
        return new $name();
    }
}
