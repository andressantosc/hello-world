<?php

$boxes = '';
$number = $_POST['times'];
for($i = 1; $i <= $number; $i++)
{
    $boxes = $boxes."<div class = 'card'>$i</div>";

}

?>
