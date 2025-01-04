<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <title>Home</title>

  <style>
    body {
      padding-top: 60px;
      background-color: gainsboro;
    }

    .posisi {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      background-color: #f8f9fa;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
  </style>

</head>

<body>
  <div>
    <div class="posisi">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">TRPL 2A</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="?p=home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?p=mhs">Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?p=prodi">Prodi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?p=dosen">Dosen</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>

            <ul class="nabvar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">Login</a>
              </li>
            </ul>

            <!-- <form class="d-flex" role="search"> 
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            -->

          </div>
        </div>
      </nav>
    </div>

    <div class="py-3">
      <?php
      $page = isset($_GET['p']) ? $_GET['p'] : 'home';
      if ($page == 'home')
        include 'home.php';
      if ($page == 'mhs')
        include 'mahasiswa.php';
      if ($page == 'prodi')
        include 'prodi.php';
      if ($page == 'dosen')
        include 'dosen.php';
      if ($page == 'kategori')
        include 'kategori.php';
        if ($page == 'berita')
        include 'berita.php';

      // if ($page=='lihat -prodi') include 'view_prodi.php';
      // if ($page=='tambah_mhs') include 'mahasiswa.php';
      // if ($page=='edit_mhs') include 'edit_mahasiswa.php';
      // if ($page=='delete_mhs') include 'delete_mahasiswa.php';
      
      // if ($page=='delete_prodi') include 'delete_prodi.php';
      // if ($page=='edit_prodi') include 'edit_prodi.php';
      ?>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
  <script>
    new DataTable('#example');
  </script>
</body>

</html>