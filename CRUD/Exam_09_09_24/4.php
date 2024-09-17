<?php
$n=[10,-2,0,15,-7,3,-1,0,6,0];
$pos=0;
$neg=0;
$z=0;

foreach($n as $num){
    if($num>0){
        $pos++;
    }
    elseif($num<0){
        $neg++;

    }
    else{
        $z++;
    }
}
echo "Positive no:".$pos;
echo "Negative no:".$neg;
echo "Zero:".$z;

?>