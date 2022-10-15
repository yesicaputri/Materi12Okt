<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

echo "<h3> Soal No 1 Greetings </h3>";
/* 
Soal No 1
Greetings
Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 

contoh: greetings("abduh");
Output: "Halo Abduh, Selamat Datang di Jabar Coding Camp!"
*/

// Code function di sini
// Hapus komentar untuk menjalankan code!
function greetings($nama) {
    echo "Halo $nama, Selamat Datang di Jabar Coding Camp!";
}
greetings("Bagas");
print "<br>";
greetings("Wahyu");
print "<br>";
greetings("Abdul");

echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";
/* 
Soal No 2
Reverse String
Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
Function reverseString menerima satu parameter berupa string.
NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!

reverseString("abdul");
Output: ludba

*/

// Code function di sini 
function reverseString($kata1)
{
    $panjangkata = strlen($kata1);
    $tampung = "";
    for ($a= $panjangkata-1 ; $a >= 0 ; $a--) {
        $tampung .= $kata1[$a];
    }
    echo $tampung;
}
// Hapus komentar di bawah ini untuk jalankan Code
reverseString("abduh");
print "<br>";
reverseString("Bootcamp");
print "<br>";
reverseString("We Are JCC Developers");


echo "<h3>Soal No 3 Palindrome </h3>";
/* 
Soal No 3 
Palindrome
Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
NB: 
Contoh: 
palindrome("katak") => output : "true"
palindrome("jambu") => output : "false"
NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!

*/


// Code function di sini
function reverse($param) {
    $karakter = strlen($param);
    $tampung = "";

    for($x= $karakter-1 ; $x >= 0; $x--)
    {
    $tampung .= $param[$x];
    }
    return $tampung;
}

function palindrome($param) {
    $kataAwal = $param;
    $kataBalik = reverse($param);

    if ($kataAwal == $kataBalik){
        echo $kataAwal . " - true";
    } else {
        echo $kataAwal . " - false";
    }
}

// Hapus komentar di bawah ini untuk jalankan code
palindrome("civic") ; // true
palindrome("nababan") ; // true
palindrome("jambaban"); // false
palindrome("racecar"); // true


echo "<h3>Soal No 4 Tentukan Nilai </h3>";
/*
Soal 4
buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter 
berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” 
Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar 
sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”
*/

// Code function di sini
function tentukan_nilai($param){
    if ($param > 100) {
        return "Nilai Lebih dari 100";
    } else if ($param >= 85 && $param <= 100){
        return $param . " - Sangat Baik" . "<br>";
    } else if ($param >= 70 and $param < 85) {
        return $param . " - Baik" . "<br>";
    } else if ($param >= 60 && $param < 70) {
        return $param . " - Cukup" . "<br>";
    } else {
        return $param . " - Kurang" . "<br>";
    }
}

// Hapus komentar di bawah ini untuk jalankan code
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
echo tentukan_nilai(100); //Kurang


?>

</body>

</html>