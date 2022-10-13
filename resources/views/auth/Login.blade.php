<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="{{ asset('asset/css/app.css') }}">
      <title>{{ $title }}</title>
</head>
<body>
      <section class="login_container">
            {{-- error meesage --}}
            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong>{{session('loginError')}}!!</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif  
            {{-- end error message --}}

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

                        {{-- link register
                        <div class="form_link">
                              <a href="{{ url("/regis") }}" class="link_btn">Register</a>
                        </div> --}}
                  </form>
                  {{-- end login form --}}
            </div>
      </section>
</body>
</html>