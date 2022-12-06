<?php
namespace kel6pbpu\ceksewa\Director;

  class Director {
    private $builder;

    public function __construct($builder) {
      $this->builder = $builder;
    }

    public function setBuilder($builder) {
      $this->builder = $builder;
    }

    public function make() {
      $this->builder->buildTipe();
      $this->builder->buildCcMesin();
      $this->builder->buildBiayaSewa();
      $this->builder->buildBiayaDenda();
    }

    public function getBuilder() {
      return $this->builder;
    }
  }
?>
