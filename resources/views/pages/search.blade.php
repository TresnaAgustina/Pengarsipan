@extends('Master')

@section('Search')
    <section class="container">
       {{-- Search Box --}}
       <div class="search_box">
        <form action="{{ url('/dashboard/search') }}" method="get" class="search_form">
              @csrf
              <label for="search" class="search_label">Pencarian</label>
              <div class="group d-flex gap-1">
                    <input type="text" class="search_bar" name="search" placeholder="Search">
                    <div class="dropdown">
                          <button class="btn btn-secondary dropdown-toggle btn-drop" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <div class="groups d-flex">
                                      <input type="radio" name="kategori" value="spj" class="kategori">
                                      <label for="kategori" class="labels">SPJ</label>
                                </div>

                                <div class="groups d-flex">
                                      <input type="radio" name="kategori" value="kontrak" class="kategori">
                                      <label for="kategori" class="labels">Kontrak</label>
                                </div>

                                <div class="groups d-flex">
                                      <input type="radio" name="kategori" value="produk_hukum" class="kategori">
                                      <label for="kategori" class="labels">Produk Hukum</label>
                                </div>
                          </ul>
                    </div>  

                    <input name="submit" value="submit" type="submit" class="btn_search">
              </div>
        </form>
      </div>

      {{-- Table Section --}}
      <div class="group_title">
            <h1 class="title">All Dokumen</h1>
      </div>
      {{-- Tabel Data --}}
        <div class="table-responsive">
            <table class="table">
                  <thead class="tb_head">
                    <tr>
                      <th scope="col" class="tb_field">No.Surat</th>
                      <th scope="col" class="tb_field">Tgl. Surat</th>
                      <th scope="col" class="tb_field">Judul</th>
                      <th scope="col" class="tb_field">Kategori</th>
                      <th scope="col" class="tb_field">Link File</th>
                      <th colspan="2" class="tb_field act">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($dokumen as $item)
                    <tr>
                      <th scope="col">{{ $item->no_surat }}</th>
                      <td scope="col">{{ $item->tgl_surat }}</td>
                      <td scope="col">{{ Str::limit("$item->judul_surat", 30, '...') }}</td>
                      <td>{{ $item->kategori }}</td>
                      <td><a href="{{ $item->link_file }}" class="linkDok judul" target="_blank">Detail</a></td>
                      <td><a href="{{ url('/editDok/'.$item->id) }}" class="link_action edit">Edit</a></td>
                      <td><a href="{{ url('/deleteDok/'.$item->id) }}" class="link_action delete" onclick="return confirm('Yakin ingin menghapus Data?')">Delete</a></td>
                    </tr>
                  @endforeach
                  </tbody>
            </table>
            {{-- End Tabel Data --}}
        </div>

        <a href="{{ url()->previous() }}" class="back_btn">BACK</a>
    </section>
@endsection