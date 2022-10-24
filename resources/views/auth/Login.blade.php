<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      {{-- link css --}}
      <link rel="stylesheet" href="{{ asset('asset/css/app.css') }}">
      {{-- bootstrap css --}}
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <title>{{ $title }}</title>
</head>
<body>
      <section class="login_container">
            {{-- Pesan Error --}}
            @if(session()->has('loginError'))
            <div class="alert alert-danger" role="alert">
                  {{session('loginError')}}!!
                </div>
            @endif
            {{-- end Pesan Error --}}

            <div class="form_wrapper">
                  {{-- login form --}}
                  <form action="{{ url("/login") }}" method="post" class="form_login">
                         {{-- form title --}}
                        <div class="form_title">
                              <h1 class="login">Login</h1>
                        </div>
                        {{-- end form title --}}

                        @csrf
                        {{-- form group --}}
                        <div class="form_group">
                              <label for="username" class="username label">Username</label>
                              <input type="text" name="username" class="username input @error('username') is-invalid @enderror" value="{{ old('username') }}">
                              @error('username')
                                    <div class="error">*{{ $message }}</div>
                              @enderror
                        </div>

                        {{-- form group --}}
                        <div class="form_group">
                              <label for="password" class="password label">Password</label>
                              <input type="password" name="password" class="password input @error('password') is-invalid @enderror">
                              @error('password')
                                    <div class="error">*{{ $message }}</div>
                              @enderror
                        </div>

                        {{-- form button --}}
                        <input type="submit" class="form_button submit">
                  </form>
                  {{-- end login form --}}
            </div>
      </section>

{{-- bootstrap --}}
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>