<?php
$a = "*";

for($i=1;$i<=5;$i++){

    for($j=1 ; $j<=$i ; $j++){
        echo $a;
    }
    echo '<br>';
}

for($i=1;$i<=5;$i++){

    for($j=4 ; $j>=$i ; $j--){
        echo '&nbsp';
    }
    for($k=1 ; $k<=$i ; $k++){
        echo $a;
    }

    echo '<br>';
}

for($i=1;$i<=5;$i++){

    for($j=4 ; $j>=$i ; $j--){
        echo '&nbsp&nbsp';
    }
    for($k=1 ; $k<=$i ; $k++){
        echo $a;
    }

    echo '<br>';
}

for($i=1;$i<=5;$i++){

    for($j=1 ; $j<=$i ; $j++){
        echo $a;
    }
    echo '<br>';
}
for($i=1;$i<=5;$i++){

    for($j=4 ; $j>=$i ; $j--){
        echo $a;
    }
    for($k=1 ; $k<=$i ; $k++){
        echo '&nbsp&nbsp';
    }

    echo '<br>';

}

$alphaAtoZ = range('A', 'Z');  
for($i=0; $i<5; $i++){   
  for($j=0; $j<=$i; $j++){  
    echo $alphaAtoZ[$i];  
    }  
    echo "<br>";  
}  

$num= range('1', '100');  
for($i=0; $i<5; $i++){   
  for($j=0; $j<=$i; $j++){  
    echo $num[$i];  
    }  
    echo "<br>";  
}  

$k=1;  
for($i=0;$i<5;$i++){  
for($j=0;$j<=$i;$j++){  
echo $k." ";  
$k++;  
}  
echo "<br>";  
} 

$alphaAtoZ = range('A', 'Z');  
for($i=0;$i<5;$i++){  
    for($j=0;$j<=$i;$j++){  
    echo $alphaAtoZ[$i];  
    $alphaAtoZ[$i]++;  
    }  
    echo "<br>";  
    } 

?>

