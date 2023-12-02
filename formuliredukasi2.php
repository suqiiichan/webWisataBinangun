<?php
// kirim ke wa

if(isset($_POST['send_btn'])) {
    $nama    = $_POST['name'];
    $tgl     = $_POST['date'];
    $msg     = $_POST['catatan'];
    $url     = "https://wa.me/6285775522863/?text=Halo saya $nama, ingin reservasi wisata *PAKET EDUKASI* untuk tanggal $tgl. %0A *catatan* %0A $msg.%0A*DESTINASI WISATA*%0A1. Keliling di Kebun Pandan.%0A2. Belajar membuat lilin dari Pandan.%0A3. Bermain Air di Coban Binangun.%0A4. Belajar Flora di Coban Binangun.%0A*BENEFIT*%0A1. Tiket Masuk Coban Binangun%0A2. 1 Homestay.%0A3. Welcome Snack.%0A4. Free Souvenir.";

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