<?php



$winning_number = rand(0, 4);

foreach($_POST as $field_name => $contestant_name)
{
    $contestants_rand_number = rand(0,4);

    //winer!    
    if($contestants_rand_number == $winning_number)
    {
        $contestants[$contestant_name] = 'Winner';    
    }
    //looser!
    else
    {
        $contestants[$contestant_name] = 'Looser';
    }
}

?>
