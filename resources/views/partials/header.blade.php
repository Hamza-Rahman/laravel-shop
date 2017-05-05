<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('product.index')}}">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>  Shopping Cart</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User Account <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('user.profile')}}">Profile</a></li>
            <li><a href="{{route('user.signin')}}">Signin</a></li>
            <li><a href="{{route('user.signup')}}">Signup</a></li>
            <li><a href="{{route('user.logout')}}">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>