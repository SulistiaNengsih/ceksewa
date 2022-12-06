<?php
namespace kel6pbpu\ceksewa\Builder;
use kel6pbpu\ceksewa\Entity\Motor as Motor;
use kel6pbpu\ceksewa\Interface\BuilderMotor as BuilderMotor;

  class BuildMotorMatic150cc implements BuilderMotor{
    private $motor;

    public function __construct() {
      $this->motor = new Motor();
    }

    public function buildTipe() {
      $this->motor->setTipe("matic");
    }

    public function buildCcMesin() {
      $this->motor->setCcMesin("150cc");
    }

    public function buildBiayaSewa() {
      $this->motor->setBiayaSewa(89500);
    }

    public function buildBiayaDenda() {
      $this->motor->setBiayaDenda(100000);
    }

    public function getResult() {
      return $this->motor;
    }
  }
?>
