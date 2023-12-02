<?php
// kirim ke wa

if(isset($_POST['send_btn'])) {
    $nama    = $_POST['name'];
    $tgl     = $_POST['date'];
    $msg     = $_POST['catatan'];
    $url      = "https://wa.me/6285775522863/?text=Halo saya $nama, ingin reservasi wisata *PAKET COBAN* untuk tanggal $tgl. %0A *catatan* %0A $msg.%0A*DESTINASI WISATA*%0A 1. Wisata Coban Binangun.%0A 2. Area Selfi.%0A 3. Kolam Renang%0A 4. Area Kolam Terapi.%0A 5. Area Bermain Bambu.%0A 6. Area Santai. %0A*BENEFIT*%0A 1. Tiket Masuk.%0A 2. Welcome Snack. ";

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