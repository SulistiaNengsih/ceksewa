<?php
namespace kel6pbpu\ceksewa\Entity;

class Motor {
  protected $idMotor;
  protected $tipe;
  protected $merk;
  protected $tahun;
  protected $ccMesin;
  protected $biayaSewa;
  protected $biayaDenda;

  public function __construct() {
  }

  public function setIdMotor($idMotor) {
    $this->idMotor = $idMotor;
  }

  public function setTipe($tipe) {
    $this->tipe = $tipe;
  }

  public function setMerk($merk) {
    $this->merk = $merk;
  }

  public function setTahun($tahun) {
    $this->tahun = $tahun;
  }

  public function setCcMesin($ccMesin) {
    $this->ccMesin = $ccMesin;
  }

  // public function getDesc() {
  //   return ("Motor ", $tipe, ", merk ", $merk, " dengan biaya sewa ", $biayaSewa, " dan biaya denda ", $biayaDenda, ".");
  // }

  public function getBiayaSewa() {
    return $this->biayaSewa;
  }

  public function setBiayaSewa($biayaSewa) {
    $this->biayaSewa = $biayaSewa;
  }

  public function getBiayaDenda() {
    return $this->biayaDenda;
  }

  public function setBiayaDenda($biayaDenda) {
    $this->biayaDenda = $biayaDenda;
  }
}

?>
