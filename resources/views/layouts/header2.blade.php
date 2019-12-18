<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BUZZ</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>

<body>
    <div class="container mt-4 sticky-top bg-white">
        <div class="container mt-2">
            <div class="row align-items-center">
                
                   <a  class="col-12 col-lg-4 mt-4 d-flex text-decoration-none text-dark" href="{{asset("/")}}">
                   <img class="mb-4 mx-1 border-right" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUoOwQ0SnSVqrakbM5xqYcoD10px2o9AqFaAAUWRTwBMrgghv0&s" style="width: 30px; height: 30px;">
                    <h3 class="mx-2" style="font-family:Bodoni ">Buzz</h3></a>

                
                <div class="col-12 col-lg-4 d-flex">
                    <form action="#" class="search-form d-inline-block mt-2">
                        <div class="d-flex">
                            <input type="email" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-dark"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-4 ml-auto d-flex">
                    <div class="ml-md-auto top-social d-none d-lg-inline-block">
                        <a href="#" class="d-inline-block p-3 text-dark"><i class="fas fa-bullhorn fa-2px"></i></a>
                        <a href="#" class="d-inline-block p-3 text-dark"><i class="fas fa-comment fa-2px"></i></a>
                        <a href="#" class="d-inline-block p-3 text-dark"><i class="fas fa-user fa-2px"></i></a>

                    </div>
                    
                    <div id="app">
                        

                                <!-- Right Side Of Navbar -->
                                <ul style="list-style: none;" class=" navbar-right ">
                                    <!-- Authentication Links -->
                                    @guest
                                    <li><a href="{{ route('login') }}"><i class="fas fa-sign-out-alt"></i></a>
                                    </li>
                                    <li><a href="{{ route('register') }}"><i class="fas fa-sign-out-alt"></i></a>
                                    </li>
                                    @else
                                    <li class="dropdown btn ">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                            <i class="fas fa-user-circle fa-2x"></i>
                                        </a>

                                        <ul class="dropdown-menu unstyled ">
                                            <li>
                                                <a href="{{route('profile')}}">Trang cá nhân</a>
                                            </li>
                                            <li>
                                                <a href="{{route('profile')}}">Cài đặt</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
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



                </div>


            </div>

        </div>


    </div>
    

<hr>

    @yield('content')
    <!--   <div class="container-fluid fixed-bottom  ">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">MARKET</a>
                    </li>

                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        ...</div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script language="javascript">
        $(document).ready(function() {
            $(baiviet).click(function() {
                $(hang).hide();
                $(bai).show();


            })

        })
        $(document).ready(function() {
            $(muahang).click(function() {
                $(bai).hide();
                $(hang).show();
            })
        })
    </script>
    <script language="javascript">
        var i = 1;
        $(document).ready(function() {
            $(select).click(function() {
                i++;
                if (i % 2 == 0) {
                    $(menu).show();
                    $(an).hide();
                } else {
                    $(an).show();
                    $(menu).hide();
                }
                console.log(i);



            })
        })
    </script>
</body>

</html>