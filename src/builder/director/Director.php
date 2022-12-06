<?php
namespace kel6pbpu\ceksewa\builder\director;

  class Director {
    private $builder;

    public function __construct($builder) {
      $this->builder = $builder;
    }

    public function setBuilder($builder) {
      $this->builder = $builder;
    }

    public function getBuilder() {
      return $this->builder;
    }

    public function make($type) {
      $this->builder->buildNama();
      $this->builder->buildTipe();
      $this->builder->buildCcMesin();
      $this->builder->buildBiayaSewa();
      $this->builder->buildBiayaDenda();
      $this->builder->store();
    }
  }
?>
