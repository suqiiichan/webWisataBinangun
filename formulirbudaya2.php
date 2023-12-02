<?php
// kirim ke wa

if(isset($_POST['send_btn'])) {
    $nama    = $_POST['name'];
    $tgl     = $_POST['date'];
    $msg     = $_POST['catatan'];
    $url     = "https://wa.me/6285775522863/?text=Halo saya $nama, ingin reservasi wisata *PAKET BUDAYA* untuk tanggal $tgl. %0A *catatan* %0A $msg.%0A*DESTINASI WISATA*%0A 1. Pasar Pring Sewu%0A 2. Makanan Jadul Jaman dulu%0A 3. Penampilan Budaya%0A 4. Gamelang%0A 5. Dolanan Jaman Bien. %0A *BENEFIT*%0A 1. Koin 10 KB%0A 2. Tempat Khusus%0A 3. Panggung Gratis.";

    // echo "<a href='https://wa.me/6285775522863/Halo saya '.$nama.', ingin reservasi paket homestay untuk tanggal'.$tgl></a>";

    // header("location : https://wa.me/6285775522863/Halo saya '.$nama.', ingin reservasi paket homestay untuk tanggal'.$tgl");

    // header("location : https://wa.me/6285775522863/Halo saya".$nama.", ingin reservasi paket homestay untuk tanggal");
 }

echo '<script type="text/javascript">';
echo 'window.location.href="'.$url.'"';
echo '</script>';

//  echo $nama;
//  echo "<br>";
//  echo $tgl;

?>