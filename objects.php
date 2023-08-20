<?php

//% Oggetti

//$ Array di oggetti
/* class Personaggio {
    private $character_name;
    private $character_id;
    public function __construct($name, $id) {
        $this->character_name = $name;
        $this->character_id = $id;
    }
}
$personaggi[] = new Personaggio("Pippo", 1);
$personaggi[] = new Personaggio("Pluto", 2);
$personaggi[] = new Personaggio("Paperino", 3); */
//echo '<pre>'; print_r($personaggi); echo '</pre><br>';

/* $edizioni['prima'] = $personaggi[0];
$edizioni['seconda'] = $personaggi[1];
$edizioni['terza'] = $personaggi[2]; */
//echo '<pre>'; print_r($edizioni); echo '</pre><br>';
//echo $personaggi[1] === $edizioni['seconda'] ? 'É lo stesso' : 'É una copia';


// $ Iterare sugli array di oggetti

/* class Personaggio {
    private $character_name;
    private $character_id;
    public function __construct($name, $id) {
        $this->character_name = $name;
        $this->character_id = $id;
    }
    public function getCharacter() {
        return "<li>ID: $this->character_id. Character: $this->character_name.</li>";
    }
}
$personaggi[] = new Personaggio("Pippo", 1);
$personaggi[] = new Personaggio("Pluto", 2);
$personaggi[] = new Personaggio("Paperino", 3); */

/* echo '<ul>';
foreach($personaggi as $personaggio) {
    echo "<li>ID: $personaggio->character_id.
    Character: $personaggio->character_name.</li>";
}
echo '</ul>'; */

/* echo '<ul>';
foreach($personaggi as $personaggio) {
    echo $personaggio->getCharacter();
}
echo '</ul>'; */


//$ Condizioni e valori di default
/* class Personaggio {
    private $character_name;
    private $character_id;
    private $original_character_name;
    private $original_character_id;
    private $updated_character;

    public function __construct($name, $id) {
        $this->character_name = $name;
        $this->original_character_name = $name;
        $this->character_id = $id;
        $this->original_character_id = $id;
    }

    public function getCharacter() {
        $output = "<li>ID: $this->character_id. Nome: $this->character_name.</li>";
        if ($this->updated_character) {
            $output .= '<ul><li>Nuovo ID: ' .
            $this->updated_character->id . '. Nuovo nome: ' .
            $this->updated_character->name . '</li></ul>';
        }
        return $output;
    }

    public function setCharacter($newChar, $newID) {
        $this->character_name = $newChar;
        $this->character_id = $newID;
        return $this->updated_character = (object) [
            'name' => $this->character_name,
            'id' => $this->character_id
        ];
    }
}

$personaggi[] = new Personaggio("Pippo", 1);
$personaggi[] = new Personaggio("Pluto", 2);
$personaggi[] = new Personaggio("Paperino", 3);
$personaggi[0]->setCharacter("Qui", 4);
$personaggi[1]->setCharacter("Quo", 5);
$personaggi[2]->setCharacter("Qua", 6);
echo '<ul>';
foreach($personaggi as $personaggio) {
    echo $personaggio->getCharacter();
}
echo '</ul>'; */


//% Confronto fra oggetti

//$ Confronto tra istanze di una classe
/* class MyClass {
    public $prop;
}
$a = new MyClass;
$a->prop = 1;
$b = new MyClass;
$b->prop = 1;
var_dump($a == $b); // true
var_dump($a === $b); // false
$c = $a;
var_dump($a === $c); // true */



//$ Confrontare oggetti personalizzati

/* class User {
    public $id;
    public $name;
    public function uguale(User $other) {
        //! Due utenti sono considerati uguali se hanno lo stesso ID
        return $this->id == $other->id;
    }
}
$user1 = new User;
$user1->id = 1;
$user1->name = 'Alice';
$user2 = new User;
$user2->id = 1;
$user2->name = 'Bob';
$user3 = new User;
$user3->id = 2;
$user3->name = 'Charlie';
var_dump($user1->uguale($user2)); // true
var_dump($user1->uguale($user3)); // false */

