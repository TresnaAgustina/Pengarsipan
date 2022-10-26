<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MenuArsipController extends Controller
{
    // ===== Halaman InsertDoc ===== // 
    public function index(){
      // get data from db
      $dokumen = DB::table('DokTable')
      ->orderBy('id', 'desc')->paginate(10);

        return view('pages.dok_arsip.Data', compact('dokumen'), [
            'title' => 'Arsip Dokumen'
        ]);
    }


    public function input(){
      return view('pages.dok_arsip.Insert', [
        'title' => 'Halaman Insert Dokumen'
      ]);
    }


    // ===== Insert Data ===== //
    public function store(Request $request){
      // Validation
      $validate = $request->validate([
        'no_surat' => 'required|string',
        'tgl_surat' => 'required|date',
        'judul_surat' => 'required|string',
        'kategori' => 'required|string',
        'uraian' => 'required|string',
        'link_file' => 'required|string',
      ]); 

      DB::table('DokTable')->insert($validate);

      // ddd();
     return redirect('/dashboard');
    }


    // ===== Get Data - halaman edit ===== //
    public function edit(Int $id){
      $collect = DB::table('DokTable')->get();
      $dok = $collect->where('id', $id);
      $dokumen = $dok;

      return view('pages.dok_arsip.Edit', compact('dokumen'), [
          $title = 'title' => 'Edit Post'
      ]);
    }


    // ===== Update Data ===== //
    public function update(Request $request, Int $id){
      // Validation
      $validate = $request->validate([
        'no_surat' => 'required|string',
        'tgl_surat' => 'required|date',
        'judul_surat' => 'required|string',
        'kategori' => 'required|string',
        'uraian' => 'required|string',
        'link_file' => 'required|string'
      ]); 

      $update = DB::table('DokTable')->where('id', $id)->update([
          'no_surat' => $request->no_surat,
          'tgl_surat' => $request->tgl_surat,
          'judul_surat' => $request->judul_surat,
          'kategori' => $request->kategori,
          'uraian' => $request->uraian,
          'link_file' => $request->link_file
      ]);

      if($update){
        return redirect()->intended('/dashboard');
      }
      else{
          return back()->with('error', 'Failed to change caption');
      }
  }


  // ===== Delete Data ===== //
  public function delete(Int $id){

    $delete = DB::table('DokTable')->where('id', $id)->delete();

    if($delete){
        return redirect('/dashboard');
    }else{
        return back()->with('error', 'Failed to delete post');
    }
}

}
