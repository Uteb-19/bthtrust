<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>
      <?php $role_id=''; if(isset(\Auth::user()->role_id)) $role_id = \Auth::user()->role_id;  ?>

      <?php if(isset($role_id) && $role_id == 1) { ?>
      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('home') }}" class="nav-link px-2 text-secondary">Home</a></li>
        <li><a href="{{ route('users') }}" class="nav-link px-2 text-white">Users</a></li>
        <li><a href="{{ route('products') }}" class="nav-link px-2 text-white">Products</a></li>
      </ul>
      <?php } elseif($role_id == 2) { ?>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="{{ route('home') }}" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="{{ route('products') }}" class="nav-link px-2 text-white">Products</a></li>
        </ul>
      <?php } else { }?>

      
      <h1><?php if(isset($role_id) && $role_id == 1) { echo 'Admin'; } elseif($role_id == 2) { echo 'User'; } else { echo ''; }?></h1>

      @auth
        {{auth()->user()->name}}
        <div class="text-end">
          <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
        </div>
      @endauth

      @guest
        <div class="text-end">
          <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
          <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
        </div>
      @endguest
    </div>
  </div>
</header>