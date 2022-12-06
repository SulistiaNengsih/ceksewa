<?php
namespace kel6pbpu\ceksewa\Http\Controllers;
use Illuminate\Http\Request;

class CalculateController extends Controller {
    public function show() {
        return view ('calculate');
    }

    public function calculate(Request $request) {
        return view ('calculate', [
            'jenisMotor' => $request->jenisMotor,
            'durasiSewa' => $request->durasiSewa,
            'durasiPengembalian' => $request->durasiPengembalian
        ]);
    }
}
?>