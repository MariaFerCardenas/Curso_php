<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>María Cárdenas</title>
</head>

<body>
    <?php
    // El codigo va aquí
    ?>
    <?php
    echo "<p> ¡Bienvenido! </p>";
    //Las declaraciones de PHP terminan con punto y coma (;)
    ?>
    <?php
    echo "<p> ¡Bienvenido de nuevo! </p>";
    ?>
    <?php
    echo "<p> Bimbo empresa multinacional A </p>";
    echo "<p> Bimbo empresa multinacional B </p>";
    echo "<p> Bimbo empresa multinacional C </p>";
    //Cada declaración de PHP debe terminar con un punto y coma
    ?>
    <?php
    echo "<p> <strong> Este es un texto en negrita. </strong> </p>";
    ?>
    <?php
    //Comentarios
    echo "<p> Bimbo es una empresa panificadora. </p>";
    //Este es un comentario en una sola linea 
    echo "<p> Es reconocida a nivel mundial. </p>";
    echo "<p> Esta conformada por más de 10.000 productos. </p>";
    ?>
    <?php
    //Comentarios de varias lineas
    echo "<p> Grupo Bimbo. </p>";
    /*Este es bloque de comentario 
          de varias lineas 
          que abarca varias lineas
        */
    echo "<p> Alimentamos un mundo mejor. </p>";
    ?>
    <?php
    //Variables
    $name = 'Maria';
    $age = 25;
    echo $name;
    //Muestra 'Maria'
    /* Las variables se utilizan como "contenedores" 
        en los que almacenamos información. 
        Una variable PHP comienza con un signo de dólar ($), 
        seguido del nombre de la variable*/
    ?>
    <?php
    //Constantes
    //Para crear una constante, use la función define ():
    define("MSG", "Bienvenido Al Público")
    //Muestra "Bienvenido Al Público"
    //El siguiente ejemplo crea una constante con un nombre que distingue entre mayúsculas y minúsculas: 
    ?>
    <?php
    //Constantes
    //Para crear una constante, use la función define ():
    define("MSG", "Bienvenido Al Público", true)
    //Muestra "Bienvenido Al Público"
    //El siguiente ejemplo crea una constante con un nombre que no distingue entre mayúsculas y minúsculas: 
    ?>
    <?php
    //Tipos de datos
    //Admitidos por PHP: String, Integer, Float, Boolean, Array, Object, NULL, Resource.
    $string1 = "¡Bienvenido!"; //comillas dobles
    $string2 = '¡Bienvenido!';  //comillas simples
    //Una cadena de caracteres puede ser cualquier texto dentro de un conjunto de comillas simples o dobles.
    ?>
    <?php
    //Entero PHP
    $int1 = 42; // número positivo
    $int2 = -42; // número negativo
    /*Criterios
        - No puede contener comas ni espacios en blanco. 
        - No debe tener punto decimal 
        - Puede ser positivo o negativo.
        */
    ?>
    <?php
    //Flotante PHP
    $x1 = 42.168;
    //Un número de coma flotante o flotante, es un número que incluye un punto decimal.
    ?>
    <?php
    //PHP booleano
    $x2 = true;
    $y = false;
    //Un booleano representa dos estados posibles: verdadero o falso.
    ?>
    <?php
    //PHP booleano
    //En este ejemplo, la cadena y el entero se combinan para determinar la suma de dos números.
    $str = "10";
    $int = 20;
    $sum = $str + $int;
    echo ($sum);
    //Salidas 30
    ?>
    <?php
    //Alcance de las variables
    /*Los ámbitos de variable más utilizados de PHP son locales, globales. 
        Una variable declarada fuera de una función tiene un alcance global. 
        Una variable declarada dentro de una función tiene un alcance local ]
        y solo se puede acceder a ella dentro de esa función*/
    $name1 = 'María Fernanda';
    function getName1()
    {
        echo $name1;
    }
    getName1();
    //Error variable indefinida: ¿Nombre?
    //ERROR: La variable no se definió dentro de la función
    ?>
    <?php
    //La palabra clave global
    /*La palabra clave global se utiliza para acceder a una variable global desde dentro de una función. 
        Para hacer esto, use la palabra clave global dentro de la función, 
        antes de las variables.*/
    $name2 = 'María Fernanda';
    function getName2()
    {
        global $name2;
        echo $name2;
    }
    getName2();
    //Muestra 'María Fernanda'
    ?>
    <?php
    //Variable variable
    /*Con PHP, puede usar una variable para especificar el nombre de otra variable.
        Una variable variable trata el valor de otra variable como su nombre.*/
    $a = 'Hola';
    $Hola = '¡Hola!';
    echo $$a;
    //Muestra '¡Hola!'
    ?>
    <?php
    //Operadores aritmeticos
    //Los operadores aritméticos trabajan con valores numéricos para realizar operaciones aritméticas comunes.
    $num1 = 8;
    $num2 = 6;

    //Suma
    echo $num1 + $num2; //14

    //Resta
    echo $num1 - $num2; //2

    //Multiplicación
    echo $num1 * $num2; //48

    //División 
    echo $num1 / $num2; //1.33333333333
    ?>
    <?php
    $x3 = 14;
    $y = 3;
    echo $x3 % $y //2
    /*El operador de módulo, representado por el signo%, devuelve el resto de la división 
        del primer operando por el segundo operando*/
    ?>
    <?php
    //Incremento y decremento
    $x++; // equivalent to $x = $x+1;
    $x--; // equivalent to $x = $x-1; 
    $x++; // post-increment 
    $x--; // post-decrement 
    ++$x; // pre-increment 
    --$x; // pre-decrement
    /*La diferencia es que el incremento posterior devuelve el valor original antes de cambiar la variable, 
        mientras que el incremento previo cambia la variable primero y luego devuelve el valor*/

    //EJEMPLO
    $a  = 2;
    $b = $a++; // $a=3,  $b=2
    $a  = 2;
    $b = ++$a; // $a=3,  $b=3
    ?>
    <?php
    //Operadores de Asignación
    $num1 = 5;
    $num2 = $num1;
    //Los operadores de asignación se utilizan para escribir valores en variables.
    $x = 50;
    $x += 100;
    echo $x;
    //Salida: 150
    ?>
    <?php
    //Matrices
    //Las matrices numéricas o indexadas asocian un índice numérico con sus valores.
    $names = array("David", "Amy", "John"); //Nombres empleadores
    //El indice se puede asignar manualmente
    $names[0] = "David";
    $names[1] = "Amy";
    $names[2] = "John";
    //Puede acceder a los elementos de la matriz a través de sus índices.
    echo $names[1] //Salida "Amy"
    ?>
    <?php
    //Puede tener números enteros, cadenas y otros tipos de datos juntos en una matriz.
    $myArray[0] = "John";
    $myArray[1] = "<strong>que Bimbo es una empresa llena de compromiso</strong>";
    $myArray[2] = 21;

    echo "$myArray[0] tiene $myArray[2] y sabe $myArray[1]";

    //Salida "John tiene 21 y sabe que Bimbo es una empresa llena de compromiso.
    ?>
    <?php
    //Matrices asociativas
    /*Las matrices asociativas son matrices que utilizan claves con nombre que les asigna. 
        Hay dos formas de crear una matriz asociativa*/
    $people1 = array("David" => "27", "Amy" => "21", "John" => "42");
    // ó
    $people1['David'] = "27";
    $people1['Amy'] = "21";
    $people1['John'] = "42";

    //Utilice las claves nombradas para acceder a los miembros de la matriz.
    echo $people1['Amy']; //Salida 21
    ?>
    <?php
    //Matrices multidimensionales
    //Esta matriz contiene una o más matrices

    //Matriz bidimensional con 3 matrices
    $people2 = array(
        'online' => array('David', 'Amy'),
        'offline' => array('John', 'Rob', 'Jack'),
        'away' => array('Arthur', 'Daniel')
    );

    /*Ahora la matriz bidimensional $ people2 contiene 3 matrices y tiene dos índices: fila y columna. 
        Para acceder a los elementos de la matriz $ people2, debemos apuntar a los dos índices*/
    echo $people2['online'][0]; //Salida "David"
    echo $people2['away'][1]; //Salida "Daniel"
    ?>
    <?php
    //Declaraciones condicionales

    /*La instrucción if else se usa para ejecutar cierto código si una condición es verdadera
        y otro código si la condición es falsa.*/
    /*if (condition) {
            código que se ejecutará if la condición es true;
        } else {
            código que se ejecutará if la condición es false;
        }
        */
    $x4 = 10;
    $y4 = 20;
    if ($x4 >= $y4) {
        echo $x4;
    } else {
        echo $y4;
    }
    //Salida "20"
    ?>
    <?php
    //La declaración de Elseif

    /*Utilice la instrucción if ... elseif ... else 
        para especificar una nueva condición para probar, si la primera condición es falsa.*/
    /*if (condition) {
            code to be executed if condition is true;
        } elseif (condition) {
            code to be executed if condition is true;
        } else {
            code to be executed if condition is false;
        }
        */
    $age2 = 21;

    if ($age2 <= 13) {
        echo "Niño.";
    } elseif ($age2 > 13 && $age2 < 19) {
        echo "Adolescentes";
    } else {
        echo "Adulto";
    }
    //Salida "Adulto"
    ?>
    <?php
    //Bucle
    //El ciclo while ejecuta un bloque de código siempre que la condición especificada sea verdadera.
    /*while (condition is true) {
            code to be executed;
         }
        */
    $i = 1;
    while ($i < 7) {
        echo "La evaluación de la empresa es $i <br />";
        $i++;
    }
    ?>
    <?php
    //El do ... while Loop
    /*The do...while loop will always execute the block of code once, 
        check the condition, and repeat the loop as long as the specified condition is true.*/
    /*do {
            code to be executed;
        } while (condition is true); 
        */

    /*El siguiente ejemplo escribirá algunos resultados y luego incrementará la variable $ i en uno. 
        Luego, se verifica la condición y el ciclo continúa ejecutándose, siempre que $ i sea menor o igual que 7.*/
    $i = 5;
    do {
        echo "El número es " . $i . "<br/>";
        $i++;
    } while ($i <= 7);

    //Salida
    // El numero es 5
    // El numero es 6
    // El numero es 7
    ?>
    <?php
    //El bucle for
    //El bucle for se utiliza cuando se sabe de antemano cuántas veces se debe ejecutar el script.
    /*for (init; test; increment) {
            codig a ejecutar;
        }
        */
    for ($a = 0; $a < 6; $a++) {
        echo "Valor de a: " . $a . "<br />";
    }
    ?>
    <?php
    //El bucle foreach
    //El bucle foreach funciona solo en matrices y se utiliza para recorrer cada par clave / valor en una matriz.
    /*foreach (array as $value) {
            codigo a ejecutar;
        }
        //or
        foreach (array as $key => $value) {
            codigo a ejecutar;
        }
        */

    /*El siguiente ejemplo demuestra un bucle que genera los valores de la matriz $ names.*/
    $names = array("John", "David", "Amy");
    foreach ($names as $name) {
        echo $name . '<br />';
    }
    // John
    // David
    // Amy
    ?>
    <?php
    //La declaración de switch
    /*switch (n) {
            case value1:
                //codigo a ejecutar if n=value1
            break;
            case value2:
                //codigo a ejecutar if n=value2
            break;
            ...
            default:
                //codigo a ejecutar if n es diferente a todas las etiquetas
        }
        */

    //Considere el siguiente ejemplo, que muestra el mensaje apropiado para cada día.
    $today = 'Martes';

    switch ($today) {
        case 'Lunes':
            echo "Hoy es Lunes.";
            break;
        case 'Martes':
            echo "Hoy es Martes.";
            break;
        case 'Miercoles':
            echo "Hoy es Miercoles.";
            break;
        case 'Jueves':
            echo "Hoy es Jueves.";
            break;
        case 'Viernes':
            echo "Hoy es Viernes.";
            break;
        case 'Sabado':
            echo "Hoy es Sabado.";
            break;
        case 'Domingo':
            echo "Hoy es Domingo.";
            break;
        default:
            echo "Día invalido.";
    }
    //Salida "Hoy es Martes."
    ?>
    <?php
    //Predeterminada
    //Se utiliza la declaración predeterminada si no se encuentra ninguna coincidencia.
    $x5 = 5;
    switch ($x5) {
        case 1:
            echo "Uno";
            break;
        case 2:
            echo "Dos";
            break;
        default:
            echo "Sin coincidencia";
    }

    //Salida "Sin coincidencia"
    ?>
    <?php
    //La declaración de descanso
    //Si la pausa "break" está ausente, el código sigue
    $x6 = 1;
    switch ($x6) {
        case 1:
            echo "Uno";
        case 2:
            echo "Dos";
        case 3:
            echo "Tres";
        default:
            echo "Sin coincidencia";
    }

    //Salida "UnoDosTresSin coincidencia"
    ?>
    <?php
    //La declaración de continuar
    /*Cuando se usa dentro de una estructura de bucle, 
        la instrucción continue permite omitir lo que queda de la iteración del bucle actual. 
        Luego continúa la ejecución en la evaluación de la condición y pasa al comienzo de la siguiente iteración.*/
    for ($i = 0; $i < 10; $i++) {
        if ($i % 2 == 0) {
            continue;
        }
        echo $i . ' ';
    }

    //Salida: 1 3 5 7 9
    ?>
    <?php
    //Incluir
    /*Las declaraciones include y require 
        permiten la inserción del contenido de un archivo PHP en otro archivo PHP, 
        antes de que el servidor lo ejecute.*/
    echo '<h1>Bienvenidos</h1>';

    /*<html>
            <body>

                <?php include 'header.php'; ?>

                <p>Some text.</p>
                <p>Some text.</p>
            </body>
        </html>
        */

    /*Cuando se incluye un archivo usando la instrucción de inclusión, 
        pero PHP no puede encontrarlo, el script continúa ejecutándose. 
        En el caso de require, el script dejará de ejecutarse y producirá un error.*/
    ?>
    <?php
    //Funciones
    /*Una función no se ejecutará inmediatamente cuando se cargue una página. Se ejecutará mediante una llamada a la función.*/
    function functionName()
    {
        //codigo a ejecutar
    }
    ?>
    <?php
    /*En el siguiente ejemplo, creamos la función sayHello (). 
         La llave de apertura ({) indica que este es el comienzo del código de función, 
         mientras que la llave de cierre (}) indica que este es el final.*/
    function sayHello()
    {
        echo "Hello!";
    }
    sayHello(); //Llamar a la función

    //Salida "Hello!"
    ?>
    <?php
    //Parámetros de función
    /*Los argumentos se especifican después del nombre de la función y entre paréntesis. 
        Aquí, nuestra función toma un número, lo multiplica por dos e imprime el resultado*/
    function multiplyByTwo($number)
    {
        $answer = $number * 2;
        echo $answer;
    }
    multiplyByTwo(3);

    //Salida 6

    /*Puede agregar tantos argumentos como desee, siempre que estén separados por comas*/
    ?>
    <?php
    //Argumentos predeterminados
    /*En el siguiente ejemplo, llamamos a la función setCounter (). 
        No hay argumentos, por lo que tomará los valores predeterminados que se han definido.*/
    function setCounter($num = 10)
    {
        echo "Contador es " . $num;
    }
    setCounter(42); //Contador es 42
    setCounter(); //Contador es 10
    ?>
    <?php
    //Regreso
    /*Una función puede devolver un valor mediante la declaración de retorno. 
        Return detiene la ejecución de la función y envía el valor al código de llamada.*/
    function mult($num1, $num2)
    {
        $res = $num1 * $num2;
        return $res;
    }

    echo mult(8, 3);
    //Salida 24        
    ?>
    <?php
    //Variables predefinidas
    /*$ _SERVER es una matriz que incluye información como encabezados, rutas y ubicaciones de scripts. 
        Las entradas de esta matriz son creadas por el servidor web. $ _SERVER ['SCRIPT_NAME']
        devuelve la ruta de la secuencia de comandos actual*/
    echo $_SERVER['SCRIPT_NAME'];

    //Salida "/somefile.php"
    ?>
    <?php
    //$ _SERVER ['HTTP_HOST'] devuelve el encabezado del Host de la solicitud actual.
    echo $_SERVER['HTTP_HOST'];
    //Salida "localhost"
    ?>
    <?php
    /*Este método puede ser útil cuando tiene muchas imágenes en su servidor y necesita transferir el sitio web a otro host. 
        En lugar de cambiar la ruta de cada imagen, puede hacer lo siguiente*/
    $host = $_SERVER['HTTP_HOST'];
    $image_path = $host . '/images/';
    ?>
    <?php
    //Utilice el archivo config.php en sus scripts
    require 'config.php';
    echo '<img src="' . $image_path . 'header.png" />';
    ?>
    <?php
    //Formularios
    /*El propósito de las superglobales PHP $ _GET y $ _POST es recopilar datos que se han ingresado en un formulario.
        El siguiente ejemplo muestra un formulario HTML simple que incluye dos campos de entrada y un botón de envío*/
    /*<form action="first.php" method="post">
            <p>Name: <input type="text" name="name" /></p>
            <p>Age: <input type="text" name="age" /></p>
            <p><input type="submit" name="submit" value="Submit" 
            /></p>
        </form>
        */
    ?>
    <?php
    //GET
    /*GET también establece límites en la cantidad de información que se puede enviar, 
        alrededor de 2000 caracteres.*/
    /*<form action="actionGet.php" method="get">
            Name: <input type="text" name="name" /><br /><br />
            Age: <input type="text" name="age" /><br /><br />
            <input type="submit" name="submit" value="Submit" />
        </form>
        */
    echo "Hi " . $_GET['name'] . ". ";
    echo "You are " . $_GET['age'] . " years old.";
    ?>
    <?php
    //Sesiones
    /*La información no se almacena en la computadora del usuario, 
        como ocurre con las cookies. De forma predeterminada, 
        las variables de sesión duran hasta que el usuario cierra el navegador.*/
    //Iniciar la sesión en PHP
    session_start();

    $_SESSION['color'] = "red";
    $_SESSION['name'] = "John";
    ?>
    <?php
    // Start the session
    session_start();
    ?>
    <!DOCTYPE html>
    <html>

    <body>
        <?php
        echo "Your name is " . $_SESSION['name'];
        //Salida "Su nombre es John"
        ?>
    </body>
    <?php
        //Cookies
        //Cree cookies usando la función setcookie ():
        //setcookie(name, value, expire, path, domain, secure, httponly);

        /*Recuperamos el valor de la cookie "usuario" (usando la variable global $ _COOKIE). 
        También usamos la función isset () para averiguar si la cookie está configurada*/
        $value = "John";
        setcookie("user", $value, time() + (86400 * 30), '/');

        if (isset($_COOKIE['user'])) {
            echo "Value is: " . $_COOKIE['user'];
        }
        //Salida "El valor es: John"
    ?>
    <?php
        //Manipular archivos
        //PHP ofrece una serie de funciones para usar al crear, leer, cargar y editar archivos.
        /*La función fopen () crea o abre un archivo. 
        Si usa fopen () con un archivo que no existe, el archivo se creará, 
        dado que el archivo se ha abierto para escribir (w) o agregar (a).*/
        $myfile = fopen("file.txt", "w");
    ?>
    <?php
        //Escribir en archivo
        $myfile = fopen("names.txt", "w");

        $txt = "John\n";
        fwrite($myfile, $txt);
        $txt = "David\n";
        fwrite($myfile, $txt);

        fclose($myfile);
        //La función fclose () cierra un archivo abierto y devuelve VERDADERO en caso de éxito o FALSO en caso de error.
        /* File contains:
        John
        David
        */

        //El símbolo \n se usa al escribir nuevas líneas
    ?>
    <?php
        //Agregar a un archivo
        //Si desea agregar contenido a un archivo, debe abrir el archivo en modo de agregar.
        $myFile = "test.txt";
        $fh = fopen($myFile, 'a');
        fwrite($fh, "Some text");
        fclose($fh);
    ?>
    <?php
        //Leer un archivo
        //La función file () lee el archivo completo en una matriz. Cada elemento dentro de la matriz corresponde a una línea en el archivo
        //Esto evita imprimir esa coma final, ya que para la última línea, $ i es igual a $ count.
        $read = file('names.txt');
        $count = count($read);
        $i = 1;
        foreach ($read as $line) {
            echo $line .", ";
            if ($i < $count) {
                echo ', ';
            }
        }
    ?>
    <?php
        //Clases PHP
        class Person {
            public $age; //property
            public function speak() { //method
              echo "Hi!";
            }
        }
        //El código anterior define una clase Person que incluye una propiedad de edad y un método speak ().
    ?>
    <?php
        //Objetos PHP
        /*Para crear una instancia de un objeto de una clase, use la palabra clave new:
        $bob = new Person();*/

        /*Para acceder a las propiedades y métodos de un objeto, use la construcción de flecha (->), como en:
        echo $bob->age;*/

        //Definamos la clase Person, creemos una instancia de un objeto, hagamos una asignación y llamemos al método speak ():
        class Person1 {
            public $age3;
            function speak() {
                echo "Hi!";
            }
        }
        $p1 = new Person1(); //Instanciar un objeto
        $p1-> age3 = 23; //asignación
        echo $p1->age3; //23
        $p1->speak(); //Hi!
    ?>
    <?php
        //$this
        //$this es una pseudovariable que es una referencia al objeto de llamada
        class Dog {
            public function display() {
                echo $this->legs;
            }
        }
        $d1 = new Dog();
        $d1->display(); //4

        $d2 = new Dog();
        $d2->legs = 2;
        $d2->display(); //2
    ?>
    <?php
        //Constructor de clases PHP
        /*PHP proporciona el método mágico del constructor __construct (), 
        que se llama automáticamente cada vez que se crea una instancia de un nuevo objeto.*/
        class Person2 {
            public function __construct() {
                echo "Crear objeto";
            }
        }
        $p2 = new Person2();  
        /*El método __construct () se usa a menudo para cualquier inicialización 
        que el objeto pueda necesitar antes de ser usado.*/
    ?>
    <?php
        //Destructor de clases PHP
        //Método de destructor __destruct (), se llama automáticamente cuando se destruye un objeto.
        class Person3 {
            public function __destruct() {
                echo "Destruir objeto";
            }
        }
        $p2 = new Person3();
    ?>
    <?php
        //Herencia de clases PHP
        /*La clase que hereda los métodos y propiedades se llama subclase. 
        La clase de la que hereda una subclase se llama clase padre.*/
        //La herencia se logra mediante la palabra clave extends.
        class Animal {
            public $name;
            public function hi() {
                echo "Hi from animal";
            }
        }
        class Dog1 extends Animal {
        } 

        $d = new Dog1 ();
        $d->hi();
    ?>
    <?php
        //Interfaces PHP
        /*La palabra clave de interfaz define una interfaz. 
        La palabra clave implements se usa en una clase para implementar una interfaz.
        Por ejemplo, AnimalInterface se define con una declaración para la función makeSound (), 
        pero no se implementa hasta que se usa en una clase:*/
        interface AnimalInterface {
            public function makeSound();
        }
        class Dog2 implements AnimalInterface {
            public function makeSound() { 
                echo "Woof! <br />";
            }    
        }
        class Cat implements AnimalInterface {
            public function makeSound() {
                echo "Meow! <br />";
            }
        }
        $myObj1 = new Dog2();
        $myObj1->makeSound();   
    ?>
    <?php
        //Clases abstractas de PHP
        //La palabra clave abstracta se utiliza para crear una clase abstracta o un método abstracto.
        abstract class Fruit {
            private $color;

            abstract public function eat();

            public function setColor($c) {
                $this->color = $c;
            }
        }
        
        class Apple extends Fruit {
            public function eat() {
                echo "Omnomnom";
            }  
        }
    ?>
    <?php
        //La palabra clave estática
        /*Se accede a una propiedad o método estático 
        utilizando el operador de resolución de alcance:: 
        entre el nombre de la clase y el nombre de la propiedad / método.*/
        class myClass1 {
            static $myStaticProperty = 42;
        }
        
        echo myClass1::$myStaticProperty;
    ?>
    <?php
        /*La palabra clave self es necesaria para acceder a una propiedad estática 
        desde un método estático en una definición de clase.*/
        class myClass {
            static $myStaticProperty = 42;
            static function myMethod() {
                echo self::$myProperty;
            }
        }
        
        myClass::myMethod();
    ?>
</body>
</html>