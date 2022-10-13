<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <style>
            .container{
                  width: 100%;
                  height: 100vh;
                  display: flex;
                  flex-direction: column;
                  align-items: center;
                  justify-content: center;
            }

            .form_register{
                  display: inherit;
                  flex-direction: column;
                  gap: 1.2rem;
            }
      </style>
      <title>{{ $title }}</title>
</head>
<body>
      <section class="container">
            <div class="form_title">
                  <h1 class="register">Register</h1>
            </div>
            {{-- register form --}}
            <form action="{{ url("/regis") }}" method="post" class="form_register">
                  @csrf
                  
                  <div class="form_group">
                        <label for="username" class="username">Username</label>
                        <input type="text" name="username" class="username">
                  </div>

                  <div class="form_group">
                        <label for="password" class="password">Password</label>
                        <input type="password" name="password" class="password">
                  </div>

                  {{-- form button --}}
                  <input type="submit" class="submit">

                  {{-- link login --}}
                  <div class="form_link">
                        <a href="{{ url("/") }}" class="link_btn">Login</a>
                  </div>
            </form>
      </section>
</body>
</html>