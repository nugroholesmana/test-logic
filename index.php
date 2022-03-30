<?php
$string= "";
for($i=1;$i<=50;$i++){
    if($i%3==0 && $i%5!=0){
        $string .= "Frontend,";
    }elseif($i%5==0 && $i%3 != 0){
        $string .= "Backend,";
    }elseif($i%3==0 && $i%5==0){
        $string .= "Frontend Backend,";
    }else{
        $string .= $i.",";
    }
}

$string = substr($string,0,-1);
echo $string;