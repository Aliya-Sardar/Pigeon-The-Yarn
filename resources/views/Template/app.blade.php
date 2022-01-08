<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Pigeon The Yarn</title>
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">

    <!-- Link to FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   

    <!-- Link to css file -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body class="body">
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark header-bg">
            <a class="navbar-brand" href="{{ route('home') }}">Pigeon The Yarn</a>

            <!-- When the page width is less than the header will collapse to a drop down menu -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <!-- only that nav-item has active class whose page is accessed --> 
                    <a class="nav-item nav-link {{ request()-> is('/') ? 'active' : ''}}" href="{{ route('home') }}">Home</a>
                    <a class="nav-item nav-link {{ request()-> is('About') ? 'active' : ''}}" href="{{ route('about') }}">About</a>
                    <a class="nav-item nav-link {{ request()-> is('Contact') ? 'active' : ''}}" href="{{ route('contact') }}">Contact Us</a>
                </div>
                @auth
                    <div class="navbar-nav ml-md-auto">
                        <p>
                            <!-- Drop Down Cart -->
                            <!-- Active only on index page -->
                            <div class="dropdown mr-3">
                                <a class="btn nav-link {{ request()-> is('/') ? '' : 'disabled'}}" 
                                    id="cart-drop" data-toggle="dropdown" aria-haspopup="true" 
                                    aria-expanded="false" onclick="ReturnCart()"><i class="fas fa-shopping-cart"></i></a>
                                
                                <div class="dropdown-menu dropdown-menu-right p-2" aria-labelledby="cart-drop">
                                    <h4>Cart</h4>
                                    <div class="m-auto p-2">
                                        <form id="form" action="{{ route('store_order') }}" method="POSt">
                                            @csrf
                                            <div id="cart">

                                            </div>
                                            <button type="submit" class="btn btn-block btn-success">Buy</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Drop Down User Options-->
                            <div class="dropdown show">
                                <a class="btn nav-link" 
                                    id="UserOptions" data-toggle="dropdown" aria-haspopup="true" 
                                    aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                              
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="UserOptions">
                                  <a class="dropdown-item" href="{{ route('order_dashboard') }}">Orders</a>
                                  <a class="dropdown-item" href="{{ route('shipping_dashboard') }}">Shipping Details</a>
                                  <a class="dropdown-item" href="{{ route('signout') }}">Logout</a>
                                </div>
                            </div>
                        </p>
                    </div>
                @else
                    <div class="navbar-nav ml-md-auto">
                        <a class="nav-item nav-link mr-lg-2 {{ request()-> is('Signin') ? 'active' : ''}} " 
                            href="{{ route('signin') }}">Sign in</a>                    
                    </div>
                @endauth
            </div>
          </nav>
    </header>
    <!-- End of Header -->



    <!-- Content of each page -->
    <div class="container-fluid">
        @yield('main_Content')
    </div>
    <!-- End of Content -->



    <!-- Footer -->
    <footer>
        <div class="container-fluid footer-bg">
            <div class="row">
                <div class="col-md-5 mt-3 mb-3">
                    <img src="images/Logo_small.png" alt="Logo" class="img-fluid">
                </div>
                
                <div class="col-md-6 m-auto">
                    <h4>About Us</h4>
                    <br>
                    <p class="para m-2">We are here to provide you with hand knitted products that feel homely,
                        warm and cozy. Our pledge is to deliver the best to you, so you can feel comfortable
                        anywhere and at anytime. Our products will give you the warmth you need in this
                        cold world.</p>
                </div>
            </div>

            <br><br>

            <!-- Copyright Section -->
            <footer align='center'>
                <small>Copyright &copy; 2022 - Pigeon The Yarn. All Rights Reserved.
                    <br>
                    Developed by Aliya Sardar.
                </small>
            </footer>
        </div>
    </footer>
    <script type="text/javascript" src="{{ URL::asset('js\cart.js') }}"></script>
</body>
</html>