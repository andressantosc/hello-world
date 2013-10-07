<!DOCTYPE html>
<html>
<head>
    <?php
    require('logic2.php');
    ?>

    <link rel = 'stylesheet' href= 'styles.css' type= 'text/css'>

</head>

<body>
    Input the number of squares you want in this page! <br>
    <form action= 'loops.php' method= 'POST'>
        <input type = 'text' name = 'times'><br>
        <input type = 'submit'><br>
    </form>
    
    <?=$boxes?>

</body>

</html>
