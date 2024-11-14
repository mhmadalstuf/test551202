
<?php

function im($imageRequest){
        $imagename =rand(1000,10000) . $_FILES[$imageRequest]['name'];

           return $imagename;
        
    } 
  
    

?>

