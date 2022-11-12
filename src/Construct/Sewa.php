<?php
namespace kel6pbpu\ceksewa\Construct;
use kel6pbpu\ceksewa\Interface\PenyewaanBarang;

class Sewa implements PenyewaanBarang {
  public $idSewa;
  public $produk;
  public $statusPengembalian;
  public $durasiSewa;

  function __construct($idSewa, $produk, $durasiSewa) {
    $this->produk = $produk;
    $this->idSewa = $idSewa;
    $this->statusPengembalian = false;
    $this->durasiSewa = $durasiSewa;
  }

  public function calculatePrice($durasiPengembalian) {
    $biaya = $this->produk->getBiayaSewa();
    $durasi = $this->durasiSewa;

    if ($durasiPengembalian > $this->durasiSewa) {
      return $biaya * $durasi;
    } else {
      return ($biaya * $durasi) + ($durasiPengembalian - $durasiSewa) * $this->produk->biayaDenda;
    }
  }

  public function cekStatusPengembalian() {
    return $this->statusPengembalian;
  }
}
 ?>
