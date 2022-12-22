
<?php

//for döngüsü ile üçgen çizimi

$n = 10;
$symbol = "*";

for ($i = 1; $i <= $n; $i++) {
    echo '<br>';
    for ($j = 1; $j <= $i; $j++) {
        
        echo $symbol;
    
    }
 
}
$echo = "das";

//Çift sayıları bulan örnek

$ciftsayilar = [];

for($i=1; $i<=100; $i++){
    if($i % 2 == 0 ){
        $ciftsayilar[] = $i;
    }
}

echo '<pre>';
print_r($ciftsayilar);
echo '</pre>';


?>
