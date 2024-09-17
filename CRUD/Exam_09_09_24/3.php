<?php
$string="My address is: 3A Rashmani Road, kolkata, 711111";

function vowel_consonant($string){
    $vowels=0;
    $consonant=0;
    $string=strtolower($string);
$v=['a','e','i','o','u'];

$c="bcdfghjklmnpqrstvwxyz";
$ca=str_split($string);
$a="abcdefghijklmnopqrstuvwxyz";
$aa=str_split($a);

   foreach(str_split($string) as $char){
    if(in_array($char,$v)){
        $vowels++;
    }
    else if(in_array($char,$ca)){
        $consonant++;
    }
}
    return array($vowels,$consonant);
}
$v=['a','e','i','o','u'];
$string=strtolower($string);
$c="bcdfghjklmnpqrstvwxyz";
$ca=str_split($string);

$a="abcdefghijklmnopqrstuvwxyz";
$aa=str_split($a);
list($vowelCount,$consonantCount)=vowel_consonant($string);
echo "Vowels:" .$vowelCount;
echo"Consonant:".$consonantCount;
//print_r($a);
$arr=[1,2,3];
if(is_array($arr)){
    echo"It is a array";
}
else{
    echo"not a array";
}


$alph="";
foreach(str_split($string) as $char){
    if(in_array($char,$aa)){
        $alph.=$char;
    }
}
$falph=$alph[0];
$lalph=$alph[strlen($alph)-1];
echo"1st alphabet:".$falph;
echo"last alphabet:".$lalph;





?>