<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      {{-- link file css --}}
      <link rel="stylesheet" href="{{ asset('asset/css/app.css') }}">
      {{-- bootstrap css --}}
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <title>{{ $title }}</title>
</head>
<body>
      {{-- <navbar class="navigation">
            
      </navbar> --}}

     <section class="master_container">
            <aside class="sidebar" id="sidebar">
                  <div class="box">
                        <div class="content_wrap">
                              <h4 class="title">Sisip</h4>
                              <button class="toggle" id="toggle"><i class="fa-solid fa-bars"></i></button>
                        </div>
                        <ul class="link_list">
                              <li class="list"><a href="/dashboard" class="link"><i class="fa-solid fa-house icon"></i>Dashboard</a></li>
                              {{-- button dokumen --}}
                              <div class="dropdown-btn">
                                    <button class="toggle-btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          <i class="fa-solid fa-file icon"></i>
                                      Dokumen
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                      <li><a class="dropdown-item" href="{{ url('#') }}">All Data</a></li>
                                      <li><a class="dropdown-item" href="{{ url('/insertDok') }}">Input Data</a></li>
                                    </ul>
                              </div>
                              {{-- button bsi --}}
                              <div class="dropdown-btn">
                                    <button class="toggle-btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          <i class="fa-solid fa-wifi icon"></i>
                                      BSI
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                      <li><a class="dropdown-item" href="{{ url('/viewBsi') }}">All Data</a></li>
                                      <li><a class="dropdown-item" href="{{ url('#') }}">Input Data</a></li>
                                    </ul>
                              </div>

                              {{-- button logout --}}
                              <form action="{{ url('/out') }}" method="POST">
                                    @csrf      
                                    <input class="btn_logout" type="submit" value="Logout">    
                              </form>
                              {{-- <div class="testJs"><p class="test" id="testJs">a</p></div> --}}
                        </ul>
                  </div>
            </aside>

            

            <div class="content_container">
                  @yield('Dashboard')
                  @yield('DataDokumen')
                  @yield('InsertDok')
                  @yield('EditDok')
                  @yield('Search')
                  @yield('Bsi_View')
            </div>
            
     </section>

     {{-- CDN font awesome --}}
     <script src="https://kit.fontawesome.com/199bad1da3.js" crossorigin="anonymous"></script>
     {{-- bootstrap --}}
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     {{-- my js --}}
     <script src="{{ asset('asset/js/app.js') }}"></script>
</body>
</html>