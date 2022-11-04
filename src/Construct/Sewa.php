<?php
require './Interface/PenyewaanBarang.php';
require './Entity/Produk.php';

class Sewa implements PenyewaanBarang {
  public $id_sewa;
  public $produk;
  public $statusPengembalian;
  public $lama_sewa;
  public $durasi_sewa;
  public $denda;

  public __construct($id_sewa, $id_produk, $nama_produk, $biaya_sewa, $durasi_sewa, $denda) {
    $this->produk = new Produk($id_produk, $nama_produk, $biaya_sewa);
    $this->id_sewa = $id_sewa;
    $this->statusPengembalian = false;
    $this->durasi_sewa = $durasi_sewa;
    $this->denda = $denda;
  }

  public function calculatePrice($biaya = $this->produk->biaya_sewa, $durasi = $this->durasi_sewa) {
    return $biaya * $durasi;
  }

  public function isTepatWaktu($tepatWaktu) {
    if ($tepatWaktu == false) {
      calculateDenda();
    }
  }

  public function calculateDenda($biaya_denda = $this->produk->biaya_denda, $durasi_keterlambatan = $this->lama_sewa - $this->durasi_sewa) {
    return $biaya_denda * $durasi_keterlambatan;
  }
}
 ?>
