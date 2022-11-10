<?php
  interface PenyewaanBarang {
    public function calculatePrice($biayaSewa, $durasiSewa);
    public function isTepatWaktu($durasiPengembalian);
    public function cekStatusPengembalian();
  }

?>
