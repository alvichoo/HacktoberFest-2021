<?php

//isi numerik
$bil = 15;

//menentukan bilangan ganjil genap dengan perulangan for
for ($no = 1; $no <= $bil; $no++) {
    if ($no % 2 == 0) {
        echo "Cetak Bilangan ke-" . $no . " Merupakan Bilangan Genap<br>";
    } else {
        echo "Cetak Bilangan ke-" . $no . " Merupakan Bilangan Ganjil<br>";
    }
}
