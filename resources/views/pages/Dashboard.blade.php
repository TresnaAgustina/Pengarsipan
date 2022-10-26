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
                  <a href="#" class="page_link">
                        <div class="box_status">
                              {{-- <i class="fa-solid fa-folder-open box_icon"></i> --}}
                              <div class="text_group">
                                    <h4 class="box_title">Dokumen</h4>
                                    <p class="count_status">total: {{ $count->count('id') }}</p>
                              </div>
                        </div>
                  </a>

                  {{-- single box --}}
                  <a href="#" class="page_link">
                        <div class="box_status">
                              {{-- <i class="fa-solid fa-wifi box_icon"></i> --}}
                              <div class="text_group">
                                    <h4 class="box_title">Bali Smart Island</h4>
                                    <p class="count_status">total: {{ $count->count('id') }}</p>
                              </div>
                        </div>
                  </a>

                  {{-- single box --}}
                  <a href="#" class="page_link">
                        <div class="box_status">
                              {{-- <i class="fa-solid fa-wifi box_icon"></i> --}}
                              <div class="text_group">
                                    <h4 class="box_title">CCTV</h4>
                                    <p class="count_status">total: {{ $count->count('id') }}</p>
                              </div>
                        </div>
                  </a>

                  {{-- single box --}}
                  <a href="#" class="page_link">
                        <div class="box_status">
                              {{-- <i class="fa-solid fa-wifi box_icon"></i> --}}
                              <div class="text_group">
                                    <h4 class="box_title">Videotron</h4>
                                    <p class="count_status">total: {{ $count->count('id') }}</p>
                              </div>
                        </div>
                  </a>

                  {{-- single box --}}
                  <a href="#" class="page_link">
                        <div class="box_status">
                              {{-- <i class="fa-solid fa-wifi box_icon"></i> --}}
                              <div class="text_group">
                                    <h4 class="box_title">Intranet</h4>
                                    <p class="count_status">total: {{ $count->count('id') }}</p>
                              </div>
                        </div>
                  </a>

                  {{-- single box --}}
                  <a href="#" class="page_link">
                        <div class="box_status">
                              {{-- <i class="fa-solid fa-wifi box_icon"></i> --}}
                              <div class="text_group">
                                    <h4 class="box_title">Server</h4>
                                    <p class="count_status">total: {{ $count->count('id') }}</p>
                              </div>
                        </div>
                  </a>
            </div>


             {{-- Search Box --}}
            <div class="search_box">
                  <form action="{{ url('/dashboard/search') }}" method="get" class="search_form">
                        @csrf
                        <label for="search" class="search_label">Pencarian</label>
                        <div class="group">
                              <input type="text" class="search_bar" name="search" placeholder="Search">
                              <input name="submit" value="search" type="submit" class="btn_search">
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
