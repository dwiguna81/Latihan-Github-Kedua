        

<!-- Image and text -->
<nav class="navbar navbar-expand-lg navbar-white bg-white sticky-top shadow-sm">
  <a class="navbar-brand content-nav" href="#">REFLECT ENGINEER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
            <div class="flex-center position-ref full-height ml-auto">
            @if (Route::has('login'))
            
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/akun_admin/{id}') }}">Akun</a>
                    @else
                        <!-- <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif -->
                    @endauth
                </div>
            @endif
  </div>
 

  <div class="nav">
    <!-- <form class="form-inline my-2 my-lg-0" action="/dashboard/cari" method="GET">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="cari">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
  </div>
</nav>