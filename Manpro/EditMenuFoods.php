<? include('koneksi.php');?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Menu Foods Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

  <style type="text/css">
    * {
      font-family: "Trebuchet Ms";
    }
    h5 {
      text-transform: uppercase;
      color: black;
    }
    
    table {
      border: 1px solid #ddeeee;
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      margin: 40px 50px 15px 115px;

    }
    table thead th {
      background-color: #d3d3d3;
      border: 1px solid #000000;
      color: #00000;
      padding: 10px;
      text-align: center;
      margin: auto;

    }
    table tbody td{
      border: 1px solid #000000;
      color: #333;
      padding: 10px;
      text-align: center;
    }

  </style>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar bg-secondary">
        <div class="container justify-content-end">
            <a class="navbar-brand text-white">ADMIN</a>
        </div>
    </nav>
    <!-- AKHIR NAVBAR -->

    <div class="container-fluid  bg-light d-flex">
    <div class="row">
        <div class="col-3 border">
            <img src="img/logoResto.png" class="img-fluid mx-3 mt-3 h-50 mb-3" alt="...">
            <button type="button" class="btn btn-secondary">EDIT MENU</button></br></br>
            <button type="button" class="btn btn-secondary">ADD MENU</button></br></br>
            <button type="button" class="btn btn-secondary">BOOK KEEPING</button>
        </div>
        <div class="col-9">
        <table>
          <thead>
            <div class="wrap">
              <head>
              <link rel="stylesheet" type="text/css" href="stylebutton.css">
              <div class="header">
                <h5><strong>Edit Menu Foods</h5>
              </div> 
              <body>
                <div class = "container">
                    <a href="#" id = "foods">
                        FOODS
                    </a>
    
                    <a href="#" id = "drinks">
                        DRINKS
                    </a>
                </div>
            </body>
            <tr>
              <th>ID Menu</th>
              <th>Picture</th>
              <th>Name</th>
              <th>Price</th>
              <th>Update</th>
              <th>Delete</th>
              <tr>
                  <td>
                    <link rel="stylesheet" type="text/css" href="stylebutton.css">
                    <a href=""><button class="button-b button2"></button></a>
                  </td>
              </tr>
              <tr>
                  <td>
                    <link rel="stylesheet" type="text/css" href="stylebutton.css">
                    <a href=""><button class="button-b button2"></button></a>
                  </td>
              </tr>
              <tr>
                  <td>
                    <link rel="stylesheet" type="text/css" href="stylebutton.css">
                    <a href=""><button class="button-b button2"></button></a>
                  </td>
              </tr><tr>
                  <td>
                    <link rel="stylesheet" type="text/css" href="stylebutton.css">
                    <a href=""><button class="button-b button2"></button></a>
                  </td>
              </tr>
              <tr>
                  <td>
                    <link rel="stylesheet" type="text/css" href="stylebutton.css">
                    <a href=""><button class="button-b button2"></button></a>
                  </td>
              </tr>
              <tr>
                  <td>
                    <link rel="stylesheet" type="text/css" href="stylebutton.css">
                    <a href=""><button class="button-b button2"></button></a>
                  </td>
              </tr>
            </tr>
          </thead>
        </div>
    </div>
    </div>
    <!--Footer-->
    <!-- Akhir footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>