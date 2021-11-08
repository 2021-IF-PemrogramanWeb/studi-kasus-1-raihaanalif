<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Goal Statistcs La Liga 2010 - 2011</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <?php include('./fragment/navbar.php')?>
    <?php
        include('./php/config.php');
        if(!isset($_COOKIE[$email])){
            header("location:../index.php?pesan=habis");
          }
        $team = $connect->query('select "Team" from mytable');
        $gf = $connect->query('select "MG" from mytable');
        $ga = $connect->query('select "KG" from mytable');
    ?>
    <div class="fluid-container" style="margin-left: auto; margin-right: auto; width: 80%">
    <section class="content">
    <img src="./img/laligalogo.png" alt="logoku" class="rounded mx-auto d-block" style="height: 10%; width: 10%;">
      <div class="container-fluid">
      <div class="card">
              <div class="card-header" style="margin-left: auto; margin-right: auto">
                <h2 class="card-title">Goal Statistcs La Liga 2010 - 2011</h2>
              </div>
              <!-- /.card-header -->
              <div class="chart">
                  <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              <!-- /.card-body -->
            </div>
      </div><!-- /.container-fluid -->
    </section>
    </div>
    <!-- Chart -->
    <script src="./plugins/chart.js/Chart.min.js"></script>
    <!-- jQuery -->
    <script src="./plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./dist/js/demo.js"></script>
    <!-- Script Chart -->
    <script>
        $(function () {
            var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

            var areaChartData = {
            labels  : [<?php while($t = $team->fetch(PDO::FETCH_ASSOC)){ echo '"' . $t['Team'].'",';}?>],
            datasets: [
                {
                    label               : 'Goal For',
                    backgroundColor     : 'rgba(60,141,188,0.9)',
                    borderColor         : 'rgba(60,141,188,0.8)',
                    pointRadius          : false,
                    pointColor          : '#3b8bba',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data                : [<?php while($f = $gf->fetch(PDO::FETCH_ASSOC)){ echo '"' . $f['MG'].'",';}?>]
                },
                {
                    label               : 'Goal Against',
                    backgroundColor     : 'rgba(210, 214, 222, 1)',
                    borderColor         : 'rgba(210, 214, 222, 1)',
                    pointRadius         : false,
                    pointColor          : 'rgba(210, 214, 222, 1)',
                    pointStrokeColor    : '#c1c7d1',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data                : [<?php while($a = $ga->fetch(PDO::FETCH_ASSOC)){ echo '"' . $a['KG'].'",';}?>]
                },
            ]
        }
        var areaChartOptions = {
            maintainAspectRatio : false,
            responsive : true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                gridLines : {
                    display : false,
                }
                }],
                yAxes: [{
                gridLines : {
                    display : false,
                }
                }]
            }
        }

    // This will get the first returned node in the jQuery collection.
        new Chart(areaChartCanvas, {
        type: 'line',
        data: areaChartData,
        options: areaChartOptions
        })
    });
    </script>
</body>
</html>