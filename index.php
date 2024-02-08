<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo("i am mr echoooooooooooooooo <br />");
        echo(phpversion());

        $Color = "red";
        echo "<br/>";
        echo $Color;
        echo "<br/> my best color is $Color  and blue";

        # This is a new comment

        /* multi-line comment */


        $x = 5;
        $y = 'johndoe';

        echo $x . $y;
        echo '<br />';

        // DATAtypes in php 
        // String
        // Integer
        // Float (floating point numbers - also called double)
        // Boolean
        // Array
        // Object
        // NULL
        // Resource

        var_dump(5);
        echo '<br />';
        var_dump("John");
        echo '<br />';
        var_dump(3.14);
        echo '<br />';
        var_dump(true);
        echo '<br />';
        var_dump([2, 3, 56]);
        echo '<br />';
        var_dump(NULL);

        // {var_dump() echo};

        $value1 = " Learn PHP";

        echo "<h2>" . $value1 . "</h2> . <br/>";

        

        $a = $b = $c = 'fruits';


        print "<h2>PHP is Fun!</h2>";
        print "Hello world!<br>";
        print "I'm about to learn PHP!";

        $isPlaying = true;
        $notPlaying = false;

        if($isPlaying){
            echo "<br/> i am playing";
        }elseif($notPlaying){
            echo "i am not playing";
        };

        echo "<br/>";

        $cars = array("BMW", "Nisan", "Benz", "Camery");
        $cars = ["BMW", "Nisan", "Benz", "Camery"];
        var_dump($cars );
        echo "<br/>";

        class Car {
            public $color;
            public $model;
            public function __construct($color, $model) {
              $this->color = $color;
              $this->model = $model;
            }
            public function message() {
              return "My car is a " . $this->color . " " . $this->model . "!";
            }
          }
          
          $myCar = new Car("red", "Volvo");
          var_dump($myCar);

          echo "<br/>";



          class Person {
            public $Name;
            public $Age;
            public $Lastname;
        
            public function __construct($Name, $Age, $Lastname){
                $this->Name = $Name;
                $this->Age = $Age;
                $this->Lastname = $Lastname;
            }
        
            public function PrintMessage() {
                return "My Name is " . $this->Name . " " . $this->Lastname . " and Age is " . $this->Age;
            }
        };
        
        $Brother = new Person("John", 50, "Doe");
        var_dump($Brother);
        
        $empty = NULL;
        $empty = "emmanuel: ";
        var_dump($empty);

        echo "<br/>";
        
        $studentAge = 10;
        
        $studentAge = (string) $studentAge;
        var_dump($studentAge);
        
        echo "<br/>";
        
        // String Length
        echo strlen("Ekener");
        
        echo "<br/>";
        // Word Count
        echo str_word_count("Hello world!");
        
        // Search For Text Within a String
        echo "<br/>";
        echo strpos("Hello world!", "world");
        
        echo "<br/>";
        $x = "Hello World!";
        echo strtoupper($x);
        
        echo "<br/>";
        $x = "Hello World!";
        echo strtolower($x);
        
        echo "<br/>";
        $x = "Hello World!";
        echo str_replace("World", "Dolly", $x);
        
        echo "<br/>";
        $x = "Hello World!";
        echo strrev($x);
        echo "<br/>";
        
        $x = "He + llo + World!";
        $y = explode("+", $x);
        
        //Use the print_r() function to display the result:
        print_r($y);
        
        echo "<br/>";
        $x = "Hello";
        $y = "World";
        $z = $x . $y;
        echo $z;
        
        echo "<br/>";
        $x = "Hello World!";
        echo substr($x, 6, 6);
        echo "<br/>";
        $x = "Hello World!";
        echo substr($x, -5, 3);
        
        /*
        Result:
        Array ( [0] => Hello [1] => World! );
        
        */
        
        // $x = "We are the so-called \"Vikings\" from the north.";
        
        // echo(10 * NAN );
        
        $num = 4 * 2.5;
        var_dump ($num);
        
        $maxValue = PHP_INT_MAX;
        echo "The maximum integer value on this system is: $maxValue";
        
        $x = 5985;
        var_dump(is_int($x));
        
        $x = 59.85;
        var_dump(is_int($x));
        
        $number1 = 0.1 + 0.2;
        $number2 = 0.3;
        
        $tolerance = PHP_FLOAT_EPSILON;
        
        if (abs($number1 - $number2) < $tolerance) {
            echo "The numbers are considered equal.";
        } else {
            echo "The numbers are not equal.";
        }
        
        
        echo "<br/>";
        $x = 5985;
        var_dump(is_numeric($x));
        echo "<br/>";
        
        $x = "5985";
        var_dump(is_numeric($x));
        echo "<br/>";
        $x = "59.85" + 100;
        var_dump(is_numeric($x));
        echo "59.85" + 100;
        echo "<br/>";

        $x = "Hello";
        var_dump(is_numeric($x));

        $myArray = array(
            array('x','y','z'),
            array('x','y','z'),
            array('x','y','z'),
            array('x','y','z'),
            array('x','y','z'),
            array('x','y','z'),
        );

        var_dump($myArray[0]);
        echo '<br/>';
        var_dump($myArray[1]);
        echo '<br/>';
        var_dump($myArray[2]);
        echo '<br/>';
        var_dump($myArray[3]);
        echo '<br/>';
        var_dump($myArray[4]);
        echo '<br/>';
        var_dump($myArray[5]);
        
        $b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        echo $b[0];
        
        // echo(pi());
        
        $variable = 994263478827687875729;
        
        echo(pi()*$variable );
        
        echo(min(0, 150, 30, 20, -8, -200));
        echo(max(0, 150, 30, 20, -8, -200));
        echo(abs(-6.7));
        echo(sqrt(64));
        
        echo '<br/>';
        echo(rand());

        define("GREETING", "Welcome to W3Schools.com!");
        echo GREETING;

        // ((function(){
        //     echo "this is a function"
        // }))()
        
        $x = 10;
        $y = 20;
        $x += $y;
        echo($x);

        echo($x +=$y);


        $x = 100;  
        $y = "100";
        var_dump($x <> $y); // returns false because values are equal


        $x = 100;  
        $y = "100";
        var_dump($x !== $y); // returns true because types are not equal
        

        $x = 5;  
        $y = 10;

        echo ($x <=> $y); // returns -1 because $x is less than $y
        echo "<br>";

        $x = 10;  
        $y = 10;

        echo ($x <=> $y); // returns 0 because values are equal
        echo "<br>";

        $x = 15;  
        $y = 10;

        var_dump($x <=> $y); // returns +1 because $x is greater than $y

        $x = 10;  
        echo $x++;
        echo $x++;
        $txt1 = "Hello";
        $txt2 = " world!";
        $txt1 .= $txt2;
        echo $txt1;

        $x = array(" a" => "red", "b" => "green");  
        $y = array("c" => "blue", "d" => "yellow");  

        print_r($x + $y); // union of $x and $y

        $user = "John Doe";

        // echo $user=="John Doe" ? "i am $user" : "user not found Login again";
        echo empty($user) ? "i am $user" : "user not found Login again";

        $t = date("H");

        if ($t < "20") {
        echo "Have a good day!";
        } else {
        echo "Have a good night!";
        }

        $t = date("H");

        if ($t < "10") {
        echo "Have a good morning!";
        } elseif ($t < "20") {
        echo "Have a good day!";
        } else {
        echo "Have a good night!";
        }
        echo "<br>";


        echo "Today is " . date("Y/m/d") . "<br>";
        echo "Today is " . date("Y.m.d") . "<br>";
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("l");

        echo("&copy; 2010");
        echo( date('Y'))


        function familyName($fname) {
            echo "$fname <br>";
          }
          
          familyName("Jani");
          familyName("Hege");
          familyName("Stale");
          familyName("Kai Jim");
          familyName("Borge");
          
          function setHeight($minheight = 50) {
            echo "The height is : $minheight <br>";
          }
          
          setHeight(350);
          setHeight(); // will use the default value of 50
          setHeight(135);
          setHeight(80);

          

          function sum($x, $y) {
            $z = $x + $y;
            return $z;
          }
          
          echo "5 + 10 = " . sum(5, 10) . "<br>";
          echo "7 + 13 = " . sum(7, 13) . "<br>";
          echo "2 + 4 = " . sum(2, 4);

          $color = 'red';

          switch($color){
            case 'red':
              echo " Your skin color is " . $color;
            break;
            case 'green':
              echo " Your skin color is " . $color;
            break;
            case 'yellow':
              echo " Your skin color is " . $color
            break;

            default:
            echo " Unknown skin color " . $color;
          }


          // for ($i=0; $i <= 10 ; $i++) { 
          //   echo "The number is ". $i . " <br>;
          // }

          for ($x = 0; $x <= 10; $x++) {
            if ($i == 3) break;
            echo "The number is: $x <br>";
          }

          $i = 1;
          while ($i < 10) {
            echo "The number is: $i <br>";
            $i++;
          }

          $i = 1;
          do{
            if ($i == 3) break;
            echo "The number is: $i <br>";
            $i++;
          }while ($i < 10)


          $colors = array("red", "green", "blue", "yellow");

          foreach ($colors as $x) {
            echo "$x <br>";
          }

          $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

          foreach ($members as $x => $y) {
            echo "$x : $y <br>";
          }
          
        ?>

</body>
</html>