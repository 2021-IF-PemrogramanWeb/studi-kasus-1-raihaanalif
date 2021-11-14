<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login WebKu</title>
  </head>
  <body>
    <div class="container">
        <img src="./img/logo.jpg" alt="logoku" class="rounded mx-auto d-block" style="height: 30%; width: 30%;">
        <?php
          if(isset($_GET['pesan'])){
            if($_GET['pesan'] =="gagal"){
              echo "<div class='alert alert-danger' role='alert' align='center'>Email dan Password Tidak Sesuai</div>";
            }elseif($_GET['pesan'] == "logout"){
              echo "<div class='alert alert-success' role='alert' align='center'>Anda Berhasil Logout</div>";
            }elseif($_GET['pesan'] == "habis"){
              echo "<div class='alert alert-danger' role='alert' align='center'>Waktu anda telah habis</div>";
            }elseif($_GET['pesan'] == "login"){
              echo "<div class='alert alert-danger' role='alert' align='center'>Silahkan Login</div>";
            }
          }
  	    ?>
        <div class="card" style="width: 40rem; margin: auto;">
            <div class="card-title">
                <h2 style="text-align: center; color: #1167b1;"><b>Login</b></h2>
                <hr>
            </div>
            <div class="card-body">
                <form action="./php/login.php" method="post">
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="staticEmail" name="email">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword" name="password">
                        </div>
                    </div>
                    <a href="#" style="text-decoration: none; color: black;"><b>Remember Me</b></a>
                    <input type="submit" class="btn btn-primary" style="float: right;">
                </form>
            </div>
          </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
  </body>
</html>