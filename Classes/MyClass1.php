<?php
namespace MyClass1;

class Name {
    private $name;
    public function __construct($__name) {
        echo 'MyClass1 attivata.<br>';
        $this->name = $__name;
    }
}
class Hello {
    public function __construct() {
        echo 'Classe Hello attivato.<br>';
    }
}
class Hola {
    public function __construct() {
        echo 'Classe Hola attivato.<br>';
    }
}

