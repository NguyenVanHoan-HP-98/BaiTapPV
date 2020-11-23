<?php
$mang = array();
$mangkq = array();
$mang = [11, 2, 8, 10, 5, 99, 1, 8, 9];
$n = 3;
// for ($i = 0; $i < 3 * $n; $i++) {
//     $mang[$i] = rand(1, 1000);
// }
echo "Mảng đầu vào: ";
for ($i = 0; $i < 3 * $n; $i++) {
    echo "$mang[$i], ";
}
echo "<br><br>";
for ($i = 0; $i < count($mang); $i++) {
    if ($i % 3 == 0) {
        $mangkq[$i] = $mang[($i / $n)];
        $co = 1;
    } else {
        if ($i % 3 == 1) {
            $mangkq[$i] = $mang[(($i - 1) / 3) + $n];
            $co == 0;
        } else {
            $mangkq[$i] = $mang[(($i - 2) / 3) + $n * 2];
        }
    }
}
echo "Kết quả: ";
for ($i = 0; $i < count($mangkq); $i++) {
    echo "$mangkq[$i], ";
}