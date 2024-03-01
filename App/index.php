<?php
session_start();
$username =  $_SESSION['username'];
if ($username == 0) {
    ?>
    <script>
        document.location = '../index.php';
    </script>
    <?php
} else {
    include "boot.php";
?>

<body >
    <div>
    <!-- menu navbar -->

    <nav class="navbar navbar-expand-lg bg-dark mt-3">
  <div class="container-fluid">
    <div class="Navbar-brand ps-3 text-warning"></div>
  
    <a class="navbar-brand text-light" href="#"><i class="bi bi-book" width="400%"></i> Buku Tamu Wedding Sweet </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- Other menu items can be added here -->
      </ul>
      <form class="d-flex" action="search.php" method="get" target="konten">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <!-- penutup navbar -->

    <!-- menu list -->
    <div class="row">
        <div class="col-3">
        <ul class="list-group">
            <a href="home.php" target="konten">
                <li class="list-group-item">Home</li>
            </a>

            <a href="input.php" target="konten">
                <li class="list-group-item"> Input data</li>
            </a>
            
            <a href="tampil.php" target="konten">
                <li class="list-group-item navbar-brand text-dark" > List Tamu</li>
            </a>
            
            <a href="rekap.php" target="konten">
                <li class="list-group-item  navbar-brand text-dark"> Rekap Tamu</li>
            </a>
            
            <a href="statistik.php" target="konten">
            <li class="list-group-item navbar-brand text-dark"> Statistik</li>
            </a>

            <a href="logout.php">
            <li class="list-group-item">logout</li>
            </a>
        </ul>
        
        <div class="wrapper center">
            
          </div>
        </div>

        <div class="col mt-3">
            <iframe  src="../img/bg-01.jpg" name="konten" frameborder="0" width="100%" height="800"></iframe>
        </div>
    </div>
    <!-- penutup list -->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

</html>
<?php
}
?>
