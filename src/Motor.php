<?php
class Motor {
  protected idMotor;
  protected tipe;
  protected merk;
  protected tahun;
  protected ccMesin;

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

  public function getDesc() {
    return ("Motor ", $tipe, ", merk ", $merk);
  }
}

?>
