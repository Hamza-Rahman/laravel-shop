 @extends('layouts.master')

 @section('content')
  <div class="container">
    <h2 class="form-signin-heading">Please Log in</h2>
    @if(count($errors)>0)
      <div class="alert alert-danger">
        @foreach($errors->all() as $error)
          <p>{{$error}}</p>
        @endforeach  
      </div>
    @endif  
    <form action="{{ route('user.signin') }}" method="post">
      <div class="form-group">
        <label>Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" name="email" placeholder="Email address" >
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" name="password" placeholder="Password" >  
      </div>
          
        <div class="checkbox">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
          <button class="btn btn-primary " type="submit">Login</button>
          {{ csrf_field() }}
    </form>
  </div>
  @endsection