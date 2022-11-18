<?php
namespace kel6pbpu\ceksewa\Interface;

  interface BuilderMotor {
    public function buildTipe();
    public function buildMerk($merk);
    public function buildTahun($tahun);
    public function buildCcMesin();
    public function buildBiayaSewa($biayaSewa);
    public function buildBiayaDenda($biayaDenda);
  }
?>
