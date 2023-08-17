<?php





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
