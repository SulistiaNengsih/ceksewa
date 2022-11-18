<?php
namespace kel6pbpu\ceksewa\Construct;
use kel6pbpu\ceksewa\Interface\PenyewaanBarang;

class Sewa implements PenyewaanBarang {
  public $produk;
  public $statusPengembalian;
  public $durasiSewa;

  function __construct($produk, $durasiSewa) {
    $this->produk = $produk;
    $this->statusPengembalian = false;
    $this->durasiSewa = $durasiSewa;
  }

  public function calculatePrice($durasiPengembalian) {
    $biaya = $this->produk->getBiayaSewa();
    $durasi = $this->durasiSewa;
    $this->statusPengembalian = true;

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
