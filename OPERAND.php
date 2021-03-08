<?php
// ambil isi form dan simpan ke variabel
$operand1=$_REQUEST['operand1'];
$operand2=$_REQUEST['operand2'];
$operator=$_REQUEST['operator'];

//rumus perhitungan
$perhitungan = $operand1 . $operator . $operand2;
eval ("\$hasil = $perhitungan;");
echo "hasil perhitungan : <B>$hasil </B>";
?>

