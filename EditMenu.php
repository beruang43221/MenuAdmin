<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar bg-secondary">
        <div class="container justify-content-end">
            <a class="navbar-brand text-white">ADMIN</a>
        </div>
    </nav>
    <!-- AKHIR NAVBAR -->
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-3 bg-light ">
                <div class="row mb-5 mt-3">
                    <img src="img/logoResto.png" class="rounded mx-auto d-block h-50" alt="...">
                </div>
                <div class="row mx-2 mx-4 mb-3">
                    <button type="button" class="btn btn-secondary">Edit Menu</button>
                </div>
                <div class="row mx-2 mx-4 mb-3">
                    <button type="button" class="btn btn-secondary">Add Menu</button>
                </div>
                <div class="row mx-2 mx-4 mb-3">
                    <button type="button" class="btn btn-secondary">Book Keeping</button>
                </div>
            </div>
            <div class="col-9 bg-white">
                <div class="row text-center my-3">
                    <h3>Edit Menu</h3>     
                </div>
                <button type="button" class="btn btn-success">Food</button>  
                <button type="button" class="btn btn-success">Drinks</button>

                <div class="row mx-5 mt-5">
                <table class="table text-center">
                  <thead>
                    <tr style="background-color: #d3d3d3;">
                      <th scope="col">ID Menu</th>
                      <th scope="col">Picture</th>
                      <th scope="col">Name</th>
                      <th scope="col">Price</th>
                      <th scope="col">Update</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td><img src="img/AyamGoreng.jpg" class="img-fluid w-25" alt="..."></td>
                      <td>Ayam Goreng</td>
                      <td>Rp.20.000</td>
                      <td><button type="button" class="btn btn-info"><i class="bi bi-arrow-repeat"></i></button></td>
                      <td><button type="button" class="btn btn-info"><i class="bi bi-bucket"></i></button></td>

                    </tr>
                    
                  </tbody>
                </table>
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