<?php
//% Namespaces
//* Namespace importati
include_once './Classes/MyClass1.php';
include_once './Classes/MyClass2.php';

/* $name1 = new Name('Lorenzo');
$name2 = new Name('Elisa'); */


//$ ed utilizzare i namespace
/* $name1 = new \MyClass1\Name("Andrea");
$name2 = new \MyClass2\Name("Luca");
 */



//$ Altri modi di richiamare i namespace
/* $className1 = '\MyClass1\Name';
$className2 = \MyClass2\Name::class;

$name3 = new $className1("Alice");
$name4 = new $className2("Sandro"); */

//$ use
/* use \MyClass2\Name;
$name5 = new Name("Lucia"); */

//$ as
/* use \MyClass1\Name as Name1;
use \MyClass2\Name as Name2;
$name5 = new Name1("Monica"); */

//$ namespace raggruppati

/* use \MyClass1\Name;
use \MyClass1\Hello;
use \MyClass1\Hola; */

//use \MyClass1\{Name, Hello, Hola};
/* $name6 = new Name("Alice");
$name7 = new Hello();
$name8 = new Hola(); */