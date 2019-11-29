<!doctype html>
<html lang="en">

<head>
    <title>Title</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font aowd -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>

<body>


    <div class="container mt-4">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 d-flex">
            <img class="mb-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUoOwQ0SnSVqrakbM5xqYcoD10px2o9AqFaAAUWRTwBMrgghv0&s" style="width: 50px; height: 50px;"><h1>uzz</h1>
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
            </div>

        </div>
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

    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6">
                <div>
                    <div>
                        <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg?cs=srgb&dl=day-giay-gi-l-p-giay-cao-su-giay-dep-1598505.jpg&fm=jpg" style="width: 100%">
                    </div>
                    <div>
                        <div class="d-flex justify-content-between my-1">
                            <span><small>April 10, 2019</small></span>
                            <span><small>by HolyFirst</small></span>
                        </div>
                        <center>
                            <h3>Beef Burger with French Fries and Salad</h3>
                        </center>
                    </div>
                </div>
                <div>
                    <div>
                        <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg?cs=srgb&dl=day-giay-gi-l-p-giay-cao-su-giay-dep-1598505.jpg&fm=jpg" style="width: 100%">
                    </div>
                    <div>
                        <div class="d-flex justify-content-between my-1">
                            <span><small>April 10, 2019</small></span>
                            <span><small>by HolyFirst</small></span>
                        </div>
                        <center>
                            <h3>Beef Burger with French Fries and Salad</h3>
                        </center>
                    </div>
                </div>
                @foreach($posts as $post)
                <div>
                    <div>
                        <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg?cs=srgb&dl=day-giay-gi-l-p-giay-cao-su-giay-dep-1598505.jpg&fm=jpg" style="width: 100%">
                    </div>
                    <div>
                        <div class="d-flex justify-content-between my-1">
                            <span><small>April 10, 2019</small></span>
                            <span><small>by HolyFirst</small></span>
                        </div>
                        <center>
                            <h5 class="strong">{{$post->description}}</h5>
                        </center>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-lg-6">
                <div>
                    <img src="https://images.pexels.com/photos/593163/pexels-photo-593163.jpeg?cs=srgb&dl=c-u-thang-day-giay-giay-giay-dep-593163.jpg&fm=jpg" style="width: 100%">
                </div>
                <div>
                    <div class="d-flex justify-content-between my-1">
                        <span>March 10, 2019</span>
                        <span>by HolyFirst</span>
                    </div>
                    <h3>Cannellini Aglio e Olio with Salmon</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div>
                    <div>
                        <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg?cs=srgb&dl=day-giay-gi-l-p-giay-cao-su-giay-dep-1598505.jpg&fm=jpg" style="width: 100%">
                    </div>
                    <div>
                        <div class="d-flex justify-content-between my-1">
                            <span><small>April 10, 2019</small></span>
                            <span><small>by HolyFirst</small></span>
                        </div>
                        <center>
                            <h3>Beef Burger with French Fries and Salad</h3>
                        </center>
                    </div>
                </div>
                <div>
                    <div>
                        <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg?cs=srgb&dl=day-giay-gi-l-p-giay-cao-su-giay-dep-1598505.jpg&fm=jpg" style="width: 100%">
                    </div>
                    <div>
                        <div class="d-flex justify-content-between my-1">
                            <span><small>April 10, 2019</small></span>
                            <span><small>by HolyFirst</small></span>
                        </div>
                        <center>
                            <h3>Beef Burger with French Fries and Salad</h3>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>