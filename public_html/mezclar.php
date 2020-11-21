
<?php

$vector=array();
$vector2=array();


for($i=0;$i<6;$i++){
    $c=0;
    $num=rand(1,14);
    for($j=0;$j<count($vector2);$j++){
        if($vector[$num]==$vector2[$j]) {
            $c=1; 
            break;
        }
    }
    if($c==1){
        $i--;
    }else{
        $vector2[]=$vector[$num];
    }  
}
require('examen.php');
?>