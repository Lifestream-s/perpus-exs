<html>
    <head>
        <title>Aplikasi - @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </head>
    <body>
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">v1 - on work</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto ">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Koleksi Buku</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1">Peminjaman</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1">Pengembalian</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1">Denda</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
        
        <div class='container'>
      

            <div class="container" style='min-height:465px;'>
                @yield('konten')
            </div>
            
        </div>
        <!-- Copyright -->
        <footer>
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyleft:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">App v1</a>
  </div>
  <!-- Copyright -->
</footer>
    </body>
</html>