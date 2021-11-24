<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Table La Liga 2010-2011</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <?php include('./fragment/navbar.php')?>
    <div class="fluid-container" style="margin-left: auto; margin-right: auto; width: 80%">
    <section class="content">
    <?php
          session_start();

          if(!isset($_SESSION['email'])){
            header("location:index.php?pesan=login");
          }else{
            if(isset($_GET['pesan'])){
              if($_GET['pesan'] =="berhasil"){
                echo "<div class='alert alert-success' role='alert' align='center'>Selamat Datang Raihan Alif</div>";
              }
            }
          }
  	?>
    <img src="./img/laligalogo.png" alt="logoku" class="rounded mx-auto d-block" style="height: 10%; width: 10%;">
      <div class="container-fluid">
      <div class="card">
              <div class="card-header" style="margin-left: auto; margin-right: auto">
                <h2 class="card-title">Laliga Table 2010 - 2011</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Rank</th>
                      <th>Team</th>
                      <th>Play</th>
                      <th>Win</th>
                      <th>Draw</th>
                      <th>Lose</th>
                      <th>GF</th>
                      <th>GA</th>
                      <th>GD</th>
                      <th>Points</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      include('./php/config.php');
                      $fill = $connect->query("select * from mytable");
                      while($f = $fill->fetch(PDO::FETCH_ASSOC)){
                          ?>
                          <tr>
                              <td><?php echo $f['Pos']; ?></td>
                              <td><?php echo $f['Team']; ?></td>
                              <td><?php echo $f['Play']; ?></td>
                              <td><?php echo $f['Win']; ?></td>
                              <td><?php echo $f['Draw']; ?></td>
                              <td><?php echo $f['Lose']; ?></td>
                              <td><?php echo $f['MG']; ?></td>
                              <td><?php echo $f['KG']; ?></td>
                              <td><?php echo $f['SG']; ?></td>
                              <td><?php echo $f['Poin']; ?></td>
                          </tr>
                        <?php
                      }
                      ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      </div><!-- /.container-fluid -->
    </section>
    </div>
    <!-- jQuery -->
    <script src="./plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./dist/js/demo.js"></script>
</body>
</html>