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

        

        $a = $b = $c = 'fruits';
        ?>

<script>
            document.write($b);
        </script>
        
</body>
</html>