<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initiak-scale=1.0">
    <meta http-equiv="x-ua-COMPATIBLE" content="ie-edge">
    <title>HomePage</title>

    <!--Bootstra CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous"/>

    <!--Font Aweosome CDN-->
    <script src="https://kit.fontawesome.com/03efa0b0be.js" crossorigin="anonymous"></script>

    <!--Custom StyleSheet-->
    <link rel="StyleSheet" href="./homepage.css">
    

</head>

<body>
  
    <!--Header-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12 ">
                    <div class="btn-group">
                        <button class="btn border dropdown-toggle my-md-4 my-2 text-color" 
                        data-toggle="dropdown" 
                        aria-haspopup="true"
                        aria-expanded="false">RUPEE</button>

                        
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Rs-Rupee </a>
                        <a href="#" class="dropdown-item">CAD-Canadian Dollar </a>
                        <a href="#" class="dropdown-item">EUR-Euro </a>
                    </div>
                    
                    </div>
                </div>

                <div class="col-md-4 col-12 text-center ">
                    <h2 class="my-md-3 site-title text-color">Wholesaler</h2>
                </div>
                <div class="col-md-4 col-12 text-right text-color ">
                    <p class="my-md-4 header-links"> 
                        <a href="./login.php" class="px-2">SignIn</a>
                        <a href="./Register.php" class="px-1">Create an Account</a>
                    </p>
                </div>
              </div>
            </div>
        </div>
        
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Women Ethic <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Women Western</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Men</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kids</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Home & Kitchen</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Jewellery & Accessories</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="#">Bags & Footwear</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="#">Electronics</a>
                      </li>
                      </div>
                    </li>
                  </ul>
                  <div class="navbar-nav">
                    <li class="nav-item border rounded-circle mx-2 search-icon">
                      <i class="fas fa-search px-2"></i>
                    </li>
                    <li class="nav-item border rounded-circle mx-2 basket-icon">
                      <i class="fa-sharp fa-solid fa-shopping-basket px-2"></i>
                    </li>
                </div>
                </div>
              </nav>
        </div>
    </header>

    <!--Header-->

    <!--Main Section-->
    <main>
   <!--   <div class="container-fluid">
        <div class="site-slider">
          <div class="slider-one">-->
        
            <div class="slideshow-container">
            <div class="row">
      <!--First Slider-->
      <div class="myslides">
      <img src='./assets/item4.jpeg'  alt="4">
      </div>
        <div class="myslides">
          <img src="./assets/item5.jpeg"  alt="5">
          </div>
       <div class="myslides"> 
          <img src="./assets/item10.jpeg" alt="10">
       </div>
        <div class="myslides">
            <img src="./assets/item6.jpeg"  alt="6">
        </div>
        <div class="myslides">
            <img src="./assets/item7.jpeg"  alt="7">
            </div>
        <div class="mySlides">
            <img src="./assets/item8.jpeg"  alt="8">
            </div>
   <div>
        <img src="./assets/item9.jpeg"  alt="9">
    </div>
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
          <div style="text-align: center">
            <span class="dot" onclick="currentSlides(1)"></span>
            <span class="dot" onclick="currentSlides(2)"></span>
            <span class="dot" onclick="currentSlides(3)"></span>
            <span class="dot" onclick="currentSlides(4)"></span>
            <span class="dot" onclick="currentSlides(5)"></span>
            <span class="dot" onclick="currentSlides(6)"></span>
            <span class="dot" onclick="currentSlides(7)"></span>
          </div>
          </div>
    </div>
      </div>
      </div>
      <!--/First Slider-->
      
    </main>
    
    <!--Main Section-->
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script src="./main.js"></script>
    
 
</body>
</html>