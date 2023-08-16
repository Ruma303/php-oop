<?php

//% Ereditarietà

/* class Animale {
    public $colore;
    public function mangia() {
        echo "Mangia...<br>";
    }
}
class Cane extends Animale {
    public $zampe = 4;
    public function abbaia() {
        echo "Abbaia...<br>";
    }
}
$mioCane = new Cane();
$mioCane->mangia(); // Mangia...
$mioCane->abbaia(); // Abbaia...
$properties = get_object_vars($mioCane);
echo '<pre>'; print_r($properties); echo '</pre>';
$methods = get_class_methods($mioCane);
echo '<pre>'; print_r($methods); echo '</pre>';
 */


//% Visibilità dei membri

//$ public
/* class MyClass {
    public $publicProperty = 'Sono accedibile dall\'esterno';
    public function publicMethod() {
        return 'Anche io sono pubblica!';
    }
}
$obj = new MyClass();
echo $obj->publicProperty; // Sono accedibile dall'esterno
echo $obj->publicMethod(); // Anche io sono pubblica!
 */


//$ protected
/* class MyClass {
    protected $protectedProperty = 'Proprietà protetta.';
    protected function protectedMethod() {
        return 'Anch\'io sono protetta!';
    }
}
class MyChildClass extends MyClass {
    public function accessProtected() {
        echo $this->protectedProperty; // Proprietà protetta.
        echo $this->protectedMethod(); // Anch'io sono protetta!
    }
}
$obj = new MyChildClass();
$obj->accessProtected(); */


//$ private
    /* class SuperClass {
        private $privateProperty = 'Sono privata.';
        private function privateMethod() {
            return 'Anch\'io sono privata';
        }
    }
    class SubClass extends SuperClass {} */
    /* $obj = new SubClass();
    echo $obj->$privateProperty;
    echo $obj->privateMethod(); */

    /*$super = new SuperClass();
    echo $super->$privateProperty;
    echo $super->privateMethod; */


//% Setters & Getters
/* class SuperClass {
    private $privateProperty = 'Sono privata.';
    private function privateMethod() {
        return 'Anch\'io sono privata.';
    }
    public function getPrivateProperty() { //* Getter
        return $this->privateProperty;
    }
    public function getPrivateMethod() { //* Getter
        return $this->privateMethod();
    }
    public function setPrivateProperty($value) { //* Setter
        $this->privateProperty = $value;
    }
}
$super = new SuperClass();
echo "Proprietà iniziale: " . $super->getPrivateProperty() . '<br>';
echo "Metodo iniziale: " . $super->getPrivateMethod() . '<br>';
$super->setPrivateProperty("Valore cambiato");
echo "Proprietà cambiata: " . $super->getPrivateProperty(); */


//$ Costruttore come setter
/* class Persona {
    private $nome;
    private $cognome;
    public function __construct($n) {
        $this->nome = $n;
    }
    public function setCognome($c) {
        $this->cognome = $c;
    }
    public function getPersonaInfo(){
        return "Nome: $this->nome, Cognome: $this->cognome";
    }
}
$user = new Persona("Mario");
$user->setCognome("Rossi");
echo $user->getPersonaInfo();
echo '<pre>'; print_r($user); echo '</pre>'; */


