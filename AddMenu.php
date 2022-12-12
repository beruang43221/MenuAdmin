<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Menu Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
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
        <div class="col-3 bg-light">
          <div class="row mb-5 mt-3">
            <img src="img/logoResto.png" class="rounded mx-auto d-block h-50" alt="..." />
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
            <h3>Add Menu</h3>
          </div>
          <div class="row mx-5">
            <div class="card mb-5" style="background-color: #d3d3d3">
              <form>
                <div class="row my-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">ID Menu</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="Id Menu" />
                  </div>
                </div>
                <div class="row my-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Picture</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                  </div>
                </div>
                <div class="row my-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="Id Menu" />
                  </div>
                </div>
                <div class="row my-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="Id Menu" />
                  </div>
                </div>
                <div class="row my-3">
                  <div class="col-sm-2 col-form-label"></div>
                  <div class="col-sm-10">
                    <button type="button" class="btn btn-warning text-light">Add</button>
                  </div>
                </div>
              </form>
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
