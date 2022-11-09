@extends('Master')

@section('EditBsi')
<section class="insert_container">
      <div class="inner_wrap">
            <div class="judul_halaman">
                  <h1>Edit Dokumen</h1>
            </div>
            {{-- Form Edit --}}
            @foreach ($bsi as $item)
            <form action="{{ url('/editBsi/'.$item-> id) }}" method="post" class="form_insert" enctype="multipart/form-data">
                  @csrf
                  <div class="form_groups">
                        <div class="field_group">
                              <label for="serial_number" class="serial_number labels">Nomor Seri</label>
                              <input type="text" name="serial_number" placeholder="Nomor Seri" class="input" value="{{ $item-> serial_number }}">
                        </div>
      
                        <div class="field_group">
                              <label for="tanggal" class="tanggal labels">Tanggal Pengadaan</label>
                              <input type="date" name="tanggal" value="{{ $item-> tanggal }}">
                        </div>
                  </div>

                  <div class="form_group">
                        <label for="nama" class="nama labels">Nama Barang</label>
                        <input type="text" name="nama" placeholder="Nama Barang" class="input" value="{{ $item-> nama }}">
                  </div>

                  <div class="form_group">
                        <label for="kategori_title" class="kategori labels">Kategori</label>
                        <div class="radio_group">
                              <input type="radio" name="kategori" value="desa_adat" @if( $item-> kategori == 'desa_adat') checked @endif>
                              <label for="kategori">Desa Adat</label>
                        </div>

                        <div class="radio_group">
                              <input type="radio" name="kategori" value="objek_wisata" @if( $item-> kategori == 'objek_wisata') checked @endif>
                              <label for="kategori">Objek Wisata</label>
                        </div>

                        <div class="radio_group">
                              <input type="radio" name="kategori" value="puskesmas" @if( $item-> kategori == 'puskesmas') checked @endif>
                              <label for="kategori">Puskesmas</label>
                        </div>
                  </div>

                  <div class="form_group">
                        <label for="lokasi" class="lokasi labels">Lokasi</label>
                        <input type="text" name="lokasi" placeholder="lokasi" class="input" value="{{ $item-> lokasi }}">
                  </div>

                  <div class="form_group">
                        <label for="penyedia" class="penyedia labels">Penyedia</label>
                        <input type="text" name="penyedia" placeholder="Nama Penyedia" class="input" value="{{ $item-> penyedia }}">
                  </div>

                  {{-- form button --}}
                  <input type="submit" value="submit" class="submitt">
            </form>
            @endforeach
            {{-- end Form Edit --}}
      </div>
</section>
@endsection