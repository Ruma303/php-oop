<?php //% Classi

//$ Definizione di una classe
/* class Persona {
    public $nome;
    public $cognome;
    function fn() {
        return 'Sono il metodo di istanza';
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
/* $persona1 = new Persona();
$persona1->nome = "Alfonso";
$persona1->cognome = "Donati";
echo '<pre>';
print_r($persona1);
echo '</pre><br>'; */

/* $persona1->nome = "Alessio";
echo $persona1->nome; // Alessio */


//$ Metodi di istanza
/* $persona1 = new Persona();
echo $persona1->fn(); */


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
}

$libro1 = new Libro;
echo '<pre>'; print_r($libro1); echo '</pre>'; $libro2 = new Libro;
echo '<pre>'; print_r($libro2); echo '</pre>'; $libro3 = new Libro;
echo '<pre>'; print_r($libro3); echo '</pre>'; echo $libro3->dettagliLibro();
 */


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
}
$libro1 = new Libro;
echo $libro1->dettagliLibro(); */


//$ Inizializzare proprietà all'interno dei metodi
class Libro {
    public $titolo;
    public $autore;
    public function inizializza($__titolo, $__autore) {
        $this->titolo = $__titolo;
        $this->autore = $__autore;
    }
}
$libro1 = new Libro;
$libro1->inizializza('Il Signore degli Anelli', 'J.R.R. Tolkien');
echo '<pre>'; print_r($libro1); echo '</pre>';


/* //$ Costruttori
class Libro {
    public function __construct($__titolo, $__autore, $__genere, $__anno) {
        $this->titolo = $__titolo;
        $this->autore = $__autore;
        $this->genere = $__genere;
        $this->anno = $__anno;
    }
    public $titolo;
    public $autore;
    public $genere;
    public $anno;
    public function stampaTitolo() {
        return ("Titolo: $this->titolo, Autore: $this->autore,
        Genere: $this->genere, Anno di pubblicazione: $this->anno");
    }
}
//$libro1 = new Libro;
echo $libro1->stampaTitolo(); */



/*
Titolo: Il Signore degli Anelli
Autore: J.R.R. Tolkien
Genere: Fantasy
Anno: 1954-1955

Titolo: Orgoglio e Pregiudizio
Autrice: Jane Austen
Genere: Romanzo storico
Anno: 1813

Titolo: Il Piccolo Principe
Autore: Antoine de Saint-Exupéry
Genere: Fantastico
Anno: 1943

Titolo: 1984
Autore: George Orwell
Genere: Dystopia, distopia
Anno: 1949

Titolo: Cent'anni di solitudine
Autore: Gabriel García Márquez
Genere: Magico realismo, romanzo storico
Anno: 1967 */

