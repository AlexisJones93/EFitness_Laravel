@extends('layouts.app')

@section('content')
<body class="text-center">
<main class="form-signin">
    <form action="{{route('users.signup')}}" method="post">
      <h1 class="h3 mb-3 fw-normal">Create An Account</h1>
  
      <div class="form-floating">
        <label for="floatingInput">Email address</label>
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
        
      </div>
      <div class="form-floating">
        <label for="floatingPassword">Password</label>
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
        
      </div>
  
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me" name="remember"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
      {{ csrf_field() }}
    </form>
  </main>
</body>
@endsection