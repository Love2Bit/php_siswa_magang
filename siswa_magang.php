<?php

$data_siswa=[];

while(true)
{
    // Data Siswa

    $siswa=&$data_siswa;

    // Banner Aplikasi

    tampil("Data Siswa Magang TOP");
    tampil("=====================");

    // User memilih data siswa magang

    $input_siswa=readline("Masukan data siswa ? ");

    // Validasi

    if(!preg_match("/^[A-Za-z]*$/",$input_siswa)||empty($input_siswa))
    {
        echo "Oops! Input can ony be a letter..!\n";
        continue;
    }

    // Simpan Data Siswa

    $siswa[]=$input_siswa;

    // Munculkan data siswa magang

    $nomor=1;

    foreach($siswa as $key)
    {
        tampil("$nomor.$key");
        $nomor++;
    }

    // Tanya User untuk memasukan data lagi

    $tanya=readline("Tambah Data ? ");

    if($tanya=="no")
    {
        tampil("Terima Kasih");
        break;
    }

}

function tampil($pesan)
{
    echo $pesan.PHP_EOL;
}

// function tampil_data($data)
// {

// }

function tanyaUser()
{
    $tanya = readline("Tambah data? (yes/no)");

    if($tanya == "no" || $tanya == "yes"){
        tampil("Terima Kasih");
        exit;
    }
}

function menuAplikasi()
{
    $data=["Input Data","Update Data","Delete Data","Lihat Data"];
}