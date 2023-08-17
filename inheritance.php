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



//% Membri di classe: static

//$ Proprietà statiche (di classe)
/* class Alunno {
    private static $count;
    private $nome;
    public function __construct($__nome){
        $this->nome = $__nome;
        self::$count++;
        printf("ID: %d, alunno $this->nome creato.<br>", self::$count);
    }
}

$alunno1 = new Alunno("Gianpiero");
$alunno2 = new Alunno("Annalaura");
$alunno3 = new Alunno("Enzo"); */


//? Senza l'utilizzo di static
/* class Alunno {
    private $count = 0;
    private $nome;
    public function __construct($__nome){
        $this->nome = $__nome;
        $this->count++;
        printf("ID: %d, alunno $this->nome creato.<br>", $this->count);
    }
}
$alunno1 = new Alunno("Gianpiero");
$alunno2 = new Alunno("Annalaura");
$alunno3 = new Alunno("Enzo"); */


//$ Metodi statici (di classe)

//? Senza istanziare classi

/* class Persona {
    public static function saluta() {
        return "Ciao a tutti";
    }
}
echo Persona::saluta(); */
// Ciao a tutti


//? Istanziando classi
/* class Convertitore {
    private static $conversioni = [
        'mm' => 0.001,
        'cm' => 0.01,
        'dm' => 0.1,
        'm'  => 1,
        'dam' => 10,
        'hm' => 100,
        'km' => 1000,
    ];
    private $valoreConvertito;
    public function __construct($valoreInMetri, $unita) {
        if (!isset(self::$conversioni[$unita])) {
            "Errore: Unità non supportata: $unita";
        } else {
            echo $this->valoreConvertito = $valoreInMetri / self::$conversioni[$unita] . '<br>' ;
        }
    }
}
$convertitore = new Convertitore(1, 'mm'); // 1000mm
$convertitore = new Convertitore(1, 'km'); // 0.001Km */


//% Override
/* class Persona {
    public $nome;
    function __construct($n){
        $this->nome = $n;
    }
    function stampaInfo(){
        echo "<p>Nome: $this->nome</p>";
    }
}
class Studente extends Persona{
    public $scuola = "Alberghiero";
    function stampaInfo(){
        echo "<p>Nome: $this->nome,
        Frequenta: $this->scuola</p>";
    }
}
$studente = new Studente("Mario");
$studente->stampaInfo(); */


//% Overloading

//$ Property Overloading
/* class MyClass {
    private $data = array();
    public function __set($name, $value) {
        echo "Impostazione di '$name' a '$value'\n";
        $this->data[$name] = $value;
    }
    public function __get($name) {
        echo "Accesso a '$name'\n";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        } // In caso in cui la proprietà non esiste
        return "Proprietà '$name' non trovata";
    }
    public function __isset($name) {
        echo "Controllo se '$name' è impostato\n";
        return isset($this->data[$name]);
    }
    public function __unset($name) {
        echo "Rimozione di '$name'\n";
        unset($this->data[$name]);
    }
}

$obj = new MyClass();
$obj->property = 'value'; // Impostazione di 'property' a 'value'
echo $obj->property; // Accesso a 'property' e stampa 'value'
isset($obj->property); // Controllo se 'property' è impostato e restituisce true
unset($obj->property); // Rimozione di 'property' */

//$ Method Overloading

//* __call()
/* class MyClass {
    public function __call($name, $arguments) {
        echo "Chiamata del metodo '$name' con argomenti: "
        . implode(', ', $arguments);
    }
}

$obj = new MyClass();
$obj->myMethod('arg1', 'arg2'); */

//* __callStatic()

/* class MyClass {
    public static function __callStatic($name, $arguments) {
        if ($name == 'myMethod') {
            switch (count($arguments)) {
                case 1:
                    return self::myMethodWithOneArgument($arguments[0]);
                case 2:
                    return self::myMethodWithTwoArguments($arguments[0], $arguments[1]);
                default:
                    throw new Exception("Numero di argomenti non valido");
            }
        }
    }
    private static function myMethodWithOneArgument($arg1) {
        echo "Chiamata del metodo statico myMethod con un argomento: $arg1<br>";
    }

    private static function myMethodWithTwoArguments($arg1, $arg2) {
        echo "Chiamata del metodo statico myMethod con due argomenti: $arg1, $arg2<br>";
    }
}

MyClass::myMethod('arg1'); // Chiamata del metodo statico myMethod con un argomento: arg1
MyClass::myMethod('arg1', 'arg2'); // Chiamata del metodo statico myMethod con due argomenti: arg1, arg2 */




