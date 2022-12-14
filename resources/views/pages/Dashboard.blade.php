@extends('Master')
 

@section('Dashboard')
<section class="dashboard_container">
      <div class="inner_content_wrap">
            {{-- Title Page --}}
            <div class="page_title">
                  <h1>Selamat Datang, <span class="uname">{{ auth()->user()->username }}</span></h1>
            </div>
      
            {{-- box status --}}
            <div class="box_group">
                  {{-- single box --}}
                  <a href="{{ url('/viewDok') }}" class="page_link">
                        <div class="box_status">
                              <i class='bx bxs-folder-open box_icon fs-3' ></i>
                              <div class="text_group">
                                    <h4 class="box_title">Dokumen</h4>
                                    <p class="count_status">total: {{ $count->count('id') }}</p>
                              </div>
                        </div>
                  </a>

                  {{-- single box --}}
                  <a href="/viewBsi" class="page_link">
                        <div class="box_status">
                              <i class='bx bx-wifi box_icon fs-3' ></i>
                              <div class="text_group">
                                    <h4 class="box_title">Bali Smart Island</h4>
                                    <p class="count_status">total: {{ $countBsi->count('id') }}</p>
                              </div>
                        </div>
                  </a>

                  {{-- single box --}}
                  <a href="#" class="page_link">
                        <div class="box_status">
                              <i class='bx bxs-cctv box_icon fs-3'></i>
                              <div class="text_group">
                                    <h4 class="box_title">CCTV</h4>
                                    <p class="count_status">total: {{ $count->count('id') }}</p>
                              </div>
                        </div>
                  </a>

                  {{-- single box --}}
                  <a href="#" class="page_link">
                        <div class="box_status">
                              <i class='bx bxs-tv box_icon fs-3'></i>
                              <div class="text_group">
                                    <h4 class="box_title">Videotron</h4>
                                    <p class="count_status">total: {{ $count->count('id') }}</p>
                              </div>
                        </div>
                  </a>

                  {{-- single box --}}
                  <a href="#" class="page_link">
                        <div class="box_status">
                              <i class='bx bxs-network-chart box_icon fs-3'></i>
                              <div class="text_group">
                                    <h4 class="box_title">Intranet</h4>
                                    <p class="count_status">total: {{ $count->count('id') }}</p>
                              </div>
                        </div>
                  </a>

                  {{-- single box --}}
                  <a href="#" class="page_link">
                        <div class="box_status">
                              <i class='bx bxs-server box_icon fs-3' ></i>
                              <div class="text_group">
                                    <h4 class="box_title">Server</h4>
                                    <p class="count_status">total: {{ $count->count('id') }}</p>
                              </div>
                        </div>
                  </a>
            </div>


             {{-- Search Box --}}
            <div class="search_box mt-5">
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
                                          <div class="groups d-flex gap-2">
                                                <input type="radio" name="kategori" value="spj" class="kategori">
                                                <label for="kategori" class="labels">SPJ</label>
                                          </div>
      
                                          <div class="groups d-flex gap-2">
                                                <input type="radio" name="kategori" value="kontrak" class="kategori">
                                                <label for="kategori" class="labels">Kontrak</label>
                                          </div>
      
                                          <div class="groups d-flex gap-2">
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
                  <h1 class="title text-dark mt-3">All Dokumen</h1>
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
                            <td scope="col" class="judul">{{ $item->judul_surat }}</td>
                            {{-- <td scope="col">{{ Str::limit("$item->judul_surat", 30, '...') }}</td> --}}
                            <td>{{ $item->kategori }}</td>
                            <td><a href="{{ $item->link_file }}" class="linkDok judul" target="_blank">Detail</a></td>
                            <td><a href="{{ url('/editDok/'.$item->id) }}" class="link_action edit">Edit</a></td>
                            <td><a href="{{ url('/deleteDok/'.$item->id) }}" class="link_action delete" onclick="return confirm('Are you sure you want to delete this?')">Delete</a></td>
                          </tr>
                        @endforeach
                        </tbody>
                  </table>
                  {{-- End Tabel Data --}}
              </div>
      </div>
</section>  
@endsection
