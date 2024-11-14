<?php

include  "m.php";
$titel=htmlspecialchars(strip_tags($_POST['titel']));
$content=htmlspecialchars(strip_tags($_POST['content']));
$id=htmlspecialchars(strip_tags($_POST['id']));

$stm=$con->prepare(" UPDATE `note` SET `titel`=?,`content`=? WHERE `id`=? ");
$stm->execute(array($titel,$content,$id));
$r=$stm->rowCount();
if($r>0){
    echo json_encode(array("s"=>"sucsses"));
}
else{
    echo json_encode(array("s"=>"sucsses"));
}
