@extends('Master')

@section('InputBsi')
      <section class="insert_container">
            <div class="inner_wrap">
                  <div class="judul_halaman">
                        <h1>Pendataan Bali Smart Island</h1>
                  </div>
                  <form action="{{ url('/insertDok') }}" method="post" class="form_insert" enctype="multipart/form-data">
                        @csrf
                        <div class="form_groups">
                              <div class="field_group">
                                    <label for="serial_number" class="serial_number labels">Nomor Seri</label>
                                    <input type="text" name="serial_number" placeholder="Nomor Seri" class="input">
                              </div>
            
                              <div class="field_group">
                                    <label for="tanggal" class="tanggal labels">Tanggal Pengadaan</label>
                                    <input type="date" name="tanggal">
                              </div>
                        </div>
      
                        <div class="form_group">
                              <label for="nama" class="nama labels">Nama Barang</label>
                              <input type="text" name="nama" placeholder="Nama Barang" class="input">
                        </div>
      
                        <div class="form_group">
                              <label for="kategori_title" class="kategori labels">Kategori Lokasi</label>
                              <div class="radio_group">
                                    <input type="radio" name="kategori" value="desa_adat">
                                    <label for="kategori">Desa Adat</label>
                              </div>
      
                              <div class="radio_group">
                                    <input type="radio" name="kategori" value="objek_wisata">
                                    <label for="kategori">Objek Wisata</label>
                              </div>
      
                              <div class="radio_group">
                                    <input type="radio" name="kategori" value="puskesmas">
                                    <label for="kategori">Puskesmas</label>
                              </div>
                        </div>
      
                        <div class="form_group">
                              <label for="penyedia" class="penyedia labels">Penyedia</label>
                              <input type="text" name="penyedia" placeholder="Nama Penyedia" class="input">
                        </div>
      
                        {{-- form button --}}
                        <input type="submit" value="Submit" class="submitt">
                  </form>
            </div>
      </section>
@endsection