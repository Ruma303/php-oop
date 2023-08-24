<?php //% Classi

//$ Definizione di una classe
/* class Persona {
    public $nome;
    public $cognome;
    public function fn() {
        return "Ciao";
    }
} */


//$ Creazione istanze (oggetti)
/* $persona1 = new Persona();
var_dump($persona1);
echo '<br>';

$persona2 = new Persona;
var_dump($persona2);
echo '<br>';

$persona3 = Persona;
var_dump($persona3); */



//$ Accedere ai valori dei membri di istanza
    /* $persona1 = new Persona;
    $persona1->nome = "Alfonso";
    $persona1->cognome = "Donati";
    echo '<pre>'; print_r($persona1); echo '</pre><br>'; */

    /* $persona1->nome = "Alessio";
    echo $persona1->nome; // Alessio */


//$ Metodi di istanza
/* $persona1 = new Persona;
echo '<pre>'; print_r($persona1); echo '</pre><br>';
echo $persona1->fn();
 */


//$ Inizializzazione membri d'istanza
/* class Libro {
    public $titolo = 'Il Signore degli Anelli';
    public $autore = 'J.R.R. Tolkien';
    public $genere = 'Fantasy';
    public $anno   = '1954-1955';
    public function dettagliLibro() {
        return ("Titolo: $titolo, Autore: $autore,
        Genere: $genere, Anno di pubblicazione: $anno");
    }
} */

/* $libro1 = new Libro;
echo '<pre>'; print_r($libro1); echo '</pre>';
$libro2 = new Libro;
echo '<pre>'; print_r($libro2); echo '</pre>';
$libro3 = new Libro;
echo '<pre>'; print_r($libro3); echo '</pre>';
echo $libro3->dettagliLibro(); */


//$ $this
/* class Libro {
    public $titolo = 'Il Signore degli Anelli';
    public $autore = 'J.R.R. Tolkien';
    public $genere = 'Fantasy';
    public $anno   = '1954-1955';
    public function dettagliLibro() {
        return ("Titolo: $this->titolo<br> Autore: $this->autore<br>
        Genere: $this->genere<br> Anno di pubblicazione: $this->anno");
    }
} */
//$libro1 = new Libro;
//echo '<pre>'; print_r($libro1); echo '</pre><br>';
//echo $libro1->titolo;
//echo $libro1->dettagliLibro();


//$ Inizializzare proprietà all'interno dei metodi
/* class Libro {
    public $titolo;
    public $autore;
    public function inizializza($__titolo, $__autore) {
        $this->titolo = $__titolo;
        $this->autore = $__autore;
    }
}
$libro1 = new Libro;
$libro1->inizializza('Il Signore degli Anelli', 'J.R.R. Tolkien');
echo '<pre>'; print_r($libro1); echo '</pre>'; */



//$ null chaining operator
/* class Person {
    public $birthday;
}
$person1 = new Person;
$person1->birthday = new DateTime('10-05-1956');
$birthday = $person1?->birthday?->format('d-m-Y');
echo $birthday; */



//% Costruttori
/* class Libro {
    function __construct() {
        echo "Costruttore invocato, oggetto creato.";
    }
}
$libro1 = new Libro(); */

/* class Libro{
    public $titolo;
    public $autore;
    public $genere;
    public $anno;
    public function __construct($__titolo, $__autore) {
        $this->titolo = $__titolo;
        $this->autore = $__autore;
    }
    public function stampaTitolo() {
        return ("Titolo: $this->titolo <br> Autore: $this->autore <br>
        Genere: $this->genere <br> Anno di pubblicazione: $this->anno");
    }
}
$libro1 = new Libro("Orgoglio e Pregiudizio", "Jane Austen");
echo $libro1->stampaTitolo(); */


//$ Creazione oggetti personalizzati
/* class Libro{
    public $titolo;
    public $autore;
    public $genere;
    public $anno;
    public function __construct($__titolo, $__autore, $__genere, $__anno) {
        $this->titolo = $__titolo;
        $this->autore = $__autore;
        $this->genere = $__genere;
        $this->anno = $__anno;
        echo "Titolo: $this->titolo <br> Autore: $this->autore <br>
        Genere: $this->genere <br> Anno di pubblicazione: $this->anno<br><br>";
    }
}
$libro1 = new Libro("Il Signore degli Anelli", "J.R.R. Tolkien", "Fantasy", "1954-1955");
$libro2 = new Libro("Orgoglio e Pregiudizio", "Jane Austen", "Romanzo storico", "1813");
$libro3 = new Libro("Il Piccolo Principe", "Antoine de Saint-Exupéry", "Fantastico", "1943");
$libro4 = new Libro("1984", "George Orwell", "Dystopia, distopia", "1949");
$libro = new Libro("Cent'anni di solitudine", "Gabriel García Márquez", "Magico realismo, romanzo storico", "1967"); */



//% Proprietà promosse
/* class MyClass {
    public function __construct(public int $a) {}
}
$obj = new MyClass(123);
echo $obj->a;  // 123 */



//% Distruttore
/* class Libro {
    public $titolo;
    function __construct($__titolo) {
        echo "Costruttore invocato, oggetto creato.";
        $this->titolo = $__titolo;
    }
    function __destruct() {
        echo "*** $this->titolo è stato distrutto***";
    }
}
$libro1 = new Libro("1984");
echo '<pre>'; print_r($libro1); echo '</pre>';
 */