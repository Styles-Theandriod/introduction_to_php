<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




    <?php 
      
    require_once("./checker.php");
    

  
    function calculate(...$items){
            $AmountOfItems = count($items);
            $n = 0;
            
            for ($i=0; $i < $AmountOfItems; $i++) { 
                $n += $items[$i];
            }
            return $n;

        };
        
       $a = calculate(1, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13);
       echo $a; 


    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //Retrieving values from a form submitted using the POST method
        $name = $_REQUEST["name"];
        $email = $_REQUEST["email"];

        echo "<p> Submitted using POST method</p>";
        echo "<p>Name: <strong>$name</strong";
        echo "<strong>Email: <strong>$email</strong";
    }

    
    
    ?>
    

    <!-- <form action="welcome.php" method="post"> -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    Name:
    <input type="text" name="name" required> <br/>
    Email:
    <input type="email" name="email"> <br/>
    <input type="radio" name="gender">male <br/>
    <input type="submit">
    </form>
</body>
</html>