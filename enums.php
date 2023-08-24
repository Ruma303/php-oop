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


//$ Definire tipo di backup



/* enum Weekday: string {
    case Monday = 'Monday';
    case Tuesday = 'Tuesday';
    case Wednesday = 'Wednesday';
    case Thursday = 'Thursday';
    case Friday = 'Friday';
    case Saturday = 'Saturday';
    case Sunday = 'Sunday';
}
 */
/* function printGreeting(Weekday $day): void {
    if ($day === Weekday::Saturday || $day === Weekday::Sunday) {
        echo "É arrivato il weekend!";
    } else {
        echo "Buona giornata e buon lavoro!";
    }
}

printGreeting(Weekday::Monday); // Buona giornata e buon lavoro!
echo '<br>';
printGreeting(Weekday::Saturday); // É arrivato il weekend!
 */
