<!DOCTYPE html>
<html>
<h1>LATIHAN FUNGSI</h1>
<?php
// fungsi hitung umur dengan parameter 
function hitungumur ($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
     return $umur;
}

// fungsi tanpa parameter
function perkenalan(){
    echo "assalamuaikum";
    echo "perkenalkan nama saya thania";
    echo "umur saya" .hitungumur(2024, 2003), "br/>";
}
// memanggil fungsi yang sudah dibuat 
perkenalan();

?>
</body>
</html>
