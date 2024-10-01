<?php
// Mendeklarasikan File Biodata
    $nama = "Iedha Aisyah Wibowo";
    $npm = "G1F023049";
    $umur = 19;
    $alamat = "Bengkulu";
    $universitas = "Universitas Bengkulu";
    $fakultas ="Teknik";
    $prodi = "Sistem Informasi";
    $kelas = "A";
    $foto = "ied.jpg";


// Memulai dokumen html
    echo "<html>";
    echo "<head>";
    echo "<title>Hello World and Biodata</title>";
    echo "<link rel='stylesheet' type='text/css' href='style.css'>";
    echo "</head>";
    echo "<body>";
    echo "<h1 id='hello-world'>Hello World!</h1>";
    echo "<h2 id='sapaan'>Halo semuanyaa perkenalkan namaku iedha, kalian bisa melihat biodataku dibawah ini</h2>";
    echo "<img src='$foto' alt='Foto $foto' id='foto'>";
    echo "<div id='biodata'>";
    echo "<h3>Biodata:</h3>";
    echo "<p id='nama'>Nama: $nama</p>";
    echo "<p id='npm'>NPM: $npm</p>";
    echo "<p id='umur'>Umur: $umur</p>";
    echo "<p id='alamat'>Alamat: $alamat</p>";
    echo "<p id='univeritas'>Universitas: $universitas</p>";
    echo "<p id='fakultas'>Fakultas: $fakultas</p>";
    echo "<p id='prodi'>Program Studi: $prodi</p>";
    echo "<p id='kelas'>Kelas: $kelas</p>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
?>