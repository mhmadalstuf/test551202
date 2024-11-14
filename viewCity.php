<?php

include  "m.php";


$stm=$con->prepare(" SELECT * FROM citys  ");
$stm->execute();
$data=$stm->fetchAll(PDO::FETCH_ASSOC);
$r=$stm->rowCount();
if($r>0){
    echo json_encode(array("s"=>"sucsses","data"=>$data));
}
else{
    echo json_encode(array("s"=>"notSucsses"));
}
