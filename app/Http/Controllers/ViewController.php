<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Routing\Route;

class ViewController extends Controller
{
    // ===== Halaman Login ===== // 
    public function index(){
        return view('auth.Login', [
            'title' => 'Halaman Login'
        ]);
    }


    // ===== Halaman Register ===== // 
    public function regisView(){
        return view('auth.Register', [
            'title' => 'Halaman Register'
        ]);
    }


    // ===== Halaman Dashboard ===== // 
    public function dashboard(){
    // get data Dokumen from db
      $dokumen = DB::table('DokTable')
      ->orderBy('id', 'desc')->paginate(10);

    // menghitung jumlah total dokumen
      $count = DB::table('DokTable')
            ->select(DB::raw('count(*) as idDoc, id'))
            ->where('id', '>=', 1)
            ->groupBy('id')
            ->get();

    // menghitung jumlah total dokumen
        $countBsi = DB::table('BsiTable')
            ->select(DB::raw('count(*) as idBsi, id'))
            ->where('id', '>=', 1)
            ->groupBy('id')
            ->get();

        return view('pages.Dashboard',compact('dokumen','count','countBsi' ), [
            'title' => 'Admin Dashboard'
        ]);
    }

    //  ===== Fitur Pencarian =====  //
    public function search(Request $request){
    // menghitung jumlah total dokumen
      $count = DB::table('DokTable')
             ->select(DB::raw('count(*) as idDoc, id'))
             ->where('id', '>=', 1)
             ->groupBy('id')
             ->get();
  
        // menangkap data pencarian
		$judul = $request->search;
		$kategori = $request->kategori;
 
        // mengambil data dari table pegawai sesuai pencarian data
        $dokumen = DB::table('DokTable')
        ->Where('kategori','like',"%".$kategori."%")
        ->Where('judul_surat','like',"%".$judul."%")
        ->get();

        // ddd();

        // mengirim data pegawai ke view index
        return view('pages.search', compact( 'dokumen', 'count'), [
            'title' => 'Pencarian'
        ]);

        // if(Route::is('dashboard')){
        //     $title = 'Admin Dashboard';
        // }else if(Route::current()->getName() == 'DataDok'){
        //stea     $title = 'Bali Smart Island';
        // }
    }
}
