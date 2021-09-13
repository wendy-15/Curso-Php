<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// php code goes her
?>
<html>
  <head>
    <title>
      Homecenter
    </title>
  </head>
  <body>
  <?php include 'Cabeza.php'; ?>
  <?php
  echo "Wendy Johana";
?>
  <?php
  echo "<br>Sueña, nosotros lo hacemos realidad !";
  ?>
  <?php
  echo "<br>A";
  echo "<br>B";
  echo "<br>C";
   ?>
   
   <?php
   echo "<br>","<strong>Todo lo que necesites a tu disposición, con los mejores precios y de la mejor calidad .</strong>";
?>
<?php
  echo "<p>Homecenter, la mejor solución !</p>";
  // This is a single-line comment
  echo "<p>Acumula puntos CRM!</p>";
  echo "<p>Sodimac Corona!</p>";
?>
<?php
  echo "<p>Todo lo que estes buscando !</p>";
  /*
  This is a multi-line comment block
  that spans over
  multiple lines
  */
  echo "<p>Vamos a brindarte lo mejor de nosotros para que des un servicio de calidad!</p>";
  echo "<p>La calidad es nuestro mejor aliado y siempre a estado de nuestro lado!</p>";
?>
  </body>
</html>


<?php

$name = 'Homecenter';
$age = 102;
echo $name,"<br>", $age ; 

// outpus 'Homecenter'
?>
<?php
define("TechSolutions", "Ingenieros preparados!", false);
echo "<br>",TechSoluions;

// Outpusts "Buenas tardes soy el ingeniero representante de la empresa TechSolutions!"
?>

<?php
$string1 = "TechSolutions!"; //double quotes
$string2 = 'El lugar en el que encontraras todo!';  //single quotes

echo "<br>", $string1, "<br>",$string2


?>

<?php
$int1 = 30; // positive number
$int2 = -42; // negative number
$suma =  $int1 + $int2;
echo  "<br>","<br>","mostrando resultado de la suma 30 -42:", ($suma);
?>


<?php
//como definir numeros float o decimales
$x = 42.168;
//imprimir nmeo
echo  "<br>","<br>","mostrando numero decimal:",$x;

?>

<?php
$x = true; $y = false;
?>

<?php
$str = "10";
$int = 20;
//estableciendo la suma
$sum = $str + $int;
echo  "<br>","<br>","mostrando resultado de la suma 10 y 20:", ($sum);

// Outputs 30
?>

<?php
$name = 'Johana';
function getName() {
   global $name;
   echo "<br>","<br>","mostrando variable global:", $name;
}
getName();

//Outputs 'Johana'
?>


<?php
$a = 'Estrategias de implementacion';
$hello = "Estrategias de implementacion!";
echo "<br>","<br>","mostrando variable a", $a;

// Outputs 'Estrategias de implementacion!'
?>

<?php
  $num1 = 8;
  $num2 = 2; 

  //Addition
  echo "<br>","<br>","mostrando resultado suma de 8 + 2","=", $num1 + $num2; //14

  //Subtraction
  echo "<br>","<br>","mostrando resultado resta de 8 - 2","=", $num1 - $num2; //2

  //Multiplicacion
  echo "<br>","<br>","mostrando resultado multiplicacion de 8 * 2","=", $num1 * $num2; //48

  //Division
  echo "<br>","<br>","mostrando resultado división de 8 / 2","=", $num1 / $num2; //1.33333333333
?>


<?php
  $x = 14;
  $Y = 3;
  echo "<br>","<br>","mostrando residuo de la division entre 14 y 3 ","=", $x % $Y; //2
?>

<?php
$x = 50;
$x += 100;
echo  "<br>","<br>","mostrando el resultado de 100 mas 50 ","=", $x;
?>


<?php

$names[0] = "Wendy";
$names[1] = "Cristian";
$names[2] = "Johana";

echo "<br>","<br>","mostrando el el nombre encontrado en la posicion 1 del arreglo names","=", $names[1]; //Outputs "Wendy"
echo "<br>","<br>","mostrando el el nombre encontrado en la posicion 0 del arreglo names","=", $names[0]; //Outputs "Cristian"
echo "<br>","<br>","mostrando el el nombre encontrado en la posicion 2 del arreglo names","=", $names[2]; //Outputs "Johana"

?>

<?php
$myArray[0] = "Homecenter";
$myArray[1] = "<strong>PHP</strong>";
$myArray[2] = 102;
 
echo "<br>","<br>","$myArray[0] tiene $myArray[2]años y utiliza $myArray[1]"; 
 
 // Outputs "Wendy, ingeniera de 17 años y representante de la empresa TechSolutions"
?>
<?php

$people = array("Johana"=>"17", "Cristian"=>"17",
"Wendy"=>"17");

echo "<br>","<br>","mostrando la edad de uno de los ingenieros de la empresa TechSolutions (Wendy)","=", $people['Wendy']; // Outputs 18"
?>

<?php
$people = array(
  'online'=>array('Johana', 'Cristian'),
  'offline'=>array('Wendy', 'Marina'),
  'away'=>array('Brenda', 'Alejandra')
);

echo "<br>","<br>","mostrando el nombre de la posicion 0, de online","=", $people['online'][0]; //Emite "Johana"

echo "<br>","<br>","mostrando el nombre de la posicion 1, de away","=", $people['away'][1];//Alejandra
?>



<?php
$x = 10;
$y = 20;
if ($x >= $y) {
  echo $x;
} else {
  echo "<br>","<br>","mostrando la y porque no complió la condicion ","=", $y;
}

// Muestra "20"
?>
<?php
$age = 18; 

if ($age<=13) {
  echo "<br>","<br>","mostrando que es niño por que es menor de 13","=", "child.";
} elseif ($age>13 && $age<18) {
  echo "<br>","<br>","mostrando que es adolescente por que es mayor de 13 pero menor 18","=", "Teenager";
} else {
   echo "<br>","<br>","mostrando que es adulto porque es igual o mayor de 18","=", "Adult";
}

//Salidas "Adult"
?>
<?php
$i = 1;
while ($i < 7) {
  echo "<br>","mostrando el iterador hasta el 7", "El valor es $i <br />";
  $i++;
} 
?>


<?php
$i = 5;
do {
  echo "<br>","mostrando numeros += 5 pero -=7", "El numero es " . $i .  "<br/>";
  $i++; 
} while ($i <= 7); 

//Salida
//El numero es 5 
//El numero es 6
//El numero es 7
?>
<?php
for ($a = 0; $a < 6; $a++) {
  echo "Valor de a :". $a . "<br />";
}
?>

<?php
$names = array("Wendy", "Johana", "Cristian");
foreach ($names as $name) {
  echo "Ingenieros:", $name.'<br />';
}

//Wendy 
//Johana
//Esteban
?>
<?php
$today = 'Tue';

switch ($today) {
  case 'Mon':
    echo "Hoy es lunes.";
    break;
  case "Tue":
    echo "Hoy es Martes. Dia de trabajo";
    break;
  case "wed":
    echo "Hoy es miercoles.";
    break;
  case "Thu":
    echo "Hoy es jueves.";
    break;
  case "Fri":
    echo "Hoy es viernes.";
    break;
  case "Sat":
    echo "Hoy es sabado.";
    break;
  case "Sum":
    echo "Hoy es domingo";
    break;
  default:
    echo "Dia no valido";
    break;
}
//Muestra "Hoy es martes".
?>
<?php
$x=5;
switch ($x) {
  case 1:
    echo "One";
    break;
  case 2:
    echo "Two";
    break;
  default:
    echo "<br>", "Sin coincidencia";
}
// Outputs "Sin coincidencia"
?>

<?php
$day = 'fri';

switch ($day) {
  case 'Mon':
    echo "Primer dia de la semana";
    break;
  case 'Tue':
  case 'Wed':
  case 'Thu':
    echo 'dia de trabajo';
    break;
  case 'fri':
    echo "<br>", 'viernes! a un dia del descanso';
    break;
  default:
    echo 'Fin de semana';
}

// Outpust "Dia de trabajo"
?>

<?php
$x=1;
switch ($x) {
  case 1:
    echo "<br>", "uno";
  case 2:
    echo "<br>", "Dos";
  case 3: 
    echo  "<br>", "Tres";
  default:
    echo "<br>", "No hay coincidencia","<br>";
}

//Outputs "UnoDosTres No hay coincidencia"
?>

<?php
echo "Numeros impares";
for ($i=0; $i<10; $i++) {
  if ($i%2==0){
    continue;
  }
  echo   $i . ' ';
}

//Output: 1 3 5 7 9 
?>
<?php
function sayHello() {
  echo "<br>","mostrando resultado de funcion =","TechSolutions!";
}

sayHello(); //llamar a la funcion 

//Outputs "TechSolutions"
?>

<?php
function multiplayByTwo($number) {
  $answer = $number * 2;
  echo "<br>","mostrando resultado de la multiplicacion=", $answer;
}
multiplayByTwo(3);
//Outputs 6

function multiply($num1, $num2) {
  echo "<br>","mostrando resultado de la multiplicacion=", $num1 * $num2;
}
multiply(3, 6); 


//Outputs 18


function setCounter($num=10) {
  echo "<br>", "Counter is ".$num;
}
setCounter(42); //Counter is 42
setCounter(); //Counter is 10

function mult($num1, $num2) {
  $res = $num1 * $num2;
  return $res;
}

echo "<br>","mostrando multiplicacion con retorno=", mult(8, 3);
// Outputs 24 


?>
<?php
echo "<br>","mostrando rutas=", $_SERVER['SCRIPT_NAME'];
//Outputs "/somefile.php"
?>




<?php
echo "<br>","mostrando servidor=", $_SERVER['HTTP_HOST'], "<br>";
//Outputs "localhost"
?>

<?php
require 'config.php';
echo '<img src="'.$image_path.'Homecenter.jpeg" >';
?>
<h1>Formulario Post</h1>
<form action="first.php" method="post">
  <p>Name: <input type="text" name="name" /></p>
  <p>Age: <input type="text" name="age" /></p>
  <p><input type="submit" name="submit" value="Submit" /></p>
</form>
<h1>Formulario GET</h1>
<form action="actionGet.php" method="get">
  Name: <input type="text" name="name" /><br /><br />
  Age: <input type="text" name="age" /><br /><br />
  <input type="submit" name="submit" value="Submit" />
</form>

<?php
// Start the session

// Start the session
session_start();
$_SESSION['color'] = "Pink";
$_SESSION['name'] = "Wendy";
?>
<!DOCTYPE html>
<html>
<body>
<?php
echo "Tu nombre es " . $_SESSION['name'],"y su color de ojos es",$_SESSION['color'] ;
// Outputs "Your name is John"
?>
</body>
</html>
<?php
$value = "Wendy Johana";
setcookie("user", $value, time() + (86400 * 30), '/'); 

if(isset($_COOKIE['user'])) {
  echo "<br>Value is: ". $_COOKIE['user'];
}
//Outputs "Value is: John"
?>


<?php
$myfile = fopen("integrantes.txt", "w");

$txt = "Wendy\n";
fwrite($myfile, $txt);
$txt = "Johana\n";
fwrite($myfile, $txt);
$txt = "Cristian\n";
fwrite($myfile, $txt);

fclose($myfile);

/* File contains:
Wendy
Cristian
*/
?>


<?php
$myFile = "otroArchivo.txt";
$fh = fopen($myFile, 'a');
fwrite($fh, "Some text");
fclose($fh);
?>
<?php
if(isset($_POST['text'])) {
  $nombre = $_POST['text'];
  $handle = fopen('nombres.txt', 'a');
  fwrite($handle, $nombre."\n");
  fclose($handle); 
}
?>
<form method="post">
  Name: <input type="text" name="text" /> 
  <input type="submit" name="submit" />
</form>


<?php

$read = file('nombres.txt');
$count = count($read);
$i = 1;
foreach ($read as $line) {
  echo $line;
  if($i < $count) {
    echo ', ';
  }
  $i++;
}
?>
<?php

class Dogi {
  public $legs=4;
  public function display() {
    echo "<br>", $this->legs;
  }
}
$d1 = new Dogi();
$d1->display(); //4

$d2 = new Dogi();
$d2->legs = 2;
$d2->display(); //2
?>

<?php

class Person {
  public $name;
  public $age;
  public function __construct($name, $age) {
    echo "<br>", "mostrando nombre desde un constructor=",$this->name = $name;
    echo "<br>","mostrando edad desde un constructor=",  $this->age = $age;
  }
}
$p = new Person("Johana", 17);
?>
<?php

class Persona {
  public function __destruct(){
    echo "<br>","Objecto destruido";
  }
}
$p = new Persona();
?>

<?php
class Animal {
  public $name;
  public function hi() {
    echo "<br>","Hi from Animal","<br>";
  }
}
class Dog extends Animal {
}

$d = new Dog();
$d->hi();
?>

<?php
interface AnimalInterface {
  public function makeSound();
}

class Dogo implements AnimalInterface {
  public function makeSound() {
    echo "<br>","Guau guau! <br />";
  }
}
class Cat implements AnimalInterface {
  public function makeSound() {
    echo  "<br>", "Miauuu miauuu! <br />";
  }
}

$myObj1 = new Dogo();
$myObj1->makeSound();

$myObj2 = new Cat();
$myObj2->makeSound();
?>

<?php
abstract class Fruit {
  private $color;

  abstract public function eat();

  public function setColor($color) {
   echo $this->color = $color;
  }
}

class Apple extends Fruit {
  public function eat() {
    echo "<br>", "Delicioso";
  }
}

$obj = new Apple();
$obj->eat();
?>

<?php
class myClass {
  static $myProperty = 42;
  static function myMethod() {
    echo "<br>", self::$myProperty;
  }
}

myClass::myMethod();
?>

</body>
</html>