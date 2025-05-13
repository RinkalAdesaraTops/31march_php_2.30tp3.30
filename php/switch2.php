<?php 
$str = 'e';
switch($str){
    case 'A':
    case 'E':
    case 'I':
    case 'O':
    case 'U':
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
        echo "$str is a vowel";
        break;
    default:
        echo "$str is a consonant";
        break;
}
?>