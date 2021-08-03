<?php 

for(;$i<10;$i++){
    if($i>5) break;
    if($i%2==0){
        continue;
    }
    echo "$i<br/>";
}

?>