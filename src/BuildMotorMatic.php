<?php
require 'Motor.php';
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

    public function getResult() {
      return $this->motor;
    }
  }
?>
