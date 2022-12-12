<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      #card {
        background: #D3D3D3;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 700px;
      }
    </style>
  </head>
  <body>
    <!-- NAVBAR -->
    
    <nav class="navbar bg-secondary">
      <div class="container-fluid">
        <img src="img/menu.png" width="35" class="justify-content-start" alt="...">
        <img src="img/login.png" width="35" class="justify-content-end" alt="...">
      </div>
    </nav>
    
    <!-- AKHIR NAVBAR -->

    <div class="container-fluid  bg-light">
      <div class="row">
        <div class="text-center">
          <img src="img/logoResto.png" width="150" class="img-fluid mt-4" alt="...">
        </div>

        <div id="card"> 
          <div class="row">
            <div class="col-4">
              <img src="img/resto2.jpeg" width="220" height="410" class="rounded" alt="...">
            </div>

            <div class="col-8 mt-5">
              <h2 style="text-align:center; font-family:Redressed;">Login</h2>
              <div class="mb-3 row mt-5">
                <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                  <input type="username" class="form-control" id="inputUsername">
                </div>
              </div>

              <div class="mb-3 row mt-4">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword">
                </div>
              </div>
              <div class="text-center">
                <a href="#" class="btn btn-secondary mt-3" tabindex="-1" role="button" aria-disabled="true">Submit</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <div class="container-fluid py-2 bg-secondary text-light">
      <div class="container d-flex justify-content-center mb-3">
        <label>Copyright &copy; 2022 - Manajemen Proyek A11.4503</label>
      </div>
    </div>
    <!-- Akhir footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>