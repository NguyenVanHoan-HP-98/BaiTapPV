<?php
$mang = array();
$mangkq = array();

// for ($i = 0; $i < 10000; $i++) {
//     $mang[$i] = rand(- (pow(2, 30)), pow(2, 30 - 1));
// }
$mang = [1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15];
sort($mang);
echo "Số lượng phần tử mảng :";
echo count($mang);
echo "<br>";
echo "<br>";
for ($i = 0; $i < count($mang); $i++) {
    echo "$mang[$i]" . ', ';
}
echo "<br>";
echo "----------------------------";
echo "<br>";
$bienco;
for ($i = 0; $i < count($mang); $i++) {
    if ($mang[$i] >= 0) {
        $bienco = $i;
        break;
    }
}
// echo "<br>";
// echo  "số dương đầu tiên ở vị trí : $bienco";
// echo "<br>";
// echo "Giá trị củacủa : $mang[$bienco]";
// echo "<br>";
// echo "hai số bé nhất cách nhau số đơn vị là :" . ' ' . $mang[$bienco + 1] . ' - ' . $mang[$bienco] . ' = ' . ($mang[$bienco + 1] - $mang[$bienco]);
echo "<br>";
echo "Kết quả: ";
echo "<br>";
echo "[";
$bit = 0;
for ($i = 0; $i < count($mang); $i++) {
    if ($mang[$i] >= 0) {
        $giatri1 = $mang[$i];
        $giatri2 = $mang[$i] + ($mang[$bienco + 1] - $mang[$bienco]);
        for ($j = $i; $j < count($mang); $j++) {
            if ($giatri2 == $mang[$j]) {
                echo "[" . ' ' . $giatri1 . ' , ' . $giatri2 . ' ' . "]";
                $giatri1 = $giatri2;
                break;
            }
        }
    }
}
echo "]";