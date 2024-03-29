
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/blog-master.css')}}" rel="stylesheet">
  <link href="{{ asset('css/categories.css')}}" rel="stylesheet">

  <!-- FROM GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

   <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg>
      </a>
    </span>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
 
    <a href="#">ORDER</a>
    <a href="#">STOCK IN SYSTEM</a>
    <a href="{{ route('admin.login') }}">EMPLOYEE RESOURCE MANAGEMENT</a>
 
  </div> 

    <div class="container navtab">
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button> -->

      <div class="collapse navbar-collapse" id="navbarResponsive" >
        <ul class="navbar-nav ml-auto">

          <li class="nav-item active"><a class="navbar-brand" href="#"> <img class="cartlg" src="/img/shopping-cart.svg"></a></li>
          <li class="nav-item nav-signin"><a class="nav-link" href="{{ route('register') }}">SIGN IN</a></li>

        </ul>
       </div>

     </div>
  </nav> 
  
    <div class="container" id="main">
 
        <div class="header-text"><h1>CATEGORIES</h1>
        <img class="Mainlogo" src="/img/SHOP-NOW.png" alt=""></div>

        <hr class="headhr">

        <div class="cate-box">
              <div class="catepreview">
                <a href="#">
                  <img src="/img/CLASSICCAR.jpg" alt="">
                      <div class ="namepd">CLASSIC CARS</div>
                </a>
              </div>

              <div class="catepreview">
                <a href="#">
                  <img src="/img/MOTOR.jpg" alt="">
                      <div class ="namepd">MOTORCYCLES</div>
                </a>
              </div>

              <div class="catepreview">
                <a href="#">
                  <img src="/img/PLANE.jpg" alt="">
                      <div class ="namepd">PLANES</div>
                </a>
              </div>

              <div class="catepreview">
                <a href="#">
                  <img src="/img/SHIP.jpg" alt="">
                      <div class ="namepd">SHIPS</div>
                </a>
              </div>

              <div class="catepreview">
                <a href="#">
                  <img src="/img/TRAIN.jpg" alt="">
                      <div class ="namepd">TRAINS</div>
                </a>
              </div>

              <div class="catepreview">
                <a href="#">
                  <img src="/img/TRUCK.jpg" alt="">
                      <div class ="namepd">TRUCK AND BUSES</div>
                </a>
              </div>

              <div class="catepreview">
                <a href="#">
                  <img src="/img/VINTAGEC.jpg" alt="">
                      <div class ="namepd">VINTAGE CARS</div>
                </a>
              </div>
        </div>
          <hr class="foothr">
    </div>
    
    <footer>
      <img src="/img/phone-book.svg" alt="" width="18px"; height="18px"> CONTACT US<br>cpeg2DB@GMAIL.COM | TEL XXX-XXXXXXX
    </footer> 
 
<script>
// SCRIPT 01 | SLIDE MENU
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '300px';
      document.getElementById('main').style.marginLeft = '300px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = 'auto';
    }
// ENDSCRIPT 01   
  </script>
  
</body>
</html>