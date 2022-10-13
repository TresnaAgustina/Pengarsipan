@extends('Master')
 

@section('Dashboard')
<section class="dashboard_container">
      <div class="page_title">
            <h1>Selamat Datang, <span class="uname">{{ auth()->user()->username }}</span></h1>
      </div>

      {{-- <button class="test" onclick="test()">Test JS</button> --}}

      <div class="box_group">
            {{-- single box --}}
            <a href="#" class="page_link">
                  <div class="box_status">
                        <h5 class="title">Dokumen</h5>
                        <p class="status">{{ $count->count('id') }}</p>
                  </div>
            </a>
            
            <a href="#" class="page_link">
                  <div class="box_status">
                        <h5 class="title">Dokumen</h5>
                        <p class="status">{{ $count->count('id') }}</p>
                  </div>
            </a>
      </div>


      {{-- Table Section --}}
      <div class="group_title">
            <h1 class="title">All Dokumen</h1>
      </div>

        <div class="table-responsive">
            <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No.Surat</th>
                      <th scope="col">Tgl. Surat</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Uraian</th>
                      <th scope="col">Link File</th>
                      <th colspan="2">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($dokumen as $item)
                    <tr>
                      <th scope="col">{{ $item->no_surat }}</th>
                      <td>{{ $item->tgl_surat }}</td>
                      <td>{{ $item->kategori }}</td>
                      <td>{{ Str::limit("$item->uraian", 50, '...') }}</td>
                      <td><a href="{{ $item->link_file }}" class="linkDok" target="_blank">{{ $item->judul_surat }}</a></td>
                      <td><a href="{{ url('/editDok/'.$item->id) }}" class="link">Edit</a></td>
                      <td><a href="{{ url('/deleteDok/'.$item->id) }}" class="link" onclick="return confirm('Are you sure you want to delete this?')">Delete</a></td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
        </div>
</section>  
@endsection
