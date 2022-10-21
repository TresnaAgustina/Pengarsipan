@extends('Master')


@section('InsertDok')
{{-- link css --}}
     <section class="insert_container">
            <div class="inner_wrap">
                  <div class="judul_halaman">
                        <h1>Input Dokumen</h1>
                  </div>
                  <form action="{{ url('/insertDok') }}" method="post" class="form_insert" enctype="multipart/form-data">
                        @csrf
                        <div class="form_groups">
                              <div class="field_group">
                                    <label for="no_surat" class="no_surat labels">Nomor Surat</label>
                                    <input type="text" name="no_surat" placeholder="Nomor Surat" class="input">
                              </div>
            
                              <div class="field_group">
                                    <label for="tgl_surat" class="tgl_surat labels">Tanggal Surat</label>
                                    <input type="date" name="tgl_surat">
                              </div>
                        </div>
      
                        <div class="form_group">
                              <label for="judul_surat" class="judul_surat labels">Judul Surat</label>
                              <input type="text" name="judul_surat" placeholder="Judul Surat" class="input">
                        </div>
      
                        <div class="form_group">
                              <label for="kategori_title" class="kategori labels">Kategori Surat</label>
                              <div class="radio_group">
                                    <input type="radio" name="kategori" value="kontrak">
                                    <label for="kategori">Kontrak</label>
                              </div>
      
                              <div class="radio_group">
                                    <input type="radio" name="kategori" value="spj">
                                    <label for="kategori">SPJ</label>
                              </div>
      
                              <div class="radio_group">
                                    <input type="radio" name="kategori" value="produk_hukum">
                                    <label for="kategori">Produk Hukum</label>
                              </div>
                        </div>
      
                        <div class="form_group">
                              <label for="uraian" class="uraian labels">Uraian Surat</label>
                              <textarea name="uraian" id="uraian" cols="70" rows="10" class="uraian"></textarea>
                        </div>
      
                        <div class="form_group">
                              <label for="link_file" class="link_file labels">Link File</label>
                              <input type="text" name="link_file" placeholder="Link File" class="input">
                        </div>
      
                        {{-- form button --}}
                        <input type="submit" value="Submit" class="submitt">
                  </form>
            </div>
     </section>
@endsection