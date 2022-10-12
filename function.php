<?php
  echo "<strong>Ini Materi Function..!!</strong>";
  // membuat function untuk mencetak br (break)
  function printBr() {
    echo "<br>";
  }

  printBr();

  // membuat function untuk mencetak string yang menerima parameter $nama
  function kenalkan($nama) {
    echo "kenalkan nama saya $nama";
  }
  
  // panggil function kenalkan
  kenalkan("Ahmad");
  printBr();
  kenalkan("Jumadi");

  // buat function untuk menjadikan huruf kapital
  function kapital($nama) {
    return ucwords($nama);
  }

  // panggil function kapital
  $nama_kapital = kapital("ahmad jumadi");
  printBr();
  echo $nama_kapital;

  // membuat function untuk perkenalan
  function perkenalan($nama, $alamat) {
    echo "nama saya " . kapital($nama) . ", saya tinggal di ". $alamat;
  }
  // panggil function perkenalan
  printBr();
  perkenalan("muhammad azam zulfiqor", "Bandung");
  printBr();
  printBr();
  
  echo "<strong>Ini Materi Looping..!!</strong>";
  printBr();
  // looping for
  // sintaks penulisan nya adalah 
  /* 
   / for (nilai awal / inisialisasi; kondisi / batas nilai; operator increment / decrement) 
   / {
   /   blok kode yang akan diulang
   / }
   */
  for ($i = 0; $i<5; $i++) {
    echo "ini adalah looping dengan for ke $i";
    printBr();
  }

  // looping while
  // sintaks penulisan nya adalah
  // while (kondisi) {
  //   blok kode yang akan diulang
  // }
  $x = 0;
  while($x < 5) {
    echo "$x - ini adalah looping dengan while ke";
    printBr();
    $x++;
  }

  // looping do while
  // sintaks penulisan nya adalah
  // do {
  //   blok kode yang akan diulang
  // } while (kondisi);
  $y = 0;
  do {
    echo "$y - ini adalah looping dengan do while";
    printBr();
    $y++;
  } while ($y < 5);

  // foreach
  // sintaks penulisan nya adalah
  // foreach ($array as $value) {
  //   blok kode yang akan diulang
  // }

  $array = ["satu", "dua", "tiga", "empat", "lima"];
  foreach ($array as $value) {
    echo "$value - ini adalah looping dengan foreach";
    printBr();
  }

  echo "<strong>Ini Materi Percabangan..!!</strong>";
  printBr();
  // contoh sintaks if
// if (<kondisi benar>) {
   // blok kode ini akan dieksekusi jika kondisi benar
// } else {
   // blok kode ini akan dieksekusi jika kondisi salah
// }

  if (5 > 3) {
    echo "5 lebih besar dari 3";
    printBr();
  } else {
    echo "5 tidak lebih besar dari 3";
    printBr();
  }

  // ternary operator 
  // sintaks penulisan nya adalah
  // (Kondisi) ? (Statement1) : (Statemen2);
  $materi= "PHP";
  echo ($materi == "PHP")?"Hari ini belajar PHP": "Hari ini bukan materi PHP";



?>