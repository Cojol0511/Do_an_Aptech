<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sport Shop</title>

    <!-- Styles -->
     <link rel="stylesheet" href="{{asset('cssIndexHtml.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <style>

</style>
</head>

<body >
    <!-- facebook api socail pluging -->

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0&appId=3454978381184499&autoLogAppEvents=1"></script>
    <div class="container mt-1  bg-white">

        <div class="row align-items-center">
            <a title="HOME SPORTSHOPw"   
             href="{{asset("/")}}">
                <img class="mb-4  border-right"
                     src="{{asset('image/logo.png')}}" 
                    style="width: 170px; height: 60px;"
                >
                

            </a>

            <!-- search -->

            <div class="col-12 col-lg-3 ">
                <div class="d-flex">
                    <input id="SearchProduct" 
                            name="search" type="text" 
                           class="form-control" 
                           placeholder="Search...">
                    <button  type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                    </button>
                </div>
                  <ul id="Result">
                        
                </ul>
            </div>

            <!-- endsearch -->

       
            <div class="col-12 col-lg-7 d-flex">
           
                <div class=" top-social d-none d-lg-inline-block">
                    <ul id="danhmuc" >
                        <li>
                            <div ></div>
                            <a id="gioithieu"  href="#" >Giới Thiệu</a>
                            <div ></div>
                        </li>
                        <li>
                            
                            <a href="#">Dịch Vụ</a>
                            <div></div>
                        </li>
                        <li>
                            <a href="#">Mẫu log</a>
                            <div ></div>
                        </li>
                        <li>
                            <a href="#">Bảng Giá</a>
                            <div ></div>
                        </li>
                        <li>
                            <a href="https://jubisport.com/huong-dan-quy-doi-size-quan-ao-the-thao">Bảng Size</a>
                            <div ></div>
                    </li>
                        <li>
                            <a href="https://thethao247.vn/">Tin Tức</a>
                            <div ></div>
                        </li>
                        
                        <li> 
                            <a href="#">Kiến Thức</a>
                            <div ></div>
                        </li>
                        
                    </ul>
                   
                </div> 
  

            </div>
        </div>
    </div>
    </div>

    </div>
    
    <div class="container-fluid sticky-top">
      <ul id="menu">     
        <li>
            <a  href="{{asset("/")}}"><h6 class="mt-2">Trang Chủ</h6></a>
        </li>    
        <li >
            <form method="get"  action="{{asset("/".'type')}}">
                <input type="hidden" value="bongDa" name="bongDa">
                <button id="type" type="submit">Áo Bóng Đá</button>
            </form>
        </li>
          <li>
            <form method="get"  action="{{asset("/".'type')}}">
                <input type="hidden" value="giay" name="bongDa">
                <button id="type" type="submit">Giay the thao</button>
            </form>
        </li>
        <li>
            <form method="get"  action="{{asset("/".'type')}}">
                <input type="hidden" value="bongChuyen" name="bongDa">
                <button id="type" type="submit">Áo Bóng Chuyền</button>
            </form>
      </li>
      <li>
        <form method="get"  action="{{asset("/".'type')}}">
                <input type="hidden" value="bongRo" name="bongDa">
                <button id="type" type="submit">Áo Bóng Rổ</button>
       </form>
    </li>
    <li>
         <form method="get"  action="{{asset("/".'type')}}">
                <input type="hidden" value="game" name="bongDa">
                <button id="type" type="submit">Áo Game Thủ</button>
        </form>
    </li>
    <li>
        <a href=""><h6>Liên Hệ</h6></a>
    </li>

    <li>
        <a href=""><h6>Giỏ Hàng</h6></a>
    </li>
      
      </ul>
    </div>


   @yield('content')

<footer >
    <div class="container">
            <div>
                <h6>ĐƠN VỊ CHUYÊN CUNG CẤP ĐỒNG PHỤC THỂ THẢO,SẢN XUẤT ÁO THỂ THAO HÀNG ĐẦU VIỆT NAM</h6>
            </div>
        <div class="row mt-5 ">
            <div class="col-md-6 col-lg-3">
                <h5 style="color:#1e88e5; font-family:tohoma">LIÊN HỆ</h5>
                <div style="height:1px;  background-color: white; " class="mb-5"> </div>
                <p><i class="fas fa-home"></i> 38 Yên Bái - Hải Châu - Đà Nẵng</p>
                <p><i class="fas fa-phone-alt"></i> 0988406374</p>
                <p><i class="fas fa-envelope"></i> phucpro746@gmail.com</p>
                <p><i class="fab fa-facebook-f"></i> www.facebook.com/pvo746</p>
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 style="color:#1e88e5; font-family:tohoma">VỀ CHÚNG TÔI</h5>
                <div style="height:1px;  background-color: white; " class="mb-5"> </div>
                    <ul class="list-unstyled">
                        
                        <li><a href="">Giới thiệu: Áo Thể Thao Thiết Kế</a></li>
                        <li><a href="">Bảng size tham khảo</a></li>
                        <li><a href="">Bảng giá</a></li>
                        <li><a href="">Câu hỏi thường gặp</a></li>
                        <li><a href="">Liên hệ</a></li>
                    </ul>
            </div>
            <div class="col-md-12 col-lg-3">
                <p class="mt-5">
                Áo thể thao thiết kế là thành viên của SEA SPORT chuyên thiết kế, sản xuất các mẫu áo thể thao theo ý tưởng và đơn đặt hàng của khách hàng.
                Với 10 năm kinh nghiệm trong ngành thiết kế, in, may chúng tôi tin tưởng sẽ đem đến những sản phẩm tốt nhất cho quý khách hàng
                </p>
            </div>
            <div class="col-md-12 col-lg-3">
                <h5 style="color:#1e88e5; font-family:tohoma">THỜI GIAN LÀM VIỆC</h5>
                <div style="height:1px;  background-color: white; " class="mb-5"> </div>
                <p>Làm việc tất cả các ngày trong tuần</p>
                
                <div class="fb-page" data-href="https://www.facebook.com/Sport-shop-113930346985588" data-tabs="timeline" data-width="350px" data-height="100px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Sport-shop-113930346985588" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Sport-shop-113930346985588">Sport shop</a></blockquote></div>
            </div>
        </div>
    </div>
       <div  style="background-color:#024F9A; height:70px">
            <div style="margin:0 0 0 100px;">
            <h6>CÔNG TY CỔ PHẦN SEA SPORT VIỆT NAM</h6>
            <p>
                Áo Thể Thao Thiết Kế - Copyright © 2018 SEA Sport. All Rights Reserved
             </p>
             </div>
         </div>
    
</footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        // Search ajax

        let products = [];
        fetch('http://localhost:8000/typedb')
                    .then((Response) => Response.json())
                    .then((data) => {
                        products.push(...data);
                    });
        
        let Search = document.getElementById("SearchProduct");
        let Result = document.getElementById("Result");

        function findMatchs (wordMatch , products ){
            return products.filter((product) => {
                 const reg = new RegExp(wordMatch , 'gi');
                 return product.name.match(reg) || product.name.match(reg);
           });
        }

        function displayword (){
           const matchArray = findMatchs(this.value, products);

           var sugess = matchArray.map(product => {
              return `<li id="${product.id}" class=" list-group-item">
                            <a href="http://localhost:8000/products/${product.slug}"> 
                                Result : ${product.name}  
                            </a>
                        </li>`
           }).join('');

           Result.innerHTML = sugess;

           if(this.value == ''){
              matchArray.forEach((product) => {
                 var id = document.getElementById( `${product.id}`);
                 id.remove();
              });
           }
           
        }
        Search.addEventListener('keyup', displayword);

        const gt = document.getElementById("gioithieu");

        gt.addEventListener('click',function () {

        });
    </script>

</body>

</html