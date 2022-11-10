<?php
class Produk
{
  protected $idProduk;
  protected $namaProduk;
  protected $biayaSewa;
  protected $biayaDenda;

  function __construct($idProduk, $namaProduk, $biayaSewa, $biayaDenda)
  {
    $this->idProduk = $idProduk;
    $this->namaProduk = $namaProduk;
    $this->biayaSewa = $biayaSewa;
    $this->biayaDenda = $biayaDenda;
  }

  public function getIdProduk() {
    return $this->idProduk;
  }

  public function getNamaProduk() {
    return $this->namaProduk;
  }

  public function getBiayaSewa() {
    return $this->biayaSewa;
  }

  public function getBiayaDenda() {
    return $this->biayaDenda;
  }

  public function setIdProduk($idProduk) {
    $this->idProduk = $idProduk;
  }

  public function setNamaProduk($namaProduk) {
    $this->namaProduk = $namaProduk;
  }

  public function setBiayaSewa($biayaSewa) {
    $this->biayaSewa = $biayaSewa;
  }

  public function setBiayaDenda($biayaDenda) {
    $this->biayaDenda = $biayaDenda;
  }
}
 ?>
