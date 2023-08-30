<?php
//% Creazione enum

//$ Sintassi base
/* enum Weekday {
    case Monday;
    case Tuesday;
    case Wednesday;
    case Thursday;
    case Friday;
    case Saturday;
    case Sunday;
}
function printGreeting(Weekday $day): void {
    if ($day === Weekday::Saturday || $day === Weekday::Sunday) {
        echo "É arrivato il weekend!";
    } else {
        echo "Buona giornata e buon lavoro!";
    }
}
printGreeting(Weekday::Monday); // Buona giornata e buon lavoro!
echo '<br>';
printGreeting(Weekday::Saturday); // É arrivato il weekend! */

//var_dump(Weekday::Friday);


//$ Definire tipo di backup
/* enum SuperHeroes: string {
    case Hero1 = 'Superman';
    case Hero2 = 'Batman';
    case Hero3 = 'Spider-Man';
    case Hero4 = 'Iron Man';
}
echo '<pre>'; print_r(SuperHeroes::Hero1); echo '</pre>'; */


//* Metodi predefiniti delle enumerazioni
/* echo SuperHeroes::Hero2->name; // Hero2
echo SuperHeroes::Hero2->value; // Batman
echo '<pre>'; print_r(SuperHeroes::cases()); echo '</pre>';
 */


//* Modificare i valori degli enum
//SuperHeroes::Hero3->value = 'Wolverine'; // Errore


//$ Metodi nelle enumerazioni
/* enum SuperHero: string {
    case Hero1 = 'Superman';
    case Hero2 = 'Batman';
    case Hero3 = 'Spider-Man';
    case Hero4 = 'Iron Man';

    public function shoutName(): string {
        return strtoupper($this->value);
    }
}
echo SuperHero::Hero4->shoutName(); // IRON MAN */
