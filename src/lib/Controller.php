<?php
namespace Usuario\ClonInstragram\lib;

use Usuario\ClonInstragram\lib\View;

class Controller {
    private View $view;

    public function __construct() {
        $this->view = new View();
    }

    public function render(string $name, array $data = []) {
        $this->view->render($name, $data);
    }

    // Validar un valor preguntando por Post por un parametro
    protected function post(string $param) {
        if(!isset($_POST[$param])) {
            return NULL;
        }
        return $_POST[$param];
    }

    protected function get(string $param) {
        if(!isset($_GET[$param])) {
            return NULL;
        }
        return $_GET[$param];
    }

    public function file(string $param) {
        if(!isset($_FILES[$param])) {
            return NULL;
        }
        return $_FILES[$param];
    }
}