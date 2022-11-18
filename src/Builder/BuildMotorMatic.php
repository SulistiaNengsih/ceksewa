<?php
namespace kel6pbpu\ceksewa\Builder;
use kel6pbpu\ceksewa\Entity\Motor as Motor;
use kel6pbpu\ceksewa\Interface\BuilderMotor as BuilderMotor;

  class BuildMotorMatic implements BuilderMotor{
    private $motor;

    public function __construct() {
      $this->motor = new Motor();
    }

    public function buildTipe() {
      $this->motor->setTipe("matic");
    }

    public function buildMerk($merk) {
      $this->motor->setMerk($merk);
    }

    public function buildTahun($tahun) {
      $this->motor->setTahun($tahun);
    }

    public function buildCcMesin() {
      $this->motor->setCcMesin("110 cc");
    }

    public function buildBiayaSewa($biayaSewa) {
      $this->motor->setBiayaSewa($biayaSewa);
    }

    public function buildBiayaDenda($biayaDenda) {
      $this->motor->setBiayaDenda($biayaDenda);
    }

    public function getResult() {
      return $this->motor;
    }
  }
?>
