<?php
require './Interface/PenyewaanBarang.php';
require './Entity/Produk.php';

class Sewa implements PenyewaanBarang {
  public $idSewa;
  public $produk;
  public $statusPengembalian;
  public $durasiSewa;

  public __construct($idSewa, $idProduk, $namaProduk, $biayaSewa, $biayaDenda, $durasiSewa) {
    $this->produk = new Produk($idProduk, $namaProduk, $biayaSewa, $biayaDenda);
    $this->idSewa = $idSewa;
    $this->statusPengembalian = false;
    $this->durasiSewa = $durasiSewa;
  }

  public function calculatePrice($biaya = $this->produk->biayaSewa, $durasi = $this->durasiSewa, $durasiPengembalian) {
    if (isTepatWaktu($durasiPengembalian) == true) {
      return $biaya * $durasi;
    } else {
      return ($biaya * $durasi) + (($durasiPengembalian - $durasiSewa) * $this->produk->biayaDenda));
    }
  }

  public function isTepatWaktu($durasiPengembalian) {
    if ($durasiPengembalian > $this->durasiSewa) {
      return false;
    } else {
      return true;
    }
  }
}
 ?>
