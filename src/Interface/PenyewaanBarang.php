<?php
namespace kel6pbpu\ceksewa\Interface;

  interface PenyewaanBarang {
    public function calculatePrice($durasiPengembalian);
    public function cekStatusPengembalian();
  }

?>
