pada pertemuan ketiga atau minggu kedua ini saya mempelajari tentang materi dasar-dasar dari bahasa pemrograman PHP. mulai dari pengertian PHP, penulisan sintaks, menjalankan sintaks, variabel dan tipe data, function, operator pembanding, kondisi dan aritmatika, pengkondisian dan perulangan. 

PHP dasar
PHP adalah singkatan rekursif dari "PHP: Hypertext Preprocessor" yang bersifat Server-Side

Penulisan sintaks PHP
Sintaks php dapat disisipkan pada bagian HTML. Diawali dengan tag pembuka php ( <?php ), Diakhiri dengan tag penutup php ( ?> ). Pada akhir baris sintaks php harus ditutup dengan titik koma ( ; ).
contoh: <?php
echo “Hello World!”;
?>

PHP Dasar - Variabel

- Variabel dimulai dengan tanda $, diikuti dengan nama variabel
- Variabel harus dimulai dengan huruf atau karakter garis bawah
- Variabel hanya boleh berisi karakter alfanumerik dan garis bawah (A-z, 0-9, dan \_ )
- Variabel bersifat Case-sensitive ($nama dan $NAMA adalah dua variabel yang berbeda)
  contoh: <?php
  $name = “Ipin”;
  ?>

PHP - Tipe Data

- Integer: bilangan bulat
- Floating Point: bilangan koma
- String: kalimat atau teks ditandai tanda petik satu ('') atau petik dua ("")
- Boolean: true or false
- Array: ssekelompok nilai ditandai dengan array() atau []
- Object: {}

PHP Dasar - Function (Fungsi)

- Fungsi mengurangi pengulangan kode dalam suatu program.
- Fungsi membuat kode lebih mudah dimaintain.
- Fungsi dapat digunakan kembali di program lain.
contoh:
<?php
function genap($num){
    if($num % 2 == 0){
        echo "genap";
    }
}
?>

PHP Dasar - Operator Aritmatika

- : perkalian
  / : pembagian

* : penjumlahan

- : pengurangan
  % : modulo atau sisa bagi

PHP Dasar - Operator Pembanding
== : Sama dengan
=== : Sama dengan identik
!= : Tidak sama dengan
!== : Tidak sama dengan identik
< : Lebih kecil dari

> : Lebih besar dari
> <= : Lebih kecil dari atau sama dengan
> = : Lebih besar dari atau sama dengan

PHP Dasar - Operator Kondisional
&& : AND -> keduanya kondisi harus true
|| : OR -> salah satu kondisi true

PHP Dasar - Conditional
contoh:

<?php 
if(kondisi){
    statement
}else if(kondisi){
    statement
}else{
    statement
}
?>

PHP Dasar - Perulangan
contoh:
<?php
for (expression1, expression2, expression3) {
// code block
}

$i = x;
while ($i < x) {
    echo $i;
$i++;
}
?>
