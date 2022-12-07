<?php
namespace kel6pbpu\ceksewa\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model {
    use HasFactory;
    protected $guarded = [];
    protected $table = "motor";
    public $timestamps = false;

    private $nama;
    private $tipe;
    private $ccMesin;
    private $biayaSewa;
    private $biayaDenda;

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }

    public function setCcMesin($ccMesin) {
        $this->ccMesin = $ccMesin;
    }

    public function setBiayaSewa($biayaSewa) {
        $this->biayaSewa = $biayaSewa;
    }

    public function setBiayaDenda($biayaDenda) {
        $this->biayaDenda = $biayaDenda;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getTipe() {
        return $this->tipe;
    }

    public function getCcMesin() {
        return $this->ccMesin;
    }

    public function getBiayaSewa() {
        return $this->biayaSewa;
    }

    public function getBiayaDenda() {
        return $this->biayaDenda;
    }
}
?>