<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    echo "Nama : ".$nama."<br>";
    echo "Telp : ".$telp."<br>";
    echo "Alamat : ".$alamat."<br>";

}