<?php

foreach($lesConferences as $uneConference)
{  
    if($uneConference->NBVOTES == 1)
    {
        echo "<input checked type='checkbox' name='vote[]' value='".$uneConference->IDCONFERENCE."'>".$uneConference->TITRE ." - ".$uneConference->NBVOTES ."<br>"; 
    }
    else
    {
         echo "<input  type='checkbox' name='vote[]' value='".$uneConference->IDCONFERENCE."'>".$uneConference->TITRE ." - ".$uneConference->NBVOTES ."<br>"; 
    }
   
}
echo "<input type='button' value = 'Voter pour les conférences selectionnées' onclick='ValiderVote()'>";
?>