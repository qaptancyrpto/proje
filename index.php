
<?php
$kat2 = array();
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $kat2[] = $i;
    }
}

/*
echo "2'e tam bölünen sayılar: ";
foreach ($kat2 as $sayi) {
    echo $sayi . " ";
}
*/

$ciftsayilar = [];

for($i=1; $i<=100; $i++){
    if($i % 5 == 0 ){
        $ciftsayilar[] = $i;
    }
}

echo '<pre>';
print_r($ciftsayilar);
echo '</pre>';





?>