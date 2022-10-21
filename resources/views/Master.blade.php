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
                              <li class="list"><a href="/insertDok" class="link"><i class="fa-solid fa-file icon"></i>Dokumen</a></li>
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
                  @yield('InsertDok')
                  @yield('EditDok')
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