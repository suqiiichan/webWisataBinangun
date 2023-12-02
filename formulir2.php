<?php
// kirim ke wa

if(isset($_POST['send_btn'])) {
    $nama    = $_POST['name'];
    $tgl     = $_POST['date'];
    $msg     = $_POST['catatan'];
    $url     = "https://wa.me/6285775522863/?text=Halo saya $nama, ingin reservasi paket homestay untuk tanggal $tgl. %0A *catatan* %0A $msg. ";

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