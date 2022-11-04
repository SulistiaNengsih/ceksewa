<?php
  interface PenyewaanBarang {
    public function calculatePrice($biaya_sewa, $durasi);
    public function calculateDenda($biaya_denda, $lama_keterlambatan)
  }

?>
