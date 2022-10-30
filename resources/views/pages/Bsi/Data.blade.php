@extends('Master')

@section('DataBsi')
      <section class="dashboard_container">
            <div class="inner_content_wrap">
                  <div class="page_title mt-2 mb-3">
                        <h1>Data Bali Smart Island</h1>
                  </div>
      
                  <div class="table_wrapper">
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
                              {{-- @foreach ($dokumen as $item) --}}
                                <tr>
                                  <th scope="col">no surat</th>
                                  <td scope="col">tgl surat</td>
                                  <td scope="col" class="judul">judul</td>
                                  {{-- <td scope="col">{{ Str::limit("$item->judul_surat", 30, '...') }}</td> --}}
                                  <td>kategori</td>
                                  <td><a href="" class="linkDok judul" target="_blank">Detail</a></td>
                                  <td><a href="{{ url('/editBsi/') }}" class="link_action edit">Edit</a></td>
                                  <td><a href="{{ url('/deleteBsi/') }}" class="link_action delete" onclick="return confirm('Are you sure you want to delete this?')">Delete</a></td>
                                </tr>
                              {{-- @endforeach --}}
                              </tbody>
                        </table>
                        {{-- End Tabel Data --}}
                  </div>
            </div>
      </section>
@endsection