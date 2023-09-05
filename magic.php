<?php

//% Metodi magici


//% Metodi per serializzazione e deserializzazione di oggetti

//$ __sleep()
/* class Test {
    private $a = "Privata";
    public $b = "Pubblica";

    public function getPrivate() {
        return $this->a;
    }

    public function __sleep() {
        return ['b'];
    }
} */
//$test = new Test;
//echo serialize($test);

//$test2 = new Test;
//echo serialize($test2);
//$test2 = unserialize(serialize($test2));
//var_dump($test2);
//echo $test2->getPrivate();


//$ __wakeup()
/* class FileHandling {
    private SplFileObject $fileObj;
    public function __construct(
        protected string $filename,
        protected string $mode,
    ) {
        $this->fileObj = new SplFileObject($filename, $mode);
    }

    public function read() {
        $fo = $this->fileObj;
        return $fo->fread($fo->getSize());
    }

    public function __sleep() {
        return ['filename', 'mode'];
    }

    public function __wakeup() {
        $this->fileObj = new SplFileObject($this->filename, $this->mode);
    }
}

$file1 = new FileHandling('./file1.txt', 'r');
//echo $file1->read();
echo serialize($file1); //. Errore fatale


$file2 = unserialize(serialize($file1));
echo '<pre>'; var_dump($file2); echo '</pre>';

echo $file2->read(); // Contenuto del file1.txt
exit; */



//$ __serialize() & __unserialize()
/* class FileHandling {
    private SplFileObject $fileObj;
    public function __construct(
        protected string $filename,
        protected string $mode,
    ) {
        $this->fileObj = new SplFileObject($filename, $mode);
    }

    public function read() {
        $fo = $this->fileObj;
        return $fo->fread($fo->getSize());
    }

    public function __serialize() {
        //return ['filename', 'mode'];
        return [
            'filename' => $this->filename,
            'mode' => $this->mode
        ];
    }
    public function __unserialize(array $data){
        echo '<pre>'; print_r($data); echo '</pre>';
        $this->fileObj = new SplFileObject($data['filename'], $data['mode']);
    }
}

$file1 = new FileHandling('./file1.txt', 'r');
$file2 = unserialize(serialize($file1));
//echo '<pre>'; var_dump($file2); echo '</pre>';
echo $file2->read(); // Contenuto del file1.txt */





//% Overloading

//| Property Overloading
/* class MyClass {
    private $data = array();

    public function __set($name, $value) {
        echo "Impostazione di '$name' a '$value'<br>";
        $this->data[$name] = $value;
    }
    public function __get($name) {
        if (array_key_exists($name, $this->data)) {
            $this->data[$name];
            echo "Accesso a '$name'<br>";
            return;
        } // In caso in cui la proprietà non esiste
        return "Proprietà '$name' non trovata<br>";
    }
    public function __isset($name) {
        echo "Controllo se '$name' è impostato<br>";
        return isset($this->data[$name]);
    }
    public function __unset($name) {
        echo "Rimozione di '$name'<br>";
        unset($this->data[$name]);
    }
}

$obj = new MyClass();
$obj->property = 'value'; // Impostazione di 'property' a 'value'
echo $obj->property; // Accesso a 'property' e stampa 'value'
isset($obj->property); // Controllo se 'property' è impostato e restituisce true
unset($obj->property); // Rimozione di 'property'
echo $obj->property; */




//| Method Overloading

//* __call()
/* class MyClass {
    private function fn1(int $a, int $b) : int {
        return $a + $b;
    }
    public function __call(string $method, array $args) {
        if (method_exists($this, $method)) {
            return $this->$method(...$args);
        } else {
            echo "Il metodo {$method} non esiste";
        }
    }
}
$obj = new MyClass();
echo $obj->fn1(5, 10); // 15 */
//echo $obj->fn2(5, 10); // 15


//# Richiamare metodi di altre classi
/* class Notification {
    public function sendNotification() {
        echo "Notifica inviata.";
    }
}

class Utente {
    public function __construct(public Notification $notification) {
        echo '<pre>'; print_r($notification); echo '</pre>';
    }

    public function __call(string $method, array $args) {
        if(method_exists($this->notification, $method)) {
            return $this->notification->$method(...$args);
        } else {
            echo "Errore! Il metodo $method non esiste!";
        }
    }
}
$user1 = new Utente(new Notification);
$user1->sendNotification(); // Notifica inviata. */
//$user1->sendEmail(); // Errore.


//* __callStatic()
/* class CreaUtente {
    public function crea() {
        return "Utente creato correttamente.";
    }
}

class Utente {
    public static function __callStatic($method, $args) {
        if ($method === 'creaUtente') {
            $creaUtente = new CreaUtente();
            echo $creaUtente->crea();
        } else {
            echo "Errore! Il metodo statico $method non esiste!";
        }
    }
}

Utente::creaUtente(); // Utente creato correttamente. */