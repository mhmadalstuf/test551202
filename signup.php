<?php

include  "m.php";
$password=htmlspecialchars(strip_tags($_POST['password']));
$email=htmlspecialchars(strip_tags($_POST['email']));
$stm=$con->prepare(" INSERT INTO user (password,email) VALUES ('$password','$email') ");
$stm->execute();
$r=$stm->rowCount();
if($r>0){
    echo json_encode(array("s"=>"sucsses"));
}
else{
    echo json_encode(array("s"=>"sucsses"));
}
