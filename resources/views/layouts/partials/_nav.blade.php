
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top py-1" id="mainNav">
  <div class="container">
    <a class="navbar-brand font-weight-bold" href="{{ route('home') }}">{{ config('app.name') }}</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item {{ set_active_route('home') }}">
            <a class="nav-link js-scroll-trigger" href="{{ route('home') }}">
              Home 
            </a>
          </li>
          <li class="nav-item {{ set_active_route('about') }}">
            <a class="nav-link" href="{{ route('about') }}">
              About 
            </a>
          </li>
          <li class="nav-item {{ set_active_route('') }}">
            <a class="nav-link js-scroll-trigger" href="./orders.php">
              Artisans
            </a>
          </li>
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Planet
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="https://laravel.com">
                Laravel.com
              </a>
              
              <a class="dropdown-item" href="https://laravel.io">
                Laravel.io
              </a>
              <a class="dropdown-item" href="https://laracasts.com">
                Laracasts
              </a>
              <a class="dropdown-item" href="https://larajobs.com">
                Larajobs
              </a>
              <a class="dropdown-item" href="https://laravel-news.com">
                LaraNews
              </a>
              <a class="dropdown-item" href="https://lareachat.co">
                LaraChat
              </a>
            </div>
          </li>
          <li class="nav-item {{ set_active_route('home') }}">
            <a class="nav-link js-scroll-trigger" href="./orders.php">
              Contact
            </a>
          </li>
      </ul>
      <ul class="navbar-nav ml-auto my-2 my-lg-0">
      	<li class="nav-item">
            <a class="nav-link" href="">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
