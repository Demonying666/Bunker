<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
      //check local storage
      let localS = localStorage.getItem('theme')
      if (localS === 'dark') {
        document.documentElement.setAttribute('data-theme', 'dark');
      }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0d4f56264b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>
    
    <link rel="stylesheet" href={{ url ("css/app.css") }}>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Bunker™</title>
    
</head>
<body>

    <header>
        <main class="landing">
          <div class="big-wrapper light">
            <img src="images/prep.png" alt="" class="shape" />
    
            <header>
              <div class="container">
                <div class="logo">
                  <span></span>
                  <a href="/"><img src={{asset('images/logo2.png')}} alt="Logo" id="logos"></a>
                  <a href="/"><h3>Bunker™</h3></a>
                  <div class="bottom-area">
                    <div class="container">
                      <button class="toggle-btn" id="toggle-btn">
                        <i class="fa-solid fa-eye"></i>
                        <i class="fa-solid fa-eye"></i>
                      </button>
                    </div>
                  </div>
                </div>
    
                <div class="links">
                  <ul>
                  @guest
                      
                  
                    <li><a href="/" type="button">Home</a></li>
                    <li><a href="/firstaid" type="button">First Aid Tips</a></li>
                    @if (Route::has('login'))
                    <li><a href="{{ route('login') }}" type="button"  class="nav-link">My Acount</a></li> 
                  
                    @endif
                    <li><a href="/subscription" type="button">Available Plans</a></li>
                    
                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}" type="button"  class="btn nav-link">Sign up</a></li> 
                   
                    @endif
                  @else
                  <li><a href="/" type="button">Home</a></li>
                  <li><a href="/firstaid" type="button">First Aid Tips</a></li>
                  
                  <li><a href="/userpage" type="button"  class="nav-link">My Acount</a></li> 
                
                  
                  <li><a href="/subscription" type="button">Available Plans</a></li>
                    <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>

                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <a class="btn dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                    </li>
                    @endguest
                  </ul>
                </div>
  
               
  
                
  
                <div class="overlay"></div>
    
                <div class="hamburger-menu">
                  <div class="bar"></div>
                </div>
              </div>
            </header>
     <!-- Start of bunker-tm Zendesk Widget script -->
     <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=6e18dad0-c93a-4939-8337-ccbdaf7190b3"> </script>
     <!-- End of bunker-tm Zendesk Widget script -->
   
     <script src="https://kit.fontawesome.com/a81368914c.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
 
  
 
 
 <script src="{{ url('js/script.js')}}"></script>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>