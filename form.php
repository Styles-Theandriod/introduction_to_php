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


       function Myfunction( int $param1,  string $param2): int{
        return $param1  + $param2;
   }

    //   Dynamic function calling 
    $result = call_user_func('Myfunction', 20, 20);
    var_dump($result);

    // setcookie(name, value, expire, path, domain, secure, httponly);
    $cookie_name = "user";
    $cookie_value = "John Doe";   
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/');

    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie name '$cookie_name' is not set.";
    }else{
        echo "Cookie name '$cookie_name' is set!!". "<br>";
        echo 'Value is ' . $_COOKIE[$cookie_name] . '<br>';
    }


    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //Retrieving values from a form submitted using the POST method
        $name = $_REQUEST["name"];
        $email = $_REQUEST["email"];

        echo "<p> Submitted using POST method</p>";
        echo "<p>Name: <strong>$name</strong";
        echo "<strong>Email: <strong>$email</strong";
    }

    
    require 'vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    // Create a new PHPMailer instance
    $mail = new PHPMailer();
    
    $to = 'help.tutgoo@gmail.com';
    $subject = "A letter to my student";
    $message = 'Hello from Mr. Emmanuel. How is programming going on your end?';
    
    $mail->setFrom('Emmanuelajah190@gmail.com');
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->Body = $message;
    
    // Send the email
    if ($mail->send()) {
        echo 'Email sent successfully well well.';
    } else {
        echo 'Error: ' . $mail->ErrorInfo;
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