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
         // get data from db
      $dokumen = DB::table('DokTable')
      ->orderBy('id', 'desc')->paginate(10);

    // menghitung jumlah total dokumen
      $count = DB::table('DokTable')
             ->select(DB::raw('count(*) as idDoc, id'))
             ->where('id', '>=', 1)
             ->groupBy('id')
             ->get();

        return view('pages.Dashboard',compact('dokumen','count'), [
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
 
        // mengambil data dari table pegawai sesuai pencarian data
        $dokumen = DB::table('DokTable')
        ->where('judul_surat','like',"%".$judul."%")
        ->get();

        // mengirim data pegawai ke view index
        return view('pages.search', compact( 'dokumen', 'count'), [
            'title' => 'Pencarian'
        ]);

        // if(Route::is('dashboard')){
        //     $title = 'Admin Dashboard';
        // }else if(Route::current()->getName() == 'DataDok'){
        //     $title = 'Bali Smart Island';
        // }
    }
}
