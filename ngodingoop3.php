<?php
class sepatu{
public $namaSepatu,
	   $merk, 
	   $harga;

public function getCetak(){
	return "$this->namaSepatu, $this->merk, $this->harga";
}
public function __construct($namaSepatu="nama Sepatu",$merk="merk",$harga=0){
	$this->namaSepatu = $namaSepatu;
	$this->merk=$merk;
	$this->harga=$harga;
 		}
}
$sepatu1 = new sepatu("Sepatu", "Air Jordan 11", 675000);
$sepatu2 = new sepatu("Sepatu", "Nike", 2350000);
$sepatu3 = new sepatu("Sepatu", "Converse", 550000);
$sepatu4 = new sepatu("Sepatu", "Adidas", 250000);

echo "Nama Sepatu : " . $sepatu1->getCetak();
echo "<br>";
echo "Nama Sepatu : " .$sepatu2->getCetak();
echo "<br>";
echo "Nama sepatu : " .$sepatu3->getCetak();
echo "<br>";
echo "Nama sepatu : " .$sepatu4->getCetak();
?>