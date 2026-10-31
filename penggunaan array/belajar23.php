<?php
// membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Modul Pemrograman Mobile",
        "penulis" => "regita azizah"
    ],
    [
        "judul" => "Modul Dasar Pemrograman dengan C++",
        "penulis" => "regita azizah"
    ],
    [
        "judul" => "Panduan Block Programming dengan SCRATCH",
        "penulis" => "regita azizah"
    ]
];
 
// menampilkan array
foreach($artikel as $item){
    echo "<h2>Buku ".$item["judul"]."</h2>";
    echo "<p>Penulis ".$item["penulis"]."<p>";
    echo "<br>";
}
 
?>