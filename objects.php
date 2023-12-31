<?php

//% Oggetti

//, Array di oggetti
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
$personaggi[] = new Personaggio("Paperino", 3);
echo '<pre>'; print_r($personaggi); echo '</pre><br>'; */

/* $edizioni['prima'] = $personaggi[0];
$edizioni['seconda'] = $personaggi[1];
$edizioni['terza'] = $personaggi[2];
echo '<pre>'; print_r($edizioni); echo '</pre><br>'; */
/* echo $personaggi[1] === $edizioni['seconda'] ? 'É lo stesso' : 'É una copia'; */


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
echo '</ul>';
 */
/* echo '<ul>';
foreach($personaggi as $personaggio) {
    echo $personaggio->getCharacter();
}
echo '</ul>'; */


//, Condizioni e valori di default
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
        $output = "<li>Original values - ID: $this->original_character_id. Nome: $this->original_character_name.</li>";
        if ($this->updated_character) {
            $output .= '<ul><li>Edited values: ID: ' .
            $this->updated_character->id . '. nome: ' .
            $this->updated_character->name . '</li></ul>';
        }
        return $output;
    }

    public function setCharacter($newChar, $newID) {
        $this->character_name = $newChar;
        $this->character_id = $newID;
        return $this->updated_character = (object)[
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

//, Confronto tra istanze di una classe
/* class MyClass {
    public $prop;
}
$a = new MyClass;
$a->prop = 1;
//var_dump($a);

$b = new MyClass;
$b->prop = 1;
//var_dump($b);

var_dump($a == $b); // true
var_dump($a === $b); // false

$c = $a;
var_dump($a === $c); // true

$b->prop = 99;
echo $a->prop . '<br>';

$c->prop = 10;
echo $a->prop;
 */


//, Confrontare oggetti personalizzati
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



//% Copiare gli oggetti

//, Assegnamento oggetti
/* class User {
    public $username;
    function __construct($n) {
        $this->username=$n;
    }
}
$user1 = new User("Ariel");
$user2 = $user1;
echo $user1 == $user2 ? "Sono uguali" : "Sono diversi";

echo '<br>';
echo '<pre>'; print_r($user1); echo '</pre>';
echo '<pre>'; print_r($user2); echo '</pre>';

$user2->username = "Mickey";
echo $user1->username . '<br>';
echo $user2->username . '<br>'; */


//, Shallow Copy
/* class User {
    public $value;
}

class Person {
    public $personObj;

    public function __construct() {
        $this->personObj = new User();
    }
}

$original = new Person();
$original->personObj->value = 'Originale';

$cloned = clone $original; //* Shallow copy di $original
echo $original->personObj->value; // Originale
echo '<br>';
echo $cloned->personObj->value; // Originale
echo '<br>';

//# Modifichiamo la proprietà dell'oggetto secondario in $cloned
$cloned->personObj->value = 'Modificato';

//# Mostriamo i valori per confrontare
echo $original->personObj->value; // Modificato
echo '<br>';
echo $cloned->personObj->value;   // Modificato
echo '<br>';

echo $original == $cloned ? "Sono uguali" : "Sono diversi"; // Sono uguali */



//, Deep Copy
/* class User { public $value; }
class Person {
    public $personObj;
    public function __construct() {
        $this->personObj = new User();
    }
    public function __clone() {
        $this->personObj = clone $this->personObj; //! Notare clone
    }}

$original = new Person();
$original->personObj->value = 'Originale';

$cloned = clone $original; //* Deep copy di $original
echo $original->personObj->value; // 'Originale'
echo '<br>';
echo $cloned->personObj->value; // 'Originale'
echo '<br>';

//# Modifichiamo la proprietà dell'oggetto secondario in $cloned
$cloned->personObj->value = 'Modificato';

//# Mostriamo i valori per confrontare
echo $original->personObj->value; //! 'Originale'. $original non cambia
echo '<br>';
echo $cloned->personObj->value;   // 'Modificato'
echo '<br>';

echo $original == $cloned ? "Sono uguali" : "Sono diversi"; // Sono diversi */



//% Serializzazione

//, serialize()
/* $data = ['a', 'b', 'c'];
$serializedData = serialize($data);
echo $serializedData; */
// a:3:{i:0;s:1:"a";i:1;s:1:"b";i:2;s:1:"c";}


//, deserializzazione()
/* $serializedData = 'a:3:{i:0;s:1:"a";i:1;s:1:"b";i:2;s:1:"c";}';
$data = unserialize($serializedData);
print_r($data); // Array ( [0] => a [1] => b [2] => c )
$data2 = unserialize(serialize($serializedData));
print_r($data2); */

/* $data = unserialize($serializedData, ["allowed_classes" => false]); */


//* Deep copy degli oggetti deserializzati
/* class User {
    function __construct(public string $value) {
        $this->value = $value;
    }
}
$user1 = new User('user1');
$user2 = unserialize(serialize($user1));
var_dump($user1); // object(User)#1 (1) { ["value"]=> string(5) "user1" }
echo '<br>';
var_dump($user2); // object(User)#2 (1) { ["value"]=> string(5) "user1" } */