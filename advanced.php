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
$percorso = new Corso($corsoMySQL);
*/


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
    function __construct($n) {
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
class Cane extends Animale {
    public function faVerso() {
        echo 'Classe genitore: ' . get_parent_class($this) . '<br>';
        echo 'Classe figlia: ' . __CLASS__ . '<br>';
        return "Bau!";
    }
}
$cane = new Cane();
echo $cane->faVerso(); */



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
            }echo '</ul>';
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
