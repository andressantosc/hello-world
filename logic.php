<?php

date_default_timezone_set('CDT');
$hour = date('G');

if($hour > 20 || $hour < 6)
{
    $class = 'night';
}
else
{
    $class = 'day';
}


?>
