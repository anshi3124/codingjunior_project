<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin_assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('admin_assets/img/favicon.png') }}">
  <title>
   assignment
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('admin_assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{asset('admin_assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('admin_assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('admin_assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
</head>

<body class="">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="../pages/dashboard.html">
        assignment
      </a>
  </nav>
  <!-- End Navbar -->
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('{{ asset("admin_assets/img/bg_signup.jpg") }}'); background-position: center;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Welcome!</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Register As User</h5>
            </div>
           <div class="card-body">
              <form role="form" action="{{ url('/userregistration') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Name" aria-label="Name" name="name" value="{{ old('name') }}">
                  @if($errors->has('name'))
                      <p class="text-danger fs-6 fw-bold">{{ $errors->first('name') }}</p>
                      @endif
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email" value="{{ old('email') }}">
                  @if($errors->has('email'))
                      <p class="text-danger fs-6 fw-bold">{{ $errors->first('email') }}</p>
                      @endif
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password" value="{{ old('password') }}" >
                  @if($errors->has('password'))
                      <p class="text-danger fs-6 fw-bold">{{ $errors->first('password') }}</p>
                      @endif
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="Confirm Password"
                   aria-label="Confirm Password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                </div>
                <div class="mb-3">
                  <div class="form-group">
                   <input class="form-control" type="text" name="phone" placeholder="Enter Phone Number" value="{{ old('phone') }}">
                    @if($errors->has('phone'))
                    <p class="text-danger fs-6 fw-bold">{{ $errors->first('phone') }}</p>
                    @endif
                  </div>
                </div>
               <div class="col-md-12">
                  <div class="form-group">
                   <textarea id="w3review" rows="2" cols="55" name="address" class="form-control" placeholder="Enter Your Address" value="{{ old('address') }}"></textarea>
                    @if($errors->has('address'))
                    <p class="text-danger fs-6 fw-bold">{{ $errors->first('address') }}</p>
                    @endif
                  </div>
                </div>
                <div class="mb-3">
                  <input type="file" class="form-control" placeholder="Name" aria-label="Name" name="picture"  value="{{ old('picture') }}">
                  @if($errors->has('picture'))
                      <p class="text-danger fs-6 fw-bold">{{ $errors->first('picture') }}</p>
                      @endif
                </div>
               <div class="form-check form-check-info text-start">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                  </label>
                </div>
                <div class="text-center">
                <input type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2" value="Sign Up">
                  <!-- <button type="button" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button> -->
                </div>
                <p class="text-sm mt-3 mb-0">Already have an account? <a href="{{url('/')}}" class="text-dark font-weight-bolder">Sign in</a></p>
              </form>
              @if (Session::has('error'))
              <p class="text danger">{{ Session::get('error') }}</p>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-4 mx-auto text-center">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Company
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            About Us
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Team
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Products
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Blog
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Pricing
          </a>
        </div>
        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-dribbble"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-twitter"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-instagram"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-pinterest"></span>
          </a>
          <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-github"></span>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright ©
            @stack('other-scripts')
            @push('other-scripts')
             <script>
              document.write(new Date().getFullYear())
            </script> Soft by Creative Tim.
             @endpush
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="{{ asset('admin_assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('admin_assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('admin_assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('admin_assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  @stack('other-scripts')
  @push('other-scripts')
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  @endpush
  <!-- Github buttons -->
  <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('admin_assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
</body>
</html>