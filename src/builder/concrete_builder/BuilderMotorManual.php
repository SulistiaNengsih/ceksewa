<?php
namespace kel6pbpu\ceksewa\builder\concrete_builder;
use kel6pbpu\ceksewa\models\Motor;
use kel6pbpu\ceksewa\builder\BuilderMotor;
use Illuminate\Support\Facades\DB;

  class BuilderMotorManual implements BuilderMotor{
    private Motor $motor;

    public function __construct() {
      $this->motor = new Motor();
    }

    public function buildNama() {
      $randomNumber = rand(0, 1000);
      $this->motor->setNama("Motor Manual $randomNumber");
    }

    public function buildTipe() {
      $this->motor->setTipe("manual");
    }

    public function buildCcMesin() {
      $this->motor->setCcMesin("125cc");
    }

    public function buildBiayaSewa() {
      $this->motor->setBiayaSewa(49500);
    }

    public function buildBiayaDenda() {
      $this->motor->setBiayaDenda(100000);
    }

    public function store() {
      Motor::insert([
        'nama' => $this->motor->getNama(),
        'tipe' => $this->motor->getTipe(),
        'cc_mesin' => $this->motor->getCcMesin(),
        'biaya_sewa' => $this->motor->getBiayaSewa(),
        'biaya_denda' => $this->motor->getBiayaDenda()
      ]);
    }

    public function getResult() {
      return $this->motor;
    }
  }
?>
