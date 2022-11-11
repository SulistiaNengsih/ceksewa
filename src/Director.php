<?php
  class Director {
    private $builder;

    public function __construct($builder) {
      $this->builder = $builder;
    }

    public function changeBuilder($builder) {
      $this->builder = $builder;
    }

    public function make($tipe, $merk, $tahun) {
      $this->builder->buildTipe();
      $this->builder->buildMerk($merk);
      $this->builder->buildTahun($tahun);
      $this->builder->buildCcMesin();
    }
  }
?>
