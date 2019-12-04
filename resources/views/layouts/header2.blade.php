<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HOME</title>

    <!-- Styles -->
     <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body>
     <div class="container mt-4 sticky-top bg-white">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 ">
            <a class="d-flex text-decoration-none" href="">
                <img class="mb-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUoOwQ0SnSVqrakbM5xqYcoD10px2o9AqFaAAUWRTwBMrgghv0&s" style="width: 50px; height: 50px;"><h1 class="text-dark">uzz</h1>
            </a> 
              </div>
            <div class="col-12 col-lg-6 ml-auto d-flex">
                <div class="ml-md-auto top-social d-none d-lg-inline-block">
                    <a href="#" class="d-inline-block p-3 text-dark"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#" class="d-inline-block p-3 text-dark"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="#" class="d-inline-block p-3 text-dark"><i class="fab fa-instagram fa-2x"></i></a>
                </div>
                <form action="#" class="search-form d-inline-block mt-2">
                    <div class="d-flex">
                        <input type="email" class="form-control" placeholder="Search...">
                        <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                 <div id="app" >                                     
             
                    <!-- Right Side Of Navbar -->
                    <ul class=" navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt "></i></a>
                            </li>
                            <li><a href="{{ route('register') }}"><i class="far fa-registered "></i></a>
                            </li>
                        @else
                            <li class="dropdown btn">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                   <i class="fas fa-user-circle fa-2x"></i>
                                </a> 

                                <ul class="dropdown-menu border-dark">
                                    <li >
                                        <h5>Xin Chào :{{ Auth::user()->name }}</h5>
                                    </li>
                                    <li >
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                                                  
                                </ul>
                            </li>
                        @endguest
                    </ul>
        
              </div>
            </div>

        </div>
        <hr>
        <div class="row my-3">
            <div class="d-flex justify-content-between w-100">
                <div>
                    <ul class="list-unstyled d-flex">
                        <li class="mx-4">Adidas</li>
                        <li class="mx-4">Nike</li>
                        <li class="mx-4">Champion</li>
                        <li class="mx-4">...</li>
                    </ul>
                </div>
                <div>
                    <ul class="list-unstyled d-flex">
                        <li class="mx-4">Liked</li>
                        <li class="mx-4">Saved</li>
                        <li class="mx-4">Poseted</li>
                        <li class="mx-4">...</li>
                    </ul>
                </div>
            </div>
        </div>
       
    </div>
     @yield('content')
      <footer class="bg-light" style="height:400px">
          
      </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
