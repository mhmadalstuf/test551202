<?php

include  "m.php";
$id=htmlspecialchars(strip_tags($_POST['id']));

$stm=$con->prepare(" SELECT * FROM users WHERE `clinc_id`= ? ");
$stm->execute(array($id));
$data=$stm->fetchAll(PDO::FETCH_ASSOC);
$r=$stm->rowCount();
if($r>0){
    echo json_encode(array("s"=>"sucsses","data"=>$data));
}
else{
    echo json_encode(array("s"=>"notSucsses"));
}
