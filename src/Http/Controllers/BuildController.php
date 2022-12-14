<?php
namespace kel6pbpu\ceksewa\Http\Controllers;
use kel6pbpu\ceksewa\builder\director\Director;
use kel6pbpu\ceksewa\builder\concrete_builder\BuilderMotorManual;
use kel6pbpu\ceksewa\builder\concrete_builder\BuilderMotorMatic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

/*
    use namespace file builder yang diperlukan
*/

class BuildController extends Controller {
    public function buildProduk(Request $request) {
        
        if (isset($request->nama)) {
            if ($request->nama === 'BuilderMotorManual') {
                $builder = new BuilderMotorManual();
                $director = new Director($builder);
                $director->make($request->nama);
            } else if ($request->nama === 'BuilderMotorMatic') {
                $builder = new BuilderMotorMatic();
                $director = new Director($builder);
                $director->make($request->nama);
            }

            /*
                Tambahkan opsi builder lainnya disini
            */

            return back()->with('successMsg','Data berhasil ditambahkan');
        } else {
            return view ('ceksewa::build', [
                'builder' => DB::table('builder')->get()
            ]);
        }
    }
}
?>