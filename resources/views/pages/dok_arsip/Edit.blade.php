@extends('Master')


@section('EditDok')
     <section class="insert_container">
            <div class="inner_wrap">
                  <div class="judul_halaman">
                        <h1>Edit Dokumen</h1>
                  </div>
                  {{-- Form Edit --}}
                  @foreach ($dokumen as $item)
                  <form action="{{ url('/editDok/'.$item-> id) }}" method="post" enctype="multipart/form-data" class="form_insert">
                        @csrf
                        <div class="form_groups">
                              <div class="field_group">
                                    <label for="no_surat" class="no_surat labels">Nomor Surat</label>
                                    <input type="text" name="no_surat" value="{{ $item-> no_surat }}" class="input">
                              </div>
            
                              <div class="field_group">
                                    <label for="tgl_surat" class="tgl_surat labels">Tanggal Surat</label>
                                    <input type="date" name="tgl_surat" value="{{ $item-> tgl_surat }}">
                              </div>
                        </div>
      
                        <div class="form_group">
                              <label for="judul_surat" class="judul_surat labels">Tanggal Surat</label>
                              <input type="text" name="judul_surat" placeholder="Judul Surat" value="{{ $item-> judul_surat }}" class="input">
                        </div>
      
                        <div class="form_group">
                              <label for="kategori" class="kategori_title labels">Kategori Surat</label>
                              <div class="radio_group">
                                    <input type="radio" name="kategori" value="kontrak" @if( $item-> kategori == 'kontrak') checked @endif>
                                    <label for="kategori">Kontrak</label>
                              </div>
      
                              <div class="radio_group">
                                    <input type="radio" name="kategori" value="spj" @if( $item-> kategori == 'spj') checked @endif>
                                    <label for="kategori">SPJ</label>
                              </div>
      
                              <div class="radio_group">
                                    <input type="radio" name="kategori" value="produk_hukum" @if( $item-> kategori == 'produk_hukum') checked @endif>
                                    <label for="kategori">Produk Hukum</label>
                              </div>
                        </div>
      
                              <div class="form_group">
                                    <label for="uraian" class="uraian labels">Uraian Surat</label>
                                    <textarea name="uraian" id="uraian" cols="70" rows="10" class="uraian">{{ $item-> uraian }}</textarea>
                              </div>
      
                              <div class="form_group">
                                    <label for="link_file" class="link_file labels">Link File</label>
                                    <input type="text" name="link_file" placeholder="Link File" value="{{ $item-> link_file }}" class="input">
                              </div>
      
                              {{-- form button --}}
                              <input type="submit" value="Submit" class="submitt">                  
                  </form>
                  @endforeach
                  {{-- end Form Edit --}}
      
            </div>
     </section>
@endsection