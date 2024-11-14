<?php

include  "m.php";
include  "t.php";


$cityname=htmlspecialchars(strip_tags($_POST['cityname']));

if($cityname!=null){
$stm=$con->prepare(" INSERT INTO citys (cityName) VALUES ('$cityname') ");  
  $stm->execute();
    $r=$stm->rowCount();
    if($r>0){
        echo json_encode(array("s"=>"sucsses"));
    }
    else{
        echo json_encode(array("s"=>"sucsses"));
    }
}
