<?php

include  "m.php";
include  "t.php";

$rr=im('file');
$titel=htmlspecialchars(strip_tags($_POST['titel']));
$content=htmlspecialchars(strip_tags($_POST['content']));
$id=htmlspecialchars(strip_tags($_POST['id']));

$stm=$con->prepare(" INSERT INTO note (titel,content,usernote,imagenote) VALUES ('$titel','$content','$id','$rr') ");  
  $stm->execute();
    $r=$stm->rowCount();
    if($r>0){
        echo json_encode(array("s"=>"sucsses"));
    }
    else{
        echo json_encode(array("s"=>"sucsses"));
    }

