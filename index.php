<?php

require('fungsi.php');

$user = mysqli_fetch_assoc($hasil);
$about = mysqli_fetch_assoc($result);
$projects = data("SELECT * FROM project");

if (isset($_POST["submit"]))  {
    
    if (tambah($_POST) > 0)  {
        echo "
                <script>
                alert('Pesan Terkirim');
                </script>
                ";
    }else {
        echo "
               <script>
               alert('Gagal Terkirim')
               </script>
               ";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portopolio</title>
    <!--my css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top bg-warning">
      <div class="container">
        <a class="navbar-brand" href="#">saepulmilah</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./admin/index.php"> <i class="bi bi-clipboard-data-fill"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Akhir navbar-->
    <!--jumbotron-->
  <section id="home" class="jumbotron text-center">
      <img src="<?= $user["gambar"];?>" alt="" width="200" class="rounded-circle img-thumbnail"/>

      <h1 class="display-4" data-aos="zoom-in-up"><?= $user["nama"];?> </h1>
      <p class="lead"><?=$user["jabatan"];?> | <?=$user["perusahaan"];?></p>
      <p></p>
      <a class="btn" style="background-color: rgb(244, 247, 245)" href="#" role="button">Learn more</a>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,128L30,149.3C60,171,120,213,180,197.3C240,181,300,107,360,85.3C420,64,480,96,540,106.7C600,117,660,107,720,122.7C780,139,840,181,900,192C960,203,1020,181,1080,165.3C1140,149,1200,139,1260,165.3C1320,192,1380,256,1410,288L1440,320L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
      </selection>
    </div>
    <!--Akhir jumbotron-->
    <!--about-->
    <section id="about">
      <div class="row text-center"data-aos="fade-down">
        <h2>About</h2>
      </div>
      <div class="row justify-content-center fs-5">
        <div class="col-sm-4"data-aos="fade-down-right">
          <p><?= $about ["coloumn1"];?></p>
        </div>
        <div class="col-sm-4"data-aos="fade-left">
          <p><?= $about ["coloumn2"];?></p>
        </div>
      </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">

        <path

          fill="#fff"
          fill-opacity="1"
          d="M0,128L30,149.3C60,171,120,213,180,197.3C240,181,300,107,360,85.3C420,64,480,96,540,106.7C600,117,660,107,720,122.7C780,139,840,181,900,192C960,203,1020,181,1080,165.3C1140,149,1200,139,1260,165.3C1320,192,1380,256,1410,288L1440,320L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!--Akhir about-->
    <!--project-->
    <section id="project">
      <div class="container">
      <div class="row text-center">
        <h2>project</h2>
      </div>
        <div class="row justify-content-evenly">
            <?php foreach ($projects as $pro) {?>
          <div class="col-sm-4 mb-4">
            <div class="card" style= "width:18rem;">
              <img src="<?=$pro["foto"];?>" class="card-img-top" alt="s.jpg"/>
              <div class="card-body">
                  <h1><?= $pro["nama_project"];?></h1>
                <p class="card-text"><?= $pro["keterangan"];?></p>
              </div>
            </div>
          </div>
          <?php } ?>
          </div>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,128L30,149.3C60,171,120,213,180,197.3C240,181,300,107,360,85.3C420,64,480,96,540,106.7C600,117,660,107,720,122.7C780,139,840,181,900,192C960,203,1020,181,1080,165.3C1140,149,1200,139,1260,165.3C1320,192,1380,256,1410,288L1440,320L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!--project-->
<!--contact-->
<section id="Contact">
        <div class="container">
        <div class="row text-center">
          <h2>contact</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm-6">
          <form method="POST">
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required="">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama_k" id="nama" required="">
            </div>
          <div class="mb-3">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" placeholder="Leave a comment here" name="Pesan" id="Pesan" style="height: 100px" required></textarea>
              </div>
              <button type="submit" name="submit" class="btn btn-primary" required>Submit</button>
            
          </form>
          </div>
        </div>
      </div>
      </section>
    <!--contact-->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,256L34.3,234.7C68.6,213,137,171,206,154.7C274.3,139,343,149,411,128C480,107,549,53,617,42.7C685.7,32,754,64,823,96C891.4,128,960,160,1029,181.3C1097.1,203,1166,213,1234,197.3C1302.9,181,1371,139,1406,117.3L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    <footer class="row text-center">
      <p>dibuat oleh pt <a href="facebook">saepul milah</a></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>
