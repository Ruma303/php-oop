<?php

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
/* class MyClass {
    private $privateProperty = 'Sono privata.';

    private function privateMethod() {
        return 'Anch\'io sono privata';
    }
    public function accessPrivate() {
        echo $this->privateProperty; // Sono privata.
        echo $this->privateMethod(); // Anch'io sono privata
    }
}
$obj = new MyClass();
$obj->accessPrivate(); */
