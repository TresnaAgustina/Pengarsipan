<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ambil data dari DB
        $bsi = DB::table('BsiTable')->get();

        return view('pages.Bsi.Data',compact('bsi'), [
            'title' => 'Bali Smart Island'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Bsi.Input', [
            'title' => 'Halaman Pendataan BSI'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Validation
      $validate = $request->validate([
        'serial_number' => 'required|string',
        'tanggal' => 'required|date',
        'nama' => 'required|string',
        'kategori' => 'required|string',
        'lokasi' => 'required|string',
        'penyedia' => 'required|string',
      ]); 
    //   ddd();
      DB::table('BsiTable')->insert($validate);

      
     return redirect('/viewBsi');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Int $id)
    {
        $collect = DB::table('BsiTable')->get();
        $dok = $collect->where('id', $id);
        $bsi = $dok;

        return view('pages.Bsi.Edit', compact('bsi'), [
            $title = 'title' => 'Edit Data'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Int $id)
    {
        // Validation
      $validate = $request->validate([
        'serial_number' => 'required|string',
        'tanggal' => 'required|date',
        'nama' => 'required|string',
        'kategori' => 'required|string',
        'lokasi' => 'required|string',
        'penyedia' => 'required|string'
      ]); 

      $update = DB::table('BsiTable')->where('id', $id)->update([
          'serial_number' => $request->serial_number,
          'tanggal' => $request->tanggal,
          'nama' => $request->nama,
          'kategori' => $request->kategori,
          'lokasi' => $request->lokasi,
          'penyedia' => $request->penyedia
      ]);

      if($update){
        return redirect('/viewBsi');
      }
      else{
          return back()->with('error', 'Failed to change caption');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Int $id)
    {
        $delete = DB::table('BsiTable')->where('id', $id)->delete();

    if($delete){
        return redirect()->back();
    }else{
        return back()->with('error', 'Failed to delete post');
    }
    }
}
