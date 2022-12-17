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
            <a class="navbar-brand text-white">CASHIER</a>
        </div>
    </nav>
    <!-- AKHIR NAVBAR -->
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-4 bg-light ">
                <div class="text-center mb-3 mt-2">
                    <img src="img/logoResto.png" width="200" class="img-fluid" alt="...">
                </div>
                <table class="table table-bordered">
                  <thead>
                    <tr class="table-secondary">
                      <th>ID Orders</th>
                      <th>Table</th>
                      <th>Details</th>
                      <th>Done</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="table-light">
                      <td>4800001</td>
                      <td>4</td>
                      <td><img src="img/details.png" width="40" class="rounded d-block h-20" alt="..."></td>
                      <td><img src="img/done.png" width="40" class="rounded d-block h-20" alt="..."></td>
                    </tr>
                    <tr class="table-light">
                      <td>4800002</td>
                      <td>8</td>
                      <td><img src="img/details.png" width="40" class="rounded d-block h-20" alt="..."></td>
                      <td><img src="img/done.png" width="40" class="rounded d-block h-20" alt="..."></td>
                    </tr>
                    <tr class="table-light">
                      <td>4800003</td>
                      <td>5</td>
                      <td><img src="img/details.png" width="40" class="rounded d-block h-20" alt="..."></td>
                      <td><img src="img/done.png" width="40" class="rounded d-block h-20" alt="..."></td>
                    </tr>
                    <tr class="table-light">
                      <td>4800004</td>
                      <td>6</td>
                      <td><img src="img/details.png" width="40" class="rounded d-block h-20" alt="..."></td>
                      <td><img src="img/done.png" width="40" class="rounded d-block h-20" alt="..."></td>
                    </tr>
                    <tr class="table-light">
                      <td>4800005</td>
                      <td>1</td>
                      <td><img src="img/details.png" width="40" class="rounded d-block h-20" alt="..."></td>
                      <td><img src="img/done.png" width="40" class="rounded d-block h-20" alt="..."></td>
                    </tr>
                  </tbody>
                </table>  
            </div>
            <div class="col-8 bg-white text-center">
                <div class="card mt-5 mx-5" style="background-color: #d3d3d3;">
                    <div class="container mt-3 mb-3">
                     <img src="img/logoResto.png" width="100rem" class="mb-3">
                    </div>
                    
                    <div class="container-fluid ">
                        <div class="row">
                        <table class="table">

                            <thead>
                                <tr>
                                <th scope="col">ID Orders</th>
                                <th scope="col"></th>
                                <th scope="col">P001</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">Nasi Goreng Special</td>
                                    <td>2</td>
                                    <td>Rp.40.000</td>
                                </tr>
                                <tr>
                                    <td scope="row">Ayam Goreng</td>
                                    <td>3</td>
                                    <td>Rp.45.000</td>
                                </tr>
                                <tr>
                                    <td scope="row">Ice Tea</td>
                                    <td>2</td>
                                    <td>Rp.20.000</td>
                                </tr>
                                
                                <tr>
                                    <th scope="row">Total</th>
                                    <th></th>
                                    <th>Rp.60.000</th>
                                </tr>
                                
                            </tbody>
                        </table> 
                         
                       </div>
                    </div>
                </div>
                <div class="container mt-4">
                            <button type="button" class="btn btn-warning text-light me-3">Cancel Order</button>  
                            <button type="button" class="btn btn-warning text-light ms-3">Print</button>  
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