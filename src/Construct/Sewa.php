<?php
require './Interface/PenyewaanBarang.php';
require './Entity/Produk.php';

class Sewa implements PenyewaanBarang {
  public $id_sewa;
  public $produk;
  public $status;
  public $tanggal_mulai_sewa;
  public $tanggal_akhir_sewa;
  public $durasi_sewa;
  public $denda;

  public __construct($id_sewa, $id_produk, $nama_produk, $biaya_sewa, $status, $tanggal_mulai_sewa,
                      $tanggal_akhir_sewa, $durasi_sewa, $denda) {
    $this->id_sewa = $id_sewa;
    $this->produk = new Produk($id_produk, $nama_produk, $biaya_sewa);
    $this->status = $status;
    $this->tanggal_mulai_sewa = $tanggal_mulai_sewa;
    $this->tanggal_akhir_sewa = $tanggal_akhir_sewa;
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
}

 ?>
