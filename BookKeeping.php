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
                    <a href="EditMenu.php" type="button" class="btn btn-secondary">Edit Menu</a>
                </div>
                <div class="row mx-2 mx-4 mb-3">
                    <a href="AddMenu.php" type="button" class="btn btn-secondary">Add Menu</a>
                </div>
                <div class="row mx-2 mx-4 mb-3">
                    <a href="BookKeeping.php" type="button" class="btn btn-secondary">Book Keeping</a>
                </div>
            </div>
            <div class="col-9 bg-white">
                <div class="row text-center my-3">
                    <h3><strong>BOOK KEEPING</strong></h3>     
                </div>
                <table class="table text-center">
                <h6><strong>Dari Tanggal : </strong></h6> 
                <select name="tgl">
                    <option value="tgl">dd/mm/yy</option>
                    <option value="1">01/12/2022</option>
                    <option value="2">02/12/2022</option>
                    <option value="3">03/12/2022</option>
                    <option value="4">04/12/2022</option>
                    <option value="5">05/12/2022</option>
                    <option value="6">06/12/2022</option>
                    <option value="7">07/12/2022</option>
                    <option value="8">08/12/2022</option>
                    <option value="9">09/12/2022</option>
                    <option value="10">10/12/2022</option>
                </select>

                <h6><strong>s/d : </strong></h6> 
                <select name="tgl">
                    <option value="tgl">dd/mm/yy</option>
                    <option value="1">01/12/2022</option>
                    <option value="2">02/12/2022</option>
                    <option value="3">03/12/2022</option>
                    <option value="4">04/12/2022</option>
                    <option value="5">05/12/2022</option>
                    <option value="6">06/12/2022</option>
                    <option value="7">07/12/2022</option>
                    <option value="8">08/12/2022</option>
                    <option value="9">09/12/2022</option>
                    <option value="10">10/12/2022</option>
                </select>
                <td><a href="#"><img src="img/pdf.png" style="width:50px ;"></a></td>
                <table class="table text-center"style="background-color: #d3d3d3;">
                  <thead>
                  <th><strong>FOODS</strong></th>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">NAME</th>
                      <th scope="col">QTY</th>
                      <th scope="col">PRICE</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>FD001</td>
                      <td>Nasi Goreng Spesial</td>
                      <td>24</td>
                      <td>Rp 480.000</td>
                    </tr>
                    <tr>
                      <td>FD002</td>
                      <td>Ayam Goreng Kampung</td>
                      <td>15</td>
                      <td>Rp 345.000</td>
                    </tr>
                    <tr>
                      <td>FD003</td>
                      <td>Spaghetti Bolognese</td>
                      <td>15</td>
                      <td>Rp 525.000</td>
                    </tr>
                    <tr>
                      <td>FD004</td>
                      <td>Duluxe Pizza</td>
                      <td>20</td>
                      <td>Rp 1.100.000</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><strong>74</td>
                      <td><strong>Rp 2.450.000</td>   
                    </tr>
                  </tbody>

                  <thead>
                    <tr>
                    <th><strong>DRINKS</strong></th>
                    </tr>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">NAME</th>
                      <th scope="col">QTY</th>
                      <th scope="col">PRICE</th>
                    </tr>
                    <tr>
                      <td>DK001</td>
                      <td>Cappuccino</td>
                      <td>30</td>
                      <td>Rp 210..000</td>
                    </tr>
                    <tr>
                      <td>DK002</td>
                      <td>Es Buah</td>
                      <td>50</td>
                      <td>Rp 750.000</td>
                    </tr>
                    <tr>
                      <td>DK003</td>
                      <td>Ice Tea</td>
                      <td>100</td>
                      <td>Rp 500.000</td>
                    </tr>
                    <tr>
                      <td>DK004</td>
                      <td>Jus Jambu</td>
                      <td>30</td>
                      <td>Rp 270.000</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><strong>210</td>
                      <td><strong>Rp 1.730.000</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td><strong>284</td>
                      <td><strong>Rp 4.180.000</td>
                    </tr>
                  </thead>
                </table>
                </div>
            </div>
        </div>
    </div>

   
    <!-- footer -->
    <footer class="bg-secondary text-white text-center mt-5 pb-2 justify-content-center">
      <p class="pt-4">Copyright @ 2022 - Manajemen Proyek A11.4503</p>
    </footer>
    <!-- Akhir footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>