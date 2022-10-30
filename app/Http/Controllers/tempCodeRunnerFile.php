<?php
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