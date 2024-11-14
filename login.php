<?php

include  "m.php";
$password=htmlspecialchars(strip_tags($_POST['password']));
$email=htmlspecialchars(strip_tags($_POST['email']));
$stm=$con->prepare(" SELECT * FROM user WHERE `password`= ? AND `email`= ? ");
$stm->execute(array($password,$email));
$data=$stm->fetchAll(PDO::FETCH_ASSOC);
$r=$stm->rowCount();

if($r>0){
    echo json_encode(array("s"=>"sucsses","data"=>$data));
}
else{
    echo json_encode(array("s"=>"notSucsses"));
}
