<?php

include  "m.php";
$id=htmlspecialchars(strip_tags($_POST['id']));

$stm=$con->prepare(" DELETE FROM note WHERE id=? ");
$stm->execute(array($id));
$data=$stm->fetchAll(PDO::FETCH_ASSOC);
$r=$stm->rowCount();
if($r>0){
    echo json_encode(array("s"=>"sucsses"));
}
else{
    echo json_encode(array("s"=>"notsucsses"));
}
