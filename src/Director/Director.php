<?php
namespace kel6pbpu\ceksewa\Director;

  class Director {
    private $builder;

    public function __construct($builder) {
      $this->builder = $builder;
    }

    public function changeBuilder($builder) {
      $this->builder = $builder;
    }

    public function make($tipe, $merk, $tahun, $biayaSewa, $biayaDenda) {
      $this->builder->buildTipe();
      $this->builder->buildMerk($merk);
      $this->builder->buildTahun($tahun);
      $this->builder->buildCcMesin();
      $this->builder->buildBiayaSewa($biayaSewa);
      $this->builder->buildBiayaDenda($biayaDenda);
    }

    public function getBuilder() {
      return $this->builder;
    }
  }
?>
