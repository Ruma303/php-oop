<?php

//% Ereditarietà

    class Animale {
        public function mangia() {
            echo "Mangia...<br>";
        }
    }
    class Cane extends Animale {
        public function abbaia() {
            echo "Abbaia...<br>";
        }
    }

    $mioCane = new Cane();
    $mioCane->mangia(); // Mangia...
    $mioCane->abbaia(); // Abbaia...