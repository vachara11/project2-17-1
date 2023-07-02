<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT-Shop</title>
    <link rel="stylesheet" href="{{ asset('frontend/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vatanjs/style.css')}}">
</head>

<body>
    <!-- ============ส่วนหัวของเว็บไซต์=================== -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #470268;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}"><strong>IT-Shop</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/product') }}">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <a href="{{ route('login') }}" class="btn btn-warning">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                </span>
            </div>
        </div>
    </nav>
    <!-- ============สิ้นสุดส่วนหัวของเว็บไซต์=================== -->

    <!-- ============Vanta JS=================== -->
    <header id="your-element-selector" class="header">
        <h1>IT-Shop</h1>
        
    </header>
    <!-- ============สิ้นสุดVanta JS=================== -->

    @yield('content')

    <!-- ============ส่วนท้ายเว็บ=================== -->
    <footer class="p-4 text-white" style="background-color: #4e015f;">
        <div class="d-lg-flex justify-content-between">
            <div>
            </div>
            <div class="copyright">
                <p>developed by Infomation Technology @ PSC | Watchara</p>
            </div>
            <div>
            </div>
        </div>
    </footer>
    <!-- ============สิ้นสุดส่วนท้ายเว็บ=================== -->


    <script src="{{ asset('frontend/node_modules/@popperjs/core/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('frontend/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/vatanjs/three.min.js')}}"></script>
    <script src="{{ asset('frontend/vatanjs/vanta.birds.min.js')}}"></script>
    <script>
        VANTA.BIRDS({
          el: "#your-element-selector",
          mouseControls: true,
          touchControls: true,
          gyroControls: false,
          minHeight: 200.00,
          minWidth: 200.00,
          scale: 1.00,
          scaleMobile: 1.00,
          backgroundColor: 0x49009b
        })
        </script>
</body>

</html>