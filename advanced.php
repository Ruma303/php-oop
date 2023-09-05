<?php

//% Type Hinting
/* class Corso {
    function __construct(PHP $corso) {
        echo '<pre>';
        print_r($corso);
        echo '</pre><br>';
    }
}
class PHP { private $corso = "Corso PHP"; }
class MySQL { private $corso = "Corso MySQL"; }
$corsoPHP = new PHP;
$corsoMySQL = new MySQL;
$percorso = new Corso($corsoPHP); */



//$ Union Types delle classi
/* class Corso {
    function __construct(PHP|MySQL $corso) {
        echo '<pre>';
        print_r($corso);
        echo '</pre><br>';
    }
}
class PHP { private $corso = "Corso PHP"; }
class MySQL { private $corso = "Corso MySQL"; }
$corsoPHP = new PHP;
$corsoMySQL = new MySQL;
$percorso = new Corso($corsoMySQL); */



//$ Valori di ritorno
/* class Corso {
    function __construct(PHP|MySQL $corso) {
        echo '<pre>'; print_r($corso); echo '</pre>';
    }
}
class PHP { private $corso = "Corso PHP"; }
class MySQL { private $corso = "Corso MySQL"; }

function creaCorso(string $tipo): Corso {
    if ($tipo === 'PHP') {
        return new Corso(new PHP);
    } elseif ($tipo === 'MySQL') {
        return new Corso(new MySQL);
    } else {
        throw new InvalidArgumentException("Tipo di corso non valido: $tipo");
    }
}
$corsoPHP = creaCorso('PHP');
$corsoMySQL = creaCorso('MySQL'); */



//% Metodi e classi final
/* final class Persona {
    public $nome;
    final function __construct($n) {
        $this->nome = $n;
    }
}

class User extends Persona {
    public $username;
    function __construct($n, $u) {
        parent::__construct($n);
        $this->username = $u;
    }
}
$user1 = new User("Alfredo", "Al");
var_dump($user1); */


//% Classi astratte
/* abstract class Animale {
    abstract public function faVerso();
}
 */
// $animale = new Animale();

/* class Cane extends Animale {
    public function faVerso() {
        echo 'Classe genitore: ' . get_parent_class($this) . '<br>';
        echo 'Classe figlia: ' . __CLASS__ . '<br>';
        return "Bau!";
    }
}

$cane = new Cane();
echo $cane->faVerso();
 */


//% Interfacce
/* interface Lesson {
    public function setLessons(array $lessons): void;
    public function getLessons(): void;
}

interface Documentation {
    public function setDocumentation(array $documentations): void;
    public function getDocumentation(): void;
}

class Laravel implements Lesson, Documentation {
    private $lessons = [];
    private $documentation = [];
    public function setLessons(array $lessons): void {
        $this->lessons = $lessons;
    }
    public function getLessons(): void {
        echo '<h3>Lezioni del corso: </h3><ul>';
        foreach ($this->lessons as $lesson) {
            echo '<li>' . $lesson . '</li>';
        } echo '</ul>';
    }
    public function setDocumentation(array $documentations): void {
        $this->documentation = $documentations;
    }
        public function getDocumentation(): void {
        echo '<h3>Documentazione del corso: </h3><ul>';
        foreach ($this->documentation as $documentation) {
            echo '<li>' . $documentation . '</li>';
        } echo '</ul>';
    }
}

echo '<h2>Benvenuto/a al corso di Laravel!</h2>';
$laravel = new Laravel();
$laravel->setLessons(['Routes', 'MVC', 'Blade', 'Eloquent', 'CRUD', 'API', 'Authentication']);
$laravel->getLessons();
$laravel->setDocumentation(['Installazione', 'Configurazione', 'Vite.js', 'Middleware']);
$laravel->getDocumentation(); */



//% Traits
/* trait Inizializzazione {
    public $nomeClasse;
    public function __construct($class) {
        $this->nomeClasse = $class;
    }
}

trait Comportamenti {
    public function saluta() {
        echo "Ciao! Sono il metodo: " . __METHOD__
        . "<br> della Trait: " . __TRAIT__
        . "<br> e sono stato chiamato in: "
        . $this->nomeClasse . "<br><br>";
    }
}
class ClasseA { use Inizializzazione, Comportamenti; }
class ClasseB { use Inizializzazione, Comportamenti; }
$a = new ClasseA("ClasseA"); $a->saluta();
$b = new ClasseB("ClasseB"); $b->saluta(); */



//$ insteadof e as
/* trait Trait1 {
    public function fn() {
        echo "Funzione attivata dal trait: "
        . __TRAIT__ . "<br><br>";
    }
}
trait Trait2 {
    public function fn() {
        echo "Funzione attivata dal trait: "
        . __TRAIT__ . "<br><br>";
    }
}
class ClasseA {
    use Trait1, Trait2 {
        Trait2::fn insteadof Trait1;
        Trait1::fn as fn1;
    }
}
$instance = new ClasseA;
$instance->fn();
$instance->fn1(); */


//$ Approfondimenti Traits
//* Usare metodi statici nei Traits
/* trait Trait1 {
    public static function fn1(){
        echo "Metodo statico attivato: " . __METHOD__;
    }
}
class ClasseA {
    use Trait1;
    public function fn2() {
        self::fn1();
    }
}
$a = new ClasseA;
$a->fn2(); */



//* Usare metodi astratti nei Traits
/* trait Trait1 {
    abstract public function fn1();
}
class ClasseA {
    use Trait1;
    public function fn1() {
        echo "Metodo astratto richiamato";
    }
}
$a = new ClasseA;
$a->fn1(); */


//* Utilizzare argomenti e proprietà nei Trait
/* trait Trait1 {
    public $p1;
}
class ClasseA {
    use Trait1;
    public function fn1($p1) {
        $this->p1 = $p1;
        echo "\$p1: ", $p1;
    }
}
$a = new ClasseA;
$a->fn1("Hello World"); */



//* Utilizzare proprietà di classe nei metodi del Trait
//. Cattiva pratica
/* trait Trait1 {
    public function fn1($p1){
        $this->p1 = $p1;
        echo "\$p1: ", $p1;
    }
}
class ClasseA {
    public $p1;
    use Trait1;
}
$a = new ClasseA;
$a->fn1("Hello World");
 */



//% Costruttore privato
/* class Classe {
    private function __construct() {
        echo "Costruttore privato richiamato!<br>";
    }
    public static function createWithSelf() {
        return new self();
    }
    public static function createWithStatic() {
        return new static();
    }
}

$istanza1 = Classe::createWithSelf();
$istanza2 = Classe::createWithStatic();

class Estesa extends Classe {}
$istanza3 = Estesa::createWithSelf();
$istanza4 = Estesa::createWithStatic();
echo print_r($istanza3) . '<br>';
echo print_r($istanza4) . '<br>'; */



//% Altri operatori

//$ instanceof
/* class A {}
class B {} $b = new B;
var_dump($b instanceof A); // false
var_dump($b instanceof B); // true */

/* class A {}
class B extends A {} $b = new B;
var_dump($b instanceof A); // true */

/* class A {}
class B extends A {}
class C extends B {} $c = new C;
var_dump($c instanceof A); // true
 */


//* Interfacce
/* interface MyInterface {
    public function getInterface();
}
class A implements MyInterface {
    public function getInterface() {}
}
$a = new A;
var_dump($a instanceof MyInterface); // true */



//$ get_class()
/* class A {
    public function fn() {
        echo get_class();
    }
}
$a = new A;
$a->fn(); // A

class B extends A {} $b = new B;
class C extends B {} $c = new C;
echo get_class($b); // B
echo get_class($c); // C
 */


//$ ::class
/* class A {
    public function fn() {
        echo get_class();
    }
}
$a = new A;
$a->fn(); // A

class B extends A {} $b = new B;
class C extends B {} $c = new C;
echo $b::class; // B
echo $c::class; // C */



//% Classi anonime
/* $obj = new class {
    public function hello() {
        return "Hello, world!";
    }
};
echo $obj->hello(); // Hello, world!
 */


//$ Costruttori delle classi anonime
/* $obj = new class('Albert') {
    public function __construct(public string $name) {
        echo "Ciao $name";
    }
};
echo '<pre>'; print_r($obj); echo '</pre>';
 */



//$ Ereditarietà nelle classi anonime
/* class A {
    public $age = 34;
}
$obj = new class('Albert') extends A {
    public function __construct(public string $name) {
        echo "Sono $name e ho $this->age";
    }
};
echo '<pre>'; print_r($obj); echo '</pre>'; */



//$ Implementazione di interfacce nelle classi anonime
/* interface MyInterface {
    public function saluta();
}
$obj = new class implements MyInterface {
    public function saluta() {
        return 'Ciao!';
    }
};
echo $obj->saluta(); // Ciao!
 */


//$ Classi annidate
/* class MyParent {
    public int $a;
    public function __construct($a) {
        $this->a = $a;
    }
    public function info() {
        return new class($this->a) {
            public function __construct(public int $a) {
                echo "Costruttore interno invocato. Val: $a <br>";
            }
            public function getA() {
                echo $this->a;
            }
        };
    }
}
$newMyParent = new MyParent(10); //* Classe superiore
$obj = $newMyParent->info(); //* istanziando classe anonima intera
$obj->getA(); // 10
 */

//$ Estendere classi annidate
/* class MyParent {
    public int $a = 10;
    public function info() {
        return new class() extends MyParent {
            public function __construct() {}
            public function getA() {
                echo $this->a;
            }
        };
    }
}
$newMyParent = new MyParent;
$obj = $newMyParent->info();
$obj->getA(); // 10 */
