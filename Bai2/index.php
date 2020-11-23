<?php
$mang = array();
for ($i = 0; $i < 1000; $i++) {
    $mang[$i] = rand(- (pow(2, 30)), (pow(2, 30 - 1)));
}
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
echo "Số lớn thứ nhất" . ': ' . $mang[count($mang) - 1];
echo "<br>";
echo "Số lớn thứ hai" . ':' . $mang[count($mang) - 2];
echo "<br>";
echo 'Kết Quả :';
$ketqua = $mang[count($mang) - 1] + $mang[count($mang) - 2];
echo $ketqua;