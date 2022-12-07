<?php
namespace kel6pbpu\ceksewa\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use kel6pbpu\ceksewa\models\Motor;

class SewaMotorController extends Controller {
    public function show() {
        return view ('ceksewa::home', [
            'motor' => DB::table('motor')->get()
        ]);
    }

    public function calculateTotalPrice(Request $request) {
        $totalSewa = 0;
        $totalDenda = 0;
        // $biayaSewa = DB::table('motor')->where('nama', '=', $request->nama)->sum('biaya_sewa');
        // $biayaDenda = DB::table('motor')->where('nama', '=', $request->nama)->sum('biaya_denda');

        $biayaSewa = Motor::where('nama', '=', $request->nama)->sum('biaya_sewa');
        $biayaDenda = Motor::where('nama', '=', $request->nama)->sum('biaya_denda');

        $totalSewa = $biayaSewa * $request->durasiPengembalian;
        if ($request->durasiPengembalian > $request->durasiSewa) {
            $totalDenda = ($request->durasiPengembalian - $request->durasiSewa) * $biayaDenda;
        }

        $totalPrice = $totalSewa + $totalDenda;

        return view ('ceksewa::home', [
            'motor' => Motor::get(),
            'totalPrice' => $totalPrice,
            'totalSewa' => $totalSewa,
            'totalDenda' => $totalDenda,
            'biayaSewa' => $request->biayaSewa,
            'biayaDenda' => $request->biayaDenda,
            'nama' => $request->nama
        ]);
    }
}
?>