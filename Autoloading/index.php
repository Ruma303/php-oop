<?php

//$ Funzione carica
function loadClass ($class) {
    $fileName = $class . '.php';
    $file = 'Classi/' . $fileName;
    if(!file_exists($file)) {
        return FALSE;
    } include $file;
}

spl_autoload_register('loadClass');

$cliente1 = new Clienti;
echo $cliente1->message();

$fornitore1 = new Fornitori;
echo $fornitore1->message();









/* {
    $file = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
};  */


