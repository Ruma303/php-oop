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
echo '<pre>'; print_r($methods); echo '</pre>'; */



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
$obj->accessProtected(); */ //* Metodo accessibile in quanto public
//$obj->protectedProperty; //. Errore
//$obj->protectedMethod(); //. Errore



//$ private
/* class SuperClass {
    private $privateProperty = 'Sono privata.';
    private function privateMethod() {
        return 'Anch\'io sono privata';
    }
}
class SubClass extends SuperClass {
    public function accessProtected() {
        echo $this->privateProperty; //. Errore
        echo $this->privateMethod(); //. Errore
    }
}
$obj = new SubClass();
$obj->accessProtected(); */




//% Accessor e Mutator methods
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
$super->setPrivateProperty("Valore cambiato.");
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



//% Overriding
/* class Persona {
    public $nome;
    function __construct($n){
        $this->nome = $n;
    }
    function stampaInfo(){
        echo "<p>Nome: $this->nome</p><br>";
    }
}
class Studente extends Persona {
    public $scuola = "Alberghiero";
    function stampaInfo(){
        echo "<p>Nome: $this->nome,
        Frequenta: $this->scuola</p><br>";
    }
}
$persona = new Persona("Luigi");
$persona->stampaInfo(); // Nome: Luigi
$studente = new Studente("Mario");
$studente->stampaInfo(); // Nome: Mario, Frequenta: Alberghiero */



//% Membri di classe: static

//$ Proprietà statiche (di classe)
/* class Alunno {
    private static $count = 0;
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
        if (isset(self::$conversioni[$unita])) {
            $this->valoreConvertito = $valoreInMetri / self::$conversioni[$unita];
            echo $valoreInMetri . 'm = ' . $this->valoreConvertito . $unita . '<br>';
        } else {
            echo "Errore: Unità non supportata: $unita";
        }
    }
}
$convertitore1 = new Convertitore(10, 'mm'); // 10m = 10000mm
$convertitore2 = new Convertitore(100, 'km'); // 100m = 0.1km */


//$ parent
/* class Genitore {
    public function myMethod() {
        echo "myMethod() di Genitore attivato.<br>";
    }
}
class Figlio extends Genitore {
    public function myMethod() {
        parent::myMethod();
        echo "myMethod() di Figlio attivato.<br>";
    }
}
$figlio1 = new Figlio;
$figlio1->myMethod();
 */

//* Richiamare il costruttore della classe genitore
/* class Articolo {
    protected $range;
    protected function __construct($range) {
        $this->range = $range;
        echo "Costruttore di Articolo chiamato.<br>";
    }
}
class Giocattolo extends Articolo {
    protected $product;
    public function __construct($product) {
        parent::__construct("10-14");
        $this->product = $product;
        echo "Costruttore di Giocattolo chiamato.<br>";
    }
    public function itemInfo() {
        return "Prodotto: $this->product | Range di età: {$this->range} anni.<br>";
    }
}
$macchinina = new Giocattolo("Macchinina");
echo $macchinina->itemInfo(); */



//$ Late static binding
/* class Persona {
    public static $count = 0;
    public function __construct(){
        self::$count++;
        printf("Persona %d: creata.<br>", self::$count);
    }
}
$persona1 = new Persona;
$persona2 = new Persona;

class Alunno extends Persona {
    public static $count = 0;
    private $nome;
    public function __construct($nome){
        $this->nome = $nome;
        static::$count++;
        printf("Alunno %d: $this->nome creato.<br>", static::$count);
    }
}
$alunno1 = new Alunno("Gianpiero");
$alunno2 = new Alunno("Annalaura");
$alunno3 = new Alunno("Enzo");

echo 'Persone create: ' . Persona::$count . '<br>';
echo 'Alunni creati: ' . Alunno::$count;
 */

//% Costanti
/* class Corso {
    const PHP = 'Corso di PHP';
    const MY_SQL = 'Corso di MySQL';
    public static function infoCorso() {
        echo self::PHP . '<br>';
    }
}
Corso::infoCorso(); // Corso di PHP
echo Corso::MY_SQL; // Corso di MySQL */

