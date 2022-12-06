<?php
namespace kel6pbpu\ceksewa\Construct;

class Sewa {
  private $produk;
  private $statusPengembalian;
  private $durasiSewa;
  private $denda;

  function __construct($produk, $durasiSewa) {
    $this->produk = $produk;
    $this->statusPengembalian = false;
    $this->durasiSewa = $durasiSewa;
    $this->durasiPengembalian = 0;
    $this->denda = 0;
  }

  public function calculatePrice($durasiPengembalian) {
    $biaya = $this->produk->getBiayaSewa();
    $this->durasiPengembalian = $durasiPengembalian;
    $this->statusPengembalian = true;

    if ($durasiPengembalian <= $this->durasiSewa) {
      return $biaya * $durasiPengembalian;
    } else {
      $this->denda = ($durasiPengembalian - $this->durasiSewa) * $this->produk->getBiayaDenda();
      return ($biaya * $this->durasiSewa) + $this->denda;
    }
  }

  public function cekDenda() {
    return $this->denda;
  }

  public function cekStatusPengembalian() {
    return $this->statusPengembalian;
  }
}
 ?>
