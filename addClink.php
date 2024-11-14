<?php

include  "m.php";
include  "t.php";


$clincname=htmlspecialchars(strip_tags($_POST['clincname']));
$cityid=htmlspecialchars(strip_tags($_POST['cityid']));

if($clincname!=null && $cityid!=null){
$stm=$con->prepare("INSERT INTO `clinc_city`( `clincName`, `City_id`) VALUES (?,?)");  
  $stm->execute(array($clincname,$cityid));
    $r=$stm->rowCount();
    if($r>0){
        echo json_encode(array("s"=>"sucsses"));
    }
    else{
        echo json_encode(array("s"=>"sucsses"));
    }
}
