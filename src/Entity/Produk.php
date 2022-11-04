<?php
class Produk
{
  protected $id_produk;
  protected $nama_produk;
  protected $biaya_sewa;
  protected $biaya_denda;

  function __construct($id_produk, $nama_produk, $biaya_sewa)
  {
    $this->id_produk = $id_produk;
    $this->nama_produk = $nama_produk;
    $this->biaya_sewa = $biaya_sewa;
    $biaya_denda = 2 * $biaya_sewa;
  }

  public function getIdProduk() {
    return $this->id_produk;
  }

  public function getNamaProduk() {
    return $this->nama_produk;
  }

  public function getBiayaSewa() {
    return $this->biaya_sewa;
  }

  public function setIdProduk($id_produk) {
    $this->id_produk = $id_produk;
  }

  public function setNamaProduk($nama_produk) {
    $this->nama_produk = $nama_produk;
  }

  public function setBiayaSewa($harga_produk) {
    $this->harga_produk = $biaya_sewa;
  }
}
 ?>
