<?php
class Controller
{
    public function __construct()
    {
        $this->session = new session();
        $this->load = new class {
            public function view($viewName, $data core = [])
            {
                if (!empty($data)) extract($data);
                include './view/' . $viewName . '.php'; core
            }

            public function model($modelName)
            {
                require_once './model/' . $modelName . '.php';
                return new $modelName();
            }
        };
    }
}
