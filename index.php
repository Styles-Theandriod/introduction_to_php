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
        }
        
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

        echo strlen("Ekener");

        str_word_count()
        echo str_word_count("Hello world!");

        ?>


        
</body>
</html>