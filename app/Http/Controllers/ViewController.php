<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

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
      ->orderBy('id', 'desc')
      ->get();

      $count = DB::table('DokTable')
             ->select(DB::raw('count(*) as idDoc, id'))
             ->where('id', '>=', 1)
             ->groupBy('id')
             ->get();

        return view('pages.Dashboard',compact('dokumen','count'), [
            'title' => 'Admin Dashboard'
        ]);
    }
}
