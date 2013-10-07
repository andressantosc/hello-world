<!DOCTYPE html>
<html>
<head>
    <?php
    require('logic3.php');
    ?>

    <link rel = 'stylesheet' href= 'styles.css' type= 'text/css'>

</head>

<body>

    <form action= 'arrays.php' method= 'POST'>
        <input type = 'text' name = 'contestant1'><br>
        <input type = 'text' name = 'contestant2'><br>
        <input type = 'text' name = 'contestant3'><br>
        <input type = 'text' name = 'contestant4'><br>
        <input type = 'submit'><br>
    <form>

    <?php
    foreach($_POST as $key => $value)  
    {
        echo $key. " is a " .$value. "<br>"; 
    }  
    ?>

</body>

</html>
